<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Offer
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Offer extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "offer";

        /**
         * Create offer
         *
         * @api
         * POST /v1/service/rest/offer?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function create($data = null, $returnObject = true) {
            return $this->post(
                $this->endpointName,
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer
         *
         * @api
         * PUT /v1/service/rest/offer/24?return_object={return_object}
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
         * Get offer by id
         *
         * @api
         * GET /v1/service/rest/offer/{id}
         *
         * @version 1.0.0
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
         * Delete offer by id
         *
         * @api
         * DELETE /v1/service/rest/offer/{id}
         *
         * @version 1.0.0
         *
         * @param int $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function delete($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->getHttpClient()->delete(implode("/", [
                    $this->endpointName,
                    $id
                ]
            ));
        }

        /**
         * Get offer targeting by offer id
         *
         * @api
         * GET /v1/service/rest/offer/targeting/{offerId}
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
                    "targeting",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Update offer location targeting
         *
         * Every time the Offer:setLocationTargeting request is sent
         * the targeting for mobile operators will be deleted.
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/location?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setLocationTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "location"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer connection type targeting
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/connectionType?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setConnectionTypeTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "connectionType"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer mobile operators targeting
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/ mobileOperators?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setMobileOperatorsTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "mobileOperators"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer device type targeting
         *
         * Every time the Offer:setDeviceTypeTargeting request is sent the targeting for mobile
         * device type, device OS, device OS version, device brand and device model
         * will be deleted.
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/deviceType?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setDeviceTypeTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "deviceType"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer mobile device type targeting
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/ mobileDeviceType?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setMobileDeviceTypeTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "mobileDeviceType"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer device OS targeting
         *
         * Every time the Offer:setDeviceOSTargeting is sent the targeting for
         * device OS version will be deleted.
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/deviceOS?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setDeviceOSTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "deviceOS"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer device browser targeting
         *
         * @api
         * PUT /v1/service/rest/offer/targeting/deviceBrowser?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function setDeviceBrowserTargeting($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "targeting",
                    "deviceBrowser"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Get capping by offer id
         *
         * @api
         * GET /v1/service/rest/offer/capping/{offerId}
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
         * Update offer capping
         *
         * @api
         * PUT /v1/service/rest/offer/capping?return_object={return_object}
         *
         * @version 1.31.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function updateCapping($data = null, $returnObject = true) {

            return $this->put(implode("/",
                [
                    $this->endpointName,
                    "capping"
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update offer capping
         *
         * @api
         * DELETE /v1/service/rest/offer/capping/{cappingId}
         *
         * @version 1.31.0
         *
         * @param int $id
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         * @throws \Bytelovers\Api\Exception\AdCumulusException
         */
        public function disableCapping($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->delete(implode("/",
                [
                    $this->endpointName,
                    "capping",
                    $id
                ]),
                $parameters
            );
        }

        /**
         * Generate tracking links for all the combinations of OfferIds and AffiliateIds
         *
         * @api
         * POST /v1/service/rest/offer/generateTrackingLink
         *
         * @version 1.0.0
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

        /**
         * Generate conversion links for all
         *
         * @api
         * POST /v1/service/rest/offer/generateConversionLink
         *
         * @version 1.0.0
         *
         * @param null $data
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function generateConversionLink($data = null, $parameters = []) {

            return $this->post(implode("/",
                [
                    $this->endpointName,
                    "generateConversionLink"
                ]),
                $data,
                $parameters
            );
        }
    }