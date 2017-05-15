<?php

namespace Lavalite\User;

class User
{
    /**
     * $user object.
     */
    protected $user;
    /**
     * $role object.
     */
    protected $role;
    /**
     * $permission object.
     */
    protected $permission;

    /**
     * Constructor.
     */
    public function __construct(\Lavalite\User\Interfaces\UserRepositoryInterface $user,
        \Lavalite\User\Interfaces\RoleRepositoryInterface $role,
        \Lavalite\User\Interfaces\PermissionRepositoryInterface $permission)
    {
        $this->user = $user;
        $this->role = $role;
        $this->permission = $permission;
    }

    /**
     * Returns count of user.
     *
     * @param array $filter
     *
     * @return int
     */
    public function count()
    {
        return  0;
    }
}
