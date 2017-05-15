<?php

namespace Lavalite\User\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Lavalite\User\Interfaces\RoleRepositoryInterface;

class RolePublicController extends CMSPublicController
{
    /**
     * Constructor.
     *
     * @param type \Lavalite\Role\Interfaces\RoleRepositoryInterface $role
     *
     * @return type
     */
    public function __construct(RoleRepositoryInterface $role)
    {
        $this->model = $role;
        parent::__construct();
    }

    /**
     * Show role's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $roles = $this->model->all();

        return $this->theme->of('user::public.role.index', compact('roles'))->render();
    }

    /**
     * Show role.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $role = $this->model->findBySlug($slug);

        return $this->theme->of('user::public.role.show', compact('role'))->render();
    }
}
