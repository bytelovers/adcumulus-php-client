<?php
    namespace Bytelovers\AdCumulus\Api\Advertiser;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class AdvertiserUser extends Base {

        protected $endpointType = "Advertiser";
        protected $endpointName = "advertiserUser";

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

        public function create($data = null, $parameters = []) {
            return $this->post(implode("/", [
                $this->endpointName,
                "create"
            ]),
                $data,
                $parameters
            );
        }

        public function update($id = null, $data = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                $this->endpointName,
                "update",
                $id
            ]),
                $data,
                $parameters
            );
        }

        public function getPermissions($parameters = []) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "getPermissions"
                ]),
                $parameters
            );
        }
    }