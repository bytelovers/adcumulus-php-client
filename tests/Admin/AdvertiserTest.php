<?php
    namespace Bytelovers\AdCumulus\Test;

    class AdvertiserTest extends AdminBaseTest {

        public function testAdminAdvertiserGetById(): void {
            $affiliate = $this->client->api("Admin\Advertiser");

            $results = $affiliate->getById(2630);
            var_dump($results);
        }
    }
