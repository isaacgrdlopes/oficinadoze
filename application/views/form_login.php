<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>/public/build/images/favicon.ico" />

  <title>Oficina do Zé</title>

  <!-- Bootstrap -->
  <link href="<?php echo base_url(); ?>/public/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>/public/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url(); ?>/public/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="<?php echo base_url(); ?>/public/vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url(); ?>/public/build/css/custom.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/localization/messages_pt_BR.js"></script>
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
      <div class="animate form login_form">
        <section class="login_content">
          <form id="form_login" action="login/acao" method="POST">
            <h1>Login</h1>
            <div>
              <input name="login" id="login" type="text" class="form-control" placeholder="Usuário" />
            </div>
            <div>
              <input name="senha" id="senha" type="password" class="form-control" placeholder="Senha" />
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Login</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="to_register">Novo no site?
                <a href="#signup" class="to_register"> Cadastre-se</a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-car"></i> Oficina do Zé </h1>
                <p>©2019 All Rights Reserved. Isaac Lopes. Privacy and Terms!</p>
              </div>
            </div>
          </form>
        </section>
      </div>

      <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form id="form_cadastro" action="login/salvarNovo" method="POST">
            <h1>Cadastro</h1>
            <div>
              <input type="text" id="login_cadastro" name="login_cadastro" class="form-control" placeholder="Login" />
            </div>
            <div>
              <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" />
            </div>
            <div>
              <input type="password" id="senha_cadastro" name="senha_cadastro" class="form-control" placeholder="Senha" />
            </div>
            <div>
              <input type="password" id="senha_cadastro1" name="senha_cadastro1" class="form-control" placeholder="Confimar Senha" />
            </div>
            <div>
              <button type="submit" class="btn btn-default submit">Cadastrar</button>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Já possui cadastro?
                <a href="#signin" class="to_register"> Login </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-car"></i> Oficina do Zé </h1>
                <p>©2019 All Rights Reserved. Isaac Lopes. Privacy and Terms!</p>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>
</body>
</html>
<script type="text/javascript" src="<?php echo base_url(); ?>/public/build/js/validaFormLogin.js"></script>
