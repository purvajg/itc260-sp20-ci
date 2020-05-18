<?php

//application/controllers/News.php

class Pics extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('pics_model');
                $this->config->set_item('banner', 'News Section');

        }

        public function index()
        {        
                $tags = '';
                if(isset($_GET['choice'])) {
                  $tags = $_GET['choice'];
                } else {
                  $tags = 'deers';
                }
                
                $this->config->set_item('title', 'Kittens');//page title for browser
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