<?php


class User {
    private $userid;
    private $nickname;
    private $email;
    private $password;
    //private $pdo;
    //private $password2;

    /*function __construct($id=null) {
        $this->pdo=new PDO(totolist,"root","");
        $this->id=$id;
    } 
*/

    

    function getUserId(): int {
        return $this->userid;
    }
    function setUserId(int $id) {
        $this->userid = $id;
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

        $tab = json_decode(file_get_contents("models/users.json"));

        $unique = true;
        foreach($tab as $element) {
            if($element->nickname == $this->nickname) {
                $unique = false;
            }
        }

        $user = [
            "userid" => sizeof($tab) + 1,
            "nickname" => $this->nickname,
            "email" => $this->email,
            "password" => $this->password
        ];
    if($unique) {
        array_push($tab, $user);
        $users_json = json_encode($tab);
        file_put_contents("models/users.json", $users_json);
        }
    } 
    function verifyUser() {
        $tab=json_decode(file_get_contents("models/users.json"));
        foreach($tab as $user) {
            if($this->nickname == $user->nickname) {
                return $user;
            }
        } 
    }                   
}
?>