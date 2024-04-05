<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Assuming the myauth package has a method to check if the user is logged in
        // For example, using a method `isLoggedIn()`
        if (!service('myauth')->isLoggedIn()) {
            // User is not logged in, redirect to login page
            return redirect()->to('/login'); // Ensure '/login' is the route to your login page
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Usually nothing to do here for an auth filter
    }
}
