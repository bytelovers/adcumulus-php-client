<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Offer extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "offer";

        public function create($data = null, $returnObject = true) {
            return $this->post(
                $this->endpointName,
                $data,
                ["return_object" => $returnObject]
            );
        }

        public function update($id = null, $data = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    $this->endpointName,
                    $id
                ]),
            $data
            );
        }

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