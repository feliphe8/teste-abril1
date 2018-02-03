<?php
  namespace resources\Model;
  use \resources\DB\Sql;
  use \resources\Model;

  class Cliente extends Model {

    public static function listAll(){
      $sql = new Sql();
      return $sql->select("SELECT * FROM cliente ORDER BY id_cliente");
    }

    public function save(){
      $sql = new Sql();
      $results = $sql->select("INSERT INTO cliente (nome_cliente, email, telefone) VALUES (:nome_cliente, :email, :telefone)", array(
        ":nome_cliente"=>$this->getnome_cliente(),
        ":email"=>$this->getemail(),
        ":telefone"=>$this->gettelefone()
      ));

      $this->setData($results);
    }

    public function delete(){
      $sql = new Sql();
      $sql->query("DELETE FROM cliente WHERE id_cliente = :id_cliente",array(
        ":id_cliente"=>$this->getid_cliente()
      ));
    }

    public function get($id_cliente){
      $sql = new Sql();
      $results = $sql->select("SELECT * FROM cliente WHERE id_cliente = :id_cliente", array(
        ":id_cliente"=>$id_cliente
      ));

      $this->setData($results[0]);
    }


    public function update(){
      $sql = new Sql();
      $results = $sql->select("UPDATE cliente SET nome_cliente = :nome_cliente, email = :email, telefone = :telefone WHERE id_cliente = :id_cliente", array(
        ":id_cliente"=>$this->getid_cliente(),
        ":nome_cliente"=>$this->getnome_cliente(),
        ":email"=>$this->getemail(),
        ":telefone"=>$this->gettelefone()
      ));

      $this->setData($results);
    }
  }

 ?>
