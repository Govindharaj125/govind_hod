<?php namespace Modules\CTadmin\Controllers;

use App\Models\QuoteModel;

class QuoteController extends BaseController
{
    function __construct() {
       
    }

    public function index()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }

        $QuotTab = new QuoteModel();
        $data['QuotTab'] = $QuotTab->findAll();
        return $this->ct_view->adminView('quote/index', $data);
    }

    // public function create()
    // {
    //     if (!is_admin_logged_in()) {
    //         return	redirect()->to(site_url('/admin/login'));
    //     }
    //     return $this->ct_view->adminView('quote/create');
    // }

    // public function store()
    // {
    //     if (!is_admin_logged_in()) {
    //         return	redirect()->to(site_url('/admin/login'));
    //     }
    //     $QuotTab = new QuoteModel();
    //     $data = $_POST;
    //     $QuotTab->save($data);
    //     $this->session->setFlashdata('Success', 'Successfully Added.');
    //     return	redirect()->to(site_url('/admin/quote'));
    //     // return $this->ct_view->adminView('cardMembers/list');
    // }

    public function edit($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $QuotTab = new QuoteModel();
        $data['QuotTab'] = $QuotTab->find($id);
        return $this->ct_view->adminView('quote/quote-edit', $data);
    }

    public function update($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $QuotTab = new QuoteModel();

        $data = $_POST;
        $QuotTab->update($id, $data);
        $this->session->setFlashdata('Success', 'Successfully updated.');
        return	redirect()->to(site_url('/admin/quote'))->with('status', 'Quote Updated Successfully');
    }

    // public function delete($id)
    // {
    //     if (!is_admin_logged_in()) {
    //         return	redirect()->to(site_url('/admin/login'));
    //     }
    //     $QuotTab = new QuoteModel();
    //     $QuotTab->delete($id);
    //     $this->session->setFlashdata('Success', 'Successfully Deleted.');
    //     return	redirect()->to(site_url('/admin/quote'));
    // }
}
?>