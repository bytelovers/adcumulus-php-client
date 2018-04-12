<?php

    namespace Bytelovers\AdCumulus;

    use Bytelovers\Api\Exception\AdCumulusException;
    use GuzzleHttp\Client as GuzzleClient;

    class Client {
        const ADMIN               = "Admin";
        const AFFILIATE           = "Affiliate";
        const ADVERTISER          = "Advertiser";

        private $apiUrlAdmin      = "http://gui.%s.com/v1/service/rest/%s";
        private $apiUrlAffiliate  = "http://gui.%s.com/v1affiliate/service/rest-affiliate/%s";
        private $apiUrlAdvertiser = "http://gui.%s.com/v1advertiser/service/rest-advertiser/%s";

        private $headers          = ["User-Agent" => "bytelovers-adcumulus-php-client/v0.0.0"];

        private $httpClient;

        private $apiDomain;
        private $apiKey;
        private $apiSecret;

        public function __construct($apiDomain, $apiKey, $apiSecret = null) {
            $this->setApiDomain($apiDomain);
            $this->setApiKey($apiKey);
            $this->setApiSecret($apiSecret);
            $this->setHttpClient(new GuzzleClient([
                'defaults' => [
                    'headers' => $this->getHeaders(),
                ],
            ]));
        }

        public function api($class) {
            $class = "Bytelovers\\AdCumulus\\Api\\" . $class;
            return new $class($this);
        }

        public function get($apiEndpoint, $parameters = []) {
            $count_fails   = 0;
            $response      = $this->prepareHttpClient(
                $apiEndpoint,
                $parameters,
                null,
                "GET"
            );

            $json_response = $this->handleResponse($response);

            if (isset($json_response->response->errorMessage)) {
                $count_fails++;
                $sleep_time = $count_fails * 2;

                sleep($sleep_time);
                if ($count_fails <= 5) {
                    $this->get($apiEndpoint, $parameters = []);
                }
            }
            //LIMIT 50 req per 10sec
            //0.3 sec sleep between requests = 3 req/sec (30req / 10 sec)
            usleep(400000);
            return $json_response;
        }
        public function post($apiEndpoint, $data = null, $parameters = []) {
            $count_fails   = 0;
            $response      = $this->prepareHttpClient(
                $apiEndpoint,
                $parameters,
                "POST",
                $data);

            $json_response = $this->handleResponse($response);

            if (isset($json_response->response->errorMessage)) {
                $count_fails++;
                $sleep_time = $count_fails * 2;

                sleep($sleep_time);
                if ($count_fails <= 5) {
                    $this->post($apiEndpoint, $parameters = []);
                }
            }
            //LIMIT 50 req per 10sec
            //0.3 sec sleep between requests = 3 req/sec (30req / 10 sec)
            usleep(400000);
            return $json_response;
        }
        public function put($apiEndpoint, $data = null, $parameters = []) {
            $count_fails   = 0;
            $response      = $this->prepareHttpClient(
                $apiEndpoint,
                $parameters,
                $data,
                "PUT");

            $json_response = $this->handleResponse($response);

            if (isset($json_response->response->errorMessage)) {
                $count_fails++;
                $sleep_time = $count_fails * 2;

                sleep($sleep_time);
                if ($count_fails <= 5) {
                    $this->put($apiEndpoint, $parameters = []);
                }
            }
            //LIMIT 50 req per 10sec
            //0.3 sec sleep between requests = 3 req/sec (30req / 10 sec)
            usleep(400000);
            return $json_response;
        }
        public function delete($apiEndpoint) {
            $response      = $this->prepareHttpClient(
                $apiEndpoint,
                null,
                null,
                "DELETE"
            );

            $json_response = $this->handleResponse($response);
            return $json_response;
        }

        private function prepareHttpClient($apiEndpoint, $parameters = [], $data = null, $method) {
            $requestUrl       = $this->buildUrl($apiEndpoint, $parameters);
            $requestUrl       = urldecode($requestUrl);

            $generatedHeaders = [
                "headers" => [
                    "Authorization" => "ApiKey " .
                        $this->generateApikey(
                            parse_url($requestUrl, PHP_URL_PATH)
                        )
                ]
            ];

            switch ($method) {
                case "GET":
                    return $this->getHttpClient()->get($requestUrl, $generatedHeaders);
                case "POST":
                    return $this->getHttpClient()->post($requestUrl, $data, $generatedHeaders);
                case "PUT":
                    return $this->getHttpClient()->put($requestUrl, $data, $generatedHeaders);
                case "DELETE":
                    return $this->getHttpClient()->delete($requestUrl, $data, $generatedHeaders);
                default:
                    throw new AdCumulusException("prepareHttpClient: Method not recognized");
            }
        }
        private function generateApikey($endpoint) {
            if(!is_null($this->getApiSecret())) {
                $apiKey = base64_encode(
                    hash_hmac(
                        'sha256',
                        $endpoint,
                        $this->getApiSecret(),
                        true
                    )
                );
            } else {
                $apiKey = "simpleMode";
            }
            $apiKey = $this->getApiKey() . ":" . $apiKey;
            return $apiKey;
        }
        private function buildUrl($apiEndpoint, $params) {
            switch($this->getApiType()) {
                case self::ADMIN:
                    $url = sprintf($this->apiUrlAdmin, $this->getApiDomain(), $apiEndpoint);
                    break;
                case self::AFFILIATE:
                    $url = sprintf($this->apiUrlAffiliate, $this->getApiDomain(), $apiEndpoint);
                    break;
                case self::ADVERTISER:
                    $url = sprintf($this->apiUrlAdvertiser, $this->getApiDomain(), $apiEndpoint);
                    break;
            }

            return count($params) > 0 ? $url . "?" . http_build_query($params) : $url;
        }
        private function handleResponse($response) {
            $statusCode = $response->getStatusCode();
            $body       = json_decode($response->getBody());
            if ($statusCode >= 200 && $statusCode < 300) {
                return $body;
            }
            throw new \Exception($body->message, $statusCode);
        }

        public function getApiUrlAdmin() {
            return $this->apiUrlAdmin;
        }

        public function setApiUrlAdmin($apiUrlAdmin) {
            $this->apiUrlAdmin = $apiUrlAdmin;
        }

        public function getApiUrlAffiliate() {
            return $this->apiUrlAffiliate;
        }

        public function setApiUrlAffiliate($apiUrlAffiliate) {
            $this->apiUrlAffiliate = $apiUrlAffiliate;
        }

        public function getApiUrlAdvertiser() {
            return $this->apiUrlAdvertiser;
        }

        public function setApiUrlAdvertiser($apiUrlAdvertiser) {
            $this->apiUrlAdvertiser = $apiUrlAdvertiser;
        }

        public function getApiDomain() {
            return $this->apiDomain;
        }

        public function setApiDomain($apiDomain) {
            $this->apiDomain = $apiDomain;
        }

        public function getApiKey() {
            return $this->apiKey;
        }

        public function setApiKey($apiKey) {
            $this->apiKey = $apiKey;
        }

        public function getApiSecret() {
            return $this->apiSecret;
        }

        public function setApiSecret($apiSecret) {
            $this->apiSecret = $apiSecret;
        }

        public function getApiType() {
            return $this->apiType;
        }

        public function setApiType($apiType) {
            $this->apiType = $apiType;
        }

        public function getHeaders() {
            return $this->headers;
        }

        public function setHeaders($headers) {
            $this->headers = $headers;
        }

        public function getHttpClient() {
            return $this->httpClient;
        }

        public function setHttpClient($httpClient) {
            $this->httpClient = $httpClient;
        }
    }