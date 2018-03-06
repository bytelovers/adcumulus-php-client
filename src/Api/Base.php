<?php

    namespace Bytelovers\AdCumulus;
    use phpDocumentor\Reflection\Types\String_;

    /**
     * Class Base
     * @package Bytelovers\AdCumulus
     */
    class Base {
        /**
         * @var $httpClient \GuzzleHttp\Client
         */
        private $httpClient;

        /**
         * @var $endpointType string
         */
        protected $endpointType;

        protected $endpointName;

        public function __construct($httpClient) {
            $this->setHttpClient($httpClient);
            $this->getHttpClient()->setApiType($this->endpointType);
        }

        /**
         * @param $path string Complete URL to call to API
         * @param $parameters array A list of params to inject in the query
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function get($path, $parameters) {
            return $this->getHttpClient()->get($path, $parameters);
        }

        public function post($path, $data, $parameters) {
            return $this->getHttpClient()->post($path, $data, $parameters);
        }

        public function put($path, $data, $parameters) {
            return $this->getHttpClient()->put($path, $data, $parameters);
        }

        public function getHttpClient() {
            return $this->httpClient;
        }

        public function setHttpClient($httpClient) {
            $this->httpClient = $httpClient;
        }

        /**
         * @return string $endpointType
         */
        public function getEndpointType() {
            return $this->endpointType;
        }

        /**
         * @param string $endpointType
         */
        public function setEndpointType($endpointType) {
            $this->endpointType = $endpointType;
        }
    }