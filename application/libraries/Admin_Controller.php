<?php
/**
 * Created by PhpStorm.
 * User: 23480
 * Date: 18-Jun-18
 * Time: 10:08 AM
 */
class Admin_Controller extends My_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->data['meta_title'] = "Admin Panel";
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_m');
        $this->load->helper('security');

        // Login check
        $exception_uris = array(
            'admin/user/login',
            'admin/user/logout'
        );
        if (in_array(uri_string(), $exception_uris) == FALSE) {
            if ($this->user_m->loggedin() == FALSE) {
                redirect('admin/user/login');
            }
        }
    }


}