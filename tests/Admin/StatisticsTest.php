<?php
    namespace Bytelovers\AdCumulus\Test;

    class StatisticsTest extends AdminBaseTest {

        public function testAdminStaticsGetStatics(): void {
            $statics = $this->client->api("Admin\Statics");

            $results = $statics->getStatics();
            var_dump($results);
        }
    }
