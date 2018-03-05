<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Base;

    class Affiliate extends Base {

        protected $endpointType = "Affiliate";

        public function getData($parameters = []) {
            return $this->get("affiliate", $parameters);
        }
    }