<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class AffiliateUser extends Base {

        protected $endpointType = "Affiliate";
        protected $endpointName = "affiliateUser";

        public function create($data = null, $parameters = []) {
            return $this->post(implode("/", [
                    $this->endpointName
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
                    $id
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
                    $id
                ]),
                $parameters
            );
        }

        public function getPermission($parameters = []) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "permission"
                ]),
                $parameters
            );
        }

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