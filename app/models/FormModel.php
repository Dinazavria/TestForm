<?php

require 'DB.php';
class FormModel {
    private $name;
    private $phone;
    private $email;
    private $message;
    private $_db = null;

    public function __construct() {
        $this->_db = DB::getInstance();
    }

    public function setData($name, $phone, $email, $message) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
    }

    public function validForm() {
        if(strlen($this->name)< 2) {
            return "Слишком короткое имя";
        }
        else if(strlen($this->email) < 3) {
            return "Email слишком короткий";
        }
        else
            return "Сообщение отправлено";
    }

    public function addMessage() {
        $sql = 'INSERT INTO messages(name, number, email, comment) VALUES(:name, :number, :email, :comment)';
        $query = $this->_db->prepare($sql);

        $query->execute(['name'=>$this->name, 'number'=>$this->phone, 'email'=>$this->email, 'comment'=>$this->message]);
    }


}