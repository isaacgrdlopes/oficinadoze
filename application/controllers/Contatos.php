<?php

class Contatos extends CI_Controller
{


    public function index()
    {
        $this->load->model('Contatos_Model');
        if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
            $config = array(
                "base_url" => base_url('/contatos/p'),
                "per_page" => 20,
                "num_links" => 5,
                "uri_segment" => 3,
                "total_rows" => $this->Contatos_Model->CountAll(),
                "full_tag_open" => "<ul class='pagination'>",
                "full_tag_close" => "</ul>",
                "first_link" => FALSE,
                "last_link" => FALSE,
                "first_tag_open" => "<li>",
                "first_tag_close" => "</li>",
                "prev_link" => "Anterior",
                "prev_tag_open" => "<li class='prev'>",
                "prev_tag_close" => "</li>",
                "next_link" => "Próxima",
                "next_tag_open" => "<li class='next'>",
                "next_tag_close" => "</li>",
                "last_tag_open" => "<li>",
                "last_tag_close" => "</li>",
                "cur_tag_open" => "<li class='active'><a href='#'>",
                "cur_tag_close" => "</a></li>",
                "num_tag_open" => "<li>",
                "num_tag_close" => "</li>"
            );

            $this->pagination->initialize($config);

            $data['pagination'] = $this->pagination->create_links();

            $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
            $data['contatos'] = $this->Contatos_Model->GetAll('nome', 'asc', $config['per_page'], $offset);

            $data['pagina'] = "tabela.php";

            $this->load->view('index', $data);
        } else {
            redirect('Login');
        }
    }

    /*  public function index() {
            $this->load->model("Contatos_Model");
            $contatos = $this->Contatos_Model->buscarTodos();

            $pacote = array(
                "contatos" => $contatos,
                "pagina" => "tabela.php",
            );

                $this->load->view("index", $pacote);
        }  */

    public function novo()
    {
        $pacote = array(
            "pagina" => "contatoNovo.php",
        );
        $this->load->view('index', $pacote);
    }

    public function salvarNovo()
    {
        //var_dump($_POST);
        $dados = array(
            'nome' => $_POST['nome'],
            'telefone' => $_POST['telefone'],
            'email' => $_POST['email']
        );

        $this->load->model("Contatos_Model");
        $this->Contatos_Model->salvarNew($dados);

        redirect('contatos');
    }
    //Controller Contatos
    public function alterar($identificador)
    {
        $this->load->model("Contatos_Model");

        $contato = $this->Contatos_Model->buscarId($identificador);
        $pacote = array(
            "contato" => $contato,
            "pagina" => "contatoAlterar.php"
        );

        $this->load->view('index', $pacote);
    }

    //controller
    public function salvarAlterar()
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];

        $this->load->model("Contatos_Model");
        $this->Contatos_Model->salvarAlterar($id, $nome, $telefone, $email);

        redirect("contatos");
    }

    public function excluirContato($id)
    {
        $this->load->model('Contatos_Model');
        if ($this->Contatos_Model->excluir($id)) {
            redirect('contatos');
        } else {
            log_message('error', 'Erro ao deletar...');
        }
    }
}
