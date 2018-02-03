<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<form role="form" action="/cliente/<?php echo htmlspecialchars( $cliente["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
  <div class="input-field">
    <input type="text" id="nome_cliente" name="nome_cliente" value="<?php echo htmlspecialchars( $cliente["nome_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <label class="active" for="nome_cliente">Nome</label>
  </div>
  <div class="input-field">
    <input type="email" id="email" class="validate" name="email" value="<?php echo htmlspecialchars( $cliente["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <label class="active" for="email">Email</label>
  </div>
  <div class="input-field">
    <input type="tel" id="telefone" class="validate" name="telefone" value="<?php echo htmlspecialchars( $cliente["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <label class="active" for="telefone">Telefone</label>
  </div>
  <button class="btn waves-effect waves-light" type="submit">
    <i class="material-icons right">send</i>
  </button>
</form>
</div>
