<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Statics extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "statics";

        public function getStatistics($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName
                ]),
                $parameters
            );
        }
    }