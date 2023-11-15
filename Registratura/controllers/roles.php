<?php

require('db.php');

class roles extends DB
{
    public function login($request)
    {
        $req = json_decode($request);
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $password = $req->password;
        $connect = $this->connect();
        $sql = $connect->prepare('SELECT * from users where last_name=:last_name and name=:name and father_name=:father_name and password=:pass');
        $sql->execute([
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
            'pass' => $password,
        ]);
        $data = $sql->fetch(PDO::FETCH_OBJ);
        if ($data) {
            session_start();
            $_SESSION['user'] = (object)[
                'last_name' => $data->last_name,
                'name' => $data->name,
                'father_name' => $data->father_name,
                'role' => $data->role
            ];
        }
    }

    public function registration($request)
    {
        $req = json_decode($request);
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $password = $req->password;
        $connect = $this->connect();
        $sql = $connect->prepare('SELECT * from users where last_name=:last_name and name=:name and father_name=:father_name and password=:pass');
        $sql->execute(array(
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
            "pass" => $password,
        ));
        $data = $sql->fetch(PDO::FETCH_OBJ);
        if ($data) {
            return json_encode([
                'message' => "Такой пользователь существует"
            ]);
        }
        $req = json_decode($request);
        $last_name = $req->last_name;
        $name = $req->name;
        $father_name = $req->father_name;
        $connect = $this->connect();
        $sql = $connect->prepare('SELECT * from patients where last_name=:last_name and name=:name and father_name=:father_name');
        $sql->execute(array(
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
            ));
        $data = $sql->fetch(PDO::FETCH_OBJ);
        if ($data) {
            return json_encode([
                'message' => "Такой пользователь существует"
            ]);
        }
        $sql = $connect->prepare("INSERT INTO users(last_name,name,father_name,password,role) values (:last_name,:name,:father_name,:pass,:role)");
        $sql->execute([
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
            "pass" => $password,
            "role" => 3
        ]);
        $sql = $connect->prepare("INSERT INTO patients (last_name,name,father_name) values (:last_name,:name,:father_name)");
        $sql->execute([
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
        ]);
        $sql = $connect->prepare('SELECT * from users where last_name=:last_name and name=:name and father_name=:father_name and password=:pass');
        $sql->execute([
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
            "pass" => $password,
        ]);
        $data = $sql->fetch(PDO::FETCH_OBJ);
        if ($data) {
            session_start();
            $_SESSION['user'] = (object)[
                'last_name' => $data->last_name,
                'name' => $data->name,
                'father_name' => $data->father_name,
                'role' => $data->role
            ];
            return json_encode([
                'message' => 'Пользователь добавлен'
            ]);
        }
        $sql = $connect->prepare('SELECT * from patients where last_name=:last_name and name=:name and father_name=:father_name');
        $sql->execute([
            'last_name' => $last_name,
            'name' => $name,
            'father_name' => $father_name,
        ]);
        $data = $sql->fetch(PDO::FETCH_OBJ);
        if ($data) {
            session_start();
            $_SESSION['user'] = (object)[
                'last_name' => $data->last_name,
                'name' => $data->name,
                'father_name' => $data->father_name,
            ];
            return json_encode([
                'message' => 'Пользователь добавлен'
            ]);
        }
    }
}