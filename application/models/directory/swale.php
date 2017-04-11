<?php
class Swales extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
    
 public function get_all_swales()
    {
            $query = $this->db->get('Swales');
            return $query->result_array();
    }
    
    public function get_swale_by_id($id)
    {
        if (!$id== null){
        $query = $this->db->get_where('Swales', array('ID' => $id));
        return $query->row_array();
    }
        else { 
        
        echo 'Invalid id!';
        }
    }
    
    public function create_swale (){
        $data = array(
            'Name' => $this->input->post('swale_name'),
            'Location' => $this->input->post('swale_location'),
            'Description' => $this->input->post('swale_description'),
            'Capacity' => $this->input->post('capacity'),
            'Seasonality' => $this->input->post('swale_seasonality'),
            'Grade' => $this->input->post('swale_grade')
  
        );
        
        
     return $this->db->insert('Swales', $data);    
    }
    
    
    public function update_swale ($id){
         $data = array(
            'Name' => $this->input->post('swale_name'),
            'Location' => $this->input->post('swale_location'),
            'Description' => $this->input->post('swale_description'),
            'Capacity' => $this->input->post('capacity'),
            'Seasonality' => $this->input->post('swale_seasonality'),
            'Grade' => $this->input->post('swale_grade')
  
        );
        
        
            $this->db->where('ID', $id);
            return $this->db->update('Swales', $data);
        
    }
    
    
     public function delete_swale($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('Swales');
    }
    
    
}
?>