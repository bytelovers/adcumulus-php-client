<?php
    namespace Bytelovers\AdCumulus\Test\Affiliate;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus\Client as AdCumulusClient;

    class AffiliateBaseTest extends TestCase {
        protected $client = null;

        public function setUp() {
            $this->client = new AdCumulusClient(
                "profit4ads",
                "dda1b791b6b343a3ab056248f7e47d6b"
            );
        }

        public function tearDown() {
            $this->client = null;
        }
    }
