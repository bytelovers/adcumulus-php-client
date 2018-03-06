<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Affiliate extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "affiliate";

        /**
         * Create affiliate object.
         *
         * @api
         * POST /v1/service/rest/affiliate?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param object|null $data
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
         * Update affiliate object.
         *
         * @api
         * PUT /v1/service/rest/affiliate/{id}
         *
         * @version 1.0.0
         *
         * @param int|null $id
         * @param object|null $data
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function update($id = null, $data = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    $this->endpointName,
                    $id
                ]),
            $data
            );
        }

        /**
         * Get affiliate object by id
         *
         * @api
         * GET /v1/service/rest/affiliate/{id}
         *
         * @version 1.0.0
         *
         * @param int|null $id
         * @param array $parameters
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getById($id = null, $parameters = []) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/",
                [
                    $this->endpointName,
                    $id
                ]),
                $parameters);
        }

        /**
         * Get all active and blocked affiliates
         *
         * @api
         * GET /v1/service/rest/affiliate/findAll
         *
         * @version 1.0.0
         *
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function findAll() {
            return $this->getHttpClient()->get(implode("/", [
                    $this->endpointName,
                    "findAll"
                ]
            ), []);
        }

        /**
         * Delete affiliate object by id
         *
         * @api
         * DELETE /v1/service/rest/affiliate/{Id}
         *
         * @version 1.0.0
         *
         * @param int|null $id
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function delete($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->getHttpClient()->delete(implode("/", [
                    $this->endpointName,
                    $id
                ]
            ));
        }

        /**
         * Signup
         *
         * * bool send_verification_email
         * * bool return_object
         * * bool send_welcome_email
         *
         * @api
         * POST /v1/service/rest/affiliate/signup?return_object={return_object}&send_verification_email=false&send_welcome_email=true
         *
         * @version 1.0.0
         *
         * @param array $parameters
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function signup($parameters = []) {
            return $this->post(implode("/", [
                $this->endpointName,
                "signup"
            ]),
            null,
            $parameters);
        }

        /**
         * Create question
         *
         * @api
         * POST /v1/service/rest/affiliate/signupQuestion?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param bool $returnObject
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function createSignUpQuestion($returnObject = true) {
            return $this->post(implode("/", [
                $this->endpointName,
                "signupQuestion"
            ]),
            null,
            ["return_object" => $returnObject]
            );
        }

        /**
         * Create answer to a question
         *
         * @api
         * POST /v1/service/rest/affiliate/signupQuestionAnswer
         *
         * @version 1.0.0
         *
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function createSignUpQuestionAnswer() {
            return $this->post(implode("/", [
                $this->endpointName,
                "signupQuestionAnswer"
            ]),
                null,
                null
            );
        }

        /**
         * Update question
         *
         * @api
         * PUT /rest/affiliate/signupQuestion/{questionId}?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param int|null $id
         * @param bool $returnObject
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function updateSignUpQuestion($id = null, $returnObject = true) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    $this->endpointName,
                    "signupQuestion",
                    $id
                ]),
                null,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Get all questions
         *
         * @api
         * GET /v1/service/rest/affiliate/signupQuestion
         *
         * @version 1.0.0
         *
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getSignupQuestions() {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "signupQuestion"
                ])
            );
        }

        /**
         * Update answers
         *
         * @api
         * PUT /v1/service/rest/affiliate/signupQuestionAnswer/{answerId}?return_object={return_object}
         *
         * @version 1.0.0
         *
         * @param int|null $id
         * @param bool $returnObject
         * @throws \Bytelovers\Api\Exception\AdCumulusException if $id is null
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function updateSignUpAnswer($id = null, $returnObject = true) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->put(implode("/", [
                    $this->endpointName,
                    "signupQuestionAnswer",
                    $id
                ]),
                null,
                ["return_object" => $returnObject]
            );
        }

        /**
         * Get all answers
         *
         * @api
         * GET /v1/service/rest/affiliate/signupQuestionAnswer/{affiliateId}
         *
         * @version 1.0.0
         *
         * @param int|null $id
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getSignupAnswers($id = null) {
            if (is_null($id)) {
                throw new AdCumulusException("Id must be declared");
            }

            return $this->get(implode("/", [
                    $this->endpointName,
                    "signupQuestionAnswer",
                    $id
                ])
            );
        }

        /**
         * Get all payment methods for the network
         *
         * @api
         * GET /v1/service/rest/affiliate/paymentMethods
         *
         * @version 1.0.0
         *
         * @return \Psr\Http\Message\ResponseInterface
         */
        public function getPaymentMethods() {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "paymentMethods"
                ])
            );
        }
    }