@extends('default')
@section('libsCSS')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datatables/css/dataTables.bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/select2/css/select2.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/bootstrap-slider/css/bootstrap-slider.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('amaretti/html/assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css') }}"/>

@endsection
@section('content')
    <div class="page-head">
        <h2 class="page-head-title">Expenses</h2>
        <ol class="breadcrumb">
            <li><a href="{{route("Home")}}">Home</a></li>
            <li class="active">Expenses</li>
        </ol>
    </div>
    <div class="main-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="widget widget-fullwidth widget-small">
                    <div class="widget-head">
                        <div class="row table-title-create-button">
                            <div class="table-title col-md-6">Expenses</div>
                            <div class="create-button col-md-6 text-right">
                                <button data-toggle="modal" data-target="#md-custom" type="button" class="btn btn-space btn-primary"><span class="s7-plus" style="font-size: 16px;"> </span>Add Expense</button>
                            </div>
                        </div>
                    </div>
                    <table id="profits-table" class="table table-striped table-hover table-fw-widget">
                        <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="odd gradeX">
                            <td>A</td>
                            <td>
                                Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td class="center"> 4</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="even gradeC">
                            <td>Trident</td>
                            <td>
                                Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>
                                Internet
                                Explorer 5.5
                            </td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>
                                Internet
                                Explorer 6
                            </td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="odd gradeA">
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="even gradeA">
                            <td>Trident</td>
                            <td>AOL browser (AOL desktop)</td>
                            <td>Win XP</td>
                            <td class="center">6</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.7</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 1.5</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 2.0</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Firefox 3.0</td>
                            <td>Win 2k+ / OSX.3+</td>
                            <td class="center">1.9</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.0</td>
                            <td>OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Camino 1.5</td>
                            <td>OSX.3+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape 7.2</td>
                            <td>Win 95+ / Mac OS 8.6-9.2</td>
                            <td class="center">1.7</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Browser 8</td>
                            <td>Win 98SE+</td>
                            <td class="center">1.7</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Netscape Navigator 9</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.1</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.1</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.2</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.2</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.3</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.3</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.4</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.4</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.5</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.5</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.6</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">1.6</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.7</td>
                            <td>Win 98+ / OSX.1+</td>
                            <td class="center">1.7</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Mozilla 1.8</td>
                            <td>Win 98+ / OSX.1+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Seamonkey 1.1</td>
                            <td>Win 98+ / OSX.2+</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Gecko</td>
                            <td>Epiphany 2.20</td>
                            <td>Gnome</td>
                            <td class="center">1.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 1.2</td>
                            <td>OSX.3</td>
                            <td class="center">125.5</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 1.3</td>
                            <td>OSX.3</td>
                            <td class="center">312.8</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 2.0</td>
                            <td>OSX.4+</td>
                            <td class="center">419.3</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>Safari 3.0</td>
                            <td>OSX.4+</td>
                            <td class="center">522.1</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>OmniWeb 5.5</td>
                            <td>OSX.4+</td>
                            <td class="center">420</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>iPod Touch / iPhone</td>
                            <td>iPod</td>
                            <td class="center">420.1</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Webkit</td>
                            <td>S60</td>
                            <td>S60</td>
                            <td class="center">413</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 7.0</td>
                            <td>Win 95+ / OSX.1+</td>
                            <td class="center">-</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 7.5</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 8.0</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 8.5</td>
                            <td>Win 95+ / OSX.2+</td>
                            <td class="center">-</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        <tr class="gradeA">
                            <td>Presto</td>
                            <td>Opera 9.0</td>
                            <td>Win 95+ / OSX.3+</td>
                            <td class="center">-</td>
                            <td class="text-right center">
                                <button type="button" class="btn btn-primary"><i class="icon s7-menu"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-pen"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-print"></i></button>
                                <button type="button" class="btn btn-primary"><i class="icon s7-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
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
                                            <form action="{{route("AddProfits")}}" id="add-profits-form" method="get" >
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
                                                                    <select class="select2">
                                                                        <optgroup label="Personal">
                                                                            <option value="p1">Basic</option>
                                                                            <option value="p2">Medium</option>
                                                                        </optgroup>
                                                                        <optgroup label="Company">
                                                                            <option value="p3">Standard</option>
                                                                            <option value="p4">Silver</option>
                                                                            <option value="p5">Gold</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Date </label>
                                                                <div class="col-sm-6">
                                                                    <div data-min-view="2" style="width :100%" data-date-format="yyyy-mm-dd" class="input-group date datetimepicker col-md-5 col-xs-7">
                                                                        <input id="datepicker" type="text" class="form-control"><span class="datepickerbtn input-group-addon btn btn-primary"><i class="icon-th s7-date"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Clarification</label>
                                                                <div class="col-sm-6">
                                                                    <select class="select2">
                                                                        <optgroup label="Personal">
                                                                            <option value="p1">Basic</option>
                                                                            <option value="p2">Medium</option>
                                                                        </optgroup>
                                                                        <optgroup label="Company">
                                                                            <option value="p3">Standard</option>
                                                                            <option value="p4">Silver</option>
                                                                            <option value="p5">Gold</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-sm-3 control-label">Amount</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" placeholder="Profit amount" class="form-control">
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
                                                                    <h3 class="wizard-title">Notifications</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-7">
                                                                    <label class="control-label">E-Mail Notifications</label>
                                                                    <p>This option allow you to recieve email notifications by us.</p>
                                                                </div>
                                                                <div class="col-sm-3 xs-pt-15">
                                                                    <div class="switch-button">
                                                                        <input type="checkbox" checked="" name="swt1" id="swt1"><span>
                                                                <label for="swt1"></label></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-7">
                                                                    <label class="control-label">Phone Notifications</label>
                                                                    <p>Allow us to send phone notifications to your cell phone.</p>
                                                                </div>
                                                                <div class="col-sm-3 xs-pt-15">
                                                                    <div class="switch-button">
                                                                        <input type="checkbox" checked="" name="swt2" id="swt2"><span>
                                                                <label for="swt2"></label></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-7">
                                                                    <label class="control-label">Global Notifications</label>
                                                                    <p>Allow us to send notifications to your dashboard.</p>
                                                                </div>
                                                                <div class="col-sm-3 xs-pt-15">
                                                                    <div class="switch-button">
                                                                        <input type="checkbox" checked="" name="swt3" id="swt3"><span>
                                                                <label for="swt3"></label></span>
                                                                    </div>
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
                                                                    <h3 class="wizard-title">Configuration</h3>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-6">
                                                                    <label class="control-label">Buy Credits: <span id="credits">$30</span></label>
                                                                    <p>This option allow you to buy an amount of credits.</p>
                                                                    <input id="credit_slider" type="text" value="30" class="bslider form-control">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="control-label">Change Plan</label>
                                                                    <p>Change your plan many times as you want.</p>
                                                                    <select class="select2">
                                                                        <optgroup label="Personal">
                                                                            <option value="p1">Basic</option>
                                                                            <option value="p2">Medium</option>
                                                                        </optgroup>
                                                                        <optgroup label="Company">
                                                                            <option value="p3">Standard</option>
                                                                            <option value="p4">Silver</option>
                                                                            <option value="p5">Gold</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="col-sm-6">
                                                                    <label class="control-label">Payment Rate: <span id="rate">5%</span></label>
                                                                    <p>Choose your payment rate to calculate how much money you will recieve.</p>
                                                                    <input id="rate_slider" data-slider-min="0" data-slider-max="100" type="text" value="5" class="bslider form-control">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <label class="control-label">Keywords</label>
                                                                    <p>Write your keywords to do a successful SEO with web search engines.</p>
                                                                    <select multiple="" class="tags">
                                                                        <option value="1">Twitter</option>
                                                                        <option value="2">Google</option>
                                                                        <option value="3">Facebook</option>
                                                                    </select>
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
        $('#profits-table').dataTable({
            dom:
            "<'row am-datatable-header'<'col-sm-6'l><'col-sm-6' f>>" +
            "<'row am-datatable-body'<'col-sm-12'tr>>" +
            "<'row am-datatable-footer'<'col-sm-5'i><'col-sm-7'p>>",
            "lengthMenu": [[25, 50, 100], [25, 50, 100]],
        });
        $(".datetimepicker").datetimepicker({
            autoclose: true,
            componentIcon: '.s7-date',
            navIcons:{
                rightIcon: 's7-angle-right',
                leftIcon: 's7-angle-left'
            }
        });

        //Form Ajax

        let form = $("#add-profits-form");
        let modal = $("#md-custom");

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
                },
                error: function () {
                    console.log('Ajax failed to send the data.');
                },
            });
        });

    </script>
    @endsection