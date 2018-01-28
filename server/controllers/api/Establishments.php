<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Establishments extends REST_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Establishment_Model','establishment');
    }

    public function index_get()
    {
        $data = $this->establishment->getEstablishments();
        $this->response($data,200);
    }

    public function search_get()
    {
        $name = $this->get('name');
        $location = $this->get('location');
        $category = $this->get('category');
        $data = $this->establishment->searchEstablishments($name, $location, $category);
        $this->response($data,200);
    }
}
