<?php
    namespace Bytelovers\AdCumulus\Test\Affiliate;

    class StatisticsTest extends AffiliateBaseTest {

        public function testAffiliateStatisticsGetStatistics(): void {
            $statics = $this->client->api("Affiliate\Statistics");

            $results = $statics->getStatistics();
            var_dump($results);
        }
        public function testAffiliateStatisticsGetReferrals(): void {
            $statics = $this->client->api("Affiliate\Statistics");

            $results = $statics->getReferrals();
            var_dump($results);
        }
    }
