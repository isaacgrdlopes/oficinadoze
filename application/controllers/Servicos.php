<?php

class Servicos extends CI_Controller
{


    public function index()
    {
        $this->load->model('Servicos_Model');
        if ($this->session->has_userdata('login')) { //Ou o dado que TEM de existir pra estar logado
            $config = array(
                "base_url" => base_url('/servicos/p'),
                "per_page" => 20,
                "num_links" => 5,
                "uri_segment" => 3,
                "total_rows" => $this->Servicos_Model->CountAll(),
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
            $data['servicos'] = $this->Servicos_Model->GetAll('modelo', 'asc', $config['per_page'], $offset);

            $data['pagina'] = "tabelaServico.php";

            $this->load->view('index', $data);
        } else {
            redirect('Login');
        }
    }

    public function novo()
    {
        $pacote = array(
            "pagina" => "servicoNovo.php",
            'options_proprietarios' => $this->selectProprietarios(),
            'options_carros' => $this->selectCarros()
        );
        $this->load->view('index', $pacote);
    }

    public function salvarNovo()
    {
        //var_dump($_POST);
        $dados = array(
            'descricao' => $_POST['descricao'],
            'preco' => $_POST['preco'],
            'dataentrega' => $_POST['dataentrega'],
            'idcar' => $_POST['idcar'],
            'idpro' => $_POST['idpro']

        );

        $this->load->model("Servicos_Model");
        $this->Servicos_Model->salvarNew($dados);

        redirect('servicos');
    }

    public function alterar($identificador)
    {
        $this->load->model("Servicos_Model");

        $servico = $this->Servicos_Model->buscarId($identificador);
        $pacote = array(
            "servico" => $servico,
            "pagina" => "servicoAlterar.php",
            'options_proprietarios' => $this->selectProprietarios(),
            'options_carros' => $this->selectCarros()
        );

        $this->load->view('index', $pacote);
    }


    public function salvarAlterar()
    {
        $idord = $_POST['idord'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $dataentrega = $_POST['dataentrega'];
        $idcar = $_POST['idcar'];
        $idpro = $_POST['idpro'];

        $this->load->model("Servicos_Model");
        $this->Servicos_Model->salvarAlterar($idord, $descricao, $preco, $dataentrega, $idcar, $idpro);

        redirect("servicos");
    }

    public function excluirContato($idord)
    {
        $this->load->model('Servicos_Model');
        if ($this->Servicos_Model->excluir($idord)) {
            redirect('servicos');
        } else {
            log_message('error', 'Erro ao deletar...');
        }
    }

    public function selectProprietarios(){
        $this->load->model('Servicos_Model');
        
        $option = "<option name='idpro' value=''>Selecione o Cliente</option>";
        $propri = $this->Servicos_Model->getProprietarios();

        foreach($propri -> result() as $propr){
            $option .= "<option name='idpro' value='{$propr->idpro}'>{$propr->nome}</option>";
        }

        return $option;
    }

    public function selectCarros(){
        $this->load->model('Servicos_Model');
        
        $option = "<option name='idcar' value=''>Selecione o Carro</option>";
        $carros = $this->Servicos_Model->getCarros();

        foreach($carros -> result() as $carro){
            $option .= "<option name='idcar' value='{$carro->idcar}'>{$carro->modelo}</option>";
        }

        return $option;
    }
}
