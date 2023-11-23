<DOCTYPE html>
<html>
<head>
<title>fgf</title>
<style type="text/css">
    <title>RBIIS | Dashboard</title>
  
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
                margin-top: -893px;
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

</style>
          
</head>

<body>


<nobr><nowrap>
<div class="pos" id="_0:0" style="top:0">
<div class="pos" id="_60:41" style="top:41;left:60">
<span id="_13.5" style="font-weight:bold; font-family:Arial; font-size:13.5px; color:#000000">
RBI Form B<span style="font-weight:normal"> (Revised 2023)</span></span>
</div>
<div class="pos" id="_232:68" style="top:68;left:232">
<span id="_13.5" style="font-weight:bold; font-family:Arial; font-size:13.5px; color:#000000">
INDIVIDUAL RECORDS OF BARANGAY INHABITANT</span>
</div>
<div class="pos" id="_50:114" style="top:114;left:50">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
REGION:</span>
</div>
<div class="pos" id="_150:114" style="top:114;left:150">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
___________</span>
</div>
<div class="pos" id="_200:114" style="top:114;left:200">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
{{$resident->region}}______</span>
</div>
<div class="pos" id="_250:114" style="top:114;left:250">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
</span>
</div>
<div class="pos" id="_450:114" style="top:114;left:450">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
 CITY/MUN:</span>
</div>
<div class="pos" id="_550:114" style="top:114;left:550">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
__________________</span>
</div>
<div class="pos" id="_550:114" style="top:114;left:550">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
{{$resident->city_munipality}}____</span>
</div>
<div class="pos" id="_50:136" style="top:136;left:50">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
PROVINCE:</span>
</div>
<div class="pos" id="_150:136" style="top:136;left:147px">
<span id="_10.8" style=" font-family:Arial; font-size:10.8px; color:#000000">
___________________</span>
</div>
<div class="pos" id="_350:136" style="top:136;left:157px">
<span id="_11.6" style=" font-family:Arial; font-size:11.6px; color:#000000">
   {{$resident->province}}</span>
</div>
<div class="pos" id="_450:136" style="top:136;left:450">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
BARANGAY:</span>
</div>
<div class="pos" id="_549:136" style="top:136;left:549">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
_____________________</span>
</div>
<div class="pos" id="_549:136" style="top:136;left:556px">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
{{$resident->barangay}}</span>
</div>
<div class="pos" id="_342:200" style="top:200;left:286px">
<span id="_13.6" style="font-weight:bold; font-family:Arial; font-size:13.6px; color:#000000">
PERSONAL INFORMATION</span>
</div>
<div class="pos" id="_99:234" style="top:234;left:99">
<span id="_12.8" style="font-weight:bold; font-family:Arial; font-size:12.8px; color:#000000">
                                       </span>
</div>
<div class="pos" id="_49:246" style="top:246;left:49">
<span id="_15.3" style="font-weight:bold; font-family:Arial; font-size:15.3px; color:#000000">
                 </span>
</div>
<div class="pos" id="_49:264" style="top: 263px;
  left: 112px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000">
{{$resident->lastname}}</span>

</div>
<div class="pos" id="_49:264" style="top:264;left:49">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000">
   __________________________   </span>

</div>
<div class="pos" id="_49:264" style="top:284;left:49">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000 ;top:274;   margin-left: 28px;">
                                (PhilSys Card No.) </span>
</div>
<div class="pos" id="_49:264" style="top:323;left:49">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000">
   __________________________     </span>

</div>
<div class="pos" id="_49:264" style=" top: 321px;
  left: 104px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->lastname}}</span>

</div>
<div class="pos" id="_49:328" style="top:340;left:49">
<span id="_12.1" style=" font-family:Arial; font-size:12.1px; color:#000000; margin-left: 40px;">
  <span id="_13.5" style=" font-size:13.5px">  </span><span id="_10.8" style=" font-size:10.8px"> (Last Name)</span></span>
</div>
<div class="pos" id="_49:264" style="top:323;left:231px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000">
   __________________________     </span>

</div>
<div class="pos" id="_49:264" style=" top: 321px;
  left: 291px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->suffix}}</span>

</div>
<div class="pos" id="_250:330" style="top:340;left:250">
<span id="_11.6" style=" font-family:Arial; font-size:11.6px; color:#000000">
            (Suffix, e.g., Jr., I, II, III)</span>
</div>
<div class="pos" id="_49:264" style="top:323;left:423px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000">
   __________________________     </span>

</div>
<div class="pos" id="_49:264" style=" top: 321px;
  left: 485px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->firstname}}</span>

</div>
<div class="pos" id="_450:330" style="top:340;left:475px">
<span id="_11.0" style=" font-family:Arial; font-size:11.0px; color:#000000">
    (First Name)</span>
</div>
<div class="pos" id="_49:264" style="top:323;left:636px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000">
   __________________________     </span>

</div>
<div class="pos" id="_49:264" style=" top: 321px;
  left: 711px;">

<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->middlename}}</span>

</div>

<div class="pos" id="_600:330" style="top:340;left:691px">
<span id="_11.0" style=" font-family:Arial; font-size:11.0px; color:#000000">
                   (Middle Name)</span>
</div>
<div class="pos" id="_49:386" style="top:386;left:49">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
      __________________________           </span>
</div>
<div class="pos" id="_49:264" style="   top: 384px; left: 96px;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->date_of_birth}}</span>

</div>
<div class="pos" id="_49:397" style="top:399;left:68px;">
<span id="_10.1" style=" font-family:Arial; font-size:10.1px; color:#000000">
              <span id="_11.5" style=" font-size:11.5px"> (Birth Date: mm/dd/yyyy)</span></span>
</div>
<div class="pos" id="_49:386" style="top:386;left:250px">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
      ______________________         </span>
</div>
<div class="pos" id="_49:264" style="   top: 384px; left: 288px;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->place_of_birth}}</span>

</div>
<div class="pos" id="_249:397" style="top:399;left:288px">
<span id="_11.2" style=" font-family:Arial; font-size:11.2px; color:#000000">
                (Birth Place)</span>
</div>
<div class="pos" id="_49:386" style="top:386;left:405px">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
      __________________        </span>
</div>
<div class="pos" id="_49:264" style="   top: 384px; left: 430px;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->sex}}</span>

</div>
<div class="pos" id="_399:397" style="top:399;left:446px">
<span id="_11.2" style=" font-family:Arial; font-size:11.2px; color:#000000">
                    (Sex)     </span>
</div>
<div class="pos" id="_49:386" style="top:386;left:553px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
      __________________        </span>
</div>
<div class="pos" id="_49:264" style="   top: 384px; left: 590px;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->civil_status}}</span>

</div>
<div class="pos" id="_399:397" style="top:399;left:576px">
<span id="_11.2" style=" font-family:Arial; font-size:11.2px; color:#000000">
                  (Civil Status)</span>
</div>
<div class="pos" id="_49:386" style="top:386;left:680px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
      ________________   </span>
</div>
<div class="pos" id="_49:264" style="   top: 384px; left: 688px;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->religion}}</span>

</div>
<div class="pos" id="_649:397" style="top:399;left:705px">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
(Religion)</span>
</div>
<div class="pos" id="_49:386" style="top:442;left:45px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
  _____________________________________________________________   </span>
</div>
<div class="pos" id="_49:264" style="     top: 439px;left: 122px;;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->address}}</span>

</div>
<div class="pos" id="_191:455" style="top:455;left:191">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
                         (Residence Address)</span>
</div>
<div class="pos" id="_49:386" style="top:442;left:507px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
  ___________________________________   </span>
</div>
<div class="pos" id="_49:264" style="     top: 439px;left: 602px;;">
<span id="_11.3" style=" font-family:Arial; font-size:11.3px; color:#000000  "  >
{{$resident->citizenship}}</span>

</div>
<div class="pos" id="_593:455" style="top:455;left:593">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
             (Citizenship)</span>
</div>
<div class="pos" id="_49:386" style="top:501px;left:43px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
  ___________________________________   </span>
</div>
<div class="pos" id="_57:517" style="top:517;left:95px">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
                          (Profession / Occupation)                   </span>
</div>
<div class="pos" id="_49:386" style="top:501px;left:303px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
  ____________________________  </span>
</div>
<div class="pos" id="_57:517" style="top:517;left:357px">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
            (Contact Number)                       </span>
</div>
<div class="pos" id="_49:386" style="top:501px;left:527px;">
<span id="_11.7" style=" font-family:Arial; font-size:11.7px; color:#000000">
  ____________________________  </span>
</div>
<div class="pos" id="_632:517" style="top:517;left:581px">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
  (E-mail Address)</span>
</div>
<div class="pos" id="_40:557" style="top:557;left:40">
    <span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
        HIGHEST EDUCATIONAL ATTAINMENT:</span>
    <label>
        <input type="checkbox" id="elementary" name="education" value="Elementary" style=" font-family:Arial; font-size:11.7px; color:#000000"> ELEMENTARY 
    </label>
    <label>
        <input type="checkbox" id="highSchool" name="education" value="High School"> HIGH SCHOOL
    </label>
    <label>
        <input type="checkbox" id="college" name="education" value="College"> COLLEGE
    </label>
    <label>
        <input type="checkbox" id="postGrad" name="education" value="Post Grad"> POST GRAD
    </label>
    <label>
        <input type="checkbox" id="vocational" name="education" value="Vocational"> VOCATIONAL
    </label>
</div>

<div class="pos" id="_300:584" style="top:584;left:300">
    <span id="_10.9" style="font-style:italic; font-family:Arial; font-size:10.9px; color:#000000">
        Please specify:</span>
</div>

<div class="pos" id="_400:584" style="top:584;left:400">
    <label>
        <input type="checkbox" id="postGrad" name="education" value="Post Grad"> Graduate
    </label>
    <label>
        <input type="checkbox" id="vocational" name="education" value="Vocational"> Under Graduate
    </label>
</div>

<div class="pos" id="_50:623" style="top:623;left:50">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
I hereby certify that the above information is true and correct to the best of my knowledge. I understand that for the Barangay to </span>
</div>
<div class="pos" id="_50:637" style="top:637;left:50">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
carry out its mandate pursuant to Section 394 (d)(6) of the Local Government Code of 1991, they must necessarily process my </span>
</div>
<div class="pos" id="_50:652" style="top:652;left:50">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
personal information for easy identification of inhabitants, as a tool in planning, and as an updated reference in the number of </span>
</div>
<div class="pos" id="_50:666" style="top:666;left:50">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
inhabitants of the Barangay. Therefore, I grant my consent and recognize the authority of the Barangay to process my personal </span>
</div>
<div class="pos" id="_50:681" style="top:681;left:50">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
information, subject to the provision of the Philippine Data Privacy Act of 2012.</span>
</div>
<div class="pos" id="_100:736" style="top:736;left:100">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
___________________________</span>
</div>
<div class="pos" id="_449:736" style="top:736;left:449">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
--------------------------------------------------------------------</span>
</div>
<div class="pos" id="_100:751" style="top:751;left:135px">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
           Date Accomplished</span>
</div>
<div class="pos" id="_450:751" style="top:751;left:450">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
Name/Signature of Person Accomplishing the Form</span>
</div>
<div class="pos" id="_87:821" style="top:821;left:87">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
Attested By:</span>
</div>
<div class="pos" id="_550:822" style="top:822;left:550">
<span id="_10.9" style=" font-family:Arial; font-size:10.9px; color:#000000">
         </span>
</div>
<div class="pos" id="_50:850" style="top:850;left:50">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
    </span>
</div>
<div class="pos" id="_87:893" style="top:893;left:87">
<span id="_12.2" style=" font-family:Arial; font-size:12.2px; color:#000000">
______________________________</span>
</div>
<div class="pos" id="_87:907" style="top:907;left:128px">
<span id="_12.2" style="font-weight:bold; font-family:Arial; font-size:12.2px; color:#000000">
              Barangay Secretary</span>
</div>
<div style="  width: 102px;
  height: 94px; border: 1px solid black; margin-left: 447%; margin-top: 780%;"></div>
<div class="pos" id="_481:907" style="top:907;left:467px;">
<span id="_10.9" style="font-weight:bold; font-family:Arial; font-size:10.9px; color:#000000">
   <span id="_12.2" style="font-weight:normal; font-size:12.2px"> Left Thumbmark </span><span id="_12.2" style="font-weight:normal; font-size:12.2px">      
</div>
<div style="    width: 102px;
  height: 94px;
  border: 1px solid black;
  margin-left: 564%;
  margin-top: -93%;"></div>
<div class="pos" id="_481:907" style="top:907;left:591px">
<span id="_10.9" style="font-weight:bold; font-family:Arial; font-size:10.9px; color:#000000">
   <span id="_12.2" style="font-weight:normal; font-size:12.2px">  </span><span id="_12.2" style="font-weight:normal; font-size:12.2px">        Right Thumbmark</span></span>
</div>
<div class="pos" id="_87:973" style="top:973;left:87">
<span id="_11.9" style="font-weight:bold; font-family:Arial; font-size:11.9px; color:#000000">
Household Number:  ____________</span>
</div>
<div class="pos" id="_87:973" style="top:973;left:226PX">
<span id="_11.9" style=" font-family:Arial; font-size:11.9px; color:#000000">
 {{$resident->householdNO}}</span>
</div>

<div class="pos" id="_87:1000" style="top:1000;left:87">
<span id="_10.6" style="font-style:italic; font-family:Arial; font-size:10.6px; color:#000000">
Note: The household No. shall be filled up by the Barangay Secretary.</span>
</div>
</nowrap></nobr>

 <div class="print-button-container1">
    <button class="print-button1" onclick="window.print()" id="print-button" >PRINT</button> 
  </div>

</body>
</html>



