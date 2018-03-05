<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Base;

    class Affiliate extends Base {

        protected $endpointType = "Affiliate";
        protected $endpointName = "affiliate";

        public function getData($parameters = []) {
            return $this->get(
                $this->endpointName, $parameters
            );
        }

        public function update($data = null, $parameters = []) {
            return $this->post(implode("/", [
                $this->endpointName
            ]),
            $data,
            $parameters
            );
        }
    }