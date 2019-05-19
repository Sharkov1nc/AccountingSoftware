<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use App\Constants;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string("permission",64);
            $table->string("permission_code",64);
            $table->timestamps();
        });
        foreach (Constants::permissions as $key => $val){
            $this->InsertPermissions($val,$key);
        }
    }

    /**
     * Insert Permissions Function
     * @param $permission
     * @param $permissionCode
     *
     */

    public function InsertPermissions($permission,$permissionCode){
        DB::table("permissions")->insert([
            "permission" => $permission,
            "permission_code" => $permissionCode
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
