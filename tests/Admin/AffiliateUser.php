<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AffiliateUserTest extends TestCase {

        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                "profit4ads",
                getenv("ADCUMULUS_API_KEY"),
                getenv("ADCUMULUS_API_SECRET")
            );
        }

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

        public function tearDown() {
            $this->client = null;
        }
    }
