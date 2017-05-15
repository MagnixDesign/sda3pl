<?php

namespace Lavalite\User\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lavalite\Filer\FilerTrait;

class Permission extends Model
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
        $this->fillable = config('user.permission.fillable');
        $this->uploads = config('user.permission.uploadable');
        $this->uploadRootFolder = config('user.permission.upload_root_folder');
        $this->table = config('user.permission.table');
    }
    /**
     * The roles that belong to the permission.
     */
    public function roles(){
        return $this->belongsToMany('User\Permission\Models\Role');
    }


    /**
     * The users that belong to the permission.
     */
    public function users(){
        return $this->belongsToMany('User\Permission\Models\User');
    }
}
