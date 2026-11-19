<?php

namespace App\Libraries;

class CT_view
{
    //ci instance
    private $CI;
    //template Data
    var $template_data = array();

    // public function __construct() 
    // {
    //                 $this->CI =& get_instance();
    // }

    function set($content_area, $value)
    {
        $this->template_data[$content_area] = $value;
    }
    function load($name = '', $view_data = array(),$template = '', $options = array()) //$name ='contents',
    {
        $session = \Config\Services::session();
        $view_data['session']=$session;
        $layout = 'layouts/';
        $template = $template!=''? $template : 'default_layout';
        return view(
            $layout . $template,
            [
                'contents' => view($name, $view_data, $options),
            ],
            $options
        );
        // $layout='layouts/';
        // if($this->CI->uri->segment('1') == 'admin'){
        //     $layout=$this->CI->config->item('admin_url').'/layouts/';
        // }
        // $this->set($name , $this->CI->load->view($view, $view_data, TRUE));
        // $this->CI->load->view($layout.$template, $this->template_data,$view_data);
    }
    function adminView( $name = '', $view_data = array(),$template = '', $options = array()) //$name ='contents',
    {
        $session = \Config\Services::session();
        $view_data['session']=$session;
        $layout = 'admin/';
        $template = 'layouts/'.($template!='' ? $template : 'default_layout');
        return view(
            $layout . $template,
            [
                'contents' => view('admin/'.$name, $view_data, $options),
            ],
            $options
        );
        // $layout='layouts/';
        // if($this->CI->uri->segment('1') == 'admin'){
        //     $layout=$this->CI->config->item('admin_url').'/layouts/';
        // }
        // $this->set($name , $this->CI->load->view($view, $view_data, TRUE));
        // $this->CI->load->view($layout.$template, $this->template_data,$view_data);
    }
}
