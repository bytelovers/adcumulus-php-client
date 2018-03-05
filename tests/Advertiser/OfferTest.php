<?php
    namespace Bytelovers\AdCumulus\Test\Advertiser;

    class OfferTest extends AdvertiserBaseTest {

        public function testAdvertiserOfferGetById(): void {
            $advertiser = $this->client->api("Advertiser\Offer");

            $results = $advertiser->getById(2630);
            var_dump($results);
        }

        public function testAdvertiserOfferFindAll(): void {
            $advertiser = $this->client->api("Advertiser\Offer");

            $results = $advertiser->findAll();
            var_dump($results);
        }

        public function testAdvertiserOfferOffersReport(): void {
            $advertiser = $this->client->api("Advertiser\Offer");

            $results = $advertiser->offersReport();
            var_dump($results);
        }
    }
