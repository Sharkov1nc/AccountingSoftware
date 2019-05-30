<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function positions()
    {
        return $this->belongsTo("App\Positions","position");
    }
    public function permissions()
    {
        return $this->belongsTo("App\Permissions","permission");
    }

}
