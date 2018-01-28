<?php

class Establishment_Model extends CI_Model {

    public function getEstablishments() 
    {
        $query = $this->db->get('establishment');
        return $query->result();
    }

    public function searchEstablishments($name, $location, $category) 
    {
        if(!empty($name))
            $this->db->like('name', $name);
        if(!empty($location))
            $this->db->where('location', $location);
        if(!empty($category))
            $this->db->where('category', $category);
        $query = $this->db->get('establishment');
        return $query->result();
    }

};
