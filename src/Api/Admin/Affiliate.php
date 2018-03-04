<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Affiliate extends Base {

        protected $endpointType = "Admin";

        public function create($data = null, $returnObject = true) {
            return $this->post("affiliate",
                $data,
                ["return_object" => $returnObject]
            );
        }

        public function update($id = null, $data = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    "affiliate",
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
                    "affiliate",
                    $id
                ]),
                $parameters);
        }
    }