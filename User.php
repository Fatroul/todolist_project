<?php


class User {
    private $userId;
    private $nickname;
    private $email;
    private $password;
    

    function getUserId(): int {
        return $this->userId;
    }
    function setUserId(int $id) {
        $this->userId = $id;
    }
    function getNickname(): string {
        return $this->nickname;
    }
    function setNickname(string $nickname) {
        $this->nickname = $nickname;
    }
    function getPassword() : string {
        return $this->password;
    } 
    function setPassword(string $password) {
        $this->password = $password;
    }
    function getEmail() : string {
        return $this->email;
    }
    function setEmail(string $email) {
        $this->email = $email;
    }

    function saveUser() {

        $tab = json_decode(file_get_contents("users.json"));

        $user = [
            "userId" => 1,
            "nickName" => $this->nickname,
            "email" => $this->email,
            "password" => $this->password 

        ];
    
    array_push($tab, $user);
    $users_json = json_encode($tab);
    file_put_contents("users.json", $users_json);
    }
    
}
?>