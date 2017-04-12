<?php
class Alarm extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
    
 public function get_all_alarms()
    {
            $query = $this->db->get('Alarm');
            return $query->result_array();
    }
    
    public function get_alarm_by_id($id)
    {
        if (!$id== null){
        $query = $this->db->get_where('Alarm', array('ID' => $id));
        return $query->row_array();
    }
        else { 
        
        echo 'Invalid id!';
        }
    }
    
    public function create_alarm (){
          $data = array(
            'UserID' => $this->input->post('alarm_user_id'), // views section please send this value 
            'Location' => $this->input->post('alarm_location'),
            'Time' => $this->input->post('alarm_time'),
            'Need' => $this->input->post('alarm_need'),
            'Description' => $this->input->post('alarm_description'),
            'UserName' => $this->input->post('alarm_user_name') // views section please send this value 
  
        );
        
        
     return $this->db->insert('Alarm', $data);    
    }
    
    
    public function update_alarm ($id){
         $data = array(
            'UserID' => $this->input->post('alarm_user_id'),
            'Location' => $this->input->post('alarm_location'),
            'Time' => $this->input->post('alarm_time'),
            'Need' => $this->input->post('alarm_need'),
            'Description' => $this->input->post('alarm_description'),
            'UserName' => $this->input->post('alarm_user_name')
  
        );
        
        
            $this->db->where('ID', $id);
            return $this->db->update('Alarm', $data);
        
    }
    
    
     public function delete_alarm($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('Alarm');
    }
    
    
}
?>