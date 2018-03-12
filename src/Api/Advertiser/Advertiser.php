<?php
    namespace Bytelovers\AdCumulus\Api\Advertiser;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Advertiser
     * @package Bytelovers\AdCumulus\Api\Advertiser
     */
    class Advertiser extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Advertiser";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "advertiser";

        /**
         * Get all advertiser data
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/advertiser/getData
         *
         * @version 1.5.0
         *
         * @param array $parameters 
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getData($parameters = []) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "getData"
                ]),
                $parameters
            );
        }

        /**
         * Update advertiser
         *
         * @api
         * PUT /v1advertiser/service/rest-advertiser/advertiser/update
         *
         * @version 1.5.0
         *
         * @param object $data
         * @param array $parameters 
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function update($data = null, $parameters = []) {
            return $this->put(implode("/", [
                    $this->endpointName,
                    "update"
                ]),
                $data,
                $parameters
            );
        }
    }