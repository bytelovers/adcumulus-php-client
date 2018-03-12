<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Offer
     * @package Bytelovers\AdCumulus\Api\Affiliate
     */
    class Offer extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Affiliate";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "offer";

        /**
         * Get offer user by ID
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/offer/{offerId}
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

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Get all ACTIVE offers that are allowed for the affiliate
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/offer/findAll
         *
         * @version 1.5.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function findAll($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "findAll"
                ]),
                $parameters
            );
        }

        /**
         * Get creative for offer
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/offer/creatives/{offerId}
         *
         * @version 1.5.0
         *
         * @param int $id
         * @param object $data
         * @param array $parameters
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function creatives($id = null, $data = null, $parameters = []) {
            return $this->post(implode("/", [
                    $this->endpointName,
                    "creatives",
                    $id
                ]),
                $data,
                $parameters
            );
        }

        /**
         * Get offer targeting by offer id
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/offer/getTargeting/{offerId}
         *
         * @version 1.31.0
         *
         * @param int $id
         * @param array $parameters
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getTargeting($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "getTargeting",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Get capping by offer id
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/offer/capping/{offerId}
         *
         * @version 1.31.0
         *
         * @param int $id
         * @param array $parameters
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getCapping($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "capping",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Generate tracking links for the affiliate and the list of offer Ids.
         *
         * @api
         * POST /v1affiliate/service/rest-affiliate/offer/generateTrackingLink
         *
         * @version 1.5.0
         *
         * @param object $data
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function generateTrackingLink($data = null, $parameters = []) {

            return $this->post(implode("/",
                [
                    $this->endpointName,
                    "generateTrackingLink"
                ]),
                $data,
                $parameters
            );
        }
    }