<?php
    namespace Bytelovers\AdCumulus\Test;

    use PHPUnit\Framework\TestCase;
    use Bytelovers\AdCumulus;

    class ClientTest extends TestCase {

        public function testApi(): void {
           /* $className = "Offer";
            $client = new AdCumulus\Client("test");
            $classExpected = $client->api($className);

            $this->assertInstanceOf(
                "Bytelovers\\AdCumulus\\Api\\" . $className,
                $classExpected
            );*/
        }

        public function testGet(): void {
            $client = new AdCumulus\Client(
                "profit4ads",
                "Admin",
                getenv("ADCUMULUS_API_KEY"),
                getenv("ADCUMULUS_API_SECRET")
            );

            $client->get("/affiliate/findAll");
        }
    }
