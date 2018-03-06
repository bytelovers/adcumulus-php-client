<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AdminBaseTest extends TestCase {
        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                getenv("ADCUMULUS_DOMAIN"),
                getenv("ADCUMULUS_API_KEY"),
                getenv("ADCUMULUS_API_SECRET")
            );
        }

        public function tearDown() {
            $this->client = null;
        }
    }
