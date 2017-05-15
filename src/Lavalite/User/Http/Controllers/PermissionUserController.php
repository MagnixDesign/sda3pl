<?php

namespace Lavalite\User\Http\Controllers;

use App\Http\Controllers\UserController as UserController;
use Former;
use Lavalite\User\Http\Requests\PermissionUserRequest;
use Lavalite\User\Interfaces\PermissionRepositoryInterface;
use Response;
use User;

class PermissionUserController extends UserController
{
    /**
     * Initialize permission controller.
     *
     * @param type PermissionRepositoryInterface $permission
     *
     * @return type
     */
    public function __construct(PermissionRepositoryInterface $permission)
    {
        $this->model = $permission;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(PermissionUserRequest $request)
    {
        $permissions = $this->model->all();

        $this->theme->prependTitle(trans('user::permission.names').' :: ');

        return $this->theme->of('user::user.permission.index', compact('permissions'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(PermissionUserRequest $request, $role, $id)
    {
        $permission = $this->model->find($id);

        return $this->theme->of('user::user.permission.show', compact('permission'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(PermissionUserRequest $request)
    {
        $permission = $this->model->findOrNew(0);

        Former::populate($permission);

        return $this->theme->of('user::user.permission.create', compact('permission'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(PermissionUserRequest $request)
    {
        try {
            $attributes = $request->all();
            $permission = $this->model->create($attributes);

            return $this->success(trans('messages.success.created', ['Module' => trans('user::permission.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function edit(PermissionUserRequest $request, $role, $id)
    {
        $permission = $this->model->find($id);

        Former::populate($permission);

        return $this->theme->of('user::user.permission.edit', compact('permission'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(PermissionUserRequest $request, $role, $id)
    {
        try {
            $attributes = $request->all();
            $permission = $this->model->update($attributes, $id);

            return $this->success(trans('messages.success.updated', ['Module' => trans('user::permission.name')]));
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }

    /**
     * Remove the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy(PermissionUserRequest $request, $role, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('user::permission.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
