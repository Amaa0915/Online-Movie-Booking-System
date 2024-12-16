<?php 

    include_once 'header.php';
// insert the header
?>


<div class="split left">  <!--left side of the page-->
            <div class="title">
                <h1>My Account</h1>
                <br>
                <br>
                <img src="images/download.png" alt="profile picture">
            </div>
            <br>

            <div class="Booking"><h3>Booking Details</h3>
            </div>

            <div class="table">
                <table style="width:100%">
                    <br>
                    <tr>
                        <td>Movie Name:</td>
                        <td><input type="text" placeholder="Movie"> </td>
                    </tr>
                    
                    <tr>
                        <td>Date:</td>
                        <td><input type="text" placeholder="Date" ></td>
                    </tr>
                    <tr>
                        <td>Time:</td>
                        <td><input type="text" placeholder="Time" fixed></td>
                    </tr>
                    <tr>
                        <td>Seat No:</td>
                        <td><input type="text" placeholder="Seat No" fixed></td>
                    </tr>
                </table><br>
            </div>
            <a href="cancel-booking.php">Cancel Booking</a>
        </div>


        <div class="split right">  <!--right side of the page-->
            <div class="container">
                <div class="title">Profile Details</div><br><br>
                <form action="#">
                    
                    <div class="user-details"></div>
                    
                    <div class="input-box">
                        <span class="details">First Name:</span><br>
                        <input type="text" id="fname" placeholder="First Name" required>
                    </div><br><br>
                    
                    <div class="input-box">
                        <span class="details">Last Name:</span><br>
                        <input type="text" id="lname" placeholder="Last Name" required>
                    </div><br><br>

                    <div class="input-box">
                        <span class="details">NIC:</span><br>
                        <input type="text" id="NIC" placeholder="NIC" required>
                    </div><br><br>

                    <div class="input-box">
                        <span class="details">Email:</span><br>
                        <input type="text" id="Email" placeholder="Email" required>
                    </div><br><br>

                    <div class="input-box">
                        <span class="details">Contact Number:</span><br>
                        <input type="text" id="Number" placeholder="Contact Number" required>
                    </div><br><br>

                    <div class="edit">
                        <a href="edit.php">Edit Profile</a>
                    </div>
                </form>
            </div>
        </div>




<?php

    include_once 'footer.php';
// insert the footer
?>