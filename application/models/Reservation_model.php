<?php
class Reservation_model extends CI_Model {

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
        }

        public function get_last_entries($limit)
        {
                $query = $this->db->get('reservation', $limit);
                return $query->result();
        }

        public function insert_entry($data)
        {
        	if(!$data) return false;

                $data['created']   = time();

            return $this->db->insert('reservation', $data);
        }

        public function update_entry($data = null)
        {
        	if(!$data) return false;

            return $this->db->update('reservation', $data, array('id' => $data['id']));
        }

}

?>