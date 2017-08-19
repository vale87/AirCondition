<?php
defined("APPPATH") OR die("Access denied");

class JRH_Model extends CI_Model{
    function __construct(){
           parent::__construct();
    }
    
    function getAllService()
    {
        $this->db->select('nombre, image, capacity, efficency, price');
        $this->db->from('price');
        $this->db->join('mark', 'price.id_mark=mark.id');
        $this->db->join('efficency', 'price.id_efficency=efficency.id');
        $this->db->join('capacity', 'price.id_capacity=capacity.id');
        $query = $this->db->get();
        return $query->result();
    }

    function getAllOffert()
    {
        $query = $this->db-get(offer);
        return $query->result();
    }
}
