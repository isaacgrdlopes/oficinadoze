<?php

class Home extends CI_Controller
{
	public function index()
	{
		if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
            $pacote = array(
                'pagina' => 'home.php'
            );
            $this->load->view('index.php', $pacote);
		} else {
			redirect('login');
		}
	}
}
