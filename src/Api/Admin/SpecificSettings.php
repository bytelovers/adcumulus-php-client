<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class SpecificSettings
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class SpecificSettings extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "sps";

        /**
         * Create specific setting for affiliate and offer.
         *
         * @api
         * POST /v1/service/rest/sps?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param object $data
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function create($data = null, $returnObject = true) {
            return $this->post(
                $this->endpointName,
                $data,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Update specific setting for affiliate and offer
         *
         * @api
         * PUT /v1/service/rest/sps/{sps_id}?return_object={return_object}
         *
         * @version 1.11.0
         *
         * @param int $id
         * @param object $data
         * @param bool $returnObject
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function update($id = null, $data = null, $returnObject = true) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    $this->endpointName,
                    $id
                ]),
            $data,
            ["return_object" => $returnObject]
            );
        }

        /**
         * Delete specific setting
         *
         * @api
         * DELETE /v1/service/rest/sps/{sps_id}
         *
         * @version 1.11.0
         *
         * @param int $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function delete($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->delete(implode("/", [
                    $this->endpointName,
                    $id
                ])
            );
        }
    }