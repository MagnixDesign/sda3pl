<?php

namespace Lavalite\User\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lavalite\Filer\FilerTrait;

class User extends Model
{
    use FilerTrait, SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Initialiaze page modal.
     *
     * @param $name
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Initialize the modal variables.
     *
     * @return void
     */
    public function initialize()
    {
        $this->fillable = config('user.user.fillable');
        $this->uploads = config('user.user.uploadable');
        $this->uploadRootFolder = config('user.user.upload_root_folder');
        $this->table = config('user.user.table');
    }
    /**
     * The roles that belong to the user.
     */
    public function roles(){
        return $this->belongsToMany('User\User\Models\Role');
    }


    /**
     * The permissions that belong to the user.
     */
    public function permissions(){
        return $this->belongsToMany('User\User\Models\Permission');
    }
}
