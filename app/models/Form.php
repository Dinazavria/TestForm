<?php

class Form
{
    private $name;
    private $phone;
    private $email;
    private $message;
    private $personal;

    public function setData($name, $phone, $email, $message, $personal) {
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->message = $message;
        $this->personal = $personal;
    }

    public function validForm() {
        if(strlen($this->name)< 2) {
            return "Слишком короткое имя";
        }
        else if(strlen($this->email) < 3) {
            return "Email слишком короткий";
        }
        else
            return "OK";
    }


}