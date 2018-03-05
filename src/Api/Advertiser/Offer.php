<?php
    namespace Bytelovers\AdCumulus\Api\Advertiser;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Offer extends Base {

        protected $endpointType = "Advertiser";
        protected $endpointName = "offer";

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

        public function findAll($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "findAll"
                ]),
                $parameters
            );
        }

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
    }