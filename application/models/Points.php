<?php
class Points extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
    
 public function get_all_points()
    {
            $query = $this->db->get('Points');
            return $query->result_array();
    }
    

    public function get_point_by_id($id)
    {
        if (!$id== null){
        $query = $this->db->get_where('Points', array('ID' => $id));
        return $query->row_array();
    }
        else { 
        
        echo 'Invalid id!';
        }
    }
    
    public function create_point (){
        $data = array(
            'Name' => $this->input->post('point_name'),
            'Location' => $this->input->post('point_location'),
            'Description' => $this->input->post('point_description'),
            'Type' => $this->input->post('point_type'),
            'Capacity' => $this->input->post('point_capacity')
  
        );
        
        
     return $this->db->insert('Points', $data);    
    }
    
    
    public function update_point ($id){
        
         $data = array(
            'Name' => $this->input->post('point_name'),
            'Location' => $this->input->post('point_location'),
            'Description' => $this->input->post('point_description'),
            'Type' => $this->input->post('point_type'),
            'Capacity' => $this->input->post('point_capacity')
  
        );
            $this->db->where('ID', $id);
            return $this->db->update('Points', $data);
        
    }
    
    
     public function delete_point($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('Points');
    }
    
    
}
?>