<?php
    namespace Bytelovers\AdCumulus\Test\Affiliate;

    class AffiliateTest extends AffiliateBaseTest {

        public function testAffiliateGetData(): void {
            $affiliate = $this->client->api('Affiliate\Affiliate');

            $results = $affiliate->getData();
            var_dump($results);
        }

        public function tearDown() {
            $this->client = null;
        }
    }
