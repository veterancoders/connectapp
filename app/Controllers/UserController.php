<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function profile()
    {
        $data['user'] = $this->userModel->getUser(user_id());


        return view('profile', $data);
    }

    public function accountSettings()
    {
        $data['user'] = $this->userModel->getUser(user_id());
        return view('account_settings', $data);
    }


    public function update_account_settings()
    {
       
        $userModel = new UserModel();
        $id = user_id();

        $data = $this->request->getPost(['username', 'email', 'phone']);

        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => 'required',
            'email' => 'required|valid_email',
            'phone' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Handle validation failure
            return redirect()->back()->withInput()->with('error', $validation->getErrors());
        }
        if ($userModel->updateUser($id, $data)) {
            // Success
            return redirect()->back()->with('message', 'Account updated successfully.');
        } else {
            // Error
            return redirect()->back()->with('error', 'Failed to update account.');
        }
    }

    public function update_password_account_settings()
    {
        $userModel = new UserModel();

        $user = $userModel->find(user_id());

        $currentPassword = $this->request->getPost('current_password');
        $newPassword = $this->request->getPost('new_password');
        $confirmNewPassword = $this->request->getPost('password_confirm');

        // Verify current password

        if (!password_verify($currentPassword, $user['password_hash'])) {
            return redirect()->back()->with('passerror', 'Current password is incorrect.');
        }

        // Check if new password matches confirm new password
        if ($newPassword !== $confirmNewPassword) {
            return redirect()->back()->with('passerror', 'New passwords do not match.');
        }
        if (strlen($newPassword) < 8) {
            return redirect()->back()->with('passerror', 'Password must be at least 8 characters long.');
        }
        // Proceed with updating the password
        $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
        if ($userModel->update($userId, ['password_hash' => $hashedPassword])) {
            return redirect()->back()->with('passmessage', 'Password updated successfully.');
        } else {
            return redirect()->back()->with('passerror', 'Failed to update password.');
        }
    }
}
