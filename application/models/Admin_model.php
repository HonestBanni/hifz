<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin_model extends MY_Model {

    function __construct() {

        parent::__construct();
    }

    function clear_cache() {

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

        $this->output->set_header('Pragma: no-cache');
    }

}

?>