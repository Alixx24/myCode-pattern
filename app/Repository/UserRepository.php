<?php

namespace App\Repository;

use App\Models\Admin\Ad;
use App\Models\User;

class UserRepository
{
    
    public function orderBy()
    {
        
        return $users = User::orderBy('id', 'DESC')->get();
     
    }

  
}
