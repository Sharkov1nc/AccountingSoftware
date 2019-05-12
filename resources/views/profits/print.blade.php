<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .company-details {
            float: left;
            width: 50%;
            font-family: DejaVu Sans;
        }
        .date-content{
            margin-left: 390px;
            margin-top: -62px;
        }
        .client-content{
            margin-left: 138px;
            margin-top: 20px;
            font-size: 10px;
            font-family: DejaVu Sans;
        }
        .font-12{
            font-size: 12px;
        }
        .font-13{
            font-size: 13px;
        }
        .title {
            text-align: center;
            padding-top: 200px;
            font-size: 34px;
        }
        .table-content{
            margin-top: 50px;
        }
        table {
            font-size: 14px;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #a4a4a4;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: rgb(220,220,220) ;
        }
        .page-number{
            position: absolute;
            font-size: 13px;
            bottom: -30px;
            left: 233px;
        }
        .text-center{
            text-align: center;
        }
        @page { size: 595px 842px }
    </style>

</head>
<body>
<div>
    <span>
        <img src="{{ public_path()."/imgs/sharkmini.png"}}" alt="" width="150px">
    </span>
    <div class="date-content font-13">
        <b>
        PROFIT INVOICE <br>
        {{"Date : " . date("d/m/Y")}}<br>
        Shark ind.
        </b>
    </div>
</div>
<div>
    <div class="company-details font-12">
        <i>Shark ind.</i><br>
        <i>Brod 6 /Plovdiv /Bulgaria</i><br>
        <i>Tel : 0877972006</i><br>
        <i>Fax : 369925@shark.com</i><br>
        <i>E-mail : shark_ind@shark.com </i>
    </div>
    <div class="company-details font-13 client-content">
        <i> The attention of : <br>
        {{$profit->client->client}} CEO<br>
        Mr. {{$profit->client->contact_person}}<br>
        </i>
    </div>
</div>
<div class="title">
    PROFIT INVOICE
</div>
<div class="table-content">
    <table>
        <tr>
            <th class="text-center" colspan="2">{{$profit->clarification}}</th>
        </tr>
        <tr>
            <th width="75%">Details Clarification</th>
            <th>Amount</th>
        </tr>
        @foreach($profitDetails as $pf)
        <tr>
            <td>{{$pf->item_position}}</td>
            <td>{{$pf->item_price}}</td>
        </tr>
        @endforeach
        <tr>
            <th>Total Amount</th>
            <th>{{number_format($profit->amount, 2, ',', ' ')}} €</th>
        </tr>
    </table>
</div>
<div class="page-number">
    -1-
</div>

</body>
</html>
