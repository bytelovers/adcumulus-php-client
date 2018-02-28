<?php

    namespace Bytelovers\AdCumulus;

    class Base {
        private $httpClient;

        protected $endpointUrl;

        public function __construct($httpClient) {
            $this->setHttpClient($httpClient);
        }

        public function get($path, $parameters = []) {
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

        public function getEndpointUrl() {
            return $this->endpointUrl;
        }

        public function setEndpointUrl($endpointUrl) {
            $this->endpointUrl = $endpointUrl;
        }
    }