<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 

if ( ! function_exists('load_view_list'))
{
    function load_view_list($direction, $headYfoot = true)
    {
        
         $_header = array('header_view');
         $_footer = array('footer_view');
         $_arrayviews = array(
                                'init' => array('welcome_message')  
                              );

        /**
         * devuelve un array con todas las vistas que hay que cargar en la funcion dada
         * por direction
         * 
         * returns an array with all the view files needed to load in the function given
         * by direction
         * 
         */

        return array_merge((($headYfoot == TRUE)?$_header:array()), 
                           ((array_key_exists($direction, $_arrayviews) == TRUE)?$_arrayviews[$direction]:array($direction)), 
                           (($headYfoot == TRUE)?$_footer:array()));
    
    }
}