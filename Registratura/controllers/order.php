<?php
require ('db.php');
class order extends DB
{
    public function get(){
        return $this->DBAll('SELECT * from orders');
    }
    public function deleteOrder($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE from orders where id_orders='.$req->id_orders,
            'Заказ отменён');
    }

    public function createOrder($request){
        $req = json_decode($request);
        $start = $req->start;
        $name = $req->name;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO orders (start, name) values ('{$start}','{$name}')");
            $connect->commit();
            return json_encode([
                'message'=>'Заказ добавлен'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }

}