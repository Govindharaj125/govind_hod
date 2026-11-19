<?php namespace App\Controllers;

class AjaxloadController extends BaseController
{
    public function login()
    {
        return view('ajax-load/volunteer-apply-form');
    }

    public function donate()
    {
        return view('ajax-load/donation-form');
    }
}

?>