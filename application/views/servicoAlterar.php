<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-list"></i>    Atualizar Serviço</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form name='form' id="form" class="form-horizontal form-label-left" method="POST" action="/servicos/salvarAlterar">
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
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $("#form").validate({
        rules: {
            descricao: {
                required: true,
                maxlength: 60,
                minlength: 10
            },
            preco: {
                required: true,
            },
            dataentrega: {
                required: true,
                minlength: 10,
                maxlength: 10
            },
            idcar: {
                required: true,

            },
            idpro: {
                required: true,
            }
        },
        messages: {
            descricao: {
                required: "Informe o serviço."
            },
            preco: {
                required: "Informe o valor do serviço."
            },
            dataentrega: {
                required: "Informe a data de entrega.",
                minlength: "Informe a data no Formato: XX/XX/XXXX",
                maxlength: "Informe a data no Formato: XX/XX/XXXX"
            },
            idcar: {
                required: "Informe o carro."
            },
            idpro: {
                required: "Informe o cliente."
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>