<?php
//    date_default_timezone_set('Europe/Dublin');
//    
//    echo date_default_timezone_get();

$arrival = new DateTime('Europe/Dublin');
$arrivalString = $arrival->format("Y-m-d H:i:s");

    include 'includes/dbh.inc.php';
    
?>




<!DOCTYPE html>
<html>

<head>

    <title>EduSub Mobile</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--jQuery CDN Hosted Files-->
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

    <!--2AM Creations CSS Stylesheet-->
    <link rel="stylesheet" href="css/main.css" />


</head>

<body>
    
<!------SCHOOL PAGES-------------------------------------------------------------->


<!--Page 1 Search for Teachers--------------------------------------------------------->
    <div data-role="page" id="school1">
        
        <!-- Subheader --> 
        <div data-role="header" class="subheader" data-position="fixed">
            <a href="#filterPanel" class="ui-btn-right" >Filter</a>
            <div class="subheadertext">Available teachers...</div>
        </div>

            <!-- Subheader Filter Panel -->
            <div data-role="panel" id="filterPanel" data-display="overlay" data-position="right">
                <h1 class="filterHeader">FILTER</h1>

                <a data-rel="" id="filterClose" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Clear</a>

                <fieldset data-role="controlgroup">
                    <legend>Only show:</legend>
                    <input type="checkbox" name="checkbox-levela" id="checkbox-levela">
                    <label for="checkbox-levela">Primary Teachers</label>
                    <input type="checkbox" name="checkbox-levelb" id="checkbox-levelab">
                    <label for="checkbox-levelab">Secondary Teachers</label>
                </fieldset>

                <a data-rel="close" id="filterApply" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Apply</a>

            </div>

        <!--- Body -->
        <div id="teachersavailable">
            
             <a href="teacher.php" data-transition="slidefade">Teachers</a>
    
            <ul data-role="listview" data-inset="true">
                <li>
                    <a href="#school5" data-transition="slide">
                        <h2>Jane O'Connor</h2>
                        <p><strong>Primary School Teacher</strong></p>
                        <p>10 September - 17 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>Mary Burke</h2>
                        <p><strong>Secondary School Teacher</strong></p>
                        <p>10 September - 22 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>John O'Connell</h2>
                        <p><strong>Primary School Teacher</strong></p>
                        <p>12 September - 19 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>Orla Kennedy</h2>
                        <p><strong>Primary School Teacher</strong></p>
                        <p>17 September - 24 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>Tom Watson</h2>
                        <p><strong>Secondary School Teacher</strong></p>
                        <p>18 September - 23 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>David O'Shea</h2>
                        <p><strong>Primary School Teacher</strong></p>
                        <p>21 September - 28 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>Sarah Neil</h2>
                        <p><strong>Secondary School Teacher</strong></p>
                        <p>23 September - 30 September</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <h2>Helen Ryan</h2>
                        <p><strong>Primary School Teacher</strong></p>
                        <p>27 September - 10 October</p>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#school4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub School
        </div>

        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school1" data-icon="schooliconactive">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#school2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#school3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>

        <!-- Add Job "+"" Icon -->
        <a href="#jobForm" id="myBtn" data-transition="slidefade">+</a>
    
    </div>

<!-------Job Form------------------------------------------------------------>
    <div data-role="page" id="jobForm">

        <!-- Subheader --> 
        <div data-role="header" class="subheader" data-position="fixed">
            <div class="subheadertext">Enter details </div>
        </div>
        
        <!-- Body -->
        <div data-role="main" id="jobForm" class="ui-content">
            
            
            
                   
    
            
                <form  action="includes/signup.inc.php" method="post">
                    <input type="hidden" name="schoolID" value="Anon">
                    <input type="hidden" name="datePosted" value=" <?php echo $arrivalString;?>">

                    <label for="text-basic">Job Title:</label>
                    <input type="text" name="title" id="jobTitle" value="">

                        <label for="Level">Level:</label>
                        <select name="level" id="select-native-1">
                            <option disabled selected>Select one...</option>
                            <option value="primary">Primary School</option>
                            <option value="secondary">Secondary School</option>
                        </select>



                    <label for="date">Date From:</label>
                    <input type="date" name="dateFrom" id="dateFrom" value="">

                    <label for="date">Date To:</label>
                    <input type="date" name="dateTo" id="dateTo" value="">


                    <label for="textarea">Description:</label>
                    <textarea cols="40" rows="8" name="description" id="jobDesc"></textarea>

                    <button type="submit" name="sumbit">Submit</button>

            </form>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#" data-rel="back" data-icon="arrow-l" class="ui-btn-left" data-directions="reverse">Back</a>New Job Post
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul> 
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school1" data-icon="schooliconactive">Search</a></li>
                    <li><a class="ui-nodisc-icon"  href="#school2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#school3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-------Page 2 Planner------------------------------------------------------------>
    <div data-role="page" id="school2">

        <!-- Subheader --> 
        <div data-role="header" class="subheader" data-position="fixed">
            <div class="subheadertext">Select date for more information</div>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
           
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#school4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub School
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#school1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school2" data-icon="plannericonactive">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#school3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>


<!-------Page 3.1 Live Jobs----------------------------------------------------->
    <div data-role="page" id="school3.1">

        <!-- Subheader -->
        <div data-role="navbar" class="subnavbar" data-position="fixed">
            <ul>
                <li><a href="#school3.1"id="activelive" class="ui-btn-active ui-btn-persist">Live Jobs</a></li>
                <li><a href="#school3.2">Requests</a></li>
                <li><a href="#school3.3">History</a></li>
            </ul>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
            <h1>Live</h1>
            <p>Example</p>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#school4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub School
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#school1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#school2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school3.1" data-icon="briefcaseiconactive">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-------Page 3.2 Job Requests----------------------------------------------------->
    <div data-role="page" id="school3.2">

        <!-- Subheader -->
        <div data-role="navbar" class="subnavbar" data-position="fixed">
            <ul>
                <li><a href="#school3.1">Live Jobs</a></li>
                <li><a href="#school3.2"id="activerequests" class="ui-btn-active ui-btn-persist">Requests</a></li>
                <li><a href="#school3.3">History</a></li>
            </ul>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
            <h1>Requests</h1>
            <p>Example</p>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#school4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub School
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#school1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#school2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school3.1" data-icon="briefcaseiconactive">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-------Page 3.2 Jobs History----------------------------------------------------->
    <div data-role="page" id="school3.3">

        <!-- Subheader -->
        <div data-role="navbar" class="subnavbar" data-position="fixed">
            <ul>
                <li><a href="#school3.1">Live Jobs</a></li>
                <li><a href="#school3.2">Requests</a></li>
                <li><a href="#school3.3"id="activescheduled" class="ui-btn-active ui-btn-persist">History</a></li>
            </ul>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
            <h1>History</h1>
            <p>Example</p>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#school4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub School
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#school1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#school2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school3.1" data-icon="briefcaseiconactive">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>



<!-------Page 4 Profile Page----------------------------------------------------->
    <div data-role="page" id="school4">

        
        
        <!-- Body -->
        <div>
            
        </div>
        

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#" data-rel="back" data-icon="arrow-l" class="ui-btn-left">Back</a>Profile
        </div>
    </div>



<!-------Page 5 Job Post Page------------------------------------------------------------>
    <div data-role="page" id="school5">

        
        <!-- Body -->

        <div class="teacherDetails">
            <h1>Jane O'Connor</h1>
            <h2><b>Teaching Council Number:</b><br>
                7294752<br><br>
                <b>Level:</b><br>
                Primary School<br><br>
                <b>Date Available:</b><br>
                10 - 18 September 2018<br><br>
                <b>Location:</b><br>
                Leixlip, Co. Kildare<br><br>
                <b>Cirriculum Vitae:</b><br>
                <a href="pdf/samplecv.pdf" download>Click here to download</a>
                
            </h2>
        </div>
        
        <!-- Contact Buttons -->
        <div class="contactbuttonsteacher 
        ">
            <a href="mailto:edusubapp@gmail.com" id="schoolmail" class="ui-btn ui-shadow ui-corner-all ui-icon-mail ui-btn-icon-notext ui-btn-b ui-btn-inline">Mail</a>
            <a href="tel:+353879841626" id="schoolphone" class="ui-btn ui-shadow ui-corner-all ui-icon-phone ui-btn-icon-notext ui-btn-b ui-btn-inline">Phone</a>
            
            <!-- Request position -->
            <a href="#requestButton" id="schoolrequest" data-rel="popup" data-position-to="window" data-transition="pop" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-none ui-btn-b">Request</a>
                
                <div data-role="popup" id="requestButton" data-dismissible="false" style="max-width:100vh;">
                    <div data-role="header" data-theme="a">
                    <h1>Are you sure?</h1>
                    </div>
                    <div role="main" id="requestButtonContent" class="ui-content">
                        <h3 class="ui-title">Are you sure you want to request this teacher?</h3>
                    <p2>An alert will be sent to the teacher notifying them of your request.</p2>
                        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back">Cancel</a>
                        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back" data-transition="flow">Yes</a>
                    </div>
                </div>


        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#" data-rel="back" data-icon="arrow-l" class="ui-btn-left" data-transition="slide" data-directions="reverse">Back</a>EduSub School
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#school1" data-icon="schooliconactive">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#school2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#school3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>
        






        
    
</body>