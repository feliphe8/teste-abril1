<?php
  namespace resources\Model;
  use \resources\DB\Sql;
  use \resources\Model;

  class Produto extends Model {

    public static function listAll(){
      $sql = new Sql();
      return $sql->select("SELECT * FROM produto ORDER BY id_produto");
    }

    public function save(){
      $sql = new Sql();
      $results = $sql->select("INSERT INTO produto (nome_produto, ds_produto, preco_produto) VALUES (:nome_produto, :ds_produto, :preco_produto)", array(
        ":nome_produto"=>$this->getnome_produto(),
        ":ds_produto"=>$this->getds_produto(),
        ":preco_produto"=>$this->getpreco_produto()
      ));

      $this->setData($results);
    }

    public function delete(){
      $sql = new Sql();
      $sql->query("DELETE FROM produto WHERE id_produto = :id_produto",array(
        ":id_produto"=>$this->getid_produto()
      ));
    }

    public function get($id_produto){
      $sql = new Sql();
      $results = $sql->select("SELECT * FROM produto WHERE id_produto = :id_produto", array(
        ":id_produto"=>$id_produto
      ));

      $this->setData($results[0]);
    }


    public function update(){
      $sql = new Sql();
      $results = $sql->select("UPDATE produto SET nome_produto = :nome_produto, ds_produto = :ds_produto, preco_produto = :preco_produto WHERE id_produto = :id_produto", array(
        ":id_produto"=>$this->getid_produto(),
        ":nome_produto"=>$this->getnome_produto(),
        ":ds_produto"=>$this->getds_produto(),
        ":preco_produto"=>$this->getpreco_produto()
      ));

      $this->setData($results);
    }
  }

 ?>
