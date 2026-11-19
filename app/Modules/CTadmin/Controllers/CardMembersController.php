<?php namespace Modules\CTadmin\Controllers;

use App\Models\CardMembersModel;

class CardMembersController extends BaseController
{
    function __construct() {
       
    }
    public function index()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $cardMem = new CardMembersModel();
        $data['cardMem'] = $cardMem->findAll();
        return $this->ct_view->adminView('cardMembers/list', $data);
    
    }

    public function create()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        return $this->ct_view->adminView('cardMembers/create');
    }

    public function list()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $cardMem = new CardMembersModel();
        // $data = [
        //     'Prefix' => $this->request->getPost('Prefix'),
        //     'Name' => $this->request->getPost('Name'),
        //     'Full_Name' => $this->request->getPost('Full_Name'),
        //     'New_Family_Card_No' => $this->request->getPost('New_Family_Card_No'),
        //     'Date_of_membership' => $this->request->getPost('Date_of_membership'),
        //     'Card_No' => $this->request->getPost('Card_No'),
        //     'Card_Suffix' => $this->request->getPost('Card_Suffix'),
        //     'CardNumber' => $this->request->getPost('CardNumber'),
        //     'Relationship' => $this->request->getPost('Relationship'),
        //     'Status' => $this->request->getPost('Status'),
        //     'Address_1_2' => $this->request->getPost('Address_1_2'),
        //     'Address1' => $this->request->getPost('Address1'),
        //     'Address2' => $this->request->getPost('Address2'),
        //     'Address_3' => $this->request->getPost('Address_3'),
        //     'Address_4' => $this->request->getPost('Address_4'),
        //     'Pincode' => $this->request->getPost('Pincode'),
        //     'Gender' => $this->request->getPost('Gender'),
        //     'Marital_Status' => $this->request->getPost('Marital_Status'),
        //     'Relationship1' => $this->request->getPost('Relationship1'),
        //     'DOB' => $this->request->getPost('DOB'),
        //     'Age' => $this->request->getPost('Age'),
        //     'Agenumeric' => $this->request->getPost('Agenumeric'),
        //     '60_years' => $this->request->getPost('60_years'),
        //     'DOM' => $this->request->getPost('DOM'),
        //     'MarriageDt' => $this->request->getPost('MarriageDt'),
        //     'MarriageMon' => $this->request->getPost('MarriageMon'),
        //     'DOD' => $this->request->getPost('DOD'),
        //     'Carol_Round_Area' => $this->request->getPost('Carol_Round_Area'),
        //     'Qualification' => $this->request->getPost('Qualification'),
        //     'Profession' => $this->request->getPost('Profession'),
        //     'Company' => $this->request->getPost('Company'),
        //     'Monthly_Income' => $this->request->getPost('Monthly_Income'),
        //     'Email' => $this->request->getPost('Email'),
        //     'Mobile_1' => $this->request->getPost('Mobile_1'),
        //     'Mobile_2' => $this->request->getPost('Mobile_2'),
        //     'Landline' => $this->request->getPost('Landline'),
        //     'User_Password' => $this->request->getPost('User_Password'),
        // ];
        $data = $_POST;
        $cardMem->save($data);
        $this->session->setFlashdata('Success', 'Successfully Added.');
        return	redirect()->to(site_url('/admin/card-members'))->with('status', 'User Added Successfully');
        // return $this->ct_view->adminView('cardMembers/list');
    }

    public function edit($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $cardMem = new CardMembersModel();
        $data['cardMem'] = $cardMem->find($id);
        $data['cardNoMembers']=$cardMem->where(['Card_No'=>  $data['cardMem']['Card_No']])->findAll();
        // print_r($datas);
        // die;
        return $this->ct_view->adminView('cardMembers/edit', $data);
    }

    public function update($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $cardMem = new CardMembersModel();
        // $data = [
        //     'Prefix' => $this->request->getPost('Prefix'),
        //     'Name' => $this->request->getPost('Name'),
        //     'Full_Name' => $this->request->getPost('Full_Name'),
        //     'New_Family_Card_No' => $this->request->getPost('New_Family_Card_No'),
        //     'Date_of_membership' => $this->request->getPost('Date_of_membership'),
        //     'Card_No' => $this->request->getPost('Card_No'),
        //     'Card_Suffix' => $this->request->getPost('Card_Suffix'),
        //     'CardNumber' => $this->request->getPost('CardNumber'),
        //     'Relationship' => $this->request->getPost('Relationship'),
        //     'Status' => $this->request->getPost('Status'),
        //     'Address_1_2' => $this->request->getPost('Address_1_2'),
        //     'Address1' => $this->request->getPost('Address1'),
        //     'Address2' => $this->request->getPost('Address2'),
        //     'Address_3' => $this->request->getPost('Address_3'),
        //     'Address_4' => $this->request->getPost('Address_4'),
        //     'Pincode' => $this->request->getPost('Pincode'),
        //     'Gender' => $this->request->getPost('Gender'),
        //     'Marital_Status' => $this->request->getPost('Marital_Status'),
        //     'Relationship1' => $this->request->getPost('Relationship1'),
        //     'DOB' => $this->request->getPost('DOB'),
        //     'Age' => $this->request->getPost('Age'),
        //     'Agenumeric' => $this->request->getPost('Agenumeric'),
        //     '60_years' => $this->request->getPost('60_years'),
        //     'DOM' => $this->request->getPost('DOM'),
        //     'MarriageDt' => $this->request->getPost('MarriageDt'),
        //     'MarriageMon' => $this->request->getPost('MarriageMon'),
        //     'DOD' => $this->request->getPost('DOD'),
        //     'Carol_Round_Area' => $this->request->getPost('Carol_Round_Area'),
        //     'Qualification' => $this->request->getPost('Qualification'),
        //     'Profession' => $this->request->getPost('Profession'),
        //     'Company' => $this->request->getPost('Company'),
        //     'Monthly_Income' => $this->request->getPost('Monthly_Income'),
        //     'Email' => $this->request->getPost('Email'),
        //     'Mobile_1' => $this->request->getPost('Mobile_1'),
        //     'Mobile_2' => $this->request->getPost('Mobile_2'),
        //     'Landline' => $this->request->getPost('Landline'),
        //     'User_Password' => $this->request->getPost('User_Password'),
        // ];
        $data = $_POST;
        $cardMem->update($id, $data);
        $this->session->setFlashdata('Success', 'Successfully updated.');
        return	redirect()->to(site_url('/admin/card-members'))->with('status', 'User Updated Successfully');
       // return $this->ct_view->adminView('cardMembers/list');
    }

    public function delete($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $cardMem = new CardMembersModel();
        $cardMem->delete($id);
        $this->session->setFlashdata('Success', 'Successfully Deleted.');
        return	redirect()->to(site_url('/admin/card-members'))->with('status', 'User Deleted Successfully');
        // return $this->ct_view->adminView('cardMembers/list');
        // return redirect()->to(base_url('students'))->with('status', 'Student details Deletd successfully');
    }


}
?>