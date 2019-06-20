<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PermissionsPositionsM2M extends Model
{
    protected $fillable = ["position","permission"];

    protected $table = "permissions_positions_m2m";

    static public function permissionExists($position){
        $data = [];
        $perm2m = PermissionsPositionsM2M::where("position", $position)->get();
        foreach ($perm2m as $perm) {
            $data[] = $perm->permissions->permission_code;
        }
        return $data;
    }

    static public function hasPermission($perm){
       $permission = Permissions::where("permission_code",$perm)->first();
       $user = User::where("id",Auth::id())->first();
       $permExists = PermissionsPositionsM2M::where([
           "permission" => $permission->id,
           "position" => $user->position
       ])->first();
       if ($permExists) {
           return true;
       }
       return false;
    }

    public function positions()
    {
        return $this->belongsTo("App\Positions","position");
    }
    public function permissions()
    {
        return $this->belongsTo("App\Permissions","permission");
    }

}
