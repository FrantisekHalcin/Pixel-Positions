<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;

class JobPolicy
{

    /**
     * Determine whether the user can update the model.
     */
    public function updateJob(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }

}
