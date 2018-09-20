
<?php
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
	
<!------TEACHER PAGES-------------------------------------------------------------->


<!--Page 1 Search for Jobs--------------------------------------------------------->
    <div data-role="page" id="page1">
        
        <!-- Subheader --> 
        <div data-role="header" class="subheader" data-position="fixed">
            <a href="#filterPanel" class="ui-btn-right" >Filter</a>
            <div class="subheadertext">Available job opportunities...</div>
        </div>

            <!-- Subheader Filter Panel -->
            <div data-role="panel" id="filterPanel" data-display="overlay" data-position="right">
                <h1 class="filterHeader">FILTER</h1>

                <a data-rel="" id="filterClose" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Clear</a>

                <fieldset data-role="controlgroup">
                    <legend>Only show results from:</legend>
                    <input type="checkbox" name="checkbox-levela" id="checkbox-levela">
                    <label for="checkbox-levela">Primary Schools</label>
                    <input type="checkbox" name="checkbox-levelb" id="checkbox-levelab">
                    <label for="checkbox-levelab">Secondary Schools</label>
                </fieldset>

                <fieldset data-role="controlgroup">
                    <legend>Located in:</legend>
                    <input type="checkbox" name="checkbox-locationa" id="checkbox-locationa">
                    <label for="checkbox-locationa">Leinster</label>
                    <input type="checkbox" name="checkbox-locationb" id="checkbox-locationb">
                    <label for="checkbox-locationb">Connacht</label>
                    <input type="checkbox" name="checkbox-locationc" id="checkbox-locationc">
                    <label for="checkbox-locationc">Ulster</label>
                    <input type="checkbox" name="checkbox-locationd" id="checkbox-locationd">
                    <label for="checkbox-locationd">Munster</label>
                </fieldset>

                <a data-rel="close" id="filterApply" class="ui-btn ui-shadow ui-corner-all ui-btn-inline">Apply</a>

            </div>
<br><br><?php
            function getComments($conn) {
                $sql = "SELECT * FROM jobs";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)){
                  echo "<div class='comment-box'>";
                   echo $row['userID']."<br>";
                   
                 echo "</div>";
                 }

                }
            getComments($conn);
?>
        <!-- Body -->
       echo " <div id='schoolpositions'>";
               <ul data-role="listview" data-inset="true">
                <li><a href="#page5" data-transition="slide">
                        <img src="img/colaistechiaran.jpg">
                    <h2>Cholaiste Chiaran</h2>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Geography &amp; History Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/confeycollege.jpg">
                    <h1>Confey Community College</h1>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Maths &amp; P.E. Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/scoilsancarlo.jpg">
                    <h2>Scoil San Carlo National School</h2>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Junior Infants Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/colaistechiaran.jpg">
                    <h2>Cholaiste Chiaran</h2>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Geography &amp; History Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/confeycollege.jpg">
                    <h1>Confey Community College</h1>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Maths &amp; P.E. Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/scoilsancarlo.jpg">
                    <h2>Scoil San Carlo National School</h2>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Junior Infants Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/colaistechiaran.jpg">
                    <h2>Cholaiste Chiaran</h2>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Geography &amp; History Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/confeycollege.jpg">
                    <h1>Confey Community College</h1>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Maths &amp; P.E. Teacher Wanted</p></a>
                </li>
                <li><a href="#">
                        <img src="img/scoilsancarlo.jpg">
                    <h2>Scoil San Carlo National School</h2>
                    <p><strong>Leixlip, Kildare</strong></p>
                    <p>Junior Infants Teacher Wanted</p></a>
                </li>

            </ul>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#page4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub Teacher
        </div>

        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#page1" data-icon="schooliconactive">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#page2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#page3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>


<!-------Page 2 Planner------------------------------------------------------------>
    <div data-role="page" id="page2">

        <!-- Subheader --> 
        <div data-role="header" class="subheader" data-position="fixed">
            <div class="subheadertext">Select date for more information</div>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
           
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#page4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub Teacher
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#page1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#page2" data-icon="plannericonactive">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#page3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>


