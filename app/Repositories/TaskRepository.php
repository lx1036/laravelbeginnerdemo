<?php
/**
 * Created by PhpStorm.
 * User: liuxiang
 * Date: 16/5/31
 * Time: 11:35
 */

namespace App\Repositories;


use App\Task;
use App\User;

class TaskRepository
{
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)->orderBy('created_at', 'asc')->get();
    }
}