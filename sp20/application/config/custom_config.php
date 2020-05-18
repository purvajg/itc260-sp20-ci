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


//The names and links are mapped in an array
//For Pics we need to create a dropdown, for that , the dropdown items should get  displayed
//only in the when the user clicks the Pics button. If the name and links are placed outside 
// like this:
//     'news' => 'News',
//     'news/create' => 'Add news',
//     'pics' => 'Pics'
//     'dogs' => 'Dogs'
//     'tiger' => 'Tiger'
//then dogs tiger will be displayed in the navbar itself. We dont want that, so we create 
//an inner array in pics where we add the items of dropdown.
$config['nav1'] = array  (//menus appearing in the header//links that would show up in the  browser mapped to their names
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
    ),
        
);
