<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Reports
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Reports extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "reports";

        /**
         * Export raw conversions for affiliate and offer IDs
         *
         * * Date format is yyyy-MM-dd.
         * * Leave empty for all: If affiliates, offers or conversionType array
         *   is left empty than data for all entities is returned.
         * * By default the following columns will be returned (Time,
         *   AffiliateID, Affiliate, OfferID, Offer, IP, Transaction Id, Status) but the user
         *   will be able to specify additional columns to be returned.
         * * Limits and protection: Limit of exported data is added to this method. By default
         *   the limit is set to 10 000 records (the same limit is using to reports export on GUI).
         *   A protection mechanism is added so that only one request at a time can be
         *   sent from a single network.
         *
         * @api
         * GET /v1/service/rest/reports/rawConversions?date={date}&
         * affiliates={affiliates}&offers={offers}&
         * additionalColumns={additionalColumns}&
         * conversionType={conversionType}
         *
         * @version 1.27.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
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