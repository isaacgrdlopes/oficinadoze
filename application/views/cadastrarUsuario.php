<div class="animate form login_form">
    <section class="login_content">
        
        <?php if (form_error('login_cadastro')) : ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo form_error('login_cadastro'); ?>
            </div>
        <?php endif; ?>
        <?php if (form_error('email')) : ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo form_error('email'); ?>
            </div>
        <?php endif; ?>
        <?php if (form_error('senha_cadastro')) : ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo form_error('senha_cadastro'); ?>
            </div>
        <?php endif; ?>
        <?php if (form_error('senha_cadastro1')) : ?>
            <div class="alert alert-danger alert-dismissible">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo form_error('senha_cadastro1'); ?>
            </div>
        <?php endif; ?>

        <?php $formulario = array('action' => '', 'id' => 'form_cadastro', 'method' => 'POST');
        echo form_open("/login/novo", $formulario); ?>
        <h1>Cadastro</h1>
        <div>
            <input type="text" id="login_cadastro" name="login_cadastro" value="<?php echo set_value('login_cadastro'); ?>"  class="form-control" placeholder="Login" />
        </div>
        <div>
            <input type="email" id="email" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="E-mail" />
        </div>
        <div>
            <input type="password" id="senha_cadastro" name="senha_cadastro" value="<?php echo set_value('senha_cadastro'); ?>" class="form-control" placeholder="Senha" />
        </div>
        <div>
            <input type="password" id="senha_cadastro1" name="senha_cadastro1"  class="form-control" placeholder="Confimar Senha" />
        </div>
        <div>
            <button type="submit" class="btn btn-default submit">Cadastrar</button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="change_link">Já possui cadastro?
                <a href="/login" class="to_register"> Login </a>
            </p>

            <div class="clearfix"></div>
            <br />

            <div>
                <h1><i class="fa fa-car"></i> Oficina do Zé </h1>
                <p>©2019 <a href="https://www.ite.edu.br/">Instituição Toledo de Ensino</a></p>
                <p>Desenvolvido por: Isaac Lopes | Alex Moraes | Lucas Teixeira</p>
            </div>
        </div>
        <!-- </form> -->
        <?php echo form_close(); ?>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validaFormLogin.js"></script>