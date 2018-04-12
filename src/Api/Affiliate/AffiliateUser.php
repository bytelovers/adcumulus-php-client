<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class AffiliateUser
     * @package Bytelovers\AdCumulus\Api\Affiliate
     */
    class AffiliateUser extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Affiliate";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "affiliateUser";

        /**
         * Create affiliate user
         *
         * @api
         * POST /v1affiliate/service/rest-affiliate/affiliateUser
         *
         * @version 1.0.0
         *
         * @param object $data
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function create($data = null, $parameters = []) {
            return $this->post(implode("/", [
                    $this->endpointName
                ]),
                $data,
                $parameters
            );
        }

        /**
         * Update affiliate user
         *
         * @api
         * PUT /v1affiliate/service/rest-affiliate/affiliateUser/{userId}
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
                    $id
                ]),
                $data,
                $parameters
            );
        }

        /**
         * Get affiliate user by ID
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/affiliateUser/{userId}
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
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Get a list of all possible permissions for affiliate users
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/affiliateUser/permission
         *
         * @version 1.5.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getPermission($parameters = []) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "permission"
                ]),
                $parameters
            );
        }

        /**
         * Delete affiliate user
         *
         * @api
         * DELETE /v1affiliate/service/rest-affiliate/affiliateUser/{userId}
         *
         * @param int $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
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
    }