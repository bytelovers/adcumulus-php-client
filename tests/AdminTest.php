<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AdminTest extends TestCase {


        public function testAdminAffiliateGetById(): void {
            $client = new AdCumulusClient(
                "profit4ads",
                getenv("ADCUMULUS_API_KEY"),
                getenv("ADCUMULUS_API_SECRET")
            );

            $affiliate = $client->api("Admin\Affiliate");

            $results = $affiliate->getById(1707);
            var_dump($results);
        }
    }
