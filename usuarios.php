<?php
class Usuarios {
private $db;
// conexão DB com PDO
    public function __construct() {
        try {
            $this->db = new PDO("mysql:dbname=posts;host=localhost", "root", '');
        }catch(PDOException $e) {
            echo "FALHA: ".$e->getMessage();
        }
    }
    // Selecionando dados no DB com PDO
    public function selecionar($id) {
        $sql = $this->db->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        $array = array();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
    }

        // Selecionando dados no DB com PDO
        public function inserir() {
            $sql
        }
}
