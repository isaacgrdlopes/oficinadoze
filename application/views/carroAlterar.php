<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-automobile"></i>   Atualizar Carro</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form name='form' id="form" class="form-horizontal form-label-left" method="POST" action="/carros/salvarAlterar">
                <input type='hidden' name='idcar' value='<?php echo $carro[0]->idcar; ?>' />
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Modelo: <span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' id="modelo" name='modelo' value='<?php echo $carro[0]->modelo; ?>'' class="form-control col-md-7 col-xs-12 ">
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
                        <input type='text' id="date" name='ano' value='<?php echo $carro[0]->ano; ?>' class="form-control col-md-7 col-xs-12 ">
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
            modelo: {
                required: true,
            },
            marca: {
                required: true,
            },
            ano: {
                required: true,
                minlength: 4,
                maxlength: 4
            },
            placa: {
                required: true,
                minlength: 8,
                maxlength: 8

            },
            idpro: {
                required: true,
            }
        },
        messages: {
            telefone: {
                minlength: "Informe no minímo 8 caracteres.",
                maxlength: "Informe no máximo 8 caracteres."
            },
            modelo: {
                required: "Informe o modelo.",       
            },
            marca: {
                required: "Informe a marca.",       
            },
            ano: {
                required: "Informe o ano.",       
            },
            placa: {
                required: "Informe a placa.",  
                minlength: "Informe a placa no formato AAA-0000.",
                maxlength: "Informe a placa no formato AAA-0000."     
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>