<?php namespace App\Controllers;

use App\Models\CardMembersModel;
use App\Models\BannerModel;
use App\Models\EventsModel;
use App\Models\QuoteModel;
use App\Models\UserModel;

class PageController extends BaseController
{


  public function evangelism()
    {
        return $this->ct_view->load('pages/evangelism', []);
    }
      public function outreachministries()
    {
        return $this->ct_view->load('pages/outreachministries', []);
    }
  
      public function counselling()
    {
        return $this->ct_view->load('pages/counselling', []);
    }

    public function pcmembers()
    {
        return $this->ct_view->load('pages/pcmembers', []);
    }
  
      public function coordinators()
    {
        return $this->ct_view->load('pages/coordinators', []);
    }
  
        public function fellowships()
    {
        return $this->ct_view->load('pages/fellowships', []);
    }
  
        public function secretarytreasurerrollcall()
    {
        return $this->ct_view->load('pages/secretarytreasurerrollcall', []);
    }
  
      public function historyofcsi()
    {
        return $this->ct_view->load('pages/historyofcsi', []);
    }

      public function historyofthechurch()
    {
        return $this->ct_view->load('pages/historyofthechurch', []);
    }

  
    public function contactus()
    {
        return $this->ct_view->load('pages/contactus', []);
    }




    public function index()
    {
        $dobModel = new CardMembersModel();
      
        $banTab = new BannerModel();
        $data['banner'] = $banTab->where("Status = 'Active'")->findAll();

        $QuotTab = new QuoteModel();
        date_default_timezone_set('UTC');
        $dayNumberYear= date('z') + 1;
        $data['quote'] = $QuotTab->where("id=".$dayNumberYear)->findAll();

        $EvenTab = new EventsModel();
        $data['events'] = $EvenTab->findAll();
        // print_r($data);
        // die;

        // $data['dob']=$this->session->userData['DOB'];
        $data['membersDob']=$dobModel->where("DOBday = DAY(CURDATE()) and DOBmon = MONTH(CURDATE())")->findAll();
        // $data['dom']=$this->session->userData['DOM'];
        $data['membersDom']=$dobModel->where("DOMday = DAY(CURDATE()) and DOMMon = MONTH(CURDATE())")->findAll();
        // print_r($data);
        return $this->ct_view->load('pages/index', $data);

        // return $this->ct_view->load('pages/index', []);
    }
    
    public function logout()
    {
        $this->session->destroy();
        return	 redirect()->to(site_url(''));
    }
    public function forgot_password()
    {
        if ($this->request->getMethod(true)=='POST') {
            $val = $this->validate([
                'mobile_number' => 'required',
              ]);
            if (!$val) {
                //print_r($this->validator->listErrors());
                //die;
                return $this->ct_view->load('pages/forgot-password', ['validation' => $this->validator]);
            } else {
                $cusModel=new CardMembersModel();
                $user=$cusModel->where(['Mobile_1'=>$this->request->getVar('mobile_number')])->first();
                if ($user) {
                    $newPass=$user['User_Password']==''?random_int(100000, 999999): $user['User_Password'];
                    $data['contacts']=$this->request->getVar('mobile_number');
                    $data['msg']='Dear Member, Your OTP is '.$newPass.' for login to miestalin account. Please do not share this OTP Regards, CSI St. Marks Church Team';
                    $data['template_id']='1207162502635534317';
                    CallAPI($data);
                    $updateData = ["User_Password"=>$newPass];  
                    $cusModel->update($user['id'], $updateData);
                    $this->session->setFlashdata('Success', 'Successfully password sent to your mobile number.');
                    return redirect()->to(site_url('/login'))->with('status', 'Password has been sent to your Mobile Number Successfully.');
                } else {
                    $this->session->setFlashdata('invalid_login', 'ERROR: Invalid Mobile Number. Try Again.');
                }
               
            }
            // print_r(CallAPI($dd))
        }
        return $this->ct_view->load('pages/forgot_password', []);
    }
    public function login()
    {
   /*     if (is_logged_in()) {
            return redirect()->to(site_url(''));
        }
       ; */
        if ($this->request->getMethod(true) == 'POST') {
            $val = $this->validate([
                'form_username_email' => 'required',
                'form_password' => 'required',
              ]);
            if (!$val) {
                //print_r($this->validator->listErrors());
                //die;
                return $this->ct_view->load('pages/login', ['validation' => $this->validator]);
            } else {
                $cusModel=new CardMembersModel();
                $user=$cusModel->where(['MobNo'=>$this->request->getVar('form_username_email')])
                ->where(['User_Password'=>($this->request->getVar('form_password'))])->first();
                //$sql = $cusModel->getCompiledSelect();
                //echo $sql;
                //die;
                if ($user) {
                 
                    unset($user['password']);
            
                    $user['user_logged_in']=true;
                    $this->session->set('userData', $user);
                    // return	redirect()->to(site_url('/'));
                    return redirect()->to(site_url('/member-profile'));
                } else {
                    $this->session->setFlashdata('invalid_login', 'ERROR: Invalid Mobile Number or Password. Try Again.');
                }
            }
        }
        return $this->ct_view->load('pages/login', []);
    }

    public function member_profile()
    {
   /*     if (!is_logged_in()) {
            return redirect()->to(site_url('/login'));
        } */
       
          // $userData= $this->session->userData;
        
        $cusModel=new CardMembersModel();
        $data['cardNumber']=$this->session->userData['CardNo'];
        $data['members']=$cusModel->where(['CardNo'=>$this->session->userData['CardNo']])->findAll();
        $data['address_1_2']=$this->session->userData['Address1'];
        $data['address_2']=$this->session->userData['Address2'];
        $data['address_4']=$this->session->userData['Address3'];
        $data['pincode']=$this->session->userData['PinCode'];
        $data['mobile_1']=$this->session->userData['MobNo'];
        $data['profession']=$this->session->userData['Profession'];
        $data['memName']=$this->session->userData['MemberName'];
        $data['mobile_2']=$this->session->userData['SecMobNo'];
        $data['company']=$this->session->userData['Company'];
        $data['dob']=$this->session->userData['DOB'];
        $data['fullName']=$this->session->userData['MemberName'];
        $data['landline']=$this->session->userData['Landline'];
        $data['email']=$this->session->userData['Email'];
        $data['membershipDate']=$this->session->userData['MembershipDt'];
        return $this->ct_view->load('pages/member-profile', $data);
      
    /*  
      $cusModel=new CardMembersModel();
        $data['cardNumber']=$this->session->userData['Card_No'];
        $data['members']=$cusModel->where(['Card_No'=>$this->session->userData['Card_No']])->findAll();
        $data['address_1_2']=$this->session->userData['Address_1_2'];
        $data['address_2']=$this->session->userData['Address2'];
        $data['address_4']=$this->session->userData['Address_4'];
        $data['pincode']=$this->session->userData['Pincode'];
        $data['mobile_1']=$this->session->userData['Mobile_1'];
        $data['profession']=$this->session->userData['Profession'];
        $data['memName']=$this->session->userData['Name'];
        $data['mobile_2']=$this->session->userData['Mobile_2'];
        $data['company']=$this->session->userData['Company'];
        $data['dob']=$this->session->userData['DOB'];
        $data['fullName']=$this->session->userData['Full_Name'];
        $data['landline']=$this->session->userData['Landline'];
        $data['email']=$this->session->userData['Email'];
        $data['membershipDate']=$this->session->userData['Date_of_membership'];
        return $this->ct_view->load('pages/member-profile', $data); */
    }

    public function edit($id)
    {
        if (!is_logged_in()) {
            return redirect()->to(site_url('/login'));
        }
      
         $cusModel=new CardMembersModel();
        $data['cardMem']=$this->session->userData['CardNo'];
     
  /*
     
        $cardMem = new CardMembersModel();
        $data['cardMem'] = $cardMem->find($id);  */
        return view('pages/mem-manage/mem-edit', $data); 
    }

    public function update($id)
    {
        if (!is_logged_in()) {
            return redirect()->to(site_url('/login'));
        }
        $cardMem = new CardMembersModel();
        // $data = [
        //     'DOB' => $this->request->getPost('DOB'),
        //     'DOM' => $this->request->getPost('DOM'),
            // 'Relationship' => $this->request->getPost('Relationship'),
            // 'Prefix' => $this->request->getPost('Prefix'),
            // 'Name' => $this->request->getPost('Name'),
            // 'Gender' => $this->request->getPost('Gender'),
            // 'Mobile_1' => $this->request->getPost('Mobile_1'),
            // 'Profession' => $this->request->getPost('Profession'),
            // 'Email' => $this->request->getPost('Email'),
            // 'Card_No' => $this->request->getPost('Card_No'),
            // 'Status' => $this->request->getPost('Status'),
        // ];
        $data = $_POST;
        $cardMem->update($id, $data);
        $this->session->setFlashdata('Success', 'Successfully updated.');
        return	redirect()->to(site_url('/member-profile'))->with('status', 'User Updated Successfully');
        // return $this->ct_view->adminView('cardMembers/list');
    }

    // public function delete($id)
    // {
    //     if (!is_logged_in()) {
    //         return redirect()->to(site_url('/login'));
    //     }
    //     $cardMem = new CardMembersModel();
    //     $cardMem->delete($id);
    //     $this->session->setFlashdata('Success', 'Successfully Deleted.');
    //     return	redirect()->to(site_url('/member-profile'));
    // return $this->ct_view->adminView('cardMembers/list');
    // return redirect()->to(base_url('students'))->with('status', 'Student details Deletd successfully');
    // }

    public function pastorsrollcall()
    {
        return $this->ct_view->load('pages/pastorsrollcall', []);
    }

    public function static_pages($pageName)
    {
        if (is_file("pages/$pageName.php")) {
            return $this->ct_view->load("pages/$pageName", []);
        } else {
            return $this->ct_view->load("errors/html/error_404", []);
        }
    }
}
