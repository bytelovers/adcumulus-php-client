<?php
    namespace Bytelovers\AdCumulus\Test\Advertiser;

    class AdvertiserUserTest extends AdvertiserBaseTest {

        public function testAdvertiserGetById(): void {
            $advertiser = $this->client->api('Advertiser\AdvertiserUser');

            $results = $advertiser->getById(1707);
            var_dump($results);
        }

        public function testAdvertiserGetPermissions(): void {
            $advertiser = $this->client->api('Advertiser\AdvertiserUser');

            $results = $advertiser->getPermissions();
            var_dump($results);
        }
    }
