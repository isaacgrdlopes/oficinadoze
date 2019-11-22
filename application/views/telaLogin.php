<div class="animate form login_form">
    <section class="login_content">
        <?php $formulario = array('id' => 'form_login', 'method' => 'POST');
        echo form_open("/login", $formulario); ?>

        <h1>Login</h1>
        <div>
            <input name="login" id="login" type="text" value="<?php echo set_value(''); ?>" class="form-control" placeholder="Usuário" />
        </div>
        <div>
            <input name="senha" id="senha" type="password" value="<?php echo set_value(''); ?>" class="form-control" placeholder="Senha" />
        </div>
        <div>
            <button type="submit" class="btn btn-default submit">Login</button>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
            <p class="to_register">Novo no site?
                <a href="/login/novo" class="to_register"> Cadastre-se</a>
            </p>
            <div class="clearfix">
            <?php if (form_error('login')) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo form_error('login'); ?>
                    </div>
                <?php endif; ?>
                <?php if (form_error('senha')) : ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <?php echo form_error('senha'); ?>
                    </div>
                <?php endif; ?>
            </div>
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
</div>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validaFormLogin.js"></script> -->