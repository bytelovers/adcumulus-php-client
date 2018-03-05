<?php
    namespace Bytelovers\AdCumulus\Test\Affiliate;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AffiliateBaseTest extends TestCase {
        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                "profit4ads",
                getenv("ADCUMULUS_API_KEY")
            );
        }

        public function tearDown() {
            $this->client = null;
        }
    }
