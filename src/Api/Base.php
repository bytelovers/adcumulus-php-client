<?php

    namespace Bytelovers\AdCumulus;

    class Base {
        private $httpClient;

        protected $endpointType;

        public function __construct($httpClient) {
            $this->setHttpClient($httpClient);
            $this->getHttpClient()->setApiType($this->endpointType);
        }

        public function get($path, $parameters = []) {
            return $this->getHttpClient()->get($path, $parameters);
        }

        public function post($path, $data, $parameters) {
            return $this->getHttpClient()->post($path, $data, $parameters);
        }

        public function put($path, $data) {
            return $this->getHttpClient()->put($path, $data);
        }

        public function getHttpClient() {
            return $this->httpClient;
        }

        public function setHttpClient($httpClient) {
            $this->httpClient = $httpClient;
        }

        public function getEndpointType() {
            return $this->endpointType;
        }

        public function setEndpointType($endpointType) {
            $this->endpointType = $endpointType;
        }
    }