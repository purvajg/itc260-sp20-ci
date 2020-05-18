<?php

//application/model/Pics_model.php

class Pics_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

        public function get_pics($tags = FALSE)
        {
                //should be passed in QueryString/controller
                //$tags = 'bears,polar';

                $api_key = $this->config->item('flickrKey');

                $perPage = 50;
                $url = 'https://api.flickr.com/services/rest/?method=flickr.photos.search';
                $url.= '&api_key=' . $api_key;
                $url.= '&tags=' . $tags;
                $url.= '&per_page=' . $perPage;
                $url.= '&format=json';
                $url.= '&nojsoncallback=1';
                
                $response = json_decode(file_get_contents($url));
                $pics = $response->photos->photo;
                return $pics;
        }

        public function set_news()
        {
                $this->load->helper('url');

                $slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                        'title' => $this->input->post('title'),
                        'slug' => $slug,
                        'text' => $this->input->post('text')
                );

                //return $this->db->insert('sp20_news', $data);

                if($this->db->insert('sp20_news', $data)){//return slug- send to view page
                        return $slug;
                }else{//return false
                        return false;
                }
        }
}