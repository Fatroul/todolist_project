<?php


class User {
    private $userId;
    private $nickname;
    private $email;
    private $password;
    private $pdo;
    //private $password2;

    function __construct($id=null) {
        $this->pdo=new PDO();
        $this->id=$id;
        $this->nickname=$nickname;
        $this->email=$email;
        $this->password=$password;
    } 


    

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

        $unique = true;
        foreach($tab as $element) {
            if($element->nickname == $this->nickname) {
                $unique = false;
            }
        }

        $user = [
            "userId" => sizeof($tab) + 1,
            "nickName" => $this->nickname,
            "email" => $this->email,
            "password" => $this->password 
        ];
    if($unique) {
        array_push($tab, $user);
        $users_json = json_encode($tab);
        file_put_contents("users.json", $users_json);
                }
            }                       
        }
?>