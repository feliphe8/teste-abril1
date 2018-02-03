<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
<form role="form" action="/produto/<?php echo htmlspecialchars( $produto["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
  <div class="input-field">
    <input type="text" id="nome_produto" name="nome_produto" value="<?php echo htmlspecialchars( $produto["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <label class="active" for="nome_cliente">Nome</label>
  </div>
  <div class="input-field">
    <input type="text" id="ds_produto" class="validate" name="ds_produto" value="<?php echo htmlspecialchars( $produto["ds_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <label class="active" for="email">Descrição</label>
  </div>
  <div class="input-field">
    <input type="number" id="preco_produto" class="validate" name="preco_produto" value="<?php echo htmlspecialchars( $produto["preco_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
    <label class="active" for="telefone">Preço</label>
  </div>
  <button class="btn waves-effect waves-light" type="submit">
    <i class="material-icons right">send</i>
  </button>
</form>
</div>
