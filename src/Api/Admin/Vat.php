<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Vat extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "vat";

        public function getAll($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "getAll"
                ]),
                $parameters
            );
        }
    }