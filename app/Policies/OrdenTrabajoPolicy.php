<?php

namespace App\Policies;

use App\Models\OrdenTrabajo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrdenTrabajoPolicy
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
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, OrdenTrabajo $ordenTrabajo)
    {
        // 
        return $user->id === $ordenTrabajo->user_id;
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
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, OrdenTrabajo $ordenTrabajo)
    {
        // Revisa si el usuario autenticado es el mismo que creo la Orden de Trabajo
        return $user->id === $ordenTrabajo->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, OrdenTrabajo $ordenTrabajo)
    {
        // Revisa si el usuario autenticado es el mismo que creo la Orden de Trabajo
        return $user->id === $ordenTrabajo->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, OrdenTrabajo $ordenTrabajo)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\OrdenTrabajo  $ordenTrabajo
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, OrdenTrabajo $ordenTrabajo)
    {
        //
    }
}
