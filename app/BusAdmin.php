<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BusAdmin extends Model
{
    protected $table = "bus_admin";

    protected $fillable = [
        'email', 'password', 'company_name', 'balance', 'remember_token'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function busses(){
        return $this->hasMany('App\Bus', 'bus_admin_id');
    }
}
