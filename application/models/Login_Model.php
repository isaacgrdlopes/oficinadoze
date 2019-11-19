<?php

class Login_Model extends CI_Model {

    public $login;
    public $senha;
	public $email;
	
	public function verifica($login = '', $senha = ''){
		
		if( !$login && !$senha ) {
		
			return false;
		
		} else {
			$this->db->where(array('login'=>$login, 'senha'=>md5($senha)));
			$res = $this->db->get('login'); // coletando usuarios no banco
			
			if( $res->num_rows() == 1 ) {
			
				return true;
			
			} else {
			
				return false;
			
			}
			
		}
		
	}
	
	public function ehLogado(){

		if( $this->session->userdata('logado') !== true ) {
		
			redirect('contatos');
		
		}
	}

	public function salvarNew($inserirNovoMembro)
    {
		$inserirNovoMembro = array(                 
            'login' => $this->input->post("login_cadastro"),
            'senha' => md5($this->input->post("senha_cadastro")),
            'email' => $this->input->post("email")                 
        );
        $this->db->insert('login', $inserirNovoMembro);
    }
}