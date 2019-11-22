<?php

class Carros_Model extends CI_Model
{


    public $idcar;
    public $modelo;
    public $marca;
    public $ano;
    public $placa;

    var $table = "carros";

    function __construct()
    {
        parent::__construct();
    }

    function GetAll($sort = 'idcar', $order = 'asc', $limit = null, $offset = null)
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
        $this->db->insert('carros', $linha);
    }

    public function buscarId($idcar)
    {
        $sql = "SELECT * FROM carros WHERE idcar = $idcar";
        $retorno = $this->db->query($sql);
        
        return $retorno->result();
    }

    public function salvarAlterar($idcar, $modelo, $marca, $ano, $placa)
    {
        $this->db->where("idcar", $idcar);
        $this->db->set("modelo", $modelo);
        $this->db->set("marca", $marca);
        $this->db->set("ano", $ano);
        $this->db->set("placa", $placa);
        $this->db->update("carros");
    }

    public function excluir($idcar)
    {
        $this->db->where('idcar', $idcar);
        return $this->db->delete("carros");
    }
}
