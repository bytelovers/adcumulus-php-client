<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Creative extends Base {
        protected $endpointType = "Admin";
        protected $endpointName = "creative";

        public function create($data = null, $parameters = []) {
            return $this->post(implode("/", [
                    $this->endpointName,
                    "create"
                ]),
                $data,
                $parameters
            );
        }

        public function bulkUpload($data = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->post(implode("/", [
                    $this->endpointName,
                    "bulkUpload"
                ]),
                $data,
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