<?php
/**
 * Created by PhpStorm.
 * User: 23480
 * Date: 18-Jun-18
 * Time: 9:59 AM
 */

class My_Controller extends CI_Controller {
    public $data = array();
    function __construct()
    {
        parent::__construct();
        $this->data['errors'] = array();
        $this->data['site_name'] = config_item('site_name');
    }
}