<?php
    class User extends CI_controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('User_model');
        }

        public function index()
        {
            $users=$this->User_model->select_user();
            #print_r($user);
            $data=array('users'=>$users);
            #print_r($data);
            $this->load->view('user/list', $data);
        }
        
        public function create_user(){
            $this->load->view('user/create_user');
        }

        public function create_user_action(){
            $name=$this->input->post("name");
            $email=$this->input->post("email");
            $password=$this->input->post("password");
            $data=array('nama_user'=>$name, 'email'=>$email, 'password'=>$password);

            $this->User_model->insert_user($data);
            redirect('/user');
        }

        public function edit($id){
            $user=$this->User_model->select_by_id($id);
            $data=array('user'=>$user,);
            $this->load->view('user/edit_user',$data);
        }

        public function edit_action(){
            $id=$this->input->post("id_user");
            $name=$this->input->post("name");
            $email=$this->input->post("email");
            $password=$this->input->post("password");
            $data=array('nama_user'=>$name, 'email'=>$email, 'password'=>$password);  
            
            $this->User_model->update_user($data,$id);
            redirect('/user');
        }

        public function delete($id){
            $this->User_model->delete_user($id);
            redirect('/user');
        }
    }
?>    