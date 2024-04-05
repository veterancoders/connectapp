<?php

namespace App\Controllers;

use App\Models\UserModel;

class HomeController extends BaseController
{
    public function index()
    {
        $session = session();
        $userModel = new UserModel();


        $loggedInUserId = $session->get('user_id');
        $loggedInUser = $userModel->find($loggedInUserId);

        // Safely access 'interests' key
        if (isset($loggedInUser['interests']) && !empty($loggedInUser['interests'])) {
            $interests = json_decode($loggedInUser['interests'], true);
        } else {
            // Fallback if 'interests' key doesn't exist or is empty
            $interests = [];
        }

        $data['similarUsers'] = [];
        if (!empty($interests)) {
            $data['similarUsers'] = $userModel->findUsersWithSimilarInterests($interests, $loggedInUserId);
        }

        return view('home', $data);
    }

    public function logout()
    {
        // Destroy the user's session
        session()->destroy();


        return redirect()->to(site_url('/'));
    }
}
