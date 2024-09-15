<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TaskCompleted;
class TaskController extends Controller
{
    public function completeTask($taskId)
    {
        // Find a user (assuming user ID 1)
        $user = User::find(1);

        // Trigger the notification
        $user->notify(new TaskCompleted('Task ' . $taskId));

        return 'Notification sent!';
    }
}
