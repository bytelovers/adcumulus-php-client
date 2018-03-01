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
                "domainName",
                "Admin",
                "086ae4759af24e35958e5f0020237747",
                "b33b2674176649a8a26f07e3f4c18f29"
            );
        }
    }
