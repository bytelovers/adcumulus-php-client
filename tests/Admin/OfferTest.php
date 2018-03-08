<?php
    namespace Bytelovers\AdCumulus\Test;

    class OfferTest extends AdminBaseTest {

        public function testAdminOfferGetById(): void {
            $affiliate = $this->client->api("Admin\Offer");

            $results = $affiliate->getById(2630);
            var_dump($results);
        }

        public function testAdminOfferGetTargeting(): void {
            $affiliate = $this->client->api("Admin\Offer");

            $results = $affiliate->getTargeting(2630);
            var_dump($results);
        }

        public function testAdminOfferGetCapping(): void {
            $affiliate = $this->client->api("Admin\Offer");

            $results = $affiliate->getCapping(2630);
            var_dump($results);
        }
    }
