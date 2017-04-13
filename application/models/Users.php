<?php
class Users extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
    
    
 public function get_all_users()
    {
            $query = $this->db->get('Users');
            return $query->result_array();
    }
    

    public function get_user_by_id($id)
    {
        if (!$id== null){
        $query = $this->db->get_where('Users', array('ID' => $id));
        return $query->row_array();
    }
        else { 
        
        echo 'Invalid id!';
            
        }
    }
    
    public function create_user (){
        
        $data = array(
            'Name' => $this->input->post('user_name'),
            'E-mail' => $this->input->post('user_E-mail'),
            'Password' => $this->input->post('user_password'),
            'Role' => $this->input->post('user_role'),
           
  
        );
        
        
     return $this->db->insert('Users', $data);    
    }
    
    
    public function update_user ($id){
        
         $data = array(
            'Name' => $this->input->post('user_name'),
            'E-mail' => $this->input->post('user_E-mail'),
            'Password' => $this->input->post('user_password'),
            'Role' => $this->input->post('user_role'),
           
        );
            $this->db->where('ID', $id);
            return $this->db->update('Users', $data);
        
    }
    
    
     public function delete_user ($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('Users');
    }
    
    
}
?>