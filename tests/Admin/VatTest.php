<?php
    namespace Bytelovers\AdCumulus\Test;

    class VatTest extends AdminBaseTest {

        public function testAdminOfferGetById(): void {
            $vat = $this->client->api("Admin\Vat");

            $results = $vat->getAll();
            var_dump($results);
        }
    }
