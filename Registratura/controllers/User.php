<?php

require ('db.php');

class User extends DB
{
        public function get(){
        return $this->DBAll('SELECT * from staff');
    }
    public function getU(){
        return $this->DBAll('SELECT * from users WHERE role>=2 ORDER BY role');
    }

    public function delete($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE from staff where id_staff='.$req->id_staff,
            'Пользователь удален');
    }
    public function deleteUser($request){
        $req=json_decode($request);
        return $this->transaction(
            'DELETE from users where id_users='.$req->id_users,
            'Пользователь удален');
    }

    public function createUser($request){
        $req = json_decode($request);
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $post = $req->post;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("INSERT INTO staff (last_name,name,father_name,post) values ('{$last_name}','{$name}','{$father_name}','{post}')");
            $connect->commit();
            return json_encode([
                'message'=>'Пользователь добавлен'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
    public function updateU($request){
        $req = json_decode($request);
        $id_users = $req->id_users;
        $role = $req->role;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("UPDATE users SET role='{$role}' WHERE id_users={$id_users} ");
            $connect->commit();
            return json_encode([
                'message'=>'Пользователь обновлён'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
    public function update($request){
        $req = json_decode($request);
        $id_staff = $req->id_staff;
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $post = $req->post;
        $connect = $this->connect();
        try{
            $connect->beginTransaction();
            $connect->exec("UPDATE staff SET last_name='{$last_name}', name='{$name}', father_name='{$father_name}', post='{$post}' WHERE id_staff={$id_staff} ");
            $connect->commit();
            return json_encode([
                'message'=>'Пользователь обновлён'
            ]);
        }catch (PDOException $e){
            $connect->rollBack();
            return json_encode([
                'message'=>$e->getMessage()
            ]);
        }
    }
}