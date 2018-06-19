<?php

/**
 * Created by PhpStorm.
 * User: 23480
 * Date: 18-Jun-18
 * Time: 9:56 AM
 */
class Dashboard extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $this->data['users'] = $this->user_m->get();
        $this->data['subview'] = 'admin/dashboard/index';
        $this->load->view('admin/_layout_main', $this->data);
    }

    public function form()
    {
        $this->load->view('admin/_layout_form', $this->data);
    }

    public function login()
    {
        $this->data['subview'] = 'admin/user/login';
        $this->load->view('admin/_layout_form', $this->data);
    }
}