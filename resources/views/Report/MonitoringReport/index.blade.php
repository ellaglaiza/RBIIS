@extends('layouts.default')

@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
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
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="lenovo" />
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
      td.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style1 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style2 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style3 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style4 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style5 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style5 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style6 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style6 { vertical-align:bottom; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style7 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style8 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style8 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important;  color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style9 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style10 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style12 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style12 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style13 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      th.style14 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-style:italic; color:#000000; font-family:'Calibri'; font-size:8pt; background-color:white }
      td.style15 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style15 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style16 { vertical-align:middle; text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style16 { vertical-align:middle; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style17 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style18 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style18 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      th.style19 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:10pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style21 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style21 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style22 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style22 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style23 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style23 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style24 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#C5DEB5 }
      th.style24 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#C5DEB5 }
      td.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#C5DEB5 }
      th.style25 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#C5DEB5 }
      td.style26 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      th.style26 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:9pt; background-color:white }
      td.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; font-style:italic; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#DEEEE3 }
      th.style27 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; font-style:italic; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:#DEEEE3 }
      td.style28 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style28 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style29 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style29 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style30 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      th.style30 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:14pt; background-color:white }
      td.style31 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style31 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      table.sheet0 col.col0 { width:167.41110919pt }
      table.sheet0 col.col1 { width:50.15555498pt }
      table.sheet0 col.col2 { width:48.79999944pt }
      table.sheet0 col.col3 { width:66.42222146pt }
      table.sheet0 col.col4 { width:155.21110933pt }
      table.sheet0 col.col5 { width:52.86666606pt }
      table.sheet0 col.col6 { width:75.23333247pt }
      table.sheet0 col.col7 { width:52.86666606pt }
      table.sheet0 col.col8 { width:1.35555554pt }
      table.sheet0 col.col9 { width:42pt }
      table.sheet0 col.col10 { width:35.24444404pt }
      table.sheet0 col.col11 { width:63.71111038pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row1 { height:18.75pt }
      table.sheet0 tr.row2 { height:18.75pt }
      table.sheet0 tr.row3 { height:4.9pt }
      table.sheet0 tr.row4 { height:14.45pt }
      table.sheet0 tr.row8 { height:3.6pt }
      table.sheet0 tr.row12 { height:10.5pt }
      table.sheet0 tr.row13 { height:22.15pt }
      table.sheet0 tr.row14 { height:16.9pt }
      table.sheet0 tr.row15 { height:21.6pt }
      table.sheet0 tr.row16 { height:21.6pt }
      table.sheet0 tr.row17 { height:21.6pt }
      table.sheet0 tr.row18 { height:21.6pt }
      table.sheet0 tr.row19 { height:21.6pt }
      table.sheet0 tr.row20 { height:21.6pt }
      table.sheet0 tr.row21 { height:21.6pt }
      table.sheet0 tr.row22 { height:18pt }
      table.sheet0 tr.row23 { height:24.75pt }
      table.sheet0 tr.row24 { height:23.45pt }
      table.sheet0 tr.row25 { height:33pt }
      table.sheet0 tr.row26 { height:30pt }
      table.sheet0 tr.row27 { height:21.6pt }
      table.sheet0 tr.row28 { height:30.75pt }
      table.sheet0 tr.row29 { height:21pt }
      table.sheet0 tr.row30 { height:22.15pt }
      table.sheet0 tr.row31 { height:22.15pt }
      table.sheet0 tr.row32 { height:22.15pt }
      table.sheet0 tr.row33 { height:22.15pt }
      table.sheet0 tr.row34 { height:22.15pt }
      table.sheet0 tr.row35 { height:6pt }
      table.sheet0 tr.row38 { height:15.6pt }
      table.sheet0 tr.row44 { height:21pt }
      table.sheet0 tr.row46 { height:12pt }
    </style>
  </head>

  <body>
<style>

@page { margin-left: 0.70866141732283in; margin-right: 0.51181102362205in; margin-top: 0.39370078740157in; margin-bottom: 0.11811023622047in; }
body {  margin-right: 0.51181102362205in; margin-bottom: 0.11811023622047in; }
</style>
 <div class="print-button-container" >
                <a href="{{route ('records.residentprofile.list')}}" class="print-button" id="print-button"  style="margin-right: 94%; width: 70px; text-align: center; background-color:green; text-decoration: none;">BACK </a>   
            </div>
            <div class="print-button-container1">
                <button class="print-button1" onclick="window.print()" id="print-button"  style="margin-left: 94%; width: 70px; text-align: center; margin-top: -33px">PRINT
                </button> 

            </div>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines" style="margin-left: 148px">
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
        <tbody>
          <tr class="row0">
            <td class="column0 style4 s"> <span style="font-style:italic; color:#000000; font-family:'Calibri'; font-size:11pt"></span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt"></span></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row1">
            <td class="column0 style29 s style29" colspan="5">MONITORING REPORT</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row2">
            <td class="column0 style30 s style30" colspan="5">for ___ Semester of CY ________</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style5 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row3">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row4">
            <td class="column0 style21 s">REGION :    <u>VIII</u>  </td>
            <td class="column1 style28 null style28" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
          
          </tr>
          <tr class="row5">
            <td class="column0 style1 s">PROVINCE:   <u>SOUTHERN LEYTE </u></td>
            <td class="column1 style28 null style28" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
          
          </tr>
          <tr class="row6">
            <td class="column0 style1 s">CITY/MUNICIPALITY:  <u>BONTOC</u></td>
            <td class="column1 style28 null style28" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            
          </tr>
          <tr class="row7">
            <td class="column0 style1 s">BARANGAY:<u>San Ramon</u>  </td>
            <td class="column1 style28 null style28" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row8">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style6 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row9">
            <td class="column0 style17 s">Total No. of Barangay Inhabitants:<u>{{ $total_population1}}</u> </td>
            <td class="column1 style31 s style31" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style6 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row10">
            <td class="column0 style17 s">Total No. of Households: <u>{{ $total_HouseholdNo }}</u> </td>
            <td class="column1 style31 s style31" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style6 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0 style17 s">Total No. of Families:<u> {{$sum}} </u></td>
            <td class="column1 style31 s style31" colspan="3"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style6 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style17 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style6 null"></td>
            <td class="column7 style6 null"></td>
            <td class="column8 style6 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style24 s">INDICATORS</td>
            <td class="column1 style24 s">MALE</td>
            <td class="column2 style24 s">FEMALE</td>
            <td class="column3 style24 s">TOTAL</td>
            <td class="column4 style25 s">REMARKS</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row14">
            <td class="column0 style27 s style27" colspan="5">Population by Age Bracket:</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row15">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children 0-5 years old</td>
            <td class="column1 style22 null">{{ $total_male}}</td>
            <td class="column2 style9 null">{{ $total_female}}</td>
            <td class="column3 style9 null">{{ $total_population}}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children 6-12 years old</td>
            <td class="column1 style22 null">{{ $total_male_sixyrs}}</td>
            <td class="column2 style9 null">{{ $total_female_sixyrs }}</td>
            <td class="column3 style9 null">{{ $total_population_sixyrs}}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row17">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Children 13-17 years old</td>
            <td class="column1 style22 null">{{ $total_male_13yrs}}</td>
            <td class="column2 style9 null">{{ $total_female_13yrs}}</td>
            <td class="column3 style9 null">{{ $total_population_13yrs}}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row18">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adult 18-35 years old</td>
            <td class="column1 style22 null">{{ $total_male_18yrs}}</td>
            <td class="column2 style9 null">{{ $total_female_18yrs}}</td>
            <td class="column3 style9 null">{{ $total_population_18yrs}}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row19">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adult 36-50 years old</td>
            <td class="column1 style22 null">{{ $total_male_36yrs}}</td>
            <td class="column2 style9 null">{{ $total_female_36yrs }}</td>
            <td class="column3 style9 null">{{ $total_population_36yrs }}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row20">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adult 51-65 years old</td>
            <td class="column1 style22 null">{{ $total_male_51yrs }}</td>
            <td class="column2 style9 null">{{ $total_female_51yrs }}</td>
            <td class="column3 style9 null">{{ $total_population_51yrs }}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row21">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adult 66 years old and above</td>
            <td class="column1 style22 null">{{ $total_male_66yrs}}</td>
            <td class="column2 style9 null">{{ $total_female_66yrs}}</td>
            <td class="column3 style9 null">{{ $total_population_66yrs}}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row22">
            <td class="column0 style27 s style27" colspan="5">Population by Sector:</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row23">
            <td class="column0 style23 s">Labor Force</td>
            <td class="column1 style22 null">{{$total_male_labor_force}}</td>
            <td class="column2 style9 null">{{$total_female_labor_force}}</td>
            <td class="column3 style9 null">{{$laborForce}}</td>
            <td class="column4 style10 null"></td>
            <td class="column5 style2 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row24">
            <td class="column0 style23 s">Unemployed</td>
            <td class="column1 style16 null">{{ $total_male_unemployed}}</td>
            <td class="column2 style16 null">{{ $total_female_unemployed}}</td>
            <td class="column3 style16 null">{{ $total_population_unemployed}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row25">
            <td class="column0 style23 s">Out of School Children  (OSC)                (6-14 years old)</td>
            <td class="column1 style11 null">{{$total_male_osc}}</td>
            <td class="column2 style7 null">{{$total_female_osc}}</td>
            <td class="column3 style7 null">{{$total_population_osc}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row26">
            <td class="column0 style23 s">Out of School Youth  (OSY)                             (15-24 years old)</td>
            <td class="column1 style11 null">{{$total_male_osy}}</td>
            <td class="column2 style7 null">{{$total_female_osy}}</td>
            <td class="column3 style7 null">{{$total_population_osy}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row27">
            <td class="column0 style23 s">Person with Disabilities (PWDs)</td>
            <td class="column1 style11 null">{{ $total_male_pwd}}</td>
            <td class="column2 style7 null">{{ $total_female_pwd}}</td>
            <td class="column3 style7 null">{{ $total_population_pwd}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row28">
            <td class="column0 style23 s">Overseas Filipino Workers (OFWs)</td>
            <td class="column1 style11 null">{{ $total_male_ofw}}</td>
            <td class="column2 style7 null">{{ $total_female_ofw}}</td>
            <td class="column3 style7 null">{{ $total_population_ofw}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row29">
            <td class="column0 style23 s">Solo Parents</td>
            <td class="column1 style11 null">{{ $total_male_soloparent }}</td>
            <td class="column2 style7 null">{{ $total_female_soloparent }}</td>
            <td class="column3 style7 null">{{ $total_population_soloparent }}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row30">
            <td class="column0 style23 s">Indigenous Peoples (IPs)</td>
            <td class="column1 style11 null">{{ $total_male_indigenous }}</td>
            <td class="column2 style7 null">{{ $total_female_indigenous }}</td>
            <td class="column3 style7 null">{{ $total_population_indigenous }}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style5 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row31">
            <td class="column0 style23 s">Civil Status : Single</td>
            <td class="column1 style11 null">{{ $total_singleM }}</td>
            <td class="column2 style7 null">{{ $total_singleF }}</td>
            <td class="column3 style7 null">{{$total_population_S}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style18 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row32">
            <td class="column0 style23 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Married</td>
            <td class="column1 style19 null">{{ $total_marriedM }}</td>
            <td class="column2 style20 null">{{ $total_marriedF }}</td>
            <td class="column3 style7 null">{{$total_population_M}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style18 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row33">
            <td class="column0 style23 s">Citizenship : Filipino</td>
            <td class="column1 style19 null">{{$total_male_filipino}}</td>
            <td class="column2 style20 null">{{$total_female_filipino}}</td>
            <td class="column3 style7 null">{{$total_population_filipino}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style18 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row34">
            <td class="column0 style23 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: Foreigner</td>
            <td class="column1 style11 null">{{$total_male_foreigner}}</td>
            <td class="column2 style7 null">{{$total_female_foreigner}}</td>
            <td class="column3 style7 null">{{$total_population_foreigner}}</td>
            <td class="column4 style7 null"></td>
            <td class="column5 style18 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
            <td class="column9 style1 null"></td>
            <td class="column10 style1 null"></td>
            <td class="column11 style1 null"></td>
          </tr>
          <tr class="row35">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row36">
            <td class="column0 style4 s">Prepared by:</td>
            <td class="column1 style4 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style4 s">Submitted by:</td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row37">
            <td class="column0 style4 null"></td>
            <td class="column1 style4 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style4 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
         
          </tr>
          <tr class="row38">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
          
          </tr>
          <tr class="row39">
            <td class="column0 style1 s">________________________________</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 s">_____________________________</td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
          
          </tr>
          <tr class="row40">
            <td class="column0 style8 s">Barangay Secretary</td>
            <td class="column1 style15 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style3 s">Punong Barangay</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
            
          </tr>
          <tr class="row41">
            <td class="column0 style2 s">(Signature over Printed Name)</td>
            <td class="column1 style2 null"></td>
            <td class="column2 style2 null"></td>
            <td class="column3 style2 null"></td>
            <td class="column4 style2 s">(Signature over Printed Name)</td>
            <td class="column5 style2 null"></td>
            <td class="column6 style2 null"></td>
            <td class="column7 style2 null"></td>
            <td class="column8 style2 null"></td>
           
          </tr>
          <tr class="row42">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
          
          </tr>
          <tr class="row43">
            <td class="column0 style4 s">Date Accomplished:</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row44">
            <td class="column0 style1 s">____________________</td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row45">
            <td class="column0 style1 null"></td>
            <td class="column1 style1 null"></td>
            <td class="column2 style1 null"></td>
            <td class="column3 style1 null"></td>
            <td class="column4 style1 null"></td>
            <td class="column5 style1 null"></td>
            <td class="column6 style1 null"></td>
            <td class="column7 style1 null"></td>
            <td class="column8 style1 null"></td>
           
          </tr>
          <tr class="row46">
             <td class="column0 style26 s style26" colspan="12">Note: This RBI Form C (Semestral Monitoring Report) is to be submitted to DILG C/MLGOO as a reference for encoding to BIS-BPS.</td>
            <td class="column1 style12 null"></td>
            <td class="column2 style13 null"></td>
            <td class="column3 style13 null"></td>
            <td class="column4 style13 null"></td>
            <td class="column5 style13 null"></td>
            <td class="column6 style13 null"></td>
            <td class="column7 style13 null"></td>
            <td class="column8 style13 null"></td>
          
          </tr>
        </tbody>
    </table>
  </body>
</html>

@endsection