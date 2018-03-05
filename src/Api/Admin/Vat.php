<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Vat extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "vat";

        public function getTargeting($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "getAll",
                    $id
                ]),
                $parameters
            );
        }
    }