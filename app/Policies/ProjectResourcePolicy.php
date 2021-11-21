<?php

namespace App\Policies;

use App\Models\User;
use App\Models\project_resource;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProjectResourcePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\project_resource  $projectResource
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, project_resource $projectResource)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\project_resource  $projectResource
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, project_resource $projectResource)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\project_resource  $projectResource
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, project_resource $projectResource)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\project_resource  $projectResource
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, project_resource $projectResource)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\project_resource  $projectResource
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, project_resource $projectResource)
    {
        //
    }
}
