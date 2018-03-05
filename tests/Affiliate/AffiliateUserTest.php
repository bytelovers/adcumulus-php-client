<?php
    namespace Bytelovers\AdCumulus\Test\Affiliate;

    class AffiliateUserTest extends AffiliateBaseTest {

        public function testAffiliateGetData(): void {
            $affiliate = $this->client->api('Affiliate\AffiliateUser');

            $results = $affiliate->getById(1707);
            var_dump($results);
        }

        public function testAffiliateGetPermission(): void {
            $affiliate = $this->client->api('Affiliate\AffiliateUser');

            $results = $affiliate->getPermission();
            var_dump($results);
        }
    }
