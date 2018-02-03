<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <div class="row">
    <div class="col s12 center-align">
      <a href="/cliente/create" class ="btn green">Cadastrar</a>
    </div>
    <div class="col s12 center-align">
      <table>
      <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
      </thead>

      <tbody>
        <?php $counter1=-1;  if( isset($cliente) && ( is_array($cliente) || $cliente instanceof Traversable ) && sizeof($cliente) ) foreach( $cliente as $key1 => $value1 ){ $counter1++; ?>
        <tr>
          <td><?php echo htmlspecialchars( $value1["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["nome_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["telefone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td>
            <a href="/cliente/<?php echo htmlspecialchars( $value1["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class ="btn blue">Editar</a>
            <a href="/cliente/<?php echo htmlspecialchars( $value1["id_cliente"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class ="btn red">Excluir</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