<!-------Page 3.1 Jobs Scheduled----------------------------------------------------->
    <div data-role="page" id="page3.1">

        <!-- Subheader -->
        <div data-role="navbar" class="subnavbar" data-position="fixed">
            <ul>
                <li><a href="#page3.1" id="activescheduled" class="ui-btn-active ui-btn-persist">Scheduled</a></li>
                <li><a href="#page3.2">Pending</a></li>
                <li><a href="#page3.3">History</a></li>
            </ul>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
            <h1>Scheduled</h1>
            <p>Example</p>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#page4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub Teacher
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#page1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#page2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#page3.1" data-icon="briefcaseiconactive">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-------Page 3.2 Jobs Pending----------------------------------------------------->
    <div data-role="page" id="page3.2">

        <!-- Subheader -->
        <div data-role="navbar" class="subnavbar" data-position="fixed">
            <ul>
                <li><a href="#page3.1">Scheduled</a></li>
                <li><a href="#page3.2" id="activepending" class="ui-btn-active ui-btn-persist">Pending</a></li>
                <li><a href="#page3.3">History</a></li>
            </ul>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
            <h1>Pending</h1>
            <p>Example</p>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#page4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub Teacher
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#page1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#page2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#page3.1" data-icon="briefcaseiconactive">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-------Page 3.3 Jobs History----------------------------------------------------->
    <div data-role="page" id="page3.3">

        <!-- Subheader -->
        <div data-role="navbar" class="subnavbar" data-position="fixed">
            <ul>
                <li><a href="#page3.1">Scheduled</a></li>
                <li><a href="#page3.2">Pending</a></li>
                <li><a href="#page3.3" id="activehistory" class="ui-btn-active ui-btn-persist">History</a></li>
            </ul>
        </div>
        
        <!-- Body -->
        <div data-role="main" class="ui-content">
            <h1>History</h1>
            <p>Example</p>
        </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#page4" class="ui-btn-left" data-icon="user" >Profile</a>EduSub Teacher
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" href="#page1" data-icon="schoolicon">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#page2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#page3.1" data-icon="briefcaseiconactive">Jobs</a></li>
                </ul>
            </div>
        </div>
    </div>



<!-------Page 4 Profile Page----------------------------------------------------->
    <div data-role="page" id="page4">

        
        
        <!-- Body -->
        <div>
            
        </div>
        

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#" data-rel="back" data-icon="arrow-l" class="ui-btn-left">Back</a>Profile
        </div>
    </div>



<!-------Page 5 Job Post Page------------------------------------------------------------>
    <div data-role="page" id="page5">

        
        <!-- Body -->

        <!-- Body - Google Maps -->
        <div id="map" data-role="main" class="ui-content">
                <script>
            // Initialize and add the map
            function initMap() {
              // The location of the school
              var colaisteChiarain = {lat: 53.3641, lng: -6.4989};
              // The map, centered at Uluru
              var map = new google.maps.Map(
                  document.getElementById('map'), {
                    zoom: 16, 
                    center: colaisteChiarain,
                    zoomControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    mapTypeControl: false,
                    fullscreenControl: false,
                  });
              // The marker, positioned at Uluru
              var marker = new google.maps.Marker({position: colaisteChiarain, map: map});
            }
                </script>
                <!--Load the API from the specified URL
                * The async attribute allows the browser to render the page while the API loads
                * The key parameter will contain your own API key (which is not needed for this tutorial)
                * The callback parameter executes the initMap() function
                -->
                <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCOVjM5TbQis074pESLRehc3PpNBE1sll4&callback=initMap">
                </script>
                    </div>

        <!-- Body - Details -->
        <div class="schoolDetails">
            <h1>History Teacher Wanted</h1>
            <h2><b>Date:</b><br>
                5 - 6 June 2018<br><br>
                <b>Location:</b><br>
                San Carlo National School, Confey, Leixlip, Co. Kildare<br><br>
                <b>Description:</b><br>
                Teacher wanted to sub for the day. Curriculum will be outlined by the absent teacher. Full pay in accordance with the Dept. of Education.
            </h2>
        </div>
        
        <!-- Contact Buttons -->
        <div class="contactbuttons 
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
                        <h3 class="ui-title">Are you sure you want to request this position?</h3>
                    <p2>An alert will be sent to the school notifying them of your request.</p2>
                        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back">Cancel</a>
                        <a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-b" data-rel="back" data-transition="flow">Yes</a>
                    </div>
                </div>

        <!-- Header -->
        <div data-role="header" class="header" data-position="fixed">
            <a href="#" data-rel="back" data-icon="arrow-l" class="ui-btn-left" data-transition="slide" data-directions="reverse">Back</a>EduSub Teacher
        </div>
        
        <!-- Footer -->
        <div data-role="footer" id="footer" data-id="footer" data-position="fixed">
            <div data-role="navbar" class="footernavbar">
                <ul>
                    <li><a class="ui-nodisc-icon" id="activeicon" href="#page1" data-icon="schooliconactive">Search</a></li>
                    <li><a class="ui-nodisc-icon" href="#page2" data-icon="plannericon">Planner</a></li>
                    <li><a class="ui-nodisc-icon" href="#page3.1" data-icon="briefcaseicon">Jobs</a></li>
                </ul>
            </div>
        </div>
         
    </div>
</body>