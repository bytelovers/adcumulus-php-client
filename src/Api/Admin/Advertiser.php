<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Advertiser
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Advertiser extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "advertiser";

        /**
         * Get advertiser object by id
         *
         * @api
         * GET /v1/service/rest/advertiser/{id}
         *
         * @version 1.28.0
         *
         * @param int $id
         * @param array $parameters
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getById($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    $id
                ]),
                $parameters);
        }
    }