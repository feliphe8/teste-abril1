<?php
  namespace resources\Model;
  use \resources\DB\Sql;
  use \resources\Model;

  class Pedido extends Model {

    public static function listAll(){
      $sql = new Sql();
      return $sql->select("SELECT * FROM pedido ORDER BY id_pedido");
    }

    public function save(){
      $sql = new Sql();
      $results = $sql->select("INSERT INTO pedido (id_produto, id_cliente) VALUES (:id_produto, :id_cliente)", array(
        ":id_produto"=>$this->getid_produto(),
        ":id_cliente"=>$this->getid_cliente()
      ));

      $this->setData($results);
    }

    public function delete(){
      $sql = new Sql();
      $sql->query("DELETE FROM pedido WHERE id_pedido = :id_pedido",array(
        ":id_pedido"=>$this->getid_pedido()
      ));
    }

    public function get($id_pedido){
      $sql = new Sql();
      $results = $sql->select("SELECT * FROM pedido WHERE id_pedido = :id_pedido", array(
        ":id_pedido"=>$id_pedido
      ));

      $this->setData($results[0]);
    }


    public function update(){
      $sql = new Sql();
      $results = $sql->select("UPDATE pedido SET id_produto = :id_produto, id_cliente = :id_cliente WHERE id_pedido = :id_pedido", array(
        ":id_pedido"=>$this->getid_pedido(),
        ":id_produto"=>$this->getid_produto(),
        ":id_cliente"=>$this->getid_cliente()
      ));

      $this->setData($results);
    }
  }

 ?>
