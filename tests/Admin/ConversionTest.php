<?php
    namespace Bytelovers\AdCumulus\Test;

    class ConversionTest extends AdminBaseTest {

        public function testAddConversions(): void {
            $client = $this->client->api("Admin\Conversion");

            $data = [
                (object)[
                    "test11" => "value",
                    "test12" => "value2"
                ],
                (object)[
                    "test21" => "value",
                    "test22" => "value2"
                ]
            ];

            $client->addConversions($data);
        }
    }
