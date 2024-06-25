<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
    *{
    font-family: montserrat;

}

    .container 
    {

        background-color: #FFFFE0;
        border-radius: 10px;
        margin: 20px 300px;
        padding: 30px 60px;
        width: 50%;
        height: 2550px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);

    }

    .comName {
        position: absolute;
        right: 400px;
        top: 20px;
        border: 2px solid white;
        margin-top: 13px;
        padding-top: -200;
        height: 120px;
        width: 18%;
        text-align: left;
    }

    .mainform {
        font-family: 'Open Sans', sans-serif;
    }

    .mainform img {
        position: absolute;
        right: 400px;
        margin-top: -40px;
    }

    .surveyform {
        font-family: Arial, sans-serif;
        position: absolute;
        top: 540px;
        font-size: 20px;
    }

    .mainQeqs {
        margin-top: 20px;
        display: block;
        box-sizing: border-box;
        font-size: 16px;
        font-family: "Inter", sans-serif;
    }

    .mainQeqs1 {
        margin-top: 20px;
        display: block;
        box-sizing: border-box;
        font-size: 16px;
        font-family: "Inter", sans-serif;
    }

    .mainQeqs1 input {
        margin: 7px 2px;
        padding: 7px 2px;
        width: 35%;
        font-size: 16px;
        text-align: center;
    }

    #lnm,
    #mn,#designation {
        position: absolute;
        right: 50px;
    }

    .options1,
    .options3,
    .options5 {

        margin: 5px 20px;
        padding: 5px 5px;

    }

    .options2 {

        position: absolute;
        left: 400px;
        width: 500px;
        margin-top: -30px;
    }

    .options4 {

        position: absolute;
        left: 400px;
        width: 500px;
        margin-top: -30px;

    }

    table {
        width: 750px;
        height: 400px;

    }

    th {
        padding: 14px 14px;
        margin: 2px 2px;
        border: 1px darkcyan;
        font-style: normal;
        font-size: 15px;
        font-family: "Inter", sans-serif;
        font-weight: normal;
    }

    tbody input {
        margin: 2px 38px;
        width: 18px;
        height: 18px;
    }

    .table1 table,
    th,
    td {
        border: 1px solid lightblue;
        border-collapse: collapse;
        border-radius: 5px;

    }

    #bt1,
    #b1 {
        width: 120px;
        height: 40px;
        position: absolute;
        left: 330px;
        margin-top: 19px;
        background-color: darkslategray;
        color: white;
        border-radius: 5px;
        font-size: 17px;
        cursor: pointer;


    }
    
   
    .value {
        position: absolute;
        left: 953px;
        top: 472px;
        padding: 27px 20px;
    }
    
</style>

<body>
    <div class="container">
        <div class="header">
            <img src="img/logo.png"
                width="150px" height="85px" alt="">
            <div class="comName">
                <h4 style="margin-bottom: 7px; margin-top: 8px;">ACME GLOBAL Company</h4>
                acmeglobal@gmail.com<br>
                www.acmeglobal.com<br>
                (123) 1234567
                <h4 style="margin-top: 8px;">123 Kothrud,Pune, 105112</h4>

            </div>
        </div>
        <br>
        <hr>
        <div class="mainform">
            <h1 style="position: absolute; left: 500px;  top: 255px;"><span>EMPLOYEE</span></h1> <br>
            <h1 style="position: absolute; left: 470px; margin-top: 113px;"><span>SATISFACTION</span></h1> <br>
            <h1 style="position: absolute; left: 520px; margin-top: 125px;"><span>SURVEY</span></h1>
            <img src="img/employee.png"
                height="360px" width="360px" alt="">
        </div>
        <div class="surveyform">
            <form name="myform2" method="post" action="databaseconnect.php">
                <div class="mainQeqs1">
                    Name<br>
                    <input type="text" id="fnm" name="fnm" placeholder="enter first name" required><input type="text" id="lnm" name="lnm"
                        placeholder="enter last name" required>
                    <br><br>
					Enter Employee Id:<br><input type="text" name="empid" required>
<span style="position: absolute; right: 200px">Select Designation</span>
					<Select name="designation" id="designation" style="height:30px" required>
					<option value="senior manager">Senior Manager</option>
					<option value="HR manager">HR Manager</option>
					<option value="Project manager">Senior Manager</option>
					<option value="Supervisor">Supervisor</option>
					<option value="Executive assistant">Executive assistant</option>
					</select><br>
                    Email<span style="position: absolute; right: 250px">Mobile No</span> <br>
                    <input type="email" name="email" placeholder="enter email-Id" required><input type="text"
                        name="mono" id="mn" placeholder="enter mobile no" maxlength="10" required>
                    <br>
                </div>
                <div class="mainQeqs">
                    1.How Meaningful is your work?<br>
                    <div class="options1" style="margin-top: 20px;">
                        <input type="radio" name="r1" id="o1" value="extremely Meaningful" required>Extremely Meaningful
                    </div>
                    <div class="options2">
                        <input type="radio" name="r1" id="o2" value="very Meaningful" required>Very Meaningful
                    </div>
                    <div class="options3">
                        <input type="radio" name="r1" id="o3" value="moderately Meaningful" required>Moderately Meaningful
                    </div>
                    <div class="options4">
                        <input type="radio" name="r1" id="o4" value="slightly Meaningful" required>Slightly Meaningful
                    </div>
                    <div class="options5">
                        <input type="radio" name="r1" id="o5" value="Not at all Meaningful" required>Not at all Meaningful
                    </div>

                </div>
                <div class="mainQeqs">

                    2.How Challenging is your job?<br>
                    <div class="options1" style="margin-top: 20px;">
                        <input type="radio" name="r2" id="o11" value="extremely Challenging" required>Extremely Challenging
                    </div>
                    <div class="options2">
                        <input type="radio" name="r2" id="o12" value="very Challenging" required>Very Challenging
                    </div>
                    <div class="options3">
                        <input type="radio" name="r2" id="o13" value="moderately Challenging" required>Moderately Challenging
                    </div>
                    <div class="options4">
                        <input type="radio" name="r2" id="o14" value="slightly Challenging" required>Slightly Challenging
                    </div>
                    <div class="options5">
                        <input type="radio" name="r2" id="o15" value="Not at all Challenging" required>Not at all Challenging
                    </div>

                </div>
                <div class="mainQeqs">
                    3.In a typical week, how often do you feel stressed at work?<br>
                    <div class="options1" style="margin-top: 20px;">
                        <input type="radio" name="r3" id="o21" value="extremely Often" required>Extremely Often
                    </div>
                    <div class="options2">
                        <input type="radio" name="r3" id="o22" value="very Often" required>Very Often
                    </div>
                    <div class="options3">
                        <input type="radio" name="r3" id="o23" value="moderately Often" required>Moderately Often
                    </div>
                    <div class="options4">
                        <input type="radio" name="r3" id="o24" value="slightly Often" required>Slightly Often
                    </div>
                    <div class="options5">
                        <input type="radio" name="r3" id="o25" value="Not at all Often" required>Not at all Often
                    </div>
                </div>
                <div class="mainQeqs">
                    4.How well are you paid for the job you do?<br>
                    <div class="options1" style="margin-top: 20px;">
                        <input type="radio" name="r4" id="o31" value="extremely Well" required>Extremely Well
                    </div>
                    <div class="options2">
                        <input type="radio" name="r4" id="o32" value="very Well" required>Very Well
                    </div>
                    <div class="options3">
                        <input type="radio" name="r4" id="o33" value="moderately Well" required>Moderately Well
                    </div>
                    <div class="options4">
                        <input type="radio" name="r4" id="o34" value="slightly Well" required>Slightly Well
                    </div>
                    <div class="options5">
                        <input type="radio" name="r4" id="o35" value="Not at all Well" required>Not at all Well
                    </div>
                </div>
                <div class="mainQeqs">
                    5.How would you describe your overall level of job satisfaction?<br>
                    <div class="options1" style="margin-top: 20px;">
                        <input type="radio" name="r5" id="o41" value="Very Satisfied " required>Very Satisfied
                    </div>
                    <div class="options2">
                        <input type="radio" name="r5" id="o42" value="Somewhat Satisfied" required>Somewhat Satisfied
                    </div>
                    <div class="options3">
                        <input type="radio" name="r5" id="o43" value="Neutral" required>Neutral
                    </div>
                    <div class="options4">
                        <input type="radio" name="r5" id="o44" value="Not at all" required>Very dissatisfied
                    </div>
                    <div class="options5">
                        <input type="radio" name="r5" id="o45" value="A Moderate Amount" required>A Moderate Amount
                    </div>
                    <br>
                    6.How would you rate the following?
                </div>
                <div class="table1">
                    <table>
                        <thead>
                            <tr>
                                <th style="border: 2px solid white;"></th>
                                <th style="background-color:lightslategray;">Very Poor</th>
                                <th style="background-color:lightslategray;">Poor </th>
                                <th style="background-color:lightslategray;">Average </th>
                                <th style="background-color:lightslategray;">Good</th>
                                <th style="background-color:lightslategray;">Excellent</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white;width: 60%;height: 8%; font-size: 17px;">
                                    Salary </td>
                                <td><input type="radio" name="r6" id="o51" value="very poor salary" required></td>
                                <td><input type="radio" name="r6" id="o52" value="poor salary"required></td>
                                <td><input type="radio" name="r6" id="o53" value="Average salary"required></td>
                                <td><input type="radio" name="r6" id="o54" value="good"required></td>
                                <td><input type="radio" name="r6" id="o55" value="Excellent salary"required></td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white;width: 60%;height: 8%; font-size: 17px;">
                                    Overall Benefits </td>
                                <td><input type="radio" name="r7" id="o15" value="very poor Benefits"required> </td>
                                <td><input type="radio" name="r7" id="o61" value="poor Benefits"required> </td>
                                <td><input type="radio" name="r7" id="o62" value="Average Benefits"required></td>
                                <td><input type="radio" name="r7" id="o63" value="good Benefits"required></td>
                                <td><input type="radio" name="r7" id="o64" value="Excellent Benefits"required></td>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white; width: 90%;height: 8%; font-size: 17px;">
                                    Senior Leadership</td>
                                <td><input type="radio" name="r8" id="o71" value="very poor Leadership"required></td>
                                <td><input type="radio" name="r8" id="o72" value="poor Leadership"required></td>
                                <td><input type="radio" name="r8" id="o73" value="Average Leadership"required></td>
                                <td><input type="radio" name="r8" id="o74" value="good Leadership"required></td>
                                <td><input type="radio" name="r8" id="o75" value="Excellent Leadership"required></td>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white;width: 90%;height: 8%; font-size: 17px;">
                                    Individual Management</td>
                                <td><input type="radio" name="r9" id="o81" value="very poor Management"required></td>
                                <td><input type="radio" name="r9" id="o82" value="poor Management"required></td>
                                <td><input type="radio" name="r9" id="o83" value="Average Management"required></td>
                                <td><input type="radio" name="r9" id="o84" value="good Management"required></td>
                                <td><input type="radio" name="r9" id="o85" value="Excellent Management"required></td>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white;width: 90%;height: 8%; font-size: 17px;">
                                    Physical Work Environment</td>
                                <td><input type="radio" name="r10" id="o91" value="very poor Environment"required></td>
                                <td><input type="radio" name="r10" id="o92" value="poor Environment"required></td>
                                <td><input type="radio" name="r10" id="o93" value="Average Environment"required></td>
                                <td><input type="radio" name="r10" id="o94" value="good Environment"required></td>
                                <td><input type="radio" name="r10" id="o95" value="Excellent Environment"required></td>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white;width: 90%;height: 8%; font-size: 17px;">
                                    Training Opportunities</td>
                                <td><input type="radio" name="r11" id="o101" value="very poor Opportunities"required></td>
                                <td><input type="radio" name="r11" id="o102" value="poor Opportunities"required></td>
                                <td><input type="radio" name="r11" id="o103" value="Average Opportunities"required></td>
                                <td><input type="radio" name="r11" id="o104" value="good Opportunities"required></td>
                                <td><input type="radio" name="r11" id="o105" value="Excellent Opportunities"required></td>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    style="background-color: darkslategrey; color: white;width: 90%;height: 8%;text-wrap: nowrap; font-size: 17px;">
                                    Opportunities for Advancement</td>
                                <td><input type="radio" name="r12" id="o111" value="very poor Opportunities " required></td>
                                <td><input type="radio" name="r12" id="o112" value="poor Opportunities "required></td>
                                <td><input type="radio" name="r12" id="o113" value="Average Opportunities "required></td>
                                <td><input type="radio" name="r12" id="o114" value="good Opportunities "required></td>
                                <td><input type="radio" name="r12" id="o115" value="Excellent Opportunities"required></td>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="mainQeqs">7.Do you feel valued at work?<br>
                    <input style="margin-top: 12px;" type="radio" id="o121" name="r13" value="yes"required>Yes<br>
                    <input style="margin-top: 12px;" type="radio" id="o122" name="r13" value="no"required>No<br><br>
              
                    8.Does your job cause stress or anxiety?<br>
                    <input style="margin-top: 12px;" type="radio" id="o131" name="r14" value="yes"required>Yes<br>
                    <input style="margin-top: 12px;" type="radio" name="r14" id="o132" value="no"required>No<br><br>
                   
                    9.Are sufficient efforts being made to solicit colleague opinions and feedback?<br>
                    <input style="margin-top: 12px;" type="radio" id="o141" name="r15" value="yes"required>Yes<br>
                    <input style="margin-top: 12px;" type="radio" name="r15" id="o142" value="no"required>No<br><br>
                   
                    10.Please provide any additional feedback<br>
                    <textarea style="margin-top: 12px;" id="ta4" cols="65" rows="10"
                        placeholder="Type here.." name="r16" required></textarea><br>

                </div>
                <input style="left: 190px;" type="submit" id="bt1" value="SUBMIT" onclick="dis()">
                <input type="reset" id="b1" value="RESET">
                
            </form>
          

        </div>

    </div>

        



</body>

</html>