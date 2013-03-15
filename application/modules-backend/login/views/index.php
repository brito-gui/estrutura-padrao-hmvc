<?php $atributos=array("class"=>"form-signin");?>
<?php echo form_open('',$atributos) ;?>
  <?php echo validation_errors("<div class='alert alert-error'>","</div>") ;?>
	<h2 class="form-signin-heading">Acesso restrito</h2>
	<input type="text" name="usuario" placeholder="Usuário" class="input-block-level" value="<?=set_value("usuario")?>">
	<input type="password" name="senha" placeholder="Senha" class="input-block-level" value="<?=set_value("senha")?>">
	<label class="checkbox">
		<input type="checkbox" value="lembrar_de_mim" name="lembrar_de_mim"> Lembrar de mim
	</label>
	<button type="submit" class="btn btn-large btn-primary">Entrar</button>
</form>