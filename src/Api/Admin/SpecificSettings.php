<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class SpecificSettings extends Base {
        protected $endpointType = "Admin";
        protected $endpointName = "sps";

        public function create($data = null, $returnObject = true) {
            return $this->post(
                $this->endpointName,
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