<?php namespace Modules\CTadmin\Controllers;

use App\Models\EventsModel;

class EventsController extends BaseController
{
    function __construct() {
       
    }

    public function index()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }

        $EvenTab = new EventsModel();
        $data['EvenTab'] = $EvenTab->findAll();
        return $this->ct_view->adminView('events/index', $data);
    }

    public function create()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        return $this->ct_view->adminView('events/create');
    }

    public function store()
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $EvenTab = new EventsModel();
        $data = $_POST;
        $EvenTab->save($data);
        $this->session->setFlashdata('Success', 'Successfully Added.');
        return	redirect()->to(site_url('/admin/events'))->with('status', 'Event Added Successfully');
        // return $this->ct_view->adminView('cardMembers/list');
    }

    public function edit($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $EvenTab = new EventsModel();
        $data['EvenTab'] = $EvenTab->find($id);
        return $this->ct_view->adminView('events/events-edit', $data);
    }

    public function update($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $EvenTab = new EventsModel();

        $data = $_POST;
        $EvenTab->update($id, $data);
        $this->session->setFlashdata('Success', 'Successfully updated.');
        return	redirect()->to(site_url('/admin/events'))->with('status', 'Event Updated Successfully');
    }

    public function delete($id)
    {
        if (!is_admin_logged_in()) {
            return	redirect()->to(site_url('/admin/login'));
        }
        $EvenTab = new EventsModel();
        $EvenTab->delete($id);
        $this->session->setFlashdata('Success', 'Successfully Deleted.');
        return	redirect()->to(site_url('/admin/events'))->with('status', 'Event Deleted Successfully');
    }
}
?>