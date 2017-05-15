<?php

namespace Lavalite\User\Http\Controllers;

use App\Http\Controllers\UserController as UserController;
use Former;
use Lavalite\User\Http\Requests\RoleUserRequest;
use Lavalite\User\Interfaces\RoleRepositoryInterface;
use Response;
use User;

class RoleUserController extends UserController
{
    /**
     * Initialize role controller.
     *
     * @param type RoleRepositoryInterface $role
     *
     * @return type
     */
    public function __construct(RoleRepositoryInterface $role)
    {
        $this->model = $role;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(RoleUserRequest $request)
    {
        $roles = $this->model->all();

        $this->theme->prependTitle(trans('user::role.names').' :: ');

        return $this->theme->of('user::user.role.index', compact('roles'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(RoleUserRequest $request, $role, $id)
    {
        $role = $this->model->find($id);

        return $this->theme->of('user::user.role.show', compact('role'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(RoleUserRequest $request)
    {
        $role = $this->model->findOrNew(0);

        Former::populate($role);

        return $this->theme->of('user::user.role.create', compact('role'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(RoleUserRequest $request)
    {
        try {
            $attributes = $request->all();
            $role = $this->model->create($attributes);

            return $this->success(trans('messages.success.created', ['Module' => trans('user::role.name')]));
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
    public function edit(RoleUserRequest $request, $role, $id)
    {
        $role = $this->model->find($id);

        Former::populate($role);

        return $this->theme->of('user::user.role.edit', compact('role'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(RoleUserRequest $request, $role, $id)
    {
        try {
            $attributes = $request->all();
            $role = $this->model->update($attributes, $id);

            return $this->success(trans('messages.success.updated', ['Module' => trans('user::role.name')]));
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
    public function destroy(RoleUserRequest $request, $role, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('user::role.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
