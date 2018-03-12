<?php
    namespace Bytelovers\AdCumulus\Api\Advertiser;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Offer
     * @package Bytelovers\AdCumulus\Api\Advertiser
     */
    class Offer extends Base {

        /**
         * @var type $endpointType
         */
        protected $endpointType = "Advertiser";

        /**
         * @var type $endpointName
         */
        protected $endpointName = "offer";

        /**
         * Get offer user by ID
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/offer/getById/{offerId}
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
                    "getById",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Get all offers for advertiser
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/offer/findAll
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
         * Get conversion tracking link by offer
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/offer/generateConversionTrackingLink/{offerId}
         *
         * @version 1.5.0
         *
         * @param int $id
         * @param array $parameters 
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function generateConversionTrackingLink($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "generateConversionTrackingLink",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Get offer reports
         *
         * @api
         * GET /v1advertiser/service/rest-advertiser/reports/offersReport?
         * dateFrom={dateFrom}&dateTo={dateTo}&page={page}&
         * pageSize={pageSize}&offers={offers}&
         * dimensions={dimensions}&measures={measures}
         *
         * @version 1.5.0
         * 
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function offersReport($parameters = []) {
            return $this->get(implode("/",
                [
                    "reports",
                    "offersReport"
                ]),
                $parameters
            );
        }
    }