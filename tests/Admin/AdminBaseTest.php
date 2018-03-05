<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class ClassName extends TestCase {
        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                "profit4ads",
                getenv("ADCUMULUS_API_KEY"),
                getenv("ADCUMULUS_API_SECRET")
            );
        }

        public function tearDown() {
            $this->client = null;
        }
    }