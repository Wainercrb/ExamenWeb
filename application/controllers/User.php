<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function login() {

        $this->load->view('user/login');
    }

    public function register() {
        $genders = $this->User_model->loadGender();
        $instruments = $this->User_model->loadInstrument();
        $data['gender'] = $genders;
        $data['instrument'] = $instruments;



        $this->load->view('user/register', $data);
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $r = $this->User_model->authenticate($username, $password);
        if (count($r) > 0) {
            $user = $r[0];
            echo "Welcome {$user->first_name}";
        } else {
            echo "Invalid user name or password";
        }
    }

    public function listAll() {
        $users = $this->User_model->all();

        $data['users'] = $users;
        $data['title'] = 'List of Users';

        $this->load->view('user/list', $data);
    }

    public function search() {
        if (isset($_POST['valor']) && ($_POST['valor'] != "")) {
            $valor = $this->input->post('valor');
            $users = $this->User_model->search($valor);
            $data['users'] = $users;
            $data['data'] = 'valor buscado: ' . $valor . ' en genero y intrumento';
            $this->load->view('user/search', $data);
        } else {
            $data['data'] = "Ingrese una busqueda";
            $this->load->view('user/search', $data);
        }
    }

    public function searchUser() {
        $data['data'] = "Ingrese una busqueda";
        $this->load->view('user/search', $data);
    }

    public function save() {

        $us = $_FILES["image"];
        $data = file_get_contents($us['tmp_name']);
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');
        $mail = $this->input->post('email');
        $address = $this->input->post('address');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $instruments['instruments'] = $this->input->post('instruments');
        $genders['genders'] = $this->input->post('genders');
        $user = array(
            'foto' => $data,
            'nombre' => $first_name,
            'apellidos' => $last_name,
            'email' => $mail,
            'direccion' => $address,
            'usuario' => $username,
            'contrasena' => $password,
        );
        $r = $this->User_model->save($user, $instruments, $genders);
        if ($r) {
            redirect('user/login');
//            redirect('http://localhost:8080/codeigniter-master/index.php/login');
        } else {
            // $this->session->set_flashdata('message', 'There was an error saving the user');
            redirect('user/register');
        }
    }

    public function delete($param) {
        $id = $this->uri->segment(3);
        $r = $this->User_model->delete($id);
        if ($r) {
            redirect('http://localhost:8080/codeigniter-master/index.php/user/listAll');
        } else {
            
        }
    }

    public function edit($param) {
        $id = $this->uri->segment(3);
        $usurarioCargado = $this->User_model->UsuarioCargado($id);


        if ($usurarioCargado != FALSE) {
            $data = array(
                'id' => $id,
                'username' => $usurarioCargado->username,
                'password' => $usurarioCargado->password,
                'first_name' => $usurarioCargado->first_name,
                'last_name' => $usurarioCargado->last_name
            );
        } else {
            return FALSE;
        }
        $this->load->view('user/editar', $data);
    }

    public function see($param) {
        $id = $this->uri->segment(3);
        $usurarioCargado = $this->User_model->UsuarioCargado($id);
        if ($usurarioCargado != FALSE) {
            $data = array(
                'id' => $id,
                'username' => $usurarioCargado->username,
                'password' => $usurarioCargado->password,
                'first_name' => $usurarioCargado->first_name,
                'last_name' => $usurarioCargado->last_name
            );
        } else {
            return FALSE;
        }
        $this->load->view('user/editar', $data);
    }

    public function editarUsuario($param) {
        $id = $this->uri->segment(3);
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $first_name = $this->input->post('first_name');
        $last_name = $this->input->post('last_name');

        $user = array(
            'username' => $username,
            'password' => $password,
            'first_name' => $first_name,
            'last_name' => $last_name
        );
        // call the model to save
        $r = $this->User_model->editUser($id, $user);
        if ($r) {
            redirect('http://localhost:8080/codeigniter-master/index.php/user/listAll');
        }
    }

}
