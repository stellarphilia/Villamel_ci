<?php

namespace App\Controllers;

class User extends BaseController
{
    public function list()
    {
        //Show all users in table from database tbl_users
        $userModel = new \App\Models\UserModel();
        $data['users'] = $userModel->findAll();

        //Return list of users page
        return view('user/index', $data);
    }

    public function view($id) {
        //Select one user to view his/her details
        $userModel = new \App\Models\UserModel();
        $data['user'] = $userModel->find($id);

        //Return user view page with user data
        return view('user/view', $data);

    }

    public function add() {
        $data = array();
        helper(['form']);

        //When submit button is clicked
        if($this->request->getMethod() == 'post') {
            $post = $this->request->getPost(['first_name', 'middle_name', 'last_name', 'age', 'email', 'password']);

            //Provide validation for every text field
            $rules = [
                'first_name' => ['label' => 'first name', 'rules' => 'required'],
                'middle_name' => ['label' => 'first name', 'rules' => 'required'],
                'last_name' => ['label' => 'last name', 'rules' => 'required'],
                'age' =>  ['label' => 'age', 'rules' => 'required|numeric'],
                'gender_id' =>  ['required'],
                'email' =>  ['label' => 'email', 'rules' => 'required|valid_email|is_unique[tbl_users.email]'],
                'password' => ['label' => 'password', 'rules' => 'required'],
                'confirm_password' => ['label' => ' confirm password', 'rules' => 'required_with[password]|matches[password]']
            ];

            if(! $this->validate($rules)){
                $data['validation'] = $this->validator;
            } else {
                //Save user to database
                $post['password'] = sha1($post['password']);
            
                $userModel = new \App\Models\UserModel();
                $userModel->save($post);

                $session = session();
                $session ->setFlashdata('success-add-user', 'User Successfully Saved!');

                return redirect()->to('/user/add', );
            }

        }

        //Return add user page
        return view('user/add', $data); 
    }

    //Fetch all values 
  