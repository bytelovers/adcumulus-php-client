<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    /**
     * Class Creative
     * @package Bytelovers\AdCumulus\Api\Admin
     */
    class Creative extends Base {

        /**
         * @var string $endpointType
         */
        protected $endpointType = "Admin";

        /**
         * @var string $endpointName
         */
        protected $endpointName = "creative";

        /**
         * Create creative.
         *
         * * Allowed creative type: “File”,“Mobile Site Image Banner”,“Desktop Site Image Banner”,“Flash Banner”,“Offer Thumbnail”.
         * * Allowed file size: 50Mb.
         * * List of offer ids is in the following format {id1, id2}. Leave
         *   empty for all: If offers array is left empty than data for all entities is returned (for example if offers={}, than the data for all offers will be returned).
         * * Upload mode: “Single file” by default.
         * * Visible for affiliates: true by default.
         * * If the creative name is not set a default name will be set
         *   “Automatic generated”.
         *
         * @api
         * POST /v1/service/rest/creative/create
         *
         * @version 1.25.0
         *
         * @param object $data
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function create($data = null, $parameters = []) {
            return $this->post(implode("/", [
                    $this->endpointName,
                    "create"
                ]),
                $data,
                $parameters
            );
        }

        /**
         * Create creatives
         *
         * * Allowed creative type: “File”,“Mobile Site Image Banner”,“Desktop Site Image Banner”,“Flash Banner”,“Offer Thumbnail”.
         * * Allowed file size: 50Mb.
         * * List of offer ids is in the following format {id1, id2}. Leave
         *   empty for all: If offers array is left empty than data for all entities is returned (for example if offers={}, than the data for all offers will be returned).
         * * Upload mode: “Bulk upload” by default
         * * Visible for affiliates: true by default.
         *
         * @api
         * POST /v1/service/rest/creative/bulkUpload
         *
         * @version 1.29.0
         *
         * @param object $data
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function bulkUpload($data = null, $parameters = []) {
            return $this->post(implode("/", [
                    $this->endpointName,
                    "bulkUpload"
                ]),
                $data,
                $parameters
            );
        }

        /**
         * Delete creative by id
         *
         * @api
         * DELETE /v1/service/rest/creative/{id}
         *
         * @version 1.29.0
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