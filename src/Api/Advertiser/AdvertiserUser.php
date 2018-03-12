<?php
    namespace Bytelovers\AdCumulus\Api\Advertiser;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class AdvertiserUser
     * @package Bytelovers\AdCumulus\Api\Advertiser
     */
    class AdvertiserUser extends Base {

        /**
         * @var type $endpointType
         */
        protected $endpointType = "Advertiser";

        /**
         * @var type $endpointName
         */
        protected $endpointName = "advertiserUser";

        /**
         * Get advertiser user by ID
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/advertiserUser/getById/{userId}
         *
         * @version 1.5.0
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

            return $this->get(implode("/", [
                    $this->endpointName,
                    "getById",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Create advertiser user
         *
         * @api
         * POST /v1advertiser/service/rest-advertiser/advertiserUser/create
         *
         * @version 1.5.0
         *
         * @param object $data
         * @param array $parameters 
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function create($data = null, $parameters = []) {
            return $this->post(implode("/", [
                $this->endpointName,
                "create"
            ]),
                $data,
                $parameters
            );
        }

        /**
         * Update advertiser user
         *
         * @api
         * PUT /v1advertiser/service/rest-advertiser/advertiserUser/update/{userId}
         *
         * @version 1.5.0
         *
         * @param int $id
         * @param object $data
         * @param array $parameters 
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function update($id = null, $data = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                $this->endpointName,
                "update",
                $id
            ]),
                $data,
                $parameters
            );
        }

        /**
         * Get advertiser user permissions
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/advertiserUser/getPermissions
         *
         * @version 1.5.0
         *
         * @param array $parameters 
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getPermissions($parameters = []) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "getPermissions"
                ]),
                $parameters
            );
        }
    }