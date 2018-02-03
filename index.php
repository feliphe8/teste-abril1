<?php

require_once("vendor/autoload.php");
use \Slim\Slim;
use \resources\Page;
use \resources\Model\Cliente;
use \resources\Model\Produto;
use \resources\Model\Pedido;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {

  $page = new Page();
  $page->setTpl("index");

});
################################# CLIENTE
$app->get('/cliente', function(){
  $cliente = Cliente::listAll();
  $page = new Page();
  $page->setTpl("cliente", array("cliente"=>$cliente));
});

$app->get('/cliente/create', function(){
  $page = new Page();
  $page->setTpl("cliente-create");
});

$app->post('/cliente/create', function(){
  $cliente = new Cliente();
  $cliente->setData($_POST);
  $cliente->save();
  header("Location: /cliente");
  exit;

});

$app->get('/cliente/:id_cliente/delete', function($id_cliente){
  $cliente = new Cliente();
  $cliente->get((int)$id_cliente);
  $cliente->delete();
  header("Location: /cliente");
  exit;
});

$app->get('/cliente/:id_cliente', function($id_cliente){
  $cliente = new Cliente();
  $cliente->get((int)$id_cliente);
  $page = new Page();
  $page->setTpl("cliente-update", array("cliente"=>$cliente->getValues()));
});

$app->post('/cliente/:id_cliente', function($id_cliente){
  $cliente = new Cliente();
  $cliente->get((int)$id_cliente);
  $cliente->setData($_POST);
  $cliente->update();
  header("Location: /cliente");
  exit;
});

############################# PRODUTO

$app->get('/produto', function(){
  $produto = Produto::listAll();
  $page = new Page();
  $page->setTpl("produto", array("produto"=>$produto));
});

$app->get('/produto/create', function(){
  $page = new Page();
  $page->setTpl("produto-create");
});

$app->post('/produto/create', function(){
  $produto = new Produto();
  $produto->setData($_POST);
  $produto->save();
  header("Location: /produto");
  exit;

});

$app->get('/produto/:id_produto/delete', function($id_produto){
  $produto = new Produto();
  $produto->get((int)$id_produto);
  $produto->delete();
  header("Location: /produto");
  exit;
});

$app->get('/produto/:id_produto', function($id_produto){
  $produto = new Produto();
  $produto->get((int)$id_produto);
  $page = new Page();
  $page->setTpl("produto-update", array("produto"=>$produto->getValues()));
});

$app->post('/produto/:id_produto', function($id_produto){
  $produto = new Produto();
  $produto->get((int)$id_produto);
  $produto->setData($_POST);
  $produto->update();
  header("Location: /produto");
  exit;
});

#################### PEDIDO

$app->get('/pedido', function(){
  $pedido = Pedido::listAll();
  $page = new Page();
  $page->setTpl("pedido", array("pedido"=>$pedido));
});

$app->get('/pedido/create', function(){
  $produto = Produto::listAll();
  $cliente = Cliente::listAll();
  $page = new Page();
  $page->setTpl("pedido-create", array("produto"=>$produto, "cliente"=>$cliente));
});

$app->post('/pedido/create', function(){
  $pedido = new Pedido();
  $pedido->setData($_POST);
  $pedido->save();
  header("Location: /pedido");
  exit;

});

$app->get('/pedido/:id_pedido/delete', function($id_pedido){
  $pedido = new Pedido();
  $pedido->get((int)$id_pedido);
  $pedido->delete();
  header("Location: /pedido");
  exit;
});

$app->get('/pedido/:id_pedido', function($id_pedido){
  $produto = Produto::listAll();
  $cliente = Cliente::listAll();
  $pedido = new Pedido();
  $pedido->get((int)$id_pedido);
  $page = new Page();
  $page->setTpl("pedido-update", array("pedido"=>$pedido->getValues(),"produto"=>$produto, "cliente"=>$cliente));
});

$app->post('/pedido/:id_pedido', function($id_pedido){
  $pedido = new Pedido();
  $pedido->get((int)$id_pedido);
  $pedido->setData($_POST);
  $pedido->update();
  header("Location: /pedido");
  exit;
});

$app->run();

 ?>
