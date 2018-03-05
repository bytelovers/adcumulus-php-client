<?php
    namespace Bytelovers\AdCumulus\Test;

    class AdvertiserTest extends AdminBaseTest {

        public function testAdminAdvertiserGetById(): void {
            $advertiser = $this->client->api("Admin\Advertiser");

            $results = $advertiser->getById(2630);
            var_dump($results);
        }
    }
