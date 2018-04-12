<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use SoapBox\Formatter\Formatter;
    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Conversion
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Conversion extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "bulkConversionsUpload";

        private function validateAddConversionFile() {
            return $this->post(implode("/", [
                $this->endpointName,
                "validateFileForNewConversions"
            ]),
            null,
            null);
        }

        private function writeCsv($data, $filepath = null) {
            file_put_contents($filepath, $data);
        }

        public function addConversions($conversions) {
            $formatter = Formatter::make($conversions, Formatter::JSON);
            $csv = $formatter->toCsv("\n", ";", '');

            $this->writeCsv($csv, "./storage/app/conversions-" .
                date("Y-m-d")
                . ".csv");
        }
    }