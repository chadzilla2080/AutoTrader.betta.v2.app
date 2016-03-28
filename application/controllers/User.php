<?php

   class User extends CI_Controller
   {

       public function __construct()
       {
           parent::__construct();
           $this->load->model('user_model');
       }

       public function get()
        {
            $this->user_model->get();
        }

        public function insert()
        {

        }

        public function update()
        {

        }

        public function delete()
        {

        }
   }



?>