<?php namespace Modules\CTadmin\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('admin/login'));
        }
        // echo "DDD";
        //die;
        //return view('welcome_message');
        return $this->ct_view->adminView('dashboard');
    }
    public function logout()
    {
        $this->session->destroy();
        return	 redirect()->to(site_url('admin/login'));
    }

    public function login()
    {
        if (is_admin_logged_in()) {
            return redirect()->to(site_url('admin'));
        }
        $cusModel=new UserModel();
        if ($this->request->getMethod(true) == 'POST') {
            $val = $this->validate([
          'Email' => 'required',
          'Password' => 'required',
        ]);
            if (!$val) {
                //print_r($this->validator->listErrors());
                //die;
                return $this->ct_view->adminView('login', ['validation' => $this->validator], 'plain_layout');
            } else {
                $user=$cusModel->orwhere(['email'=>$this->request->getVar('Email'),'mobile_no'=>$this->request->getVar('Email')])
          ->where(['password'=>md5($this->request->getVar('Password'))])->first();
                //$sql = $cusModel->getCompiledSelect();
                //echo $sql;
                //die;
                if ($user) {
                    unset($user['password']);
                    $user['admin_logged_in']=true;
                    $this->session->set('adminData', $user);
                    return	redirect()->to(site_url('admin'));
                } else {
                    $this->session->setFlashdata('invalid_login', 'ERROR: Invalid Email or Password. Try Again.');
                }
            }
        }
        return $this->ct_view->adminView('login', [], 'plain_layout');
    }


    //--------------------------------------------------------------------
}
