<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Clients_model extends CI_Model
{

    public $table = 'clients';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
 
    // insert data
    function insert($data)
    {
        $this->db->insert('clients', $data);
    }

}

/* End of file Clients_model.php */
