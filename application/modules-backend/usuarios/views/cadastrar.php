<?php echo form_open("",array("class"=>"form")); ?>
  <legend>Novo Usuário</legend>
  <fieldset>
    <label>Nome</label>
    <input type="text" name="nome" value="<?php echo set_value("nome","")?>"/>
    <br>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </fieldset>
</form>