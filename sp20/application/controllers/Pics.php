<?php

//application/controllers/Pics.php

class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();                
                $this->config->set_item('banner', 'Pics Section');
                $this->load->model('pics_model');
                $this->load->helper('url_helper');

        }

        //we are using GET to fetch the tag entered by the user or by one of the options
        //from the dropdown menu
        //this tag is then sent to the set_pics method pf Pics_model.php
        public function index()
        {
                $tags = '';
                if(isset($_GET['choice'])) {
                  $tags = rawurlencode($_GET['choice']);//to avoid the error caused by blank spaces in tags we used rawurlencode
                  $this->config->set_item('title', $tags);//page title for browser
                  $data['pics_item'] = $this->pics_model->set_pics($tags);
                  $data['title'] = $tags;
                  $this->load->view('pics/view', $data);
                } else {
                  $tags = 'Pictures';
                  $data['pics'] = $this->pics_model->get_pics();
                $data['title'] = 'Pics Archive';
                $this->config->set_item('title', $tags);//page title for browser
                $this->load->view('pics/index', $data);
                }
        }

        public function view($slug = NULL)
        {
                $this->config->set_item('title', 'Seattle ' . ucfirst($slug) . ' Pics');
                $data['pics_item'] = $this->pics_model->set_pics($slug);
        
                if (empty($data['pics_item']))
                {
                        show_404();
                }
        
                $data['title'] = ucfirst($slug) . ' Pictures';
                $this->load->view('pics/view', $data);
        }


}