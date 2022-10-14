<?php 

class CatModel {

    function connect() {
        $db = new PDO('mysql:host=localhost;'.'dbname=db-marvel; charset=utf8', 'root', '');
        return $db;
    }
    
    
    function getUniverso(){
        $db = $this->connect();
        $query = $db->prepare('SELECT * FROM db_universos');
        $query->execute();
        $universos = $query->fetchAll(PDO::FETCH_OBJ);
        return $universos;
    }


    function agregarUniverso($universo) {
            $db = $this->connect();
            $query = $db->prepare('INSERT INTO db_universos (universo) VALUES (?)');
            $query->execute([$universo]);
        }

        function deleteUniverso($id){
            $db =  $this->connect();
            $query = $db->prepare('DELETE FROM db_universos WHERE id = ?');
            $query->execute([$id]);
        }

        function getUniversobyId($id) {
            $db =  $this->connect();
            $query = $db->prepare('SELECT * FROM db_universos WHERE id = ?');
            $query->execute([$id]);
            
            return  $universos = $query->fetchAll(PDO::FETCH_OBJ);
        }

        function modificarUniverso($universos,$id){
            $db =  $this->connect();
            $query = $db->prepare('UPDATE db_universos SET universo = ? WHERE id = ?;');
            $query->execute([$universos,$id]);
        }
    }