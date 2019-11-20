<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-user"></i> Cadastrar Clientes</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <!-- Exibe Erros -->
            <?php if (form_error('nome')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('nome'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('telefone')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('telefone'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('celular')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('celular'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('cpf')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('cpf'); ?>
                </div>
            <?php endif; ?>

            <!-- <form> -->
            <?php $formulario = array('action' => '/proprietarios/salvarNovo', 'class' => 'form-horizontal form-label-left', 'id' => 'form_cliente', 'method' => 'POST');
            echo form_open("/proprietarios/novo", $formulario); ?>

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome: <span>*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type='text' name='nome' id="nome" value="<?php echo set_value('nome'); ?>" class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone: <span>*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input data-mask="(00) 0000-0000" type='text' name='telefone' id="telefone" value="<?php echo set_value('telefone'); ?>" class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Celular: <span>*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input data-mask="(00) 00000-0000" type='text' name='celular' id="celular" value="<?php echo set_value('celular'); ?>" class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">CPF: <span>*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input data-mask="000.000.000-00" type='text' name='cpf' id="cpf" value="<?php echo set_value('cpf'); ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Nascimento:
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input data-mask="00/00/0000" type='text' name='datanasc' id="datanasc" value="<?php echo set_value('datanasc'); ?>" class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a class='btn btn-danger' href="/home">Cancelar</a>
                    <input type='reset' class='btn btn-primary' value="Limpar">
                    <input type='submit' class='btn btn-success' value="Cadastrar">
                </div>
            </div>
            <!-- </form> -->
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validaCadastros.js"></script>