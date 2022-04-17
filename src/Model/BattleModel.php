<?php

namespace Model;

use Model\ConnectMysql;

class BattleModel extends ConnectMysql
{
    private $chars;

    public function __construct($chars)
    {
        parent::__construct();
        $this->chars = $chars;
    }

    public function getChar()
    {   
        $return = false;
        
        if($this->conn){
            $return = $this->chars;
        }else{
            $return = "ERRO";
        }

        return $return;
    }
}