<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-list"></i>    Cadastrar Serviço</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <!-- Exibe Erros -->
            <?php if (form_error('descricao')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('descricao'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('preco')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('preco'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('dataentrega')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('dataentrega'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('idpro')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('idpro'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('idcar')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('idcar'); ?>
                </div>
            <?php endif; ?>

            <!-- <form> -->
            <?php $formulario = array('action' => '/servicos/novo', 'class' => 'form-horizontal form-label-left', 'id' => 'form_servico', 'method' => 'POST');
            echo form_open("/servicos/novo", $formulario); ?>

            <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' id="descricao" name='descricao' value="<?php echo set_value('descricao'); ?>" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Preço: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="preco" name='preco' value="<?php echo set_value('preco'); ?>" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Data da Entrega: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input data-mask="00/00/0000" type='text' id="dataentrega" name='dataentrega' value="<?php echo set_value('dataentrega'); ?>" class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"><span></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="idpro" id="idpro" value="<?php echo set_value('idpro'); ?>" class="select2_single form-control"><?php echo $options_proprietarios; ?></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"><span></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="idcar" id="idcar" value="<?php echo set_value('idcar'); ?>" class="select2_single form-control"><?php echo $options_carros; ?></select>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class='btn btn-danger' href="/servicos">Cancelar</a>
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