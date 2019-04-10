@extends('default')
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
                                <button class="btn btn-danger"> <span class="s7-plus" style="font-size: 16px;"> </span>Add Profit</button>
                            </div>
                        </div>
                    </div>
                    <table id="profits-table" class="table table-striped table-hover table-fw-widget">
                        <thead>
                        <tr>
                            <th>Client</th>
                            <th>Reason</th>
                            <th>Amount</th>
                            <th>Date</th>
                            <th>Actions</th>
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
        </div>
    </div>

@endsection