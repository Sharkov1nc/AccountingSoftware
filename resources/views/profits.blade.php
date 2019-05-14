@extends('default')
@section('libsCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>
    @endsection
@section('content')
    <div class="page-head">
        <h2 class="page-head-title">Profits</h2>
        <ol class="breadcrumb">
            <li><a href="{{route("Home")}}">Home</a></li>
            <li class="active">Profits</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget widget-fullwidth widget-small">
                    <div class="widget-head">
                        <div class="row table-title-create-button">
                            <div class="table-title col-md-6">Profits</div>
                            <div class="create-button col-md-6 text-right">
                                <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary add-profit-button"><span class="s7-plus" style="font-size: 16px;"> </span>Add Profit</button>
                            </div>
                        </div>
                    </div>
                    <table id="profits-table" class="table table-striped table-hover table-fw-widget">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Date</th>
                            <th>Clarification</th>
                            <th>Amount</th>
                            <th id="action-column" class="text-right">Actions</th>
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
                                            </ul>
                                            <form action="{{route("AddProfits")}}" id="add-profits-form" method="post">
                                                @csrf
                                                <div class="step-content">
                                                    <div data-step="1" class="step-pane active">
                                                        <div class="form-horizontal group-border-dashed">
                                                            <div class="form-group no-padding">
                                                                <div class="col-sm-7">
                                                                    <h3 class="wizard-title">User Info</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Client</label>
                                                                <div class="col-sm-6">
                                                                    <select class="select2" name="client" id="client-select">
                                                                       @foreach($Clients as $client )
                                                                            <option value="{{$client->id}}">{{$client->client}}</option>
                                                                           @endforeach
                                                                    </select>
                                                                   <div style="color: #ff0000; font-size: 13px; margin-top: 5px; font-weight: bold" id="client-error" class="hide validation-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Date </label>
                                                                <div class="col-sm-6">
                                                                    <div data-min-view="2" style="width :100%" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-5 col-xs-7">
                                                                        <input id="datepicker-1" type="text" name="date" value="{{old("date")}}" class="form-control"><span class="input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                                                                        <div style="color: #ff0000; font-size: 13px; margin-top: 5px; font-weight: bold" id="date-error" class="hide validation-errors"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Clarification</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="clarification" id="clarification" value="{{old("clarification")}}" placeholder="Clarification" class="form-control">
                                                                    <div style="color: #ff0000; font-size: 13px; margin-top: 5px; font-weight: bold" id="clarification-error" class="hide validation-errors"></div>
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
                                                                    <h3 class="wizard-title">Details</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group item-position-1">
                                                                <label class="col-sm-2 control-label">Item Position :</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="item-1" placeholder="Item..." class="form-control">
                                                                </div>
                                                                <div class="col-sm-3">
                                                                    <input type="text" name="item-price-1" placeholder="Item price..." class="form-control">
                                                                </div>
                                                                <div class="col-md-1">
                                                                    <button class="btn btn-primary new-item" type="button" ><span class="s7-plus"></span></button>
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

        $('#profits-table').dataTable({
            processing: true,
            serverSide: true,
            ajax : '{{route("LoadDataTableProfits") }}',
            columns: [
                { data: "client" , name : "client" , width : "20%" },
                { data: "date" , name : "date" , width : "20%" },
                { data: "clarification" , name : "clarification" , width : "20%" },
                { data: "amount" , name : "amount" , width : "20%" },
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

        // Datapicker Plugin

        $(".datetimepicker").datetimepicker({
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });


        // Create Profit Ajax

        let form = $("#add-profits-form");
        let modal = $("#md-custom");

        form.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function (data) {
                    let clientInput = $("#client-select");
                    let dateInput = $("#datepicker-1");
                    let clarificationInput = $("#clarification");
                    let amountInput = $("#amount");

                    if (data.errors){
                        if(data.errors.client){
                            clientInput.addClass("bdc-red");
                            $("#client-error").html(data.errors.client).removeClass("hide");
                        }
                        if(data.errors.date){
                            dateInput.addClass("bdc-red");
                            $("#date-error").html(data.errors.date).removeClass("hide");
                        }
                        if(data.errors.clarification){
                            clarificationInput.addClass("bdc-red");
                            $("#clarification-error").html(data.errors.clarification).removeClass("hide");
                        }
                        if(data.errors.amount){
                            amountInput.addClass("bdc-red");
                            $("#amount-error").html(data.errors.amount).removeClass("hide");
                        }
                    } else {
                        $(".validation-errors").addClass("hide");
                        $(".form-control").removeClass("bdc-red");
                        modal.modal("hide");
                        form[0].reset();
                        $(".wizard-previous").click();
                        let table = $('#profits-table').DataTable();
                        table.ajax.reload();
                        clearDynamicInputFields();
                    }
                },
                error: function () {
                    console.log('Ajax failed to send the data.');
                },
            });
        });

        // Dynamic Input Fields

        let elementsCount = 2;
        let dynamicInputField = (itemPosition = $(".item-position-1")) => {
            $(document).on('click', '.new-item' , function() {
                console.log(itemPosition);
                let newItemPosition = '<div class="form-group item-position-'+ elementsCount +'"><label class="col-sm-2 control-label">Item Position :</label> <div class="col-sm-6"> <input type="text" name="item-'+ elementsCount +'" placeholder="Item..." class="form-control"> </div> <div class="col-sm-3"> <input type="text" name="item-price-'+ elementsCount +'" placeholder="Item price..." class="form-control"> </div> <div class="col-md-1"> <button class="btn btn-primary new-item" type="button" ><span class="s7-plus"></span></button> </div> </div>';
                itemPosition.after(newItemPosition);
                elementsCount++;
                let element = ".item-position-" + (elementsCount-1);
                itemPosition =  $(element);
            });
        };
       $(document).on('click','.add-profit-button', function (e) {
           dynamicInputField();
           e.stopPropagation();

       });

        // Clear Dynamic Input Fields

       let clearDynamicInputFields = () => {
            if (elementsCount > 1){
                for (let i= elementsCount-1; i > 1; i--){
                    let element = ".item-position-" + i;
                    $(element).remove();
                }
            }
       };

        // Remove Profit Ajax

        $(document).on('click', '.remove-profit' , function() {
           let profitID = this.name;
            $.ajax({
                type: "GET",
                url: "{{route("RemoveProfit")}}",
                data: { id : profitID},
                success: function () {
                    let table = $('#profits-table').DataTable();
                    table.ajax.reload();
                },
                error: function () {
                    console.log('Remove Profit Failed');
                },
            });
        });

        // Edit Profit Ajax

        $(document).on('click', '.update-profit' , function() {
            let profitID = this.dataset.name;
            $.ajax({
                type: "GET",
                url: "{{route("LoadProfitDataToModal")}}",
                data: { id : profitID},
                success: function (data) {
                    modal.modal("show");
                    $("#clarification").val(data.profit.clarification);
                    $("#datepicker-1").val(data.profit.date.substring(0,10));
                    $("#client-select").val([data.profit.client_id]).trigger('change');
                    let currentItemPosition = $(".item-position-1");
                    for (elementsCount = 1;elementsCount <= data.pdCount;elementsCount++){
                        if (elementsCount > 1){
                            let newItemPosition = '<div class="form-group item-position-'+ elementsCount +'"><label class="col-sm-2 control-label">Item Position :</label> <div class="col-sm-6"> <input type="text" name="item-'+ elementsCount +'" placeholder="Item..." class="form-control"> </div> <div class="col-sm-3"> <input type="text" name="item-price-'+ elementsCount +'" placeholder="Item price..." class="form-control"> </div> <div class="col-md-1"> <button class="btn btn-primary new-item" type="button" ><span class="s7-plus"></span></button> </div> </div>';
                            currentItemPosition.after(newItemPosition);
                            let element = ".item-position-" + elementsCount;
                            currentItemPosition =  $(element);
                        }
                        let itemField = $("input[name = "+'item-' + elementsCount +"]");
                        itemField.val(data.profitDetails[elementsCount-1].item_position);
                        let itemPriceField = $("input[name = "+'item-price-' + elementsCount +"]");
                        itemPriceField.val(data.profitDetails[elementsCount-1].item_price);
                    }
                    dynamicInputField(currentItemPosition);
                },
                error: function () {
                    console.log('Ajax failed to load data to modal');
                },
            });
        });

        // Modal Close Remove Inserted Data

        modal.on('hidden.bs.modal', function () {
            $(".wizard-previous").click();
            form[0].reset();
            clearDynamicInputFields();
        });

    </script>
@endsection