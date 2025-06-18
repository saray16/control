<?php



namespace App\Policies;

use App\Models\Inscripcion;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CertificadoPolicy
{
    use HandlesAuthorization;

    public function viewCertificado(User $user, Inscripcion $inscripcion)
    {
        // Verifica que el usuario autenticado sea el dueño de la inscripción
        // O que tenga un rol de administrador/facilitador
        return $user->id === $inscripcion->user_id || 
               $user->hasRole(['admin', 'facilitador']);
  
}
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Inscripcion $inscripcion): bool
    {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Inscripcion $inscripcion): bool
    {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Inscripcion $inscripcion): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Inscripcion $inscripcion): bool
    {
        return false;
    }
}
