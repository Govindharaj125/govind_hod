<?php
 //if(!defined('BASEPATH')) exit('No direct script access allowed');

function is_logged_in() {
    $session = \Config\Services::session();
    $user =$session->userData;//$session->get('userData');
    if (!isset($user)) { return false; } else { return true; }
}
function is_user_login(){
    $session = \Config\Services::session();
   // $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
    $user = $session->userData('userData');
    if (!isset($user) && $user['type']!='user') { return false; } else { return true; }
}
function is_admin_logged_in() {
    $session = \Config\Services::session();
    $user =$session->adminData;//$session->get('userData');
    if (!isset($user)) { return false; } else { return true; }
}

function CallAPI($data)
{
    $url='http://sms.textmysms.com/app/smsapi/index.php';
    $method='GET';
    $curl = curl_init();
    $data['key']='460388BDD625F9';
    $data['campaign']=0;
    $data['routeid']=13;
    $data['type']='text';
    $data['senderid']='STMRKS';
    switch ($method)
    {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
   // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
   // curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}