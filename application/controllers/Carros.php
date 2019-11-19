<?php

class Carros extends CI_Controller
{


    public function index()
    {
        $this->load->model('Carros_Model');
        if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
            $config = array(
                "base_url" => base_url('/carros/p'),
                "per_page" => 20,
                "num_links" => 5,
                "uri_segment" => 3,
                "total_rows" => $this->Carros_Model->CountAll(),
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
            $data['carros'] = $this->Carros_Model->GetAll('modelo', 'asc', $config['per_page'], $offset);

            $data['pagina'] = "tabelaCarros.php";

            $this->load->view('index', $data);
        } else {
            redirect('Login');
        }
    }

    public function novo()
    {
        $pacote = array(
            "pagina" => "carroNovo.php",
        );
        $this->load->view('index', $pacote);
    }

    public function salvarNovo()
    {
        //var_dump($_POST);
        $dados = array(
            'modelo' => $_POST['modelo'],
            'marca' => $_POST['marca'],
            'ano' => $_POST['ano'],
            'placa' => $_POST['placa'],

        );

        $this->load->model("Carros_Model");
        $this->Carros_Model->salvarNew($dados);

        redirect('carros');
    }

    public function alterar($identificador)
    {
        $this->load->model("Carros_Model");

        $carro = $this->Carros_Model->buscarId($identificador);
        $pacote = array(
            "carro" => $carro,
            "pagina" => "carroAlterar.php"
        );

        $this->load->view('index', $pacote);
    }

    //controller
    public function salvarAlterar()
    {
        $idcar = $_POST['idcar'];
        $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
        $ano = $_POST['ano'];
        $placa = $_POST['placa'];

        $this->load->model("Carros_Model");
        $this->Carros_Model->salvarAlterar($idcar, $modelo, $marca, $ano, $placa);

        redirect("carros");
    }

    public function excluirContato($idcar)
    {
        $this->load->model('Carros_Model');
        if ($this->Carros_Model->excluir($idcar)) {
            redirect('carros');
        } else {
            log_message('error', 'Erro ao deletar...');
        }
    }
}
