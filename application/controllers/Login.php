<?php

class Login extends CI_Controller
{

	/**
	 * 
	 * No index() é realizado a verificacao
	 * se o usuário está logado.
	 *   
	 */
	public function index()
	{
		$this->form_validation->set_rules('login', 'Login', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		if ($this->form_validation->run() == FALSE) {
			$pacote = array(
				'pagina' => 'telaLogin.php'
			);
			$this->load->view('form_login', $pacote);
		} else {
			
			$login = $this->input->post('login');
			$senha = $this->input->post('senha');
	
	
			if ($login && $senha) {
	
				$this->load->model('Login_Model'); // carregamos o model
	
				$verifica = $this->Login_Model->verifica($login, $senha);
	
				if ($verifica === true) {
	
					$this->session->set_userdata('login', $login);
					$this->session->set_userdata('logado', true);
	
					redirect('home');
				} else {
					$pacote = array(
						'pagina' => 'telaLogin.php',
					);
					echo "<script>alert('Login ou senha inválidos!')</script> ";
					$this->load->view('form_login', $pacote);
				}
			}
		}
		if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
			redirect('home');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function novo()
	{
		$this->form_validation->set_rules('login_cadastro', 'Login', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[login.email]');
		$this->form_validation->set_rules(
            'senha_cadastro',
            'senha_cadastro',
            'required|matches[confirmar_senha]',
            array(
                'matches' => 'Os campos Senha e Confimar Senha devem ser iguais!.',
            )
        );

		if ($this->form_validation->run() == FALSE) {
			$pacote = array(
				'pagina' => 'cadastrarUsuario.php'
			);
			$this->load->view('form_login', $pacote);
		} else {
			$dados = array(
				'login' => $_POST['login'],
				'email' => $_POST['email'],
				'senha' => $_POST['senha']
			);

			$this->load->model("Login_Model");
			$this->Login_Model->salvarNew($dados);

			redirect('Login');
		}
	}
}
