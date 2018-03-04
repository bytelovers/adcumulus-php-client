<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AffiliateTest extends TestCase {

        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                "profit4ads",
                getenv("ADCUMULUS_API_KEY"),
                getenv("ADCUMULUS_API_SECRET")
            );
        }

        public function testAdminAffiliateGetById(): void {
            $affiliate = $this->client->api("Admin\Affiliate");

            $results = $affiliate->getById();
            var_dump($results);
        }

        public function testAdminAffiliatefindAll(): void {
            $affiliate = $this->client->api("Admin\Affiliate");

            $results = $affiliate->findAll();
            var_dump($results);
        }

        public function testAdminGetSignupQuestions(): void {
            $affiliate = $this->client->api("Admin\Affiliate");

            $results = $affiliate->getSignupQuestions();
            var_dump($results);
        }

        public function testAdminGetSignupAnswers(): void {
            $affiliate = $this->client->api("Admin\Affiliate");

            $results = $affiliate->getSignupAnswers(1707);
            var_dump($results);
        }

        public function testAdminGetPaymentMethods(): void {
            $affiliate = $this->client->api("Admin\Affiliate");

            $results = $affiliate->getPaymentMethods();
            var_dump($results);
        }

        public function tearDown() {
            $this->client = null;
        }
    }
