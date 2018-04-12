<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Vat
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Vat extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "vat";

        /**
         * Get all VATs for you network
         *
         * @api
         * GET /v1/service/rest/vat/getAll
         *
         * @version 1.0.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getAll($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "getAll"
                ]),
                $parameters
            );
        }
    }