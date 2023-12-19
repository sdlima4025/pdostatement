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
        public function inserir($nome, $email, $senha) {
            $sql = $this->db->prepare("INSERT INTO usuarios 
            SET nome = :nome, email = :email, senha = :senha ");
                $sql->bindParam(":nome", $nome);
                $sql->bindParam(":email", $email);
                $sql->bindValue(":senha", md5($senha));
                $sql->execute();
        }

        // update de dados no DB com PDO 
        public function atualizar($nome, $email, $senha, $id) {

            $sql = $this->db->prepare("UPDATE usuarios SET nome = ?, email = ?, senha = ? 
            WHERE id = ?");
            $sql->execute(array($nome, $email, md5($senha), $id));
        }

        // DELETAR COM PDO bindvalue
        public function excluir($id) {
            $sql = $this->db->prepare("DELETE FROM usuarios WHERE id = ?");
            $sql->bindValue(1, $id);
            $sql->execute();
        }
}
