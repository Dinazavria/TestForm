<?php
require 'DB.php';
class LeadsModel
{
    private $name;
    private $phone;
    private $_db = null;

    public function __construct()
    {
        $this->_db = DB::getInstance();
    }

    public function setData($name, $phone)
    {
        $this->name = $name;
        $this->phone = $phone;
    }
}

