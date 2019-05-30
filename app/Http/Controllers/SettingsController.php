<?php

namespace App\Http\Controllers;

use App\Permissions;
use App\PermissionsPositionsM2M;
use App\Positions;
use App\Tasks;
use Illuminate\Http\Request;
use App\User;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class SettingsController extends Controller
{
    // Users

    public function createUser(Request $request){

        // Validator ---> TODO
        $position_code = $request->get("position");
        $position = Positions::where("position_code",$position_code)->first();

        User::updateOrCreate([
            "name" => $request->get("name"),
            "email" => $request->get("email")
        ],[
            'password' => Hash::make($request->get('password')),
            "position" => $position->id,
            "administrator" => false,
            "developer" => false,
            "image_url" =>  $request->get("image") ? $request->get("image") : null
        ]);
    }

    public function loadDataToDataTableUser(){
        $user = User::all();
        return DataTables::of($user)
            ->addColumn(
                "actions",function ($user){
                return '<a type="button" data-id="'.$user->id.'" data-action="view" class="btn btn-primary open-user-information"><i class="icon s7-menu"></i></a>
                       <a type="button" data-id="'.$user->id.'" data-action="edit" class="btn btn-primary edit-user"><i class="icon s7-pen"></i></a>
                       <a type="button" data-id="'.$user->id.'" class="btn btn-primary remove-user"><i class="icon s7-trash"></i></a>
                      ';
            })
            ->addColumn(
                "position",function ($user){
                    return $user->positions->position ? "<label class='label label-success'> {$user->positions->position} </label>" : "<label class='label label-info'>Undefined</label>";
            })
            ->rawColumns(['actions','position'])
            ->make(true);
    }

    public function viewOrEditUser(Request $request){
        $user = User::find($request->get("id"));
        $response = ["user" => $user,"positionName" => $user->positions->position_code];
        return Response::json($response);
    }

    public function removeUser(Request $request){
        User::find($request->get("id"))->delete();
    }

    // Permissions

    public function permissionsList(){
       return view("settings",["positions" => Positions::all(), "permissions" => Permissions::all(),"users" => User::all()]);
    }

    public function setUnsetPermissions(Request $request){
        $position = $request->get("position");
        $permission = $request->get("permission");
        $m2m = PermissionsPositionsM2M::where([
            "position" => $position,
            "permission" => $permission
        ])->first();
        if ($m2m){
           $m2m->delete();
        } else {
           PermissionsPositionsM2M::create([
               "position" => $position,
               "permission" => $permission
           ]);
        }
    }

    // Tasks

    public function createTask(Request $request){

        // Validator ---> TODO

        Tasks::create([
            "name" => $request->get("task-name"),
            "recipient" => $request->get("task-recipient"),
            'task' => $request->get('task'),
            "completed" => false
        ]);
    }

    public function loadDataToDataTableTask(){
        $task = Tasks::all();
        return DataTables::of($task)
            ->addColumn(
                "actions",function ($task){
                return ' <a type="button" data-id="'.$task->id.'" class="btn btn-primary mark-task-as-completed"><i class="icon s7-check"></i></a>
                       <a type="button" data-id="'.$task->id.'" class="btn btn-primary open-task-information"><i class="icon s7-menu"></i></a>
                       <a type="button" data-id="'.$task->id.'" class="btn btn-primary remove-task"><i class="icon s7-trash"></i></a>
                      ';
            })
            ->addColumn(
                "recipient",function ($task){
                return $task->recipients->name;
            })
            ->addColumn(
                "completed",function ($task){
                return $task->completed ? "<label class='label label-success'> Completed </label>" : "<label class='label label-primary'>Unfinished</label>";
            })
            ->rawColumns(['actions','completed'])
            ->make(true);
    }

    public function viewTask(Request $request){
        $task = Tasks::find($request->get("id"));
        $response = ["task" => $task];
        return Response::json($response);
    }

    public function markTaskAsCompleted(Request $request){
        $task = Tasks::find($request->get("id"));
        $task->completed = true;
        $task->save();
    }

    public function removeTask(Request $request){
        Tasks::find($request->get("id"))->delete();
    }

}
