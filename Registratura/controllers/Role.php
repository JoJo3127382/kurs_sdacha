<?php

require ('db.php');

class Role extends DB
{
    public function get(){
        return $this->DBAll('SELECT * from staff');
    }

}