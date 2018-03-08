<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Base;

    /**
     * Class Affiliate
     * @package Bytelovers\AdCumulus\Api\Affiliate
     */
    class Affiliate extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Affiliate";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "affiliate";

        /**
         * Get all affiliate data
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/affiliate
         *
         * @version 1.5.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getData($parameters = []) {
            return $this->get(
                $this->endpointName, $parameters
            );
        }

        /**
         * Update affiliate
         *
         * @api
         * PUT /v1affiliate/service/rest-affiliate/affiliate
         *
         * @version 1.5.0
         *
         * @param object $data
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function update($data = null, $parameters = []) {
            return $this->put(implode("/", [
                $this->endpointName
            ]),
            $data,
            $parameters
            );
        }
    }