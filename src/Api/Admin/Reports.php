<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Reports extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "reports";

        public function exportRawConversions($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName,
                    "rawConversions"
                ]),
                $parameters
            );
        }
    }