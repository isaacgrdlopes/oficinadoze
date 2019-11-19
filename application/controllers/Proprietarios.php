<?php

class Proprietarios extends CI_Controller
{


    public function index()
    {
        $this->load->model('Proprietarios_Model');
        if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
            $config = array(
                "base_url" => base_url('/proprietarios/p'),
                "per_page" => 20,
                "num_links" => 5,
                "uri_segment" => 3,
                "total_rows" => $this->Proprietarios_Model->CountAll(),
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
            $data['proprietarios'] = $this->Proprietarios_Model->GetAll('nome', 'asc', $config['per_page'], $offset);

            $data['pagina'] = "tabelaProprietarios.php";

            $this->load->view('index', $data);
        } else {
            redirect('Login');
        }
    }

    public function novo()
    {
        $pacote = array(
            "pagina" => "proprietarioNovo.php",
        );
        $this->load->view('index', $pacote);
    }

    public function salvarNovo()
    {
        //var_dump($_POST);
        $dados = array(
            'nome' => $_POST['nome'],
            'telefone' => $_POST['telefone'],
            'celular' => $_POST['celular'],
            'cpf' => $_POST['cpf'],
            'datanasc' => $_POST['datanasc']

        );

        $this->load->model("Proprietarios_Model");
        $this->Proprietarios_Model->salvarNew($dados);

        redirect('proprietarios');
    }

    public function alterar($identificador)
    {
        $this->load->model("Proprietarios_Model");

        $proprietario = $this->Proprietarios_Model->buscarId($identificador);
        $pacote = array(
            "proprietario" => $proprietario,
            "pagina" => "proprietarioAlterar.php",
        );

        $this->load->view('index', $pacote);
    }

    //controller
    public function salvarAlterar()
    {
        $idpro = $_POST['id'];
        $nome = $_POST['nome'];
        $telefone = $_POST['telefone'];
        $celular = $_POST['celular'];
        $cpf = $_POST['cpf'];
        $datanasc = $_POST['datanasc'];

        $this->load->model("Proprietarios_Model");
        $this->Proprietarios_Model->salvarAlterar($idpro, $nome, $telefone, $celular, $cpf, $datanasc);

        redirect("proprietarios");
    }

    public function excluirContato($idpro)
    {
        $this->load->model('Proprietarios_Model');
        if ($this->Proprietarios_Model->excluir($idpro)) {
            redirect('proprietarios');
        } else {
            log_message('error', 'Erro ao deletar...');
        }
    }
}
