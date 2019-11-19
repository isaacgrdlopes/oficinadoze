<?php

class Servicos_Model extends CI_Model
{


    public $idord;
    public $descricao;
    public $prelo;
    public $dataentrega;
    public $idpro;
    public $idcar;
    public $nome;
    public $modelo;

    var $table = "ordemservico";

    function __construct()
    {
        parent::__construct();
    }

    function GetAll($sort = 'idord', $order = 'asc', $limit = null, $offset = null)
    {
        $this->db->order_by($sort, $order);

        if ($limit)
            $this->db->limit($limit, $offset);

        $this->db->select('ordemservico.idord, ordemservico.descricao, ordemservico.preco, ordemservico.dataentrega, carros.modelo, proprietarios.nome');
        $this->db->from('ordemservico');
        $this->db->join('proprietarios', 'ordemservico.idpro = proprietarios.idpro');
        $this->db->join('carros', 'ordemservico.idcar = carros.idcar');
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function CountAll()
    {
        return $this->db->count_all($this->table);
    }

    public function salvarNew($linha)
    {
        $this->db->insert('ordemservico', $linha);
    }

    public function buscarId($idord)
    {
        $sql = "SELECT * FROM ordemservico WHERE idord = $idord";
        $retorno = $this->db->query($sql);

        return $retorno->result();
    }

    public function salvarAlterar($idord, $descricao, $preco, $dataentrega, $idcar, $idpro)
    {
        $this->db->where("idord", $idord);
        $this->db->set("descricao", $descricao);
        $this->db->set("preco", $preco);
        $this->db->set("dataentrega", $dataentrega);
        $this->db->set("idcar", $idcar);
        $this->db->set("idpro", $idpro);
        $this->db->update("ordemservico");
    }

    public function excluir($idord)
    {
        $this->db->where('idord', $idord);
        return $this->db->delete("ordemservico");
    }

    public function getProprietarios(){
        return $this->db
        ->order_by('nome')
        ->get('proprietarios');
    }

    public function getCarros(){
        return $this->db
        ->order_by('modelo')
        ->get('carros');
    }
}
