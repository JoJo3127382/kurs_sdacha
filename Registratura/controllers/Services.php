<?php

require ('db.php');

class Services extends DB
{
    public function getData(){
        return $this->DBAll('SELECT * from services');
    }
    public function createServices($request){
        $req = json_decode($request);
        $service = $req->service;
        $deadlines = $req->deadlines;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO services (service,deadlines) values ('{$service}','{$deadlines}')");
            $connect->commit();
            return json_encode([
                'message'=>'Услуга добавлена'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
    public function deleteService($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE FROM services WHERE id_services='.$req->id_services,
            'Услуга удалена');
    }
    public function updateService($request){
        $req = json_decode($request);
        $id_services = $req->id_services;
        $service = $req->service;
        $deadlines = $req->deadlines;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("UPDATE services SET service='{$service}', deadlines='{$deadlines}' WHERE id_services={$id_services} ");
            $connect->commit();
            return json_encode([
                'message'=>'Услуга обновлена'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }

}