<?php
    namespace Bytelovers\AdCumulus\Api\Admin;

    use Bytelovers\AdCumulus\Api\Exception as AdCumulusException;
    use Bytelovers\AdCumulus\Base;

    class Affiliate extends Base {

        protected $endpointType = "Admin";
        protected $endpointName = "affiliate";

        public function create($data = null, $returnObject = true) {
            return $this->post(
                $this->endpointName,
                $data,
                ["return_object" => $returnObject]
            );
        }

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

        public function findAll() {
            return $this->getHttpClient()->get(implode("/", [
                    $this->endpointName,
                    "findAll"
                ]
            ), []);
        }

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

        public function signup($parameters = []) {
            return $this->post(implode("/", [
                $this->endpointName,
                "signup"
            ]),
            null,
            $parameters);
        }

        public function createSignUpQuestion($returnObject = true) {
            return $this->post(implode("/", [
                $this->endpointName,
                "signupQuestion"
            ]),
            null,
            ["return_object" => $returnObject]
            );
        }

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

        public function createSignUpQuestionAnswer() {
            return $this->post(implode("/", [
                $this->endpointName,
                "signupQuestionAnswer"
            ]),
            null,
            null
            );
        }

        public function updateSignUpAnswer($id, $returnObject = true) {
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

        public function getSignupQuestions() {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "signupQuestion"
                ])
            );
        }

        public function getSignupAnswers($id) {
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

        public function getPaymentMethods() {
            return $this->get(implode("/", [
                    $this->endpointName,
                    "paymentMethods"
                ])
            );
        }
    }