<?php
    namespace Bytelovers\AdCumulus\Test\Advertiser;

    class AdvertiserTest extends AdvertiserBaseTest {

        public function testAdvertiserGetData(): void {
            $advertiser = $this->client->api('Advertiser\Advertiser');

            $results = $advertiser->getData();
            var_dump($results);
        }

        public function testAdvertiserGetById(): void {
            $advertiser = $this->client->api('Advertiser\Advertiser');

            $results = $advertiser->getById(1707);
            var_dump($results);
        }
    }
