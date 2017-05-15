<?php

namespace Lavalite\User\Http\Controllers;

use App\Http\Controllers\PublicController as CMSPublicController;
use Lavalite\User\Interfaces\UserRepositoryInterface;

class UserPublicController extends CMSPublicController
{
    /**
     * Constructor.
     *
     * @param type \Lavalite\User\Interfaces\UserRepositoryInterface $user
     *
     * @return type
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->model = $user;
        parent::__construct();
    }

    /**
     * Show user's list.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function index()
    {
        $users = $this->model->all();

        return $this->theme->of('user::public.user.index', compact('users'))->render();
    }

    /**
     * Show user.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function show($slug)
    {
        $user = $this->model->findBySlug($slug);

        return $this->theme->of('user::public.user.show', compact('user'))->render();
    }
}
