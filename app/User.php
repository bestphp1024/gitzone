<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';
    //不设置时间字段
    public $timestamps = false;
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function abc()
    {
        return $this->all();
    }

    public function userAdd()
    {
        $this->user_name = 'ruto';
        $this->user_password = '1234565';
        $this->save();
    }

    public function userUpdate()
    {
        $user = $this->find(1);
        $user->user_name = '1024';
        $user->user_password = '1024';
        $user->save();
    }

    public function usersUpdate()
    {
        $users = $this->where('user_id', '>', 2);
        $users->update(['user_name' => 'leo', 'user_password' => 'lion']);
    }

}
