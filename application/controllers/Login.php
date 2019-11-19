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
		if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
			redirect('home');
		}
		$this->load->view('form_login');
	}

	public function acao()
	{
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
				redirect(site_url('login?retorno=erros'));
			}
		} else {
			redirect(site_url('login?retorno=campos-vazios'));
		}
	}

	public function logout()
	{

		$this->session->sess_destroy();
		redirect('login');
	}

	public function salvarNovo()
	{
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
