<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');
 
$template['active_template'] = 'default';
 
 
$template['default']['template'] = 'template';
$template['default']['regions'] = array(
 'header' => array('content' => array('<h1>Templates en codeigniter</h1>')),
 'content',
 'footer'=>array('content' => array('<p id="copyright">Uno de piera</p>')),
);
$template['default']['parser'] = 'parser';
$template['default']['parser_method'] = 'parse';
$template['default']['parse_template'] = FALSE; 
 
