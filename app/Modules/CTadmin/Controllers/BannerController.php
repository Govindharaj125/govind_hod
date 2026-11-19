<?php namespace Modules\CTadmin\Controllers;

use App\Models\BannerModel;

class BannerController extends BaseController
{
    function __construct() {
       
    }

    public function index()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }

        $banTab = new BannerModel();
        $data['banTab'] = $banTab->findAll();
        return $this->ct_view->adminView('banner/index', $data);
    }

    public function create()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        return $this->ct_view->adminView('banner/create');
    }

    public function store()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }

        $image = new BannerModel();

        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getClientName();
            $file->move('uploads/', $imageName);
       
        $data = [
            'Name' => $this->request->getPost('Name'),
            'Description' => $this->request->getPost('Description'),
            'Status' => $this->request->getPost('Status'),
           
        ];
       if ($imageName !='')
            $data['image'] = $imageName;
        // $data = $_POST;
        $image->save($data);
        }
        return	redirect()->to(site_url('/admin/banner'))->with('status', 'Banner Added Successfully');
    }

    public function edit($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $banTab = new BannerModel();
        $data['banTab'] = $banTab->find($id);
        return $this->ct_view->adminView('banner/banner-edit', $data);
    }

    public function update($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $banTab = new BannerModel();
        $data['banTab'] = $banTab->find($id);

       $data = $_POST;

        $file = $this->request->getFile('image');
        if ($file->isValid() && ! $file->hasMoved())
        {
            $imageName = $file->getClientName();
            $file->move('uploads/', $imageName);
       
        // $data = [
        //     'Name' => $this->request->getPost('Name'),
        //     'Description' => $this->request->getPost('Description'),
        //     'Status' => $this->request->getPost('Status'),
           
        // ];
       if ($imageName !='')
            $data['image'] = $imageName;
        // $data = $_POST;
        // else()
        }
        $banTab->update($id, $data);
        
        $this->session->setFlashdata('Success', 'Successfully updated.');
        return	redirect()->to(site_url('/admin/banner'))->with('status', 'Banner Updated Successfully');
    }

    public function delete($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $banTab = new BannerModel();
        $banTab->delete($id);
        $this->session->setFlashdata('Success', 'Successfully Deleted.');
        return	redirect()->to(site_url('/admin/banner'))->with('status', 'Banner Deleted Successfully');
    }
}
?>