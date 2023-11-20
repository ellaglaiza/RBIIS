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
                margin-top: 35px;
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
            }

      </style>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="Ella Glaiza" />
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
      th.style0 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style1 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style1 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style3 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style3 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style4 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style4 { vertical-align:bottom; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style5 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style5 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style6 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style6 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style7 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style7 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style8 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style8 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style9 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style9 { vertical-align:top; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style10 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style10 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style11 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style11 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style12 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style12 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style13 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style13 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style14 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style14 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style15 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style15 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style16 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style17 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style17 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style18 { vertical-align:bottom; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style18 { vertical-align:bottom; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style19 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style19 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style21 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style22 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style23 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style23 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style24 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style24 { vertical-align:middle; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style25 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style25 { vertical-align:middle; text-align:right; padding-right:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style26 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style26 { vertical-align:top; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style27 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style27 { vertical-align:bottom; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style28 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style28 { vertical-align:bottom; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style29 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style30 { vertical-align:middle; text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style30 { vertical-align:middle; text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style31 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style32 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style32 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style33 { vertical-align:middle; text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style33 { vertical-align:middle;  border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style34 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style34 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style35 { vertical-align:middle; text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style35 { vertical-align:middle; text-align: center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style36 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style36 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style37 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style38 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style38 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style39 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style39 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style40 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style40 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style41 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style41 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style42 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style42 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style43 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style44 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style44 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style45 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style46 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style47 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style47 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style48 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style48 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style49 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style49 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style50 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial';  width: 10px; font-size:12pt; background-color:white }
      th.style50 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style51 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style51 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style52 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style52 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style53 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style53 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style54 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style54 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style55 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style55 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style56 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style56 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style57 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style57 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style58 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style58 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style59 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style59 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style60 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style60 { vertical-align:top; text-align:center; border-bottom:1px solid #000000 !important; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style61 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style61 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style62 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style62 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; font-weight:bold; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style63 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style63 { vertical-align:top; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style64 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style64 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style65 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      th.style65 { vertical-align:middle; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:11pt; background-color:white }
      td.style66 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style66 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style67 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      th.style67 { vertical-align:top; text-align:center; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:12pt; background-color:white }
      td.style68 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style68 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style69 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style69 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      td.style70 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      th.style70 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt; background-color:white }
      table.sheet0 col.col0 { width:64.38888815pt }
      table.sheet0 col.col1 { width:54.89999937pt }
      table.sheet0 col.col2 { width:41.34444397pt }
      table.sheet0 col.col3 { width:46.76666613pt }
      table.sheet0 col.col4 { width:64.38888815pt }
      table.sheet0 col.col5 { width:50.83333275pt }
      table.sheet0 col.col6 { width:50.15555498pt }
      table.sheet0 col.col7 { width:58.28888822pt }
      table.sheet0 col.col8 { width:30.49999965pt }
      table.sheet0 col.col9 { width:42.02222174pt }
      table.sheet0 col.col10 { width:65.06666592pt }
      table.sheet0 col.col11 { width:56.25555491pt }
      table.sheet0 col.col12 { width:60.9999993pt }
      table.sheet0 col.col13 { width:45.41111059pt }
      table.sheet0 col.col14 { width:42pt }
      table.sheet0 tr { height:15pt }
      table.sheet0 tr.row0 { height:15.5pt }
      table.sheet0 tr.row21 { height:15.5pt }
      table.sheet0 tr.row22 { height:43pt }
      table.sheet0 tr.row23 { height:18pt }
      table.sheet0 tr.row24 { height:20pt }
      table.sheet0 tr.row25 { height:20pt }
      table.sheet0 tr.row26 { height:15.5pt }
    </style>
  </head>

  <body>
<style>
@page { margin-left: 0.7in; margin-right: 0.6in; margin-top: 0.1in; margin-bottom: 0.75in; }
body { margin-left: 0.2in; margin-right: 0.7in; margin-top: -0.1in; margin-bottom: 0.75in; }
</style>
    <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0 gridlines">
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
          <tr class="row0">
            <td class="column0 style56 s style56" colspan="13">&nbsp;HOUSEHOLD  RECORD OF BARANGAY INHABITANTS (RBI)</td>
             <div class="print-button-container" >
                <a href="{{route ('records.residentprofile.list')}}" class="print-button" id="print-button"  style="margin-right: 94%; width: 70px; text-align: center; background-color:green; text-decoration: none;">BACK </a>   
            </div>
            <div class="print-button-container1">
                <button class="print-button1" onclick="window.print()" id="print-button"  style="margin-left: 94%; width: 70px; text-align: center; margin-top: -33px">PRINT
                </button> 

            </div>

            <td class="column13 style36 null style37" rowspan="4"></td>
            <td class="column14 style36 null style36" rowspan="24"></td>
          </tr>
          <tr class="row1">
            <td class="column0 style57 s style57" colspan="4">A. REGION: <u>{{$resident->region}}</u> </td>
            <td class="column4 style16 null"></td>
            <td class="column5 style16 null"></td>
            <td class="column6 style16 null"></td>
            <td class="column7 style16 null"></td>
            <td class="column8 style16 null"></td>
            <td class="column9 style57 s style57" colspan="4">&nbsp;D. BARANGAY: <u>{{$resident->barangay}}</u></td>
          </tr>
          <tr class="row2">
            <td class="column0 style57 s style57" colspan="4">B. PROVINCE:   <u>{{$resident->province}}</u></td>
            <td class="column4 style16 null"></td>
            <td class="column5 style16 null"></td>
            <td class="column6 style16 null"></td>
            <td class="column7 style16 null"></td>
            <td class="column8 style16 null"></td>
            <td class="column9 style57 s style57" colspan="4">E. HOUSEHOLD NO.:  <u>{{$resident->householdNO}}</u></td>
          </tr>
          <tr class="row3">
            <td class="column0 style58 s style58" colspan="4">C. CITY/MUNICIPALITY:  <u>{{$resident->city_munipality}}</u></td>
            <td class="column4 style16 null"></td>
            <td class="column5 style16 null"></td>
            <td class="column6 style16 null"></td>
            <td class="column7 style16 null"></td>
            <td class="column8 style16 null"></td>
            <td class="column9 style16 null"></td>
            <td class="column10 style16 null"></td>
            <td class="column11 style16 null"></td>
            <td class="column12 style16 null"></td>
          </tr>
          <tr class="row4">
            <td class="column0 style46 s style45" colspan="4">NAME</td>
            <td class="column4 style46 s style46" rowspan="2">RELATIONSHIP<br />
TO THE HOUSEHOLD<br />
HEAD</td>
            <td class="column5 style46 s style46" rowspan="2">COMPLETE ADDRESS</td>
            <td class="column6 style47 s style47" rowspan="2">PLACE OF<br />
BIRTH</td>
            <td class="column7 style46 s style46" rowspan="2">DATE OF BIRTH(dd-mm-yy)</td>
            <td class="column8 style46 s style46" rowspan="2">SEX  (M/F)</td>
            <td class="column9 style45 s style45" rowspan="2"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">CIVIL<br />
STATUS</span></td>
            <td class="column10 style46 s style46" rowspan="2">School Grade/ Year/Level Completed</td>
            <td class="column11 style47 s style45" rowspan="2">RELIGION</td>
            <td class="column12 style47 s style47" rowspan="2">OCCUPATION</td>
            <td class="column13 style59 s style59" rowspan="2">REMARKS(Other Info)</td>
          </tr>
          <tr class="row6">
            <td class="column0 style20 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">LAST</span></td>
            <td class="column1 style20 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">FIRST</span></td>
            <td class="column2 style21 s">MIDDLE</td>
            <td class="column3 style21 s">QUALIFIER</td>
          </tr>
          <tr class="row7">
            <td class="column0 style29 null">{{$resident->lastname}}</td>
            <td class="column1 style30 s">{{$resident->firstname}}</td>
            <td class="column2 style31 null">{{$resident->middlename}}</td>
            <td class="column3 style29 null">{{$resident->civil_status}}</td>
            <td class="column4 style32 null">{{$resident->suffix}}</td>
            <td class="column5 style32 null">{{$resident->address}}</td>
            <td class="column6 style32 null">{{$resident->place_of_birth}}</td>
            <td class="column7 style32 null">{{$resident->date_of_birth}}</td>
            <td class="column8 style32 null">{{$resident->sex}}</td>
            <td class="column10 style32 null">{{$resident->civil_status}}</td>
            <td class="column10 style32 null">{{$resident->elementary}}</td>
            <td class="column11 style33 null">{{$resident->religion}}</td>
            <td class="column12 style34 null">{{$resident->occupation}}</td>
            <td class="column13 style35 null"></td>
          </tr>
           <?php 
                        $members_firstname = json_decode($resident->members_firstname);
                        $members_middlename = json_decode($resident->members_middlename);
                        $members_lastname = json_decode($resident->members_lastname);
                        $members_qualifier = json_decode($resident->members_qualifier);

                        $members_address = json_decode($resident->members_address);
                        $members_placeofbirth = json_decode($resident->members_placeofbirth);
                        $members_dob= json_decode($resident->members_dob);
                        $members_sex = json_decode($resident->members_sex);
                        $members_occupation = json_decode($resident->members_occupation);
                        $members_remark = json_decode($resident->members_remark);
                        $members_religion = json_decode($resident->members_religion);
                        $members_relationship = json_decode($resident->members_relationship);
                        
                        $members_school = json_decode($resident->members_school);

                        if ($members_firstname !== null && $members_middlename !== null && 
                         $members_lastname !== null && $members_qualifier !== null && $members_address !== null && $members_placeofbirth !== null && $members_dob !== null && $members_sex !== null && $members_religion !== null && $members_occupation !== null && $members_remark !== null && 
                         $members_relationship !== null && $members_school !== null ) {
                            for ($x = 0; $x < count($members_firstname); $x++) {
                        ?>
                          <tr class="row8">
            <td class="column0 style32 null">{{ $members_lastname[$x] }}</td>
            <td class="column1 style30 s">{{ $members_firstname[$x] }}</td>
            <td class="column2 style31 null">{{ $members_middlename[$x] }}</td>
            <td class="column3 style32 null">{{ $members_qualifier[$x] }}</td>
            <td class="column4 style32 null">{{ $members_relationship[$x] }}</td>
            <td class="column5 style32 null">{{ $members_address[$x] }}</td>
            <td class="column6 style32 null">{{ $members_placeofbirth[$x] }}</td>
            <td class="column7 style32 null">{{ $members_dob[$x] }}</td>
            <td class="column8 style32 null">{{ $members_sex[$x] }}</td>
            <td class="column9 style32 null">{{ $members_sex[$x] }}</td>
            <td class="column10 style32 null">{{ $members_school[$x] }}</td>
            <td class="column11 style33 null">{{ $members_religion[$x] }}</td>
            <td class="column12 style34 null">{{ $members_occupation[$x] }}</td>
            <td class="column13 style35 null">{{ $members_remark[$x] }}</td>
          </tr>
             <?php
                            }
                        }
                        ?>

  
</div>
          <tr class="row9">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row10">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row11">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row12">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row14">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row15">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row17">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
          <tr class="row18">
            <td class="column0 style32 null"></td>
            <td class="column1 style30 s"></td>
            <td class="column2 style31 null"></td>
            <td class="column3 style32 null"></td>
            <td class="column4 style32 null"></td>
            <td class="column5 style32 null"></td>
            <td class="column6 style32 null"></td>
            <td class="column7 style32 null"></td>
            <td class="column8 style32 null"></td>
            <td class="column9 style32 null"></td>
            <td class="column10 style32 null"></td>
            <td class="column11 style33 null"></td>
            <td class="column12 style34 null"></td>
            <td class="column13 style35 null"></td>
          </tr>
        
          <tr class="row21">
            <td class="column0 style27 s">D. Legend</td>
            <td class="column1 style39 null style39" colspan="12"></td>
            <td class="column13 style38 null style36" rowspan="4"></td>
          </tr>
          <tr class="row22">
            <td class="column0 style40 s style41" colspan="6"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt">Remarks: </span><span style="color:#000000; font-family:'Calibri'; font-size:11pt">Utilize this column for any information necessary to generate additional info/data <br>                                        </span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">HOUSEHOLD</span><span style="color:#000000; font-family:'Calibri'; font-size:12pt"> is a social unit consisting of person living alone or group of persons who</span></td>
            <td class="column6 style40 s style42" colspan="7"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt">PSG </span><span style="color:#000000; font-family:'Calibri'; font-size:11pt">-Philippine Standard Code shall be made available by the DILG City /Municipality Officers                                                      <br>                                         </span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:11pt">QUALIFIER</span><span style="color:#000000; font-family:'Calibri'; font-size:12pt"> is the addition and/ or inclusion of the word “JR” “II”, etc. as the case maybe after the person surname</span></td>
          </tr>
          <tr class="row23">
            <td class="column0 style40 s style40" colspan="13">&nbsp;1) sleep in the same housing unit; and 2) have a common arrangement in the preparation and consumption  of food.<br />
</td>
          </tr>
          <tr class="row24">
            <td class="column0 style26 s">Prepared by:                                               </td>
            <td class="column1 style44 null style44" colspan="3"></td>
            <td class="column4 style26 null"></td>
            <td class="column5 style25 s">&nbsp;Certified:                                 </td>
            <td class="column6 style43 s style43" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="column8 style24 null"></td>
            <td class="column9 style52 s style52" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verified by:           </td>
          </tr>
          <tr class="row25">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="column1 style51 s style51" colspan="3">Barangay Kagawad</td>
            <td class="column4 style22 null"></td>
            <td class="column5 style23 null"></td>
<td class="column6 style42 s style49" colspan="2" style="white-space: nowrap;">Barangay Secretary</td>    
            <td class="column8 style50 null style50" colspan="3"></td>
            <td class="column11 style54 s style54" colspan="2">Punong Barangay</td>
            <td class="column13 style28 null"></td>
          </tr>
          <tr class="row26">
            <td class="column0 style22 s">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td class="column1 style22 null"></td>
            <td class="column2 style48 null style48" colspan="3"></td>
            <td class="column5 style23 null"></td>
            <td class="column6 style55 null style55" colspan="2"></td>
            <td class="column8 style50 null style50" colspan="3"></td>
            <td class="column11 style53 null style53" colspan="2"></td>
         
          </tr>
        </tbody>
    </table>
  </body>
</html>
