<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{


    function __construct()
    {

        parent::__construct();
        $this->load->database();
    }

    /**
     * Fetch records count of modules
     *
     * @return array
     **/
    function get_modules_count()
    {
        $data = array();

        $query = "select * from " . TBL_PREFIX . TBL_MENU . " ";
        $menus = $this->db->query($query)->result();
        $data['menu_count'] = count($menus);

        $query = "select * from " . TBL_PREFIX . TBL_ITEMS . " ";
        $items = $this->db->query($query)->result();
        $data['items_count'] = count($items);


        $query = "select * from " . TBL_PREFIX . TBL_ADDONS . " ";
        $addons = $this->db->query($query)->result();
        $data['addons_count'] = count($addons);

        $query = "select * from " . TBL_PREFIX . TBL_OPTIONS . " ";
        $options = $this->db->query($query)->result();
        $data['options_count'] = count($options);


        $query = "select * from " . TBL_PREFIX . TBL_OFFERS . " ";
        $offers = $this->db->query($query)->result();
        $data['offers_count'] = count($offers);


        $query = "select u.id from " . TBL_PREFIX . TBL_USERS . " u inner join " . TBL_PREFIX . TBL_USERS_GROUPS . " ug on u.id=ug.user_id where ug.group_id=2";
        $users = $this->db->query($query)->result();
        $data['users_count'] = count($users);
        $counts = array();
        $array = array('total', 'new', 'process', 'out_deliver', 'cancelled', 'delivered');
        foreach ($array as $value) {
            $where = '';
            if ($value != 'total') {
                $where = " where status='" . $value . "'";
            }
            $query = "select * from " . TBL_PREFIX . TBL_ORDERS . $where;
            $orders = $this->db->query($query)->result();
            $counts[$value] = count($orders);
        }
        $data['orders_count'] = $counts;



        return $data;
    }
}
