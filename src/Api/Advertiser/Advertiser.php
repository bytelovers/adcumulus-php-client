<?php
    namespace Bytelovers\AdCumulus\Api\Advertiser;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Advertiser extends Base {

        protected $endpointType = "Advertiser";
        protected $endpointName = "advertiser";

        public function getData($parameters = []) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "getData"
                ]),
                $parameters
            );
        }

        public function update($data = null, $parameters = []) {
            return $this->put(implode("/", [
                $this->endpointName,
                "update"
            ]),
            $data,
            $parameters
            );
        }

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
    }