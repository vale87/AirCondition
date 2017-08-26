<?php
defined("APPPATH") OR die("Access denied");

class JRH_Model extends CI_Model{
    function __construct(){
           parent::__construct();
    }
    
    function getAllInstall()
    {
        $this->db->select('nombre, image, capacity, efficency, price');
        $this->db->from('price');
        $this->db->join('mark', 'price.id_mark=mark.id');
        $this->db->join('efficency', 'price.id_efficency=efficency.id');
        $this->db->join('capacity', 'price.id_capacity=capacity.id');
        $this->db->order_by('nombre','price');
        $query = $this->db->get();
        return $query->result();
    }
    function getAllClean()
    {
        $query = $this->db->get('clean');
        return $query->result();
    }
    function getContact()
    {
       $query = $this->db->get('contact');
       return $query->row(); 
    }

    function getAllOffert()
    {
        $query = $this->db->get(offer);
        return $query->result();
    }
}
