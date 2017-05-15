<?php

namespace Lavalite\User\Repositories\Eloquent;

use Lavalite\User\Interfaces\PermissionRepositoryInterface;

class PermissionRepository extends BaseRepository implements PermissionRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('user.permission.model');
    }
}
