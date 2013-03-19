  <?php echo form_open("",array("class"=>"form-horizontal")); ?>
  <legend>Novo usuário</legend>
  <fieldset>
    <div class="control-group">
      <label class="control-label" for="nome_acesso">Nome de acesso</label>
      <div class="controls">
        <input type="text" name="nome_acesso" id="nome_acesso" value="<?php echo set_value("nome_acesso","")?>"/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="nome">Nome</label>
      <div class="controls">
        <input type="text" name="nome" id="nome" value="<?php echo set_value("nome","")?>"/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input type="text" name="email" id="email" value="<?php echo set_value("email","")?>"/>
      </div>
    </div>
    <div class="control-group">      
      <label class="control-label" for="genero1">Gênero</label>
      <div class="controls">        
        <label for="genero1" class="radio inline">
          <input type="radio" name="genero" id="genero1" value="M" <?php echo set_radio("genero", "M") ?>/> Masculino      
        </label>
        <label for="genero2" class="radio inline">
          <input type="radio" name="genero" id="genero2" value="F" <?php echo set_radio("genero", "F") ?>/> Feminino
        </label>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="senha">Senha</label>
      <div class="controls">
        <input type="password" name="senha" id="senha" value="<?php echo set_value("senha","")?>"/>
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="confirmar_senha">Confirmação da senha</label>
      <div class="controls">
        <input type="password" name="confirmar_senha" id="confirmar_senha" value="<?php echo set_value("confirmar_senha","")?>"/>
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </fieldset>
</form>