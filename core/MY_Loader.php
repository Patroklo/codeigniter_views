<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
    Modificación para que los models acepten parámetros de entrada en el constructor.
 */
class MY_Loader extends CI_Loader {
    
    
    /**
     * Load View
     *
     * This function is used to load a "view" file.  It has three parameters:
     *
     * 1. The name of the "view" file to be included.
     * 2. An associative array of data to be extracted for use in the view.
     * 3. TRUE/FALSE - whether to return the data or load it.  In
     * some cases it's advantageous to be able to return data so that
     * a developer can process it in some way.
     *
     * @param   string
     * @param   array
     * @param   bool
     * @return  void
     */
    public function view($view, $vars = array(), $return = FALSE, $headYfoot = TRUE)
    {
        $this->helper('views');
        $viewList = load_view_list($view, $headYfoot);


        foreach($viewList as $view)
        {
            parent::view($view, $vars, $return);
        }
    }
} 