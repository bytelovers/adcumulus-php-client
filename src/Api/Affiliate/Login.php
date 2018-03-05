<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Login extends Base {

        protected $endpointType = "Affiliate";
        protected $endpointName = "externalAccess";

        public function externalAccess($data = null) {
            return $this->post(implode("/",
                [
                    $this->endpointName,
                    "externalLogin"
                ]),
                $data,
                null
            );
        }
    }