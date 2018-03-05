<?php
    namespace Bytelovers\AdCumulus\Test;

    class AffiliateUserTest extends AdminBaseTest {

        public function testAdminAffiliateGetById(): void {
            $affiliate = $this->client->api("Admin\AffiliateUser");

            $results = $affiliate->getById(2630);
            var_dump($results);
        }

        public function testAdminAffiliateFindAll(): void {
            $affiliate = $this->client->api("Admin\AffiliateUser");

            $results = $affiliate->findAll();
            var_dump($results);
        }

        public function testAdminAffiliateGetResources(): void {
            $affiliate = $this->client->api("Admin\AffiliateUser");

            $results = $affiliate->getResources();
            var_dump($results);
        }
    }
