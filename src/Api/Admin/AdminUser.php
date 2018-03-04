<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class AdminUser extends Base {
        protected $endpointType = "Admin";
        protected $endpointName = "adminUser";

        public function create($data, $returnObject = true) {
            return $this->post(implode("/", [
                    $this->endpointName
                ]),
                $data,
                ["return_object" => $returnObject]
            );
        }

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

        public function getById($id = null, $returnObject = true) {
            return $this->get(implode("/", [
                    $this->endpointName,
                    $id
                ]),
                ["return_object" => $returnObject]
            );
        }
    }