<?php

namespace App\Models\Projects;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Projects extends Model
{
    public static function getuserData($id=0){

        if($id==0){
            $value=DB::table('projects')->orderBy('id', 'asc')->get();
        }else{
            $value=DB::table('projects')->where('id', $id)->first();
        }
        return $value;

    }
    protected $fillable = [
        'name', 'detail'
    ];
}
