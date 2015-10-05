<?php
class Cards_model extends CI_Model {

    protected $_table;
        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->_table = 'cards';
        }

        public function get_last_entries($limit)
        {
                $query = $this->db->get('cards', $limit);
                return $query->result();
        }

        public function add($data)
        {
        	if(!$data) return false;
            $data['created'] = date("Y-m-d H:i:s");
            $this->db->insert($this->_table, $data);
            return $this->db->insert_id();
        }

        public function update($data = null)
        {
        	if(!$data) return false;

            return $this->db->update('cards', $data, array('id' => $data['id']));
        }

        public function remove($cardId)
        {
            if(!$cardId) return false;

            return $this->db->delete('cards', array('id' => $cardId));
        }

        public function get_card($cardId)
        {
            if(!$cardId) return false;
            $this->db->where('id', $cardId);
            $query = $this->db->get('cards');
            $re = $query->result();
            return $re[0];
        }

}

?>