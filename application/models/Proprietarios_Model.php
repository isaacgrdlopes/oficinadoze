<?php

class Proprietarios_Model extends CI_Model
{


    public $idpro;
    public $nome;
    public $telefone;
    public $celular;
    public $cpf;
    public $datanasc;

    var $table = "proprietarios";

    function __construct()
    {
        parent::__construct();
    }

    function GetAll($sort = 'idpro', $order = 'asc', $limit = null, $offset = null)
    {
        $this->db->order_by($sort, $order);

        if ($limit)
            $this->db->limit($limit, $offset);

        $query = $this->db->get($this->table);

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
        $this->db->insert('proprietarios', $linha);
    }

    //Contatos_Model
    public function buscarId($idpro)
    {
        $sql = "SELECT * FROM proprietarios WHERE idpro = $idpro";
        $retorno = $this->db->query($sql);

        return $retorno->result();
    }

    public function salvarAlterar($idpro, $nome, $telefone, $celular, $cpf, $datanasc)
    {
        $this->db->where("idpro", $idpro);
        $this->db->set("nome", $nome);
        $this->db->set("telefone", $telefone);
        $this->db->set("celular", $celular);
        $this->db->set("cpf", $cpf);
        $this->db->set("datanasc", $datanasc);
        $this->db->update("proprietarios");
    }

     public function excluir($idpro)
    {
        $this->db->where('idpro', $idpro);
        return $this->db->delete("proprietarios");
    } 
}
