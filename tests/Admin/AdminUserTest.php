<?php
    namespace Bytelovers\AdCumulus\Test;

    class AdminUserTest extends AdminBaseTest {

        public function testAdminAffiliateGetById(): void {
            $affiliate = $this->client->api("Admin\AdminUser");

            $results = $affiliate->getById(2630);
            var_dump($results);
        }

        public function testAdminAffiliateGetResources(): void {
            $affiliate = $this->client->api("Admin\AdminUser");

            $results = $affiliate->getResources();
            var_dump($results);
        }
    }
