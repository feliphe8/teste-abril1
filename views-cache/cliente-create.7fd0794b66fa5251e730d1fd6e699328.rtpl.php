<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<form role="form" action="/cliente/create" method="post">
  <div class="input-field">
    <input type="text" id="nome_cliente" name="nome_cliente">
    <label class="active" for="nome_cliente">Nome</label>
  </div>
  <div class="input-field">
    <input type="email" id="email" class="validate" name="email">
    <label class="active" for="email">Email</label>
  </div>
  <div class="input-field">
    <input type="tel" id="telefone" class="validate" name="telefone">
    <label class="active" for="telefone">Telefone</label>
  </div>
  <button class="btn waves-effect waves-light" type="submit">Cadastrar
    <i class="material-icons right">send</i>
  </button>
</form>
</div>
