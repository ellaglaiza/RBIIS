 @extends('layouts.default')
@section('content')
 <link rel="icon" href="{{ asset('auth/img/admin1.png') }}">
      <title>RBIIS | Dashboard</title>
      <style type="text/css">
            .print-button-container {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                margin-top: 3px;
            }

            .print-button {
                background-color: #007bff; /* Adjust as needed */
                color: white;
                border: none;
                padding: 8px 16px;
                border-radius: 4px;
                cursor: pointer;
                display: flex;
                align-items: center;
            }

            .print-button i {
                margin-right: 5px;
            }
             .print-button-container1 {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                margin-top: -1px;
            }

            .print-button1 {
                background-color: #007bff; /* Adjust as needed */
                color: white;
                border: none;
                padding: 8px 16px;
                border-radius: 4px;
                cursor: pointer;
                display: flex;
                align-items: center;
            }

            .print-button1 i {
                margin-right: 5px;
            }
             #print-button {
                display: block;
                width: 100px;
                margin-left: 40%;
                
            }
            @media print {
                #print-button {
                    display: none;
                }
                 .sidebar {
        display: block;
    }

    @media print {
        .sidebar {
            display: none;
        }
    }

           .sidebar {
        display: block;
    }

    @media print {
        .sidebar {
            display: none;
        }
    }

      </style>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="lenovo" />
      <meta name="company" content="Microsoft Corporation" />
    <style type="text/css">
      html { font-family:Calibri, Arial, Helvetica, sans-serif; font-size:11pt; background-color:white }
      a.comment-indicator:hover + div.comment { background:#ffd; position:absolute; display:block; border:1px solid black; padding:0.5em }
      a.comment-indicator { background:red; display:inline-block; border:1px solid black; width:0.5em; height:0.5em }
      div.comment { display:none }
      table { border-collapse:collapse; page-break-after:always }
      .gridlines td { border:1px dotted black }
      .gridlines th { border:1px dotted black }
      .b { text-align:center }
      .e { text-align:center }
      .f { text-align:right }
      .inlineStr { text-align:left }
      .n { text-align:right }
      .s { text-align:left }
      td.style0 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style0 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style1 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style2 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style3 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style4 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style4 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style5 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style5 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style6 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style12 { vertical-align:middle;   text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style12 { vertical-align:middle;   text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style13 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style13 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style14 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style14 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style16 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style16 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style17 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style17 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      th.style18 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      td.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      th.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      td.style20 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style20 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:8pt; background-color:white }
      td.style22 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style22 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style23 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; font-style:italic; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style23 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; font-style:italic; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style24 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style24 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style25 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      th.style26 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      td.style27 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      th.style27 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:#C5DEB5 }
      td.style28 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style28 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      table.sheet0 col.col0 { width:136.23333177pt }
      table.sheet0 col.col1 { width:113.18888759pt }
      table.sheet0 col.col2 { width:90.14444341pt }
      table.sheet0 col.col3 { width:39.31111066pt }
      table.sheet0 col.col4 { width:79.97777686pt }
      table.sheet0 col.col5 { width:82.68888794pt }
      table.sheet0 col.col6 { width:33.8888885pt }
      table.sheet0 col.col7 { width:39.31111066pt }
      table.sheet0 col.col8 { width:51.51111052pt }
      table.sheet0 col.col9 { width:60.32222153pt }
      table.sheet0 col.col10 { width:88.1111101pt }
      table.sheet0 col.col11 { width:71.84444362pt }
      table.sheet0 col.col12 { width:42.02222174pt }
      table.sheet0 col.col13 { width:65.06666592pt }
      table.sheet0 col.col14 { width:43.37777728pt }
      table.sheet0 .column14 { visibility:collapse; display:none }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row1 { height:15pt }
      table.sheet0 tr.row2 { height:15.75pt }
      table.sheet0 tr.row3 { height:15pt }
      table.sheet0 tr.row4 { height:18pt }
      table.sheet0 tr.row5 { height:18pt }
      table.sheet0 tr.row6 { height:18pt }
      table.sheet0 tr.row7 { height:18pt }
      table.sheet0 tr.row8 { height:18pt }
      table.sheet0 tr.row9 { height:18pt }
      table.sheet0 tr.row10 { height:15pt }
      table.sheet0 tr.row11 { height:15pt }
      table.sheet0 tr.row12 { height:33pt }
      table.sheet0 tr.row13 { height:18pt }
      table.sheet0 tr.row14 { height:18pt }
      table.sheet0 tr.row15 { height:18pt }
      table.sheet0 tr.row16 { height:18pt }
      table.sheet0 tr.row17 { height:18pt }
      table.sheet0 tr.row18 { height:18pt }
      table.sheet0 tr.row19 { height:18pt }
      table.sheet0 tr.row20 { height:18pt }
      table.sheet0 tr.row21 { height:18pt }
      table.sheet0 tr.row22 { height:18pt }
      table.sheet0 tr.row23 { height:18pt }
      table.sheet0 tr.row24 { height:18pt }
      table.sheet0 tr.row32 { height:39pt }
    </style>
  </head>

  <body>
<style>

</style>
 <div class="print-button-container" >
                <a href="{{route ('records.residentprofile.list')}}" class="print-button" id="print-button"  style="margin-right: 94%; width: 70px; text-align: center; background-color:green; text-decoration: none;">BACK </a>   
            </div>
            <div class="print-button-container1">
                <button class="print-button1" onclick="window.print()" id="print-button"  style="margin-left: 94%; width: 70px; text-align: center; margin-top: -33px">PRINT
                </button> 

            </div>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" style="margin-left: 107px;">
        <col class="col0">
        <col class="col1">
        <col class="col2">
        <col class="col3">
        <col class="col4">
        <col class="col5">
        <col class="col6">
        <col class="col7">
        <col class="col8">
        <col class="col9">
        <col class="col10">
        <col class="col11">
        <col class="col12">
        <col class="col13">
        <col class="col14">
        <tbody>
         
          <tr class="row1">
            <td class="column0 style5 s">RBI FORM A <span style="font-weight:bold; font-style:italic; color:#000000; font-family:'Calibri'; font-size:11pt"></span></td>
            <td class="column1 style5 null"></td>
            <td class="column2 style5 null"></td>
            <td class="column3 style5 null"></td>
            <td class="column4 style5 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style5 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column9 style5 null"></td>
            <td class="column10 style5 null"></td>
            <td class="column11 style5 null"></td>
            <td class="column12 style5 null"></td>
            <td class="column13 style5 null"></td>
            <td class="column14 style5 null"></td>
          </tr>
          <tr class="row2">
            <td class="column0 style22 s style22" colspan="15">RECORDS OF BARANGAY INHABITANTS BY HOUSEHOLD</td>
          </tr>
          <tr class="row3">
            <td class="column0 style23 null style23" colspan="15"></td>
          </tr>
          <tr class="row4">
            <td class="column0 style28 s style28" colspan="3">REGION : <u>{{$resident->region}}</u></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row5">
            <td class="column0 style28 s style28" colspan="3">PROVINCE:  <u>{{$resident->province}}</u></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row6">
            <td class="column0 style28 s style28" colspan="3">CITY/MUNICIPALITY:  <u>{{$resident->city_munipality}}</u> </td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row7">
            <td class="column0 style28 s style28" colspan="3">BARANGAY :  <u>{{$resident->barangay}}</u> </td>
            <td class="column3 style6 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row8">
            <td class="column0 style28 s style28" colspan="3">HOUSEHOLD ADDRESS :  <u>{{$resident->address}}</u></td>
            <td class="column3 style6 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row9">
            <td class="column0 style28 s style28" colspan="3">NO. OF HOUSEHOLD MEMBERS:  <u>{{$resident->nooffamilymember}}</u></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style3 null"></td>
            <td class="column8 style3 null"></td>
            <td class="column9 style3 null"></td>
            <td class="column10 style3 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row10">
            <td class="column0 style15 null"></td>
            <td class="column1 style20 null"></td>
            <td class="column2 style20 null"></td>
            <td class="column3 style15 null"></td>
            <td class="column4 style15 null"></td>
            <td class="column5 style15 null"></td>
            <td class="column6 style15 null"></td>
            <td class="column7 style15 null"></td>
            <td class="column8 style5 null"></td>
            <td class="column9 style5 null"></td>
            <td class="column10 style5 null"></td>
            <td class="column11 style5 null"></td>
            <td class="column12 style5 null"></td>
            <td class="column13 style5 null"></td>
            <td class="column14 style5 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0 style26 s style26" colspan="4">NAME</td>
            <td class="column4 style27 s style27" rowspan="2">PLACE OF BIRTH</td>
            <td class="column5 style27 s style27" rowspan="2">DATE OF BIRTH</td>
            <td class="column6 style26 s style26" rowspan="2">AGE</td>
            <td class="column7 style26 s style26" rowspan="2">SEX</td>
            <td class="column8 style27 s style27" rowspan="2">CIVIL STATUS</td>
            <td class="column9 style27 s style27" rowspan="2">CITIZENSHIP</td>
            <td class="column10 style27 s style27" rowspan="2">OCCUPATION</td>
            <td class="column11 style27 s style27" rowspan="2">Indicate if PWD, OFW, Solo Parent or IP</td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style18 s">LAST NAME                       </td>
            <td class="column1 style19 s">FIRST NAME </td>
            <td class="column2 style19 s">MIDDLE NAME</td>
            <td class="column3 style19 s">EXT</td>
            <td class="column12 style5 null"></td>
            <td class="column13 style5 null"></td>
            <td class="column14 style5 null"></td>
          </tr>
           <tr class="row13">
            <td class="column0 style7 null"> {{$resident->lastname}}</td>
            <td class="column1 style8 null"> {{$resident->firstname}} </td>
            <td class="column2 style9 null">{{$resident->middlename}}</td>
            <td class="column3 style10 null">{{$resident->suffix}}</td>
            <td class="column4 style11 null">{{$resident->place_of_birth}}</td>
            <td class="column5 style10 null"> {{$resident->date_of_birth}}</td>
            <td class="column6 style10 null"> {{$resident->age}}</td>
            <td class="column7 style11 null"> {{$resident->sex}}</td>
            <td class="column8 style11 null"> {{$resident->civil_status}}</td>
            <td class="column9 style11 null"> {{$resident->citizenship}}</td>
            <td class="column10 style11 null"> {{$resident->occupation}}</td>
            <td class="column11 style12 null"> {{$resident->remarks}}</td>
            <td class="column12 style5 null"></td>
            <td class="column13 style5 null"></td>
            <td class="column14 style5 null"></td>
          </tr>

           <?php 
                        $members_name = json_decode($resident->members_name);
                        $members_middlename = json_decode($resident->members_middlename);
                        $members_lastname = json_decode($resident->members_lastname);
                        $members_qualifier = json_decode($resident->members_qualifier);
                        $members_placeofbirth = json_decode($resident->members_placeofbirth);
                        $members_dob = json_decode($resident->members_dob); 
                        $members_age = json_decode($resident->members_age); 
                        $members_sex = json_decode($resident->members_sex); 
                        $members_civilstatus = json_decode($resident->members_civilstatus); 
                        $members_relationship = json_decode($resident->members_relationship); 
                        $members_occupation = json_decode($resident->members_occupation); 
                        $members_remark = json_decode($resident->members_remark); 

                        
                        if ($members_name !== null && $members_middlename !== null && $members_lastname !== null && $members_qualifier !== null && $members_placeofbirth  !== null && $members_dob  !== null  && $members_age !== null &&  $members_sex !== null && $members_civilstatus !== null && $members_relationship !== null && $members_occupation !== null && $members_remark !== null) {
                            for ($x = 0; $x < count($members_name); $x++) {
                        ?>

          <tr class="row14">
            <td class="column0 style7 null">{{ $members_lastname[$x] }}</td>
            <td class="column1 style8 null">{{ $members_name [$x] }}</td>
            <td class="column2 style9 null">{{ $members_middlename[$x] }}</td>
            <td class="column3 style10 null">{{ $members_qualifier[$x] }}</td>
            <td class="column4 style12 null">{{ $members_placeofbirth[$x] }}</td>
            <td class="column5 style10 null">{{ $members_dob[$x] }}</td>
            <td class="column6 style10 null">{{ $members_age[$x] }}</td>
            <td class="column7 style12 null">{{ $members_sex[$x] }}</td>
            <td class="column8 style12 null">{{ $members_civilstatus[$x] }}</td>
            <td class="column9 style12 null">{{ $members_relationship[$x] }}</td>
            <td class="column10 style12 null">{{ $members_occupation[$x] }}</td>
            <td class="column11 style12 null">{{ $members_remark[$x] }}</td>
            <td class="column12 style5 null"></td>
            <td class="column13 style5 null"></td>
            <td class="column14 style5 null"></td>
          </tr>
            <?php
                            }
                        }
                        ?>
         <!--     <?php 
    if (!empty($resident->members_name) && !empty($resident->members_dob) && !empty($resident->members_relationship) && !empty($resident->members_middlename)  && !empty($resident->members_lastname) && !empty($resident->members_qualifier)  && !empty($resident->members_placeofbirth)  && !empty($resident->members_age)   && !empty($resident->members_sex)   && !empty($resident->members_civilstatus)   && !empty($resident->members_members_relationship)   && !empty($resident->members_occupation)   && !empty($resident->members_remark))  {
                        $members_name = json_decode($resident->members_name);
                        $members_middlename = json_decode($resident->members_middlename);
                        $members_lastname = json_decode($resident->members_lastname);
                        $members_qualifier = json_decode($resident->members_qualifier);
                        $members_placeofbirth = json_decode($resident->members_placeofbirth);
                        $members_dob = json_decode($resident->members_dob); 
                        $members_age = json_decode($resident->members_age); 
                        $members_sex = json_decode($resident->members_sex); 
                        $members_civilstatus = json_decode($resident->members_civilstatus); 
                        $members_relationship = json_decode($resident->members_relationship); 
                        $members_occupation = json_decode($resident->members_occupation); 
                        $members_remark = json_decode($resident->members_remark); 

        if (is_array($members_name) && is_array($members_dob) && is_array($members_relationship)  && is_array($members_sex)  && is_array($members_age)  && is_array($members_qualifier)  && is_array($members_middlename)  && is_array($members_lastname)  && is_array($members_placeofbirth)  && is_array($members_remark)  && is_array($members_civilstatus)  && is_array($members_occupation)) {
            for ($x = 0; $x < count($members_name); $x++) {
                ?>
                
   <div class="row">
                                      <?php
            }
        } else {
            // Handle the case where the decoded variables are not arrays
            echo "Invalid data for household members.";
        }
    } else {
        // Handle the case where the variables are empty or null
        echo "No household members data available.";
    }

    ?> -->
</div>

  

          <tr class="row15">
            <td class="column0 style13 null"></td>
            <td class="column1 style14 null"></td>
            <td class="column2 style12 null"></td>
            <td class="column3 style12 null"></td>
            <td class="column4 style12 null"></td>
            <td class="column5 style12 null"></td>
            <td class="column6 style12 null"></td>
            <td class="column7 style12 null"></td>
            <td class="column8 style12 null"></td>
            <td class="column9 style12 null"></td>
            <td class="column10 style12 null"></td>
            <td class="column11 style12 null"></td>
            <td class="column12 style5 null"></td>
            <td class="column13 style5 null"></td>
            <td class="column14 style5 null"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row17">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row18">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row19">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row20">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row21">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row22">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row23">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row24">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
       
          <tr class="row26">
            <td class="column0 style2 s">Prepared by:</td>
            <td class="column1 style2 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style28 s style28" colspan="2">Certified Correct:</td>
            <td class="column6 style2 null"></td>
            <td class="column7 style28 s style28" colspan="4">Validated by:</td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row27">
            <td class="column0 style2 null"></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
        
          <tr class="row29">
            <td class="column0 style25 s style25" colspan="2">Name of Household/Head Member</td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style25 s style25" colspan="2">Barangay Secretary</td>
            <td class="column6 style3 null"></td>
            <td class="column7 style25 s style25" colspan="4">Punong Barangay</td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row30">
            <td class="column0 style24 s style24" colspan="2">(Signature over Printed Name)</td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
  <td class="column4 style24 s style24" colspan="2">(Signature over Printed Name)</td>            <td class="column6 style3 null"></td>
            <td class="column7 style24 s style24" colspan="4">(Signature over Printed Name)</td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row31">
            <td class="column0 style16 null"></td>
            <td class="column1 style16 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style3 null"></td>
            <td class="column5 style3 null"></td>
            <td class="column6 style3 null"></td>
            <td class="column7 style16 null"></td>
            <td class="column8 style16 null"></td>
            <td class="column9 style16 null"></td>
            <td class="column10 style16 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
          <tr class="row32">
            <td class="column0 style21 s style21" colspan="12">I hereby certify that the above information are true and correct to the best of my knowledge. I understand that for the Barangay to carry out its mandate pursuant to Section 394 (d)(6) of the Local Government Code of 1991, they must necessarily process my personal information for easy identification of inhabitants, as a tool in planning, and as an updated reference in the number of inhabitants of the Barangay. Therefore, I grant my consent and recognize the authority of the Barangay to process my personal information, subject to the provision of the Philippine Data Privacy Act of 2012.</td>
            <td class="column12 style17 null"></td>
            <td class="column13 style17 null"></td>
            <td class="column14 style17 null"></td>
          </tr>
          <tr class="row33">
            <td class="column0 style2 null"></td>
            <td class="column1 style2 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            <td class="column9 style2 null"></td>
            <td class="column10 style2 null"></td>
            <td class="column11 style2 null"></td>
            <td class="column12 style2 null"></td>
            <td class="column13 style2 null"></td>
            <td class="column14 style2 null"></td>
          </tr>
        </tbody>
    </table>
  </body>
</html>

@endsection