<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Login extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "externalAccess";

        public function externalAccess($data = null) {
            return $this->post(implode("/",
                [
                    $this->endpointName,
                    "externalLogin"
                ]),
                $data
            );
        }
    }