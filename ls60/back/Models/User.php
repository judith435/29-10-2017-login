<?php
    //namespace Models;

    class User implements JsonSerializable {
        private $userId;
        private $userName;
        private $userPassword;
        private $permission;
 
        function __construct($dataArray) 
        {
            $this->userId = $dataArray['userId'];
            $this->userName = $dataArray['userName'];
            $this->userPassword = $dataArray['userPassword'];
            $this->permission = $dataArray['permission'];
        }

        public function getUsername() {
            return $this->userName;
        }

        public function setUserPassword($password) {
            $pw = new PasswordHandler();
            $this->userPassword = $pw->getHash($password);
        }

        public function jsonSerialize() {
            $array = [
                'userId' => 1,
                'userName' => 'kobe',
                'userPassword' => '',
                'permission' => '1',
            ];
            return $array;
        }
    }


?>