@extends("default")
@section("libsCSS")
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
@endsection
@section("content")
    <div class="page-head">
        <h3 class="page-head-title">{{$expense->clarification}}</h3>
        <ol class="breadcrumb">
            <li><a href="{{route("Home")}}">Home</a></li>
            <li><a href="{{route("Expenses")}}">Expenses</a></li>
            <li><a href="">{{$expense->client->client}}</a></li>
            <li class="active">{{$expense->clarification}}</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-sm-12">
               <div class="panel panel-default">
                  <div class="panel-body">
                      <div class="row dashboard-information">
                          <br>
                          <div class="col-md-4">
                              <ul style="list-style-type:none;">
                                  <li>Clarification : <a href="">{{$expense->clarification}}</a></li> <br>
                                  <li>Date : <a href="">{{substr($expense->date,0,10)}}</a></li> <br>
                                  <li>Amount : <a href="">{{number_format($expense->amount, 2, ',', ' ') .'‎ €'}}</a></li> <br>
                              </ul>
                          </div>
                          <div class="col-md-4">
                              <ul style="list-style-type:none;">
                                  <li>Client : <a href="">{{$expense->client->client}}</a></li> <br>
                                  <li>Contact Person : <a href="">{{$expense->client->contact_person}}</a></li> <br>
                                  <li>Phone Number : <a href="">{{'0'. $expense->client->phone}}</a></li> <br>
                              </ul>
                          </div>
                          <div class="col-md-4">
                              <ul style="list-style-type:none;">
                                  <li>Created By : <a href="">{{$expense->createdBy->name}}</a></li> <br>
                                  <li>Client Type : <a href="">@if($expense->client->type) Legal Entity @else Individual @endif </a></li> <br>
                                  <li>Related Items : <a href="">{{count($expenseDetails)}}</a></li> <br>
                              </ul>
                          </div>
                      </div>
                  </div>
               </div>
                <div class="widget widget-fullwidth widget-small">
                    <div class="widget-head">
                        <div class="row table-title-create-button">
                            <div class="table-title col-md-6">{{$expense->clarification . " Details"}}</div>
                        </div>
                    </div>
                    <br>
                    <table id="expenses-table" class="table table-striped table-hover table-fw-widget">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Amount</th>
                            <th id="action-column" class="text-right">Actions</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="md-custom" role="dialog" class="modal fade modal-colored-header">
        <div class="modal-dialog modal-custom-width">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><i class="icon s7-close"></i></button>
                    <h3 class="modal-title">Update Expense Detail</h3>
                </div>
                <div class="modal-body">
                    <div class="row wizard-row">
                        <form action="{{route("UpdateExpenseDetail")}}" id="update-expenses-detail-form" method="get">
                            <div class="form-horizontal group-border-dashed">
                                <div class="form-group no-padding">
                                    <div class="form-group">
                                        <br>
                                        <label class="col-sm-2 control-label">Item Position :</label>
                                        <div class="col-sm-6">
                                            <input type="text" name="item" placeholder="Item..." id="item" class="form-control">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="item-price" placeholder="Item price..." id="item-price" class="form-control">
                                        </div>
                                        <input type="hidden" id="expense-detail-id" name="pd-id">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 text-right">
                                    <br>
                                    <button type="submit" class="btn btn-primary btn-space"><i class="icon s7-check"></i> Save</button>
                                    <button class="btn btn-default btn-space" data-dismiss="modal"> Cancel</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section("libsJS")
    <script src="{{ URL::asset('amaretti/html/assets/lib/datatables/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/datatables/js/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/lib/datatables/plugins/buttons/js/dataTables.buttons.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('amaretti/html/assets/js/app-tables-datatables.js') }}" type="text/javascript"></script>
    <script>
        App.dataTables();

        // Load Data To Table

        $('#expenses-table').dataTable({
            processing: true,
            serverSide: true,
            ajax : '{{route("LoadExpenseDetailsData",["id" => $expense->id]) }}',
            columns: [
                { data: "item_position" , name : "item_position" , width : "60%" },
                { data: "amount" , name : "amount" , width : "20%" },
                { data: "actions" , name : 'actions', width : "20%"}
            ],
            columnDefs: [
                { className: "text-right", "targets": [2] }
            ],
            dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6' f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
            "lengthMenu": [[10, 25, 50], [10, 25, 50]],
        });

        // Remove Expense Detail Ajax

        $(document).on('click', '.remove-expense-detail' , function() {
            let expenseID = this.name;
            $.ajax({
                type: "GET",
                url: "{{route("RemoveExpenseDetail")}}",
                data: { id : expenseID},
                success: function () {
                    let table = $('#expenses-table').DataTable();
                    table.ajax.reload();
                },
                error: function () {
                    console.log('Remove Expense Detail Failed');
                },
            });
        });

        // Update Expense Detail Modal

        let modal = $("#md-custom");

        // Edit Expense Detail Load Data To Modal

        $(document).on('click', '.update-expense-detail' , function() {
            let expenseID = this.name;
            $.ajax({
                type: "GET",
                url: "{{route("LoadExpenseDetailDataToModal")}}",
                data: { id : expenseID},
                success: function (data) {
                    modal.modal("show");
                    $("#item").val(data.expenseDetail.item_position);
                    $("#item-price").val(data.expenseDetail.item_price);
                    $("#expense-detail-id").val(expenseID);
                },
                error: function () {
                    console.log('Update Expense Detail Failed');
                },
            });
        });

        // Update Expense Form Send Ajax

        let form = $("#update-expenses-detail-form");

        form.submit(function (e) {

            e.preventDefault();

            $.ajax({
                type: form.attr('method'),
                url: form.attr('action'),
                data: form.serialize(),
                success: function (data) {
                    let item = $("#item");
                    let itemPrice = $("#item-price");
                    if (data.errors){
                        if(data.errors.item){
                            item.addClass("bdc-red");
                        }
                        if(data.errors.item_price){
                            itemPrice.addClass("bdc-red");
                        }
                    } else {
                        $(".form-control").removeClass("bdc-red");
                        modal.modal("hide");
                        form[0].reset();
                        let table = $('#expenses-table').DataTable();
                        table.ajax.reload();
                    }
                },
                error: function () {
                    console.log('Update Expense Detail Failed');
                },
            });
        });

    </script>
    @endsection