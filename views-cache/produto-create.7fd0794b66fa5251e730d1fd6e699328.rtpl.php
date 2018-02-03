<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<form role="form" action="/produto/create" method="post">
  <div class="input-field">
    <input type="text" id="nome_produto" name="nome_produto">
    <label class="active" for="nome_produto">Nome</label>
  </div>
  <div class="input-field">
    <input type="text" id="ds_produto" class="validate" name="ds_produto">
    <label class="active" for="ds_produto">Descrição</label>
  </div>
  <div class="input-field">
    <input type="number" id="preco_produto" class="validate" name="preco_produto">
    <label class="active" for="preco_produto">Preço</label>
  </div>
  <button class="btn waves-effect waves-light" type="submit">Cadastrar
    <i class="material-icons right">send</i>
  </button>
</form>
</div>
