<?php
class User extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('users');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['users'] = $this->users->get_all_users();
                $data['title'] = 'Users Administration';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/admin/view', $data);
        $this->load->view('templates/footer');
        }

        public function viewById($id = NULL)
        {
                $data['user_item'] = $this->users->get_user_by_id($id);

                 if (empty($data['user_item']))
        {
                show_404();
        }

        $data['title'] = 'Users Administration';

        $this->load->view('templates/header', $data);
        $this->load->view('pages/admin/view', $data);
        $this->load->view('templates/footer');
        }

        public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Create a new user';

    $this->form_validation->set_rules('id', 'ID', 'required');
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
        $this->users->create_user();
        $this->load->view('pages/admin/success');
    }
}


public function update($id = NULL)
{
        $data['user_item'] = $this->users->get_user_by_id($id);

                if (empty($data['user_item']))
        {
                show_404();
        }

    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Manage user account';

    $this->form_validation->set_rules('id', 'ID', 'required');
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
        $this->users->update_user($id);
        $this->load->view('pages/admin/success');
    }
}


}