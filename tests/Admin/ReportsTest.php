<?php
    namespace Bytelovers\AdCumulus\Test;

    class Reports extends AdminBaseTest {

        public function testAdminReportsExportRawConversions(): void {
            $reports = $this->client->api("Admin\Reports");

            $results = $reports->exportRawConversions();
            var_dump($results);
        }
    }
