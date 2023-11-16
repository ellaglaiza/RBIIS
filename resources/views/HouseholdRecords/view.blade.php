

  <button id="print-button" onclick="window.print()" class="btn btn-sm btn-primary waves-effect waves-light printdtr"><i class="fa fa-print"></i>eee</button>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="generator" content="PhpSpreadsheet, https://github.com/PHPOffice/PhpSpreadsheet">
      <meta name="author" content="USER" />
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
      td.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style0 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style1 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style1 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style2 { vertical-align:middle; text-align:left; padding-left:36px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style2 { vertical-align:middle; text-align:left; padding-left:36px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style3 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style3 { vertical-align:middle; text-align:left; padding-left:18px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style4 { vertical-align:middle; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style5 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style5 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style6 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style7 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style8 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:2px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style9 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style9 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style10 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style10 { vertical-align:bottom; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style11 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style12 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style12 { vertical-align:middle; text-align:center; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style13 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style13 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style14 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style15 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:1px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style16 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style16 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:2px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style17 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style17 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:1px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style18 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style18 { vertical-align:top; text-align:left; padding-left:0px; border-bottom:2px solid #000000 !important; border-top:1px solid #000000 !important; border-left:1px solid #000000 !important; border-right:2px solid #000000 !important; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style19 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style19 { vertical-align:bottom; text-align:left; padding-left:0px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style20 { vertical-align:middle; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style21 { vertical-align:bottom; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style21 { vertical-align:bottom; text-align:left; padding-left:9px; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      td.style22 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      th.style22 { vertical-align:bottom; text-align:center; border-bottom:none #000000; border-top:none #000000; border-left:none #000000; border-right:none #000000; color:#000000; font-family:'Arial'; font-size:11.000000pt; background-color:white }
      table.sheet0 col.col0 { width:65.74444369pt }
      table.sheet0 col.col1 { width:37.95555512pt }
      table.sheet0 col.col2 { width:14.23333317pt }
      table.sheet0 col.col3 { width:54.2222216pt }
      table.sheet0 col.col4 { width:13.5555554pt }
      table.sheet0 col.col5 { width:23.72222195pt }
      table.sheet0 col.col6 { width:32.53333296pt }
      table.sheet0 col.col7 { width:48.12222167pt }
      table.sheet0 col.col8 { width:62.35555484pt }
      table.sheet0 col.col9 { width:39.98888843pt }
      table.sheet0 col.col10 { width:56.93333268pt }
      table.sheet0 col.col11 { width:28.46666634pt }
      table.sheet0 col.col12 { width:32.53333296pt }
      table.sheet0 col.col13 { width:45.41111059pt }
      table.sheet0 col.col14 { width:46.76666613pt }
      table.sheet0 col.col15 { width:59.64444376pt }
      table.sheet0 tr { height:14.025pt }
      table.sheet0 tr.row0 { height:17.25pt }
      table.sheet0 tr.row1 { height:18.75pt }
      table.sheet0 tr.row2 { height:18.75pt }
      table.sheet0 tr.row3 { height:17.25pt }
      table.sheet0 tr.row4 { height:17.25pt }
      table.sheet0 tr.row5 { height:17.25pt }
      table.sheet0 tr.row6 { height:17.25pt }
      table.sheet0 tr.row7 { height:17.25pt }
      table.sheet0 tr.row8 { height:5pt }
      table.sheet0 tr.row9 { height:17.25pt }
      table.sheet0 tr.row10 { height:17.25pt }
      table.sheet0 tr.row11 { height:46.400024pt }
      table.sheet0 tr.row12 { height:17.25pt }
      table.sheet0 tr.row13 { height:15pt }
      table.sheet0 tr.row14 { height:14.950012pt }
      table.sheet0 tr.row15 { height:14.949982pt }
      table.sheet0 tr.row16 { height:15pt }
      table.sheet0 tr.row17 { height:15pt }
      table.sheet0 tr.row18 { height:15pt }
      table.sheet0 tr.row19 { height:15pt }
      table.sheet0 tr.row20 { height:15pt }
      table.sheet0 tr.row21 { height:15pt }
      table.sheet0 tr.row22 { height:15pt }
      table.sheet0 tr.row23 { height:15pt }
      table.sheet0 tr.row24 { height:15pt }
      table.sheet0 tr.row25 { height:16.600006pt }
      table.sheet0 tr.row26 { height:16.5pt }
      table.sheet0 tr.row27 { height:33pt }
      table.sheet0 tr.row28 { height:33pt }
      table.sheet0 tr.row29 { height:17.25pt }
      table.sheet0 tr.row30 { height:17.25pt }
    </style>
  </head>

  <body>
<style>
/*@page { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }
body { margin-left: 0.7in; margin-right: 0.7in; margin-top: 0.75in; margin-bottom: 0.75in; }*/
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
        <col class="col15">
        <tbody>
          <tr class="row0">
            <td class="column0 style1 s style1" colspan="16"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">RBI FORM B</span></td>
          </tr>
          <tr class="row1">
            <td class="column0 style1 s style1" colspan="7"></td>
            <td class="column7 style2 s style1" colspan="9"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt"> HOUSEHOLD</span></td>
          </tr>
          <tr class="row2">
            <td class="column0 style1 s style1" colspan="6"></td>
            <td class="column6 style3 s style1" colspan="10"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:12pt">  RECORD OF BARANGAY INHABITANTS</span></td>
          </tr>
          <tr class="row3">
            <td class="column0 style1 s style1" colspan="8"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">A. REGION:</span></td>
            <td class="column8 style1 s style1" colspan="8"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">A. 1  PSGC:</span></td>
          </tr>
          <tr class="row4">
            <td class="column0 style4 s style1" colspan="4"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">B. PROVINCE:</span></td>
            <td class="column4 style5 s style5" colspan="3"></td>
            <td class="column7 style1 s style1" rowspan="3"></td>
            <td class="column8 style4 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">B. 1  PSGC</span></td>
            <td class="column9 style5 s style5" colspan="2"></td>
            <td class="column11 style1 s style1" colspan="5" rowspan="3"></td>
          </tr>
          <tr class="row5">
            <td class="column0 style4 s style1" colspan="4"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">C. CITY/MUNICIPALITY:</span></td>
            <td class="column4 style5 s style5" colspan="3"></td>
            <td class="column8 style4 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">C. 1 PSGC</span></td>
            <td class="column9 style5 s style5" colspan="2"></td>
          </tr>
          <tr class="row6">
            <td class="column0 style4 s style1" colspan="4"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">D. BARANGAY:</span></td>
            <td class="column4 style5 s style5" colspan="3"></td>
            <td class="column8 style4 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">D. 1 PSGC</span></td>
            <td class="column9 style5 s style5" colspan="2"></td>
          </tr>
          <tr class="row7">
            <td class="column0 style4 s style1" colspan="4"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">E. HOUSEHOLD NO.:</span></td>
            <td class="column4 style5 s style5" colspan="3"></td>
            <td class="column7 style1 s style1" colspan="9"></td>
          </tr>
          <tr class="row8">
            <td class="column0 style1 s style1" colspan="16"></td>
          </tr>
          <tr class="row9">
            <td class="column0 style6 s style6" colspan="6"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">NAME</span></td>
            <td class="column6 style7 s style7" colspan="3"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">ADDRESS</span></td>
            <td class="column9 style7 s style7" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">PLACE OF<br />
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">BIRTH</span></td>
            <td class="column10 style7 s style7" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">DATE OF BIRTH</span></td>
            <td class="column11 style7 s style7" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">SEX</span></td>
            <td class="column12 style7 s style7" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">CIVIL<br />
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">STATUS</span></td>
            <td class="column13 style7 s style7" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">CITIZENSHIP</span></td>
            <td class="column14 style7 s style7" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">OCCUPATION</span></td>
            <td class="column15 style8 s style8" rowspan="3"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">RELATIONSHIP<br />
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">TO HOUSEHOLD<br />
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">HEAD</span></td>
          </tr>
          <tr class="row10">
            <td class="column0 style9 s style9" colspan="6"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(1)</span></td>
            <td class="column6 style10 s style10" colspan="3"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(2)</span></td>
          </tr>
          <tr class="row11">
            <td class="column0 style11 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">LAST</span></td>
            <td class="column1 style12 s style12" colspan="2"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">FIRST</span></td>
            <td class="column3 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">MIDDLE</span></td>
            <td class="column4 style12 s style12" colspan="2"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">QUALIFIER</span></td>
            <td class="column6 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">NUMBER</span></td>
            <td class="column7 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">STREET NAME</span></td>
            <td class="column8 style12 s"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:8pt">COMPLETE ADDRESS<br /></td>
          </tr>
          <tr class="row12">
            <td class="column0 style9 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(1.1)</span></td>
            <td class="column1 style10 s style10" colspan="2"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(1.2)</span></td>
            <td class="column3 style10 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(1.3)</span></td>
            <td class="column4 style10 s style10" colspan="2"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(1.4)</span></td>
            <td class="column6 style10 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(2.1)</span></td>
            <td class="column7 style10 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(2.2)</span></td>
            <td class="column8 style10 s"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">(2.3)</span></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row13">
            <td class="column0 style15 s">{{$resident->lastname}}</td>
            <td class="column1 style13 s style13" colspan="2">{{$resident->firstname}}</td>
            <td class="column3 style13 s">{{$resident->middlename}}</td>
            <td class="column4 style13 s style13" colspan="2">{{$resident->suffix}}</td>

            <td class="column6 style13 s">{{$resident->householdNO}}</td>
            <td class="column7 style13 s">{{$resident->purok}}</td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s">{{$resident->place_of_birth}}</td>
            <td class="column10 style13 s">{{$resident->sex}}</td>
            <td class="column11 style13 s">{{$resident->age}}</td>
            <td class="column12 style13 s">{{$resident->age}}</td>
            <td class="column13 style13 s">{{$resident->civil_status}}</td>
            <td class="column14 style13 s">{{$resident->age}}</td>
            <td class="column15 style14 s">{{$resident->members_relationship}}</td>
          </tr>
        
                        <?php 
                        $members_firstname = json_decode($resident->members_firstname);
                        $members_middlename = json_decode($resident->members_middlename);
                        $members_lastname = json_decode($resident->members_lastname);
                        $members_qualifier = json_decode($resident->members_qualifier);

                        $members_dob = json_decode($resident->members_dob);
                        $members_relationship = json_decode($resident->members_relationship);
                        
                        if ($members_firstname !== null && $members_middlename !== null && 
                         $members_lastname !== null && $members_qualifier!== null && $members_dob !== null && 
                         $members_relationship !== null) {
                            for ($x = 0; $x < count($members_firstname); $x++) {
                        ?>
                             <tr class="row14">
            <td class="column0 style15 s">{{ $members_firstname[$x] }}</td>
            <td class="column1 style13 s style13" colspan="2">{{ $members_middlename[$x] }}</td>
            <td class="column3 style13 s">{{ $members_lastname[$x] }}</td>
            <td class="column4 style13 s style13" colspan="2">{{ $members_qualifier[$x] }}</td>
            <td class="column6 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column7 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column8 style13 s">{{ $members_dob[$x] }}</td>
            <td class="column9 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column10 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column11 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column12 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column13 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column14 style13 s">{{ $members_firstname[$x] }}</td>
            <td class="column15 style14 s">{{ $members_relationship[$x] }}</td>
          </tr>
                        <?php
                            }
                        }
                        ?>

    <?php 
    if (!empty($resident->members_firstname) && !empty($resident->members_middlename) && !empty($resident->members_lastname) && !empty($resident->members_qualifier) && !empty($resident->members_dob) && !empty($resident->members_relationship)) {
        $members_firstname = json_decode($resident->members_firstname);
        $members_middlename = json_decode($resident->members_middlename);
        $members_lastname = json_decode($resident->members_lastname);
        $members_qualifier = json_decode($resident->members_qualifier);
        $members_dob = json_decode($resident->members_dob);
        $members_relationship = json_decode($resident->members_relationship);

        if (is_array($members_firstname) && is_array($members_middlename) && is_array($members_lastname) && is_array($members_qualifier)
            && is_array($members_dob) && is_array($members_relationship)) {
            for ($x = 0; $x < count($members_firstname); $x++) {
                ?>
                
  
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
    ?>
</div>
          
          <tr class="row15">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row16">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row17">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row18">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row19">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row20">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row21">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row22">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row23">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row24">
            <td class="column0 style15 s"></td>
            <td class="column1 style13 s style13" colspan="2"></td>
            <td class="column3 style13 s"></td>
            <td class="column4 style13 s style13" colspan="2"></td>
            <td class="column6 style13 s"></td>
            <td class="column7 style13 s"></td>
            <td class="column8 style13 s"></td>
            <td class="column9 style13 s"></td>
            <td class="column10 style13 s"></td>
            <td class="column11 style13 s"></td>
            <td class="column12 style13 s"></td>
            <td class="column13 style13 s"></td>
            <td class="column14 style13 s"></td>
            <td class="column15 style14 s"></td>
          </tr>
          <tr class="row25">
            <td class="column0 style16 s"></td>
            <td class="column1 style17 s style17" colspan="2"></td>
            <td class="column3 style17 s"></td>
            <td class="column4 style17 s style17" colspan="2"></td>
            <td class="column6 style17 s"></td>
            <td class="column7 style17 s"></td>
            <td class="column8 style17 s"></td>
            <td class="column9 style17 s"></td>
            <td class="column10 style17 s"></td>
            <td class="column11 style17 s"></td>
            <td class="column12 style17 s"></td>
            <td class="column13 style17 s"></td>
            <td class="column14 style17 s"></td>
            <td class="column15 style18 s"></td>
          </tr>
          <tr class="row26">
            <td class="column0 style19 s style1" colspan="16"><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:9pt">Legend</span></td>
          </tr>
          <tr class="row27">
            <td class="column0 style4 s style1" colspan="16"><span style="color:#000000; font-family:'Calibri'; font-size:9pt">PSGC: Philippine Standard Geographic Code shall be made available by the DILG City/Municipal Officer<br />
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:9pt">HOUSEHOLD </span><span style="color:#000000; font-family:'Calibri'; font-size:9pt">is a social unit consisting of person living alone or group of persons who</span></td>
          </tr>
          <tr class="row28">
            <td class="column0 style4 s style1" colspan="16"><span style="color:#000000; font-family:'Calibri'; font-size:9pt">      1) sleep in the same housing unit; and 2) have a common arrangement in the preparation and consumption  of food.<br />
</span><span style="font-weight:bold; color:#000000; font-family:'Calibri'; font-size:9pt">QUALIFIER </span><span style="color:#000000; font-family:'Calibri'; font-size:9pt">is the addition and/or inclusion of the word &quot;jr.&quot; &quot;SR.&quot; etc. as the case maybe after the person's surname(s)</span></td>
          </tr>
          <tr class="row29">
            <td class="column0 style20 s style1" colspan="16"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">prepared by: </span><span style="text-decoration:underline; color:#000000; font-family:'Calibri'; font-size:10pt">                                                           </span><span style="color:#000000; font-family:'Calibri'; font-size:10pt">                               Certified Correct: </span><span style="text-decoration:underline; color:#000000; font-family:'Calibri'; font-size:10pt">                                                </span><span style="color:#000000; font-family:'Calibri'; font-size:10pt">                                  Validated by: </span><span style="text-decoration:underline; color:#000000; font-family:'Calibri'; font-size:10pt">                                             </span></td>
          </tr>
          <tr class="row30">
            <td class="column0 style21 s style1" colspan="2"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">Barangay Secretary</span></td>
            <td class="column2 style22 s style1" colspan="3"><span style="color:#000000; font-family:'Calibri'; font-size:10pt">Punong Barangay</span></td>
            <td class="column5 style1 s style1" colspan="11"></td>
          </tr>
        </tbody>
    </table>
                 
  </body>
</html>





