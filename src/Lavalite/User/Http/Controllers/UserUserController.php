<?php

namespace Lavalite\User\Http\Controllers;

use App\Http\Controllers\UserController as UserController;
use Former;
use Lavalite\User\Http\Requests\UserUserRequest;
use Lavalite\User\Interfaces\UserRepositoryInterface;
use Response;
use User;

class UserUserController extends UserController
{
    /**
     * Initialize user controller.
     *
     * @param type UserRepositoryInterface $user
     *
     * @return type
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->model = $user;
        $this->model->setUserFilter();
        parent::__construct();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(UserUserRequest $request)
    {
        $users = $this->model->all();

        $this->theme->prependTitle(trans('user::user.names').' :: ');

        return $this->theme->of('user::user.user.index', compact('users'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function show(UserUserRequest $request, $role, $id)
    {
        $user = $this->model->find($id);

        return $this->theme->of('user::user.user.show', compact('user'))->render();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function create(UserUserRequest $request)
    {
        $user = $this->model->findOrNew(0);

        Former::populate($user);

        return $this->theme->of('user::user.user.create', compact('user'))->render();
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(UserUserRequest $request)
    {
        try {
            $attributes = $request->all();
            $user = $this->model->create($attributes);

            return $this->success(trans('messages.success.created', ['Module' => trans('user::user.name')]));
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
    public function edit(UserUserRequest $request, $role, $id)
    {
        $user = $this->model->find($id);

        Former::populate($user);

        return $this->theme->of('user::user.user.edit', compact('user'))->render();
    }

    /**
     * Update the specified resource.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(UserUserRequest $request, $role, $id)
    {
        try {
            $attributes = $request->all();
            $user = $this->model->update($attributes, $id);

            return $this->success(trans('messages.success.updated', ['Module' => trans('user::user.name')]));
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
    public function destroy(UserUserRequest $request, $role, $id)
    {
        try {
            $this->model->delete($id);

            return $this->success(trans('message.success.deleted', ['Module' => trans('user::user.name')]), 200);
        } catch (Exception $e) {
            return $this->error($e->getMessage());
        }
    }
}
