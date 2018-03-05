<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Offer extends Base {

        protected $endpointType = "Affiliate";
        protected $endpointName = "offer";

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

        public function findAll($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "findAll"
                ]),
                $parameters
            );
        }

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