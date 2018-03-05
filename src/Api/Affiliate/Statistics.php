<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Statistics extends Base {

        protected $endpointType = "Affiliate";
        protected $endpointName = "statistics";

        public function getStatistics($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName
                ]),
                $parameters
            );
        }
        public function getReferrals($parameters = []) {
            return $this->get(implode("/",
                [
                    "referrals"
                ]),
                $parameters
            );
        }
    }