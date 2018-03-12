<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Login
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Login extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "externalAccess";

        /**
         * External login for admin and affiliate users
         *
         * Username and password are sent in the body of the post request whose content-type is json.
         * The password is MD5 encrypted. The response redirects user to his homepage.
         *
         * @api
         * POST /v1/service/rest/externalAccess/externalLogin
         *
         * @version 1.15.0
         *
         * @param object $data
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function externalAccess($data = null) {
            return $this->post(implode("/",
                [
                    $this->endpointName,
                    "externalLogin"
                ]),
                $data,
                null
            );
        }
    }