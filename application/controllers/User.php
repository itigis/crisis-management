<?php
class User extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Users');
                $this->load->helper('url_helper');
        }

        public function index($id = NULL)
        {
                $data['title'] = 'Users Administration';                
                if ($id == NULL)
                {
                $data['users'] = $this->Users->get_all_users();
                }
                else {
                        $data['user'] = $this->Users->get_user_by_id($id);
                          if (empty($data['user']))
                                {
                                        show_404();
                                }
                }
                $this->load->view('templates/header', $data);
                $this->load->view('pages/admin/view', $data);
                $this->load->view('templates/footer');
        }

       
         public function create()
        {
                $this->load->helper('form');
                $this->load->library('form_validation');
                $data['title'] = 'Create a new user';
                //  $this->form_validation->set_rules('id', 'ID', 'required');
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('email', 'E_mail', 'required');
                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/admin/create');
                        $this->load->view('templates/footer');

                }
                else
                {
                        $this->Users->create_user();
                        $this->load->view('pages/admin/success');
                }
        }


        public function update($id = NULL)
        {
                 $data['user'] = $this->Users->get_user_by_id($id);

                if (empty($data['user']))
                {
                        show_404();
                }

                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['title'] = 'Manage user account';

                //$this->form_validation->set_rules('id', 'ID', 'required');
                $this->form_validation->set_rules('name', 'Name', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('email', 'E_mail', 'required');
                

                if ($this->form_validation->run() === FALSE)
                {
                        $this->load->view('templates/header', $data);
                        $this->load->view('pages/admin/update');
                        $this->load->view('templates/footer');
                }
                else
                {
                        $this->Users->update_user($id);
                        $this->load->view('pages/admin/success');
                }
        }

        public function delete ($id= NULL)
        {
        $data['user'] = $this->Users->get_user_by_id($id);
           if (empty($data['user']))
                {
                        show_404();
                }
                else
                {
                        $this->Users->delete_user($id);
                        $this->load->view('pages/admin/success');
                }
        }
}
