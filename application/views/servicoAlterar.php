<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-list"></i>    Atualizar Serviço</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>

            <?php $formulario = array('action' => '/servicos/salvarAlterar', 'class' => 'form-horizontal form-label-left', 'id' => 'form_servico', 'method' => 'POST');
            echo form_open("/servicos/salvarAlterar", $formulario); ?>

                <input type='hidden' name='idord' value='<?php echo $servico[0]->idord; ?>' />
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Descrição: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' id="descricao" name='descricao' value='<?php echo $servico[0]->descricao; ?>'' class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Preço: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type=' text' id="preco" name='preco' value='<?php echo $servico[0]->preco; ?>' class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Data da Entrega: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' id="dataentrega" name='dataentrega' value='<?php echo $servico[0]->dataentrega; ?>' class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"><span></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="idpro" id="idpro" class="select2_single form-control"><?php echo $options_proprietarios; ?></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12"><span></span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="idcar" id="idcar" class="select2_single form-control"><?php echo $options_carros; ?></select>
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class='btn btn-danger' href="/servicos">Cancelar</a>
                        <button type='submit' class='btn btn-success'>Alterar</button>
                    </div>
                </div>
           <!-- </form> -->
           <?php echo form_close(); ?>
        </div>
    </div>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validaCadastros.js"></script>