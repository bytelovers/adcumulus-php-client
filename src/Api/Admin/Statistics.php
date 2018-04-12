<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Statistics
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Statistics extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "statistics";

        /**
         * Get all statistics for affiliate and offer IDs
         *
         * * One of these time variables can be used as a time
         *   dimension parameter: time_hour, time_date, time_week, time_month or time_year.
         * * Date format is yyyy-MM-dd.
         * * Leave empty for all: If offers or affiliates array is left empty than
         *   data for all entities is returned (for example if offers={}, than the data for
         *   all offers will be returned).
         *
         * @api
         * GET /v1/service/rest/statistics?resultsPerPage={
         *      resultsPerPage}&page={page}&dateFrom={dateFrom}&
         *      dateTo={ dateTo }&affiliates={affiliates}&
         *      offers={offers}&dimensions={dimensions}&
         *      measures={measures}
         *
         * @version 1.4.2
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
    }