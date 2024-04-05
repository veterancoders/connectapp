<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'email', 'phone', 'password_hash'];

    public function getUser($id)
    {
        $user = $this->find($id);

        if (!empty($user) && isset($user['interests'])) {
            $user['interests'] = json_decode($user['interests'], true);
        }
        return $user;
    }

    public function updateUser($id, $data)
    {
        return $this->update($id, $data);
    }
    public function findUsersWithSimilarInterests(array $interests,$loggedInUserId) {
        $builder = $this->db->table($this->table);
        
        // This is for a JSON-encoded interests field. Adjust the query as necessary.
        $conditions = [];
        foreach ($interests as $interest) {
            $builder->orLike('interests', $interest);
        }
        
        $builder->where('id !=', $loggedInUserId); // Exclude the current user
        return $builder->get()->getResultArray();
    }
}
