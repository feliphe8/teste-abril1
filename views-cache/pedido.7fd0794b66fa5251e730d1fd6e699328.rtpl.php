<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <div class="row">
    <div class="col s12 center-align">
      <a href="/pedido/create" class ="btn green">Cadastrar</a>
    </div>
    <div class="col s12 center-align">
      <table>
      <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Id Produto</th>
            <th>Id Cliente</th>
        </tr>
      </thead>

      <tbody>
        <?php $counter1=-1;  if( isset($pedido) && ( is_array($pedido) || $pedido instanceof Traversable ) && sizeof($pedido) ) foreach( $pedido as $key1 => $value1 ){ $counter1++; ?>
        <tr>
          <td><?php echo htmlspecialchars( $value1["id_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td>
            <a href="/pedido/<?php echo htmlspecialchars( $value1["id_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class ="btn blue">Editar</a>
            <a href="/pedido/<?php echo htmlspecialchars( $value1["id_pedido"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class ="btn red">Excluir</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
