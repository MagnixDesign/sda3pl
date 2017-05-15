<?php

namespace Lavalite\User\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Lavalite\Filer\FilerTrait;

class Role extends Model
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
        $this->fillable = config('user.role.fillable');
        $this->uploads = config('user.role.uploadable');
        $this->uploadRootFolder = config('user.role.upload_root_folder');
        $this->table = config('user.role.table');
    }
    /**
     * The users that belong to the role.
     */
    public function users(){
        return $this->belongsToMany('User\Role\Models\User');
    }


    /**
     * The permissions that belong to the role.
     */
    public function permissions(){
        return $this->belongsToMany('User\Role\Models\Permission');
    }
}
