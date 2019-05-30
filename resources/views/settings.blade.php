@extends("default")
@section("libsCSS")
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    @endsection
@section("content")
    <div class="page-head">
        <h2 class="page-head-title">Settings</h2>
        <ol class="breadcrumb">
            <li><a href="{{route("Home")}}">Home</a></li>
            <li class="active">Settings</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="tab-container">
                    <ul class="nav nav-tabs">
                        <li class="active "><a href="#users" data-toggle="tab">Users Settings</a></li>
                        <li><a href="#permissions" data-toggle="tab">Permissions</a></li>
                        <li><a href="#tasks" data-toggle="tab">Tasks</a></li>
                        <li><a href="#notes" data-toggle="tab">Notes</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="users" class="tab-pane active cont">
                            <div class="widget widget-fullwidth widget-small">
                                <div class="widget-head">
                                    <div class="row table-title-create-button">
                                        <div class="table-title col-md-6">Users</div>
                                        <div class="create-button col-md-6 text-right">
                                            <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary"><span class="s7-plus" style="font-size: 16px;"> </span>Add User</button>
                                        </div>
                                    </div>
                                </div>
                                <table id="user-table" class="table table-striped table-hover table-fw-widget">
                                    <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>E-mail</th>
                                        <th>Position</th>
                                        <th class="action-column">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div id="md-custom" role="dialog" class="modal fade modal-colored-header">
                                <div class="modal-dialog modal-custom-width">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
                                            <h3 class="modal-title">Add User</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row wizard-row">
                                                <div class="col-md-12 fuelux">
                                                    <div class="block-wizard panel panel-default">
                                                        <div id="wizard1" class="wizard wizard-ux">
                                                            <ul class="steps">
                                                                <li data-step="1" id="step1" class="active">Step 1<span class="chevron"></span></li>
                                                                <li data-step="2" id="step2" >Step 2<span class="chevron"></span></li>
                                                            </ul>
                                                            <form action="{{route("CreateUser")}}" id="create-user" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="step-content">
                                                                    <div data-step="1" class="step-pane active">
                                                                        <div class="form-horizontal group-border-dashed">
                                                                            <div class="form-group no-padding">
                                                                                <div class="col-sm-7">
                                                                                    <h3 class="wizard-title">User Information</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-user">
                                                                                <label class="col-sm-3 control-label">Name</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" id="name" placeholder="Name" name="name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-user">
                                                                                <label class="col-sm-3 control-label">E-mail</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="email" id="email" placeholder="E-mail" name="email" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-user" id="password-label">
                                                                                <label class="col-sm-3 control-label">Password</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" id="password" name="password" value="@php echo "sh".rand(2019,99123)."ind"; @endphp" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-user">
                                                                                <div class="col-sm-offset-2 col-sm-10">
                                                                                    <button class="btn btn-default btn-space" data-dismiss="modal">Cancel</button>
                                                                                    <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step <i class="icon s7-angle-right"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div data-step="2" class="step-pane">
                                                                        <div class="form-horizontal group-border-dashed">
                                                                            <div class="form-group no-padding">
                                                                                <div class="col-sm-7">
                                                                                    <h3 class="wizard-title"> Detail User Information</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-user">
                                                                                <label class="col-sm-3 control-label">Position</label>
                                                                                <div class="col-sm-6">
                                                                                    <select class="select2" name="position" id="position-select">
                                                                                        @foreach($positions as $position )
                                                                                            <option value="{{$position->position_code}}">{{$position->position}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-user">
                                                                                <label class="col-sm-3 control-label">Image Link</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="file" name="image" id="image" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="col-sm-10 col-sm-offset-2">
                                                                                    <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous"><i class="icon s7-angle-left"></i> Previous</button>
                                                                                    <button type="submit" class="btn btn-primary btn-space complate-btn"><i class="icon s7-check"></i> Complete</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="permissions" class="tab-pane">
                            <div id="accordion1" class="panel-group accordion">
                                <div class="row">
                               @php
                                    $i=0;
                                    $k=0;
                               @endphp
                                @foreach($positions as $pt)
                                    @php $positionsArr = \App\PermissionsPositionsM2M::permissionExists($pt->id) @endphp
                                    <div class="col-md-6">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion1" href="#collapse-{{$i}}" class="collapsed"><i class="icon s7-angle-down-circle"></i> {{$pt->position}}</a></h4>
                                            </div>
                                            <div id="collapse-{{$i}}" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <table class="table">
                                                        <tbody>
                                                        @foreach($permissions as  $permission)
                                                            <tr>
                                                                <td>{{$permission->permission}}</td>
                                                                <td>
                                                                    <div class="switch-button">
                                                                        <input type="checkbox" name="{{$permission->id}}" data-name="{{$pt->id}}" @if(in_array($permission->permission_code,$positionsArr)) checked @endif id="swt-{{$k}}"><span><label for="swt-{{$k}}"></label></span>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                @php $k++ @endphp
                                                @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   @php $i++ @endphp
                                @endforeach
                                </div>
                            </div>
                        </div>
                        <div id="tasks" class="tab-pane">
                            <div class="widget widget-fullwidth widget-small">
                                <div class="widget-head">
                                    <div class="row table-title-create-button">
                                        <div class="table-title col-md-6">Tasks</div>
                                        <div class="create-button col-md-6 text-right">
                                            <button data-toggle="modal" data-target="#md-custom-task" type="button" class="btn btn-space btn-primary"><span class="s7-plus" style="font-size: 16px;"> </span>Add Task</button>
                                        </div>
                                    </div>
                                </div>
                                <table id="tasks-table" class="table table-striped table-hover table-fw-widget" width="100%">
                                    <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Recipient</th>
                                        <th>Status</th>
                                        <th class="action-column">Actions</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <div id="md-custom-task" role="dialog" class="modal fade modal-colored-header">
                                <div class="modal-dialog modal-custom-width">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
                                            <h3 class="modal-title">Add Task</h3>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row wizard-row">
                                                <div class="col-md-12 fuelux">
                                                    <div class="block-wizard panel panel-default">
                                                        <div id="wizard1" class="wizard wizard-ux">
                                                            <ul class="steps">
                                                                <li data-step="1" id="step1" class="active">Step 1<span class="chevron"></span></li>
                                                            </ul>
                                                            <form action="{{route("CreateTask")}}" id="create-task" method="get">
                                                                <div class="step-content">
                                                                    <div data-step="1" class="step-pane active">
                                                                        <div class="form-horizontal group-border-dashed">
                                                                            <div class="form-group no-padding">
                                                                                <div class="col-sm-7">
                                                                                    <h3 class="wizard-title">Task Information</h3>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-task">
                                                                                <label class="col-sm-3 control-label">Task Title</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" id="task-name" placeholder="Task Title" name="task-name" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-task">
                                                                                <label class="col-sm-3 control-label">Recipient</label>
                                                                                <div class="col-sm-6">
                                                                                    <select class="select2" name="task-recipient" id="recipient-select">
                                                                                        @foreach($users as $user )
                                                                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group form-group-task">
                                                                                <label class="col-sm-3 control-label">Task Content</label>
                                                                                <div class="col-sm-6">
                                                                                    <textarea name="task" id="task" class="form-control"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <div class="col-sm-10 col-sm-offset-2">
                                                                                    <button class="btn btn-default btn-space" data-dismiss="modal">Cancel</button>
                                                                                    <button type="submit" class="btn btn-primary btn-space complate-btn"><i class="icon s7-check"></i> Complete</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="notes" class="tab-pane">
                            <!--
                             Notes Content
                             All notes
                             Create note to user action
                             -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
@section('libsJS')
    <script src="{{ URL::asset('amaretti/html/assets/lib/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/datatables/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/js/app-tables-datatables.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/fuelux/js/wizard.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/select2/js/select2.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

        // Wizard init
        var App = (function () {
            'use strict';

            App.wizard = function( ){

                //Fuel UX
                $('.wizard-ux').wizard();

                $('.wizard-ux').on('changed.fu.wizard',function(){
                    //Bootstrap Slider
                    $('.bslider').slider();
                });

                $(".wizard-next").click(function(e){
                    var id = $(this).data("wizard");
                    $(id).wizard('next');
                    e.preventDefault();
                });

                $(".wizard-previous").click(function(e){
                    var id = $(this).data("wizard");
                    $(id).wizard('previous');
                    e.preventDefault();
                });

                // Select2
                $(".select2").select2({
                    width: '100%'
                });

                //Select2 tags
                $(".tags").select2({tags: true, width: '100%'});

            };

            return App;
        })(App || {});

        // Call Functions

        App.wizard();
        App.dataTables();

        // Load User Data To DataTable --> User Tab

        $('#user-table').DataTable({
            processing: true,
            serverSide: true,
            ajax : '{{route("LoadDataTableUser") }}',
            columns: [
                { data: "name" , name : "name" , width : "30%"},
                { data: "email" , name : "email" , width : "30%"},
                { data: "position" , name : "position" , width : "20%"},
                { data: "actions" , name : 'actions', width : "20%"}
            ],
            columnDefs: [
                { className: "text-right", "targets": [3] }
            ],
            dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6' f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
            "lengthMenu": [[25, 50, 100], [25, 50, 100]],
        });

        // Load Tasks Data To DataTable --> Tasks Tab

        $('#tasks-table').DataTable({
            processing: true,
            serverSide: true,
            ajax : '{{route("LoadDataTableTask") }}',
            columns: [
                { data: "name" , name : "name" , width : "30%"},
                { data: "recipient" , name : "recipient" , width : "30%"},
                { data: "completed" , name : "completed" , width : "20%"},
                { data: "actions" , name : 'actions', width : "20%"}
            ],
            columnDefs: [
                { className: "text-right", "targets": [3] }
            ],
            dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6' f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
            "lengthMenu": [[25, 50, 100], [25, 50, 100]],
        });

        // Action Column Position
        $(".action-column").removeClass('text-right');

        // Global Variables
        let userForm = $("#create-user");
        let taskForm = $("#create-task");
        let userModal = $("#md-custom");
        let taskModal = $("#md-custom-task");
        let userTable = $('#user-table').DataTable();
        let taskTable = $('#tasks-table').DataTable();

        // Create User Ajax --> User Tab

        userForm.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: userForm.attr('method'),
                url: userForm.attr('action'),
                enctype : userForm.attr('enctype'),
                data: userForm.serialize(),
                success: function () {
                    userModal.modal("hide");
                    userForm[0].reset();
                    $(".wizard-previous").click();
                    userTable.ajax.reload();
                },
                error: function () {
                    console.log('Ajax failed to send the data.');
                },
            });
        });

        // View & Update User Ajax --> User Tab

        $(document).on('click', '.open-user-information, .edit-user' , function() {
            let userID = this.dataset.id;
            let actionType = this.dataset.action;
            $.ajax({
                type: "GET",
                url: "{{route("ViewOrEditUser")}}",
                data: { id : userID},
                success: function (data) {
                    userModal.modal("show");
                    $("#name").val(data.user.name);
                    $("#email").val(data.user.email);
                    $("#password-label").hide();
                    $("#position-select").val([data.positionName]).trigger("change");
                    $("#image").val(data.user.image_url);
                    if (actionType === "view"){
                        $(".form-group-user input").attr("disabled",true).css("color","black");
                        $(".complate-btn").hide();
                    }
                },
                error: function () {
                    console.log('Update User Failed');
                },
            });
        });

        // Remove User Ajax --> User Tab

        $(document).on('click', '.remove-user' , function() {
            let userID = this.dataset.id;
            $.ajax({
                type: "GET",
                url: "{{route("RemoveUser")}}",
                data: { id : userID},
                success: function () {
                    userTable.ajax.reload();
                },
                error: function () {
                    console.log('Remove User Failed');
                },
            });
        });


        // User Modal Close Redirect To First Step Of Wizard --> User Tab

        userModal.on('hidden.bs.modal', function () {
            userForm[0].reset();
            $("#password-label").show();
            $(".complate-btn").show();
            $(".form-group-user input").removeAttr("disabled").css("color","#777777");
            $(".wizard-previous").click();
        });


        // Set / Unset Permission Ajax --> Permissions Tab

        $(document).on("change",'.switch-button>input',function () {
            let position = this.dataset.name;
            let permission = this.name;
            $.ajax({
                type: "GET",
                url: "{{route("SetUnsetPermissions")}}",
                data: { position : position, permission : permission},
                success: function () {},
                error: function () {
                    console.log('Failed To Set/Unset Permission');
                },
            });
        });

        // Create Task --> Task Tab

        taskForm.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: taskForm.attr('method'),
                url: taskForm.attr('action'),
                data: taskForm.serialize(),
                success: function () {
                    taskModal.modal("hide");
                    taskForm[0].reset();
                    taskTable.ajax.reload();
                },
                error: function () {
                    console.log('Ajax failed to send the data.');
                },
            });
        });

        // View Task Ajax --> Task Tab

        $(document).on('click', '.open-task-information' , function() {
            let taskID = this.dataset.id;
            $.ajax({
                type: "GET",
                url: "{{route("ViewTask")}}",
                data: { id : taskID},
                success: function (data) {
                    taskModal.modal("show");
                    $("#task-name").val(data.task.name);
                    $("#task").val(data.task.task);
                    $("#recipient-select").val([data.task.recipient]).trigger("change");
                    $(".form-group-task input").attr("disabled",true).css("color","black");
                    $(".form-group-task textarea").attr("disabled",true).css("color","black");
                    $(".form-group-task select").attr("disabled",true).css("color","black");
                    $(".complate-btn").hide();
                },
                error: function () {
                    console.log('View Task Failed');
                },
            });
        });

        // Remove Task Ajax --> Task Tab

        $(document).on('click', '.remove-task' , function() {
            let taskID = this.dataset.id;
            $.ajax({
                type: "GET",
                url: "{{route("RemoveTask")}}",
                data: { id : taskID},
                success: function () {
                    taskTable.ajax.reload();
                },
                error: function () {
                    console.log('Remove Task Failed');
                },
            });
        });

        // Mark Task As Completed Ajax --> Task Tab

        $(document).on('click', '.mark-task-as-completed' , function() {
            let taskID = this.dataset.id;
            $.ajax({
                type: "GET",
                url: "{{route("MarkTaskAsCompleted")}}",
                data: { id : taskID},
                success: function () {
                    taskTable.ajax.reload();
                },
                error: function () {
                    console.log('Mark Task As Completed Failed');
                },
            });
        });

        // Task Modal Close Clear Information Content --> Task Tab

        taskModal.on('hidden.bs.modal', function () {
            taskForm[0].reset();
            $(".complate-btn").show();
            $(".form-group-task input").removeAttr("disabled").css("color","#777777");
            $(".form-group-task textarea").removeAttr("disabled").css("color","#777777");
            $(".form-group-task select").removeAttr("disabled").css("color","#777777");
        });


    </script>
@endsection
