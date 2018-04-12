<?php
    namespace Bytelovers\AdCumulus\Test\Advertiser;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AdvertiserBaseTest extends TestCase {
        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                getenv("ADCUMULUS_DOMAIN"),
                getenv("ADCUMULUS_API_KEY")
            );
        }

        public function tearDown() {
            $this->client = null;
        }
    }
