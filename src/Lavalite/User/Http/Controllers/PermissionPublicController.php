<?php

namespace Lavalite\User\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Lavalite\User\Interfaces\PermissionRepositoryInterface;

class PermissionPublicController extends CMSPublicController
{
    /**
     * Constructor.
     *
     * @param type \Lavalite\Permission\Interfaces\PermissionRepositoryInterface $permission
     *
     * @return type
     */
    public function __construct(PermissionRepositoryInterface $permission)
    {
        $this->model = $permission;
        parent::__construct();
    }

    /**
     * Show permission's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $permissions = $this->model->all();

        return $this->theme->of('user::public.permission.index', compact('permissions'))->render();
    }

    /**
     * Show permission.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $permission = $this->model->findBySlug($slug);

        return $this->theme->of('user::public.permission.show', compact('permission'))->render();
    }
}
