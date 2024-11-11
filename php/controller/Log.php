<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    class Log extends Yros{

        public function __construct() {
            parent::__construct();
            $YROS = &Yros::get_instance();
            //Add initial codes here...
        }


        function index(){
            echo 'Hello Yros user. This is Log controller';
        }

        function register(){
            view_page('register.php');
        }

        function loginpage(){
            view_page('login.php');
        }

        function login(){
            set_validation('email','email', 'required');
            set_validation('password','password','required');

            if(validation_failed()){
                back_to_previous_page(save_input_values);
            }
            $user = post('email');
            $pass = post('password');

            $sql = 'select * from hc_user where hc_email = ? and hc_password = ?';
            $param = [$user,$pass];
            $result = db_set_query($sql,$param)['first_row'];
            if(empty($result)){
                back_to_previous_page();
            }
            else{
                redirect_to('page/index');
            }


        }
    }
?>