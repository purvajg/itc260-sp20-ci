<?php

//application/controllers/News.php

class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->config->set_item('banner', 'News Section');

        }

        //we are using GET to fetch the tag entered by the user or by one of the options
        //from the dropdown menu
        //this tag is then sent to the get_pics method pf Pics_model.php
        public function index()
        {        
                $tags = '';
                if(isset($_GET['choice'])) {
                  $tags = rawurlencode($_GET['choice']);//to avoid the error caused by blank spaces in tags we used rawurlencode
                } else {
                  $tags = 'pictures';
                }
                
                $this->config->set_item('title', 'Pictures');//page title for browser
                //$data['title'] = 'Kittens ';//Page title inside page      

                $pics = $this->pics_model->get_pics($tags);

                foreach($pics as $pic){
                $size = 'm';
                $photo_url = '
                http://farm'. $pic->farm . '.staticflickr.com/' . $pic->server . '/' . $pic->id . '_' . $pic->secret . '_' . $size . '.jpg';

                echo "<img title='" . $pic->title . "' src='" . $photo_url . "' />";
                //echo "<img src=\"" . $f->buildPhotoURL($photo, "Square") .  "\" width=\"75\" height=\"75\" alt=\"$photo[title]\" />";
                }
                $this->load->view('pics/index');//me
        }

        public function view($slug = NULL)
        {
        }

}