<?php
/**
 * Created by PhpStorm.
 * User: 23480
 * Date: 18-Jun-18
 * Time: 11:53 AM
 */
class Page_m extends MY_Model {
    protected $_table_name = 'pages';
    protected $_primary_key = 'id';
    protected $_primary_filter = 'intval';
    protected $_order_by = 'order';
    protected $_rules = array();
    protected $_timestamps = FALSE;
}