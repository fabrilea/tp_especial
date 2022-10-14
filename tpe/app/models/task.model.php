<?php

class TaskModel {

private $db;

function __construct() {
    $this->db = $this->connect();
}

private function connect() {
    $db = new PDO('mysql:host=localhost;'.'dbname=db-marvel; charset=utf8', 'root', '');
    return $db;
}


function getTabla() {
    $query = $this->db->prepare('SELECT db_personajes.id as id, imagen,personaje, raza, afiliacion, lgbt, fem, db_universos.universo as universo FROM db_personajes inner join db_universos on db_personajes.universo = db_universos.id');
    $query->execute();
    
    return  $personajes = $query->fetchAll(PDO::FETCH_OBJ);
}

function getPersonajebyId($id) {

    $query = $this->db->prepare('SELECT * FROM db_personajes WHERE id = ?');
    $query->execute([$id]);
    
    return  $personaje = $query->fetchAll(PDO::FETCH_OBJ);
}

function getPersonajesByuniverso($universo) {

    $query = $this->db->prepare('SELECT db_personajes.id as id, imagen,personaje, raza, afiliacion, lgbt, fem, db_universos.universo as universo FROM db_personajes inner join db_universos on db_personajes.universo = db_universos.id WHERE db_personajes.universo = ?');
    $query->execute([$universo]);
    
    return  $personajes = $query->fetchAll(PDO::FETCH_OBJ);
}


function getAgregar($personaje,$raza,$afiliacion,$lgbt,$fem,$universo){
    
    $query = $this->db->prepare('INSERT INTO db_personajes (personaje, raza, afiliacion, lgbt, fem, universo) VALUES (?, ?, ?, ?, ?, ?)');
    $query->execute([$personaje,$raza,$afiliacion,$lgbt,$fem,$universo]);
}

function deletePersonaje($id){

    $query = $this->db->prepare('DELETE FROM db_personajes WHERE id = ?');
    $query->execute([$id]);
}

function modificarPersonaje($personaje,$raza,$afiliacion,$lgbt,$fem,$universo,$id){
    
    $query = $this->db->prepare('UPDATE db_personajes SET personaje = ?, raza = ?, afiliacion = ?, lgbt = ?, fem = ?, universo = ? WHERE id = ?');
    $query->execute([$personaje,$raza,$afiliacion,$lgbt,$fem,$universo,$id]);
}
}