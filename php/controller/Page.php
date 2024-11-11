<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Page extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            view_page("viewpage.php");
        }

        
    }
?>