<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class AffiliateUser
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class AffiliateUser extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "affiliateUser";

        /**
         * Create affiliate user.
         *
         * @api
         * POST /v1/service/rest/affiliateUser?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function create($data = null, $returnObject = true) {
            return $this->post(implode("/", [
                    $this->endpointName
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update affiliate user
         *
         * @api
         * PUT /v1/service/rest/affiliateUser/{affiliateId}?{return_object}
         *
         * @version 1.0.0
         *
         * @param int $id
         * @param object $data
         * @param bool $returnObject
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function update($id = null, $data = null, $returnObject = true) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    $this->endpointName,
                    $id
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Get affiliate user by id
         *
         * @api
         * GET /v1/service/rest/affiliateUser/{userId}
         *
         * @version 1.0.0
         *
         * @param int $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getById($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/", [
                    $this->endpointName,
                    $id
                ]),
                null
            );
        }

        /**
         * Get all active and blocked affiliate users
         *
         * @api
         * GET /v1/service/rest/affiliateUser/findAll
         *
         * @version 1.30.0
         *
         * @param int $id
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function findAll($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/", [
                    $this->endpointName,
                    "findAll"
                ]),
            null
            );
        }

        /**
         * Delete affiliate user
         *
         * @api
         * DELETE /v1/service/rest/affiliateUser/{userId}
         *
         * @version 1.0.0
         *
         * @param int $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return mixed
         */
        public function delete($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->delete(implode("/", [
                    $this->endpointName,
                    $id
                ])
            );
        }

        /**
         * Get list of allowed resources for affiliate users
         *
         * @api
         * GET /v1/service/rest/affiliateUser/resources
         *
         * @version 1.0.0
         *
         * @param int $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getResources($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/", [
                    $this->endpointName,
                    "resources"
                ]),
                null
            );
        }
    }