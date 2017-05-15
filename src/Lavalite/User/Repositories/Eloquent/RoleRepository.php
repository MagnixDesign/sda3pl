<?php

namespace Lavalite\User\Repositories\Eloquent;

use Lavalite\User\Interfaces\RoleRepositoryInterface;

class RoleRepository extends BaseRepository implements RoleRepositoryInterface
{
    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('user.role.model');
    }
}
