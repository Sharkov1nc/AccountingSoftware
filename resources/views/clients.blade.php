@extends('default')
@section('libsCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
@endsection
@section('content')
    <div class="page-head">
        <h2 class="page-head-title">Clients</h2>
        <ol class="breadcrumb">
            <li><a href="{{route("Home")}}">Home</a></li>
            <li class="active">Clients</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget widget-fullwidth widget-small">
                    <div class="widget-head">
                        <div class="row table-title-create-button">
                            <div class="table-title col-md-6">Clients</div>
                            <div class="create-button col-md-6 text-right">
                                <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary"><span class="s7-plus" style="font-size: 16px;"> </span>Add Client</button>
                            </div>
                        </div>
                    </div>
                    <table id="client-table" class="table table-striped table-hover table-fw-widget">
                        <thead>
                            <tr>
                                <th>Client</th>
                                <th>Contact Person</th>
                                <th>Type</th>
                                <th>Phone Number</th>
                                <th id="action-column">Actions</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div id="md-custom" role="dialog" class="modal fade modal-colored-header">
                <div class="modal-dialog modal-custom-width">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
                            <h3 class="modal-title">Add Profit</h3>
                        </div>
                        <div class="modal-body">
                            <div class="row wizard-row">
                                <div class="col-md-12 fuelux">
                                    <div class="block-wizard panel panel-default">
                                        <div id="wizard1" class="wizard wizard-ux">
                                            <ul class="steps">
                                                <li data-step="1" id="step1" class="active">Step 1<span class="chevron"></span></li>
                                                <li data-step="2" id="step2" >Step 2<span class="chevron"></span></li>
                                                <li data-step="3" id="step3" >Step 3<span class="chevron"></span></li>
                                            </ul>
                                            <form action="{{route("CreateClient")}}" id="create-client" method="get" >
                                                <div class="step-content">
                                                    <div data-step="1" class="step-pane active">
                                                        <div class="form-horizontal group-border-dashed">
                                                            <div class="form-group no-padding">
                                                                <div class="col-sm-7">
                                                                    <h3 class="wizard-title">Client Information</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Client</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="company" placeholder="Company name" name="client" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">City</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="city" placeholder="City" name="city" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Address</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="address" placeholder="Address" name="address" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
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
                                                                    <h3 class="wizard-title">Contact Information</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Contact person</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="contact-person" name="contact-person" placeholder="Contact person" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Phone number</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="phone" name="phone" placeholder="Phone number" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">E-mail</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" id="email" name="email" placeholder="E-mail" class="form-control">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous"><i class="icon s7-angle-left"></i> Previous</button>
                                                                    <button data-wizard="#wizard1" class="btn btn-primary btn-space wizard-next">Next Step <i class="icon s7-angle-right"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div data-step="3" class="step-pane">
                                                        <div class="form-horizontal group-border-dashed">
                                                            <div class="form-group no-padding">
                                                                <div class="col-sm-7">
                                                                    <h3 class="wizard-title">Client Type</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-7">
                                                                    <label class="control-label">Legal Entity</label>
                                                                    <p>This option define client type.</p>
                                                                </div>
                                                                <div class="col-sm-3 xs-pt-15">
                                                                    <div class="switch-button">
                                                                        <input type="checkbox" name="type" id="swt1"><span>
                                                                <label for="swt1"></label></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-12">
                                                                    <button data-wizard="#wizard1" class="btn btn-default btn-space wizard-previous"><i class="icon s7-angle-left"></i> Previous</button>
                                                                    <button type="submit" class="btn btn-primary btn-space"><i class="icon s7-check"></i> Complete</button>
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

        // Load Data To DataTable

        $('#client-table').DataTable({
            processing: true,
            serverSide: true,
            ajax : '{{route("LoadDataTableClients") }}',
            columns: [
                { data: "client" , name : "client" , width : "20%"},
                { data: "contact_person" , name : "contact_person" , width : "20%"},
                { data: "type" , name : "type" , width : "20%"},
                { data: "phone" , name : "phone" , width : "20%"},
                { data: "actions" , name : 'actions', width : "20%"}
            ],
            columnDefs: [
                { className: "text-right", "targets": [4] }
            ],
            dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6' f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
            "lengthMenu": [[25, 50, 100], [25, 50, 100]],
        });
        $("#action-column").removeClass('text-right');

       // Global Variables

        let form = $("#create-client");
        let modal = $("#md-custom");
        let table = $('#client-table').DataTable();

        // Create Client Ajax

        form.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function () {
                    modal.modal("hide");
                    form[0].reset();
                    $(".wizard-previous").click();
                    table.ajax.reload();
                },
                error: function () {
                    console.log('Ajax failed to send the data.');
                },
            });
        });

        // View & Update Client Ajax

        $(document).on('click', '.open-client-information, .edit-client' , function() {
            let clientID = this.dataset.id;
            let actionType = this.dataset.action;
            $.ajax({
                type: "GET",
                url: "{{route("ViewOrEditClient")}}",
                data: { id : clientID},
                success: function (data) {
                    modal.modal("show");
                    $("#company").val(data.client.client);
                    $("#address").val(data.client.address);
                    $("#city").val(data.client.city);
                    $("#contact-person").val(data.client.contact_person);
                    $("#phone").val('0' + data.client.phone);
                    $("#email").val(data.client.email);
                    if (data.client.type === 1) {
                        $("#swt1").prop("checked",true);
                    }
                    if (actionType === "view"){
                        $(".form-group input").attr("disabled",true).css("color","black");
                    }
                    if (actionType === "edit"){
                        $(".form-group input").removeAttr("disabled").css("color","#777777");
                    }
                },
                error: function () {
                    console.log('Update Profit Detail Failed');
                },
            });
        });

        // Remove Client Ajax

        $(document).on('click', '.remove-client' , function() {
            let clientID = this.dataset.id;
            $.ajax({
                type: "GET",
                url: "{{route("RemoveClient")}}",
                data: { id : clientID},
                success: function () {
                    table.ajax.reload();
                },
                error: function () {
                    console.log('Remove Client Failed');
                },
            });
        });


        // Modal Close Redirect To First Step Of Wizard

        modal.on('hidden.bs.modal', function () {
            form[0].reset();
            $(".form-group input").removeAttr("disabled").css("color","#777777");
            $(".wizard-previous").click();
        });


    </script>
@endsection