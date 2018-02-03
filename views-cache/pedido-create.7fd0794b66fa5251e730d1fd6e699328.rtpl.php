<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <form role="form" action="/pedido/create" method="post">

    <div class="input-field col s12">
     <select name="id_produto">
       <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
       <option value="<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="<?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
       <?php } ?>
     </select>
     <label>Produto</label>
    </div>

   <div class="input-field col s12">
     <select name="id_cliente">
       <?php $counter1=-1;  if( isset($cliente) && ( is_array($cliente) || $cliente instanceof Traversable ) && sizeof($cliente) ) foreach( $cliente as $key1 => $value1 ){ $counter1++; ?>
         <option value="<?php echo htmlspecialchars( $value1["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="<?php echo htmlspecialchars( $value1["nome_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["nome_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
       <?php } ?>
     </select>
     <label>Cliente</label>
  </div>

    <button class="btn waves-effect waves-light" type="submit">Cadastrar
      <i class="material-icons right">send</i>
    </button>

  </form>
</div>
