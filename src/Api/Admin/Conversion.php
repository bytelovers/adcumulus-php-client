<?php

    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Base;
    use SoapBox\Formatter\Formatter;
    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;

    class Conversion extends Base {
        public function addConversions($conversions) {
            $formatter = Formatter::make($conversions, Formatter::ARR);
            $csv = $formatter->toCsv();

            return $csv;
        }
    }