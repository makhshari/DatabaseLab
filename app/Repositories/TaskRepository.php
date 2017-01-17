<?php

namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository
{
    /**
     * Get all of the tasks for a given user.
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
<<<<<<< HEAD
                    ->orderBy('created_at', 'asc')
                    ->get();
    }
}
=======
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
>>>>>>> 27ec49379f8115f342fba397bfdb04ea49935531