<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="container">
  <div class="row">
    <div class="col s12 center-align">
      <a href="/produto/create" class ="btn green">Cadastrar</a>
    </div>
    <div class="col s12 center-align">
      <table>
      <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
        </tr>
      </thead>

      <tbody>
        <?php $counter1=-1;  if( isset($produto) && ( is_array($produto) || $produto instanceof Traversable ) && sizeof($produto) ) foreach( $produto as $key1 => $value1 ){ $counter1++; ?>
        <tr>
          <td><?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["nome_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["ds_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td><?php echo htmlspecialchars( $value1["preco_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
          <td>
            <a href="/produto/<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class ="btn blue">Editar</a>
            <a href="/produto/<?php echo htmlspecialchars( $value1["id_produto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class ="btn red">Excluir</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
