<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;

class RegistrationController extends BaseController
{
    use ResponseTrait;

    public function register()
    {
        $userModel =  new UserModel();
        $data = [
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
        ];
        if ($userModel->insert($data)) {
            $data['msg'] = 'success';
            return $this->respond($data);
        } else {
            $data['msg'] = 'failed..!';
            return $this->respond($data);
        }

    }
}
