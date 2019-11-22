<?php
    echo $_SESSION['idcar'];
?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-automobile"></i> Atualizar Carro</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <!-- Exibe Erros -->
            <?php if (form_error('idcar')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('idcar'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('modelo')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('modelo'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('marca')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('marca'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('ano')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('ano'); ?>
                </div>
            <?php endif; ?>
            <?php if (form_error('placa')) : ?>
                <div class="alert alert-danger alert-dismissible">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <?php echo form_error('placa'); ?>
                </div>
            <?php endif; ?>

            <?php $formulario = array('action' => '', 'class' => 'form-horizontal form-label-left', 'id' => 'form_carroalterar', 'method' => 'POST');
            echo form_open("/carros/alterar/", $formulario); ?>

            <input type='hidden' name='idcar' id="idcar" value='<?php echo $carro[0]->idcar; ?>' />

            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo: <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type='text' id="modelo" name='modelo' value='<?php echo $carro[0]->modelo; ?>' class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Marca: <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type=' text' id="marca" name='marca' value='<?php echo $carro[0]->marca; ?>' class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Ano: <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input data-mask="0000" type='text' id="date" name='ano' value='<?php echo $carro[0]->ano; ?>' class="form-control col-md-7 col-xs-12 ">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Placa: <span>*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input data-mask="AAA-0000" type='text' id="placa" name='placa' value='<?php echo $carro[0]->placa; ?>' class="form-control col-md-7 col-xs-12">
                </div>
            </div>
            <div class="ln_solid"></div>
            <div class="form-group">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <a class='btn btn-danger' href="/carros">Cancelar</a>
                    <input type='reset' class='btn btn-primary' value="Resetar">
                    <button name='button' id='button' type='submit' class='btn btn-success'>Alterar</button>

                </div>
            </div>
            <!-- </form> -->
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- <script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validaCadastros.js"></script> -->