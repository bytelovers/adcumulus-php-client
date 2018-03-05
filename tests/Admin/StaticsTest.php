<?php
    namespace Bytelovers\AdCumulus\Test;

    class AdminUserTest extends AdminBaseTest {

        public function testAdminStaticsGetStatics(): void {
            $statics = $this->client->api("Admin\Statics");

            $results = $statics->getStatics();
            var_dump($results);
        }
    }
