<?php
    namespace Bytelovers\AdCumulus\Test\Affiliate;

    class OfferTest extends AffiliateBaseTest {

        public function testAffiliateOfferGetById(): void {
            $affiliate = $this->client->api("Affiliate\Offer");

            $results = $affiliate->getById(2630);
            var_dump($results);
        }

        public function testAdminOfferFindAll(): void {
            $affiliate = $this->client->api("Affiliate\Offer");

            $results = $affiliate->findAll();
            var_dump($results);
        }

        public function testAffiliateOfferGetTargeting(): void {
            $affiliate = $this->client->api("Affiliate\Offer");

            $results = $affiliate->getTargeting(2630);
            var_dump($results);
        }

        public function testAffiliateGetCapping(): void {
            $affiliate = $this->client->api("Affiliate\Offer");

            $results = $affiliate->getCapping(2630);
            var_dump($results);
        }
    }
