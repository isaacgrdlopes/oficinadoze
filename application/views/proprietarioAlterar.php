<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><i class="fa fa-user"></i>   Atualizar Clientes</h2>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <br>
            <form name='form' id="form" class="form-horizontal form-label-left" method="POST" action="/proprietarios/salvarAlterar">
                <input type='hidden' name='id' value='<?php echo $proprietario[0]->idpro; ?>' />
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Nome:<span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type='text' id="nome" name='nome' value='<?php echo $proprietario[0]->nome; ?>'' class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefone:<span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input data-mask="(00) 0000-0000" type=' text' id="telefone" name='telefone' value='<?php echo $proprietario[0]->telefone; ?>' class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Celular:<span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input data-mask="(00) 00000-0000" type='text' id="celular" name='celular' value='<?php echo $proprietario[0]->celular; ?>' class="form-control col-md-7 col-xs-12 ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">CPF:<span>*</span></label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input data-mask="000.000.000-00" type='text' id="cpf" name='cpf' value='<?php echo $proprietario[0]->cpf; ?>' class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Data de Nascimento:</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <input data-mask="00/00/0000" type='text' id="datanasc" name='datanasc' value='<?php echo $proprietario[0]->datanasc; ?>' class="form-control col-md-7 col-xs-12">
                    </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <a class='btn btn-danger' href="/proprietarios">Cancelar</a>
                        <button name='button' id='button' type='submit' class='btn btn-success'>Alterar</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $("#form").validate({
        rules: {
            nome: {
                required: true,
                minlength: 5
            },
            cpf: {
                required: true,
                minlength: 11,
                maxlength: 14
            },
            telefone: {
                required: true,
                minlength: 14,
                maxlength: 14
            },
            celular: {
                required: true,
                minlength: 15,
                maxlength: 15

            },
            datanasc:{
                minlength:10,
                maxlength:10
            }
        },
        messages: {
            nome: {
                required: "Informe o nome."
            },
            cpf: {
                required: "Informe o cpf."
            },
            telefone: {
                required: "Informe o telefone.",
                minlength: "Informe no minímo 10 caracteres.",
                maxlength: "Informe no máximo 10 caracteres."
            },
            celular: {
                required: "Informe o celular.",
                minlength: "Informe no minímo 11 caracteres.",
                maxlength: "Informe no máximo 11 caracteres."
            },
            datanasc:{
                required: "Informe a Data de Nascimento.",
                minlength: "Informe a data no Formato: XX/XX/XXXX",
                maxlength: "Informe a data no Formato: XX/XX/XXXX"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
</script>