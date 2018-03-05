<?php
    namespace Bytelovers\AdCumulus\Test;

    class AffiliateTest extends AdminBaseTest {

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
    }
