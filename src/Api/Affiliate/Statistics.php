<?php
    namespace Bytelovers\AdCumulus\Api\Affiliate;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Statistics
     * @package Bytelovers\AdCumulus\Api\Affiliate
     */
    class Statistics extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Affiliate";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "statistics";

        /**
         * Get advertiser object by id
         *
         * * One of these time variables can be used as a time dimension parameter: time_hour, time_date,
         *   time_week, time_month or time_year.
         * * Date format is yyyy-MM-dd.
         * * Leave empty for all: If offers array is left empty than data for all
         *   entities is returned (for example if offers={}, than the data for all offers
         *   will be returned).
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/statistics?resultsPerPage={resultsPerPage}&
         *     page={page}&dateFrom={dateFrom}&dateTo={dateTo}&offers={offers}&dimensions={dimensions}&
         *     measures={measures}
         *
         * @version 1.5.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getStatistics($parameters = []) {
            return $this->get(implode("/",
                [
                    $this->endpointName
                ]),
                $parameters
            );
        }

        /**
         * Get affiliate referrals
         *
         * @api
         * GET /v1affiliate/service/rest-affiliate/referrals
         *
         * @version 1.5.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getReferrals($parameters = []) {
            return $this->get(implode("/",
                [
                    "referrals"
                ]),
                $parameters
            );
        }
    }