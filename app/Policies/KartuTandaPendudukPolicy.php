<?php

declare(strict_types=1);

namespace App\Policies;

use Illuminate\Foundation\Auth\User as AuthUser;
use App\Models\KartuTandaPenduduk;
use Illuminate\Auth\Access\HandlesAuthorization;

class KartuTandaPendudukPolicy
{
    use HandlesAuthorization;
    
    public function viewAny(AuthUser $authUser): bool
    {
        return $authUser->can('ViewAny:KartuTandaPenduduk');
    }

    public function view(AuthUser $authUser, KartuTandaPenduduk $kartuTandaPenduduk): bool
    {
        return $authUser->can('View:KartuTandaPenduduk');
    }

    public function create(AuthUser $authUser): bool
    {
        return $authUser->can('Create:KartuTandaPenduduk');
    }

    public function update(AuthUser $authUser, KartuTandaPenduduk $kartuTandaPenduduk): bool
    {
        return $authUser->can('Update:KartuTandaPenduduk');
    }

    public function delete(AuthUser $authUser, KartuTandaPenduduk $kartuTandaPenduduk): bool
    {
        return $authUser->can('Delete:KartuTandaPenduduk');
    }

    public function restore(AuthUser $authUser, KartuTandaPenduduk $kartuTandaPenduduk): bool
    {
        return $authUser->can('Restore:KartuTandaPenduduk');
    }

    public function forceDelete(AuthUser $authUser, KartuTandaPenduduk $kartuTandaPenduduk): bool
    {
        return $authUser->can('ForceDelete:KartuTandaPenduduk');
    }

    public function forceDeleteAny(AuthUser $authUser): bool
    {
        return $authUser->can('ForceDeleteAny:KartuTandaPenduduk');
    }

    public function restoreAny(AuthUser $authUser): bool
    {
        return $authUser->can('RestoreAny:KartuTandaPenduduk');
    }

    public function replicate(AuthUser $authUser, KartuTandaPenduduk $kartuTandaPenduduk): bool
    {
        return $authUser->can('Replicate:KartuTandaPenduduk');
    }

    public function reorder(AuthUser $authUser): bool
    {
        return $authUser->can('Reorder:KartuTandaPenduduk');
    }

}