<table class="table table-striped">
  <thead>
    <tr>
      <th>Usuário</th>
      <th>Nome</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($usuarios as $usuario):?>
    <tr>
      <td><?php echo $usuario->username?></td>
      <td><?php echo $usuario->firstname?></td>
      <td><?php echo $usuario->email?></td>        
    </tr>
  <?php endforeach; ?>
  </tbody>
  <tfoot>
    <tr>
      <td colspan="3"><?php echo anchor("usuarios/cadastrar","Novo") ?></td>
    </tr>
  </tfoot>
</table>
       