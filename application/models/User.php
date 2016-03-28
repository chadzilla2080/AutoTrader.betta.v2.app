<?php

    class User_Model extends CI_Model
    {

        /**
         * @usage
         * Single: $this->user_model->get(2);
         * All:    $this->user_model->get();
         */
        public function get($user_id = null)
        {
            if ($user_id === null)
            {
                $query = $this->db->get('user');
            }
            else
            {
               $query = $this->db->get_where(['user_id => $user_id']);
            }
            return $query->result_array();
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