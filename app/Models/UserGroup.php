<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserGroup extends Model
{
    protected $table = 'user_group_permissions';
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'group_id','user_id', 'uuid' , 'updated_at',  'deleted_at', 'created_at',
    ];

    /**
     * @return all accounts order by id ASC
     */
    public static function getAll(){
        return self::all();
    }
    /*
     * get all by user_id
     * */
    public static function getAllByUserID($user_id = 0){
        return self::where("user_id" , $user_id)->get();
    }

    /*
     * get all by uuid
     * */
    public static function getAllByUUID($uuid = 0){
        return self::where("uuid" , $uuid)->get();
    }
    /*
     * get all by  id
     * */
    public static function getAllByID($id = 0){
        return self::where("id" , $id)->get();
    }




    /**
     * Relations
     */
    public function groupPermission(){
        return $this->belongsTo('App\Models\GroupPermission' , 'group_id' );
    }

    public function member(){
        return $this->belongsTo('App\Models\Member' , 'user_id' );
    }


}
