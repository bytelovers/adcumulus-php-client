<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AffiliateTest extends TestCase {

        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient();
        }

        public function testAffiliateGetData(): void {

        }

        public function tearDown() {
            $this->client = null;
        }
    }
