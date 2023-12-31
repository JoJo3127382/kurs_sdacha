<?php

class DB
{
    protected function connect(){
        return new PDO('mysql:host=localhost;dbname=20087_db_regist;charset=utf8','root','');
    }

    protected function DBAll($query){
        $connect=$this->connect();
        $sql = $connect->query($query);
        $sql->execute();
        return $sql->fetchAll();
    }

    protected function transaction($query,$message){
        $connect=$this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec($query);
            $connect->commit();
            return json_encode([
                'message'=>$message
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
}