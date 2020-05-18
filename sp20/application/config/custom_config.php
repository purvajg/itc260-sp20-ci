<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//custom_config.php - a place to save global settings

$config['style'] = 'flatly.css';
$config['banner'] = 'Default Banner';
$config['title'] = 'Default Title';
$config['copyright'] = 'Default Copyright';
$config['masthead'] = 'Default MastHead';
$config['theme'] = 'themes/bootswatch/';
$config['flickrKey'] = 'accba0c4f631d6df0bc0db0b5a75f9b1';


// $config['nav1'] = array  (//menus appearing in the header
//     'news' => 'News',
//     'news/create' => 'Add news',
//     'pics' => 'Pics'
// );

$config['nav1'] = array  (//menus appearing in the header
    'news' => array(
        'name' =>  'News',
        'children' => array()
    ),
    'news/create' => array(
        'name' =>  'Add news',
        'children' => array()
    ),
    'pics' => array(
        'name' =>  'Pics',
        'children' => array(
            'kittens' => array(
                'name' => 'Kittens',
                'children'  => array()
            ),
            'tiger' => array(
                'name' => 'Tiger',
                'children'  => array()
            ),
            'buffalo' => array(
                'name' => 'Buffalo',
                'children'  => array()
            ),
            'flower' => array(
                'name' => 'Flower',
                'children'  => array()
            )
        )
    )
);
