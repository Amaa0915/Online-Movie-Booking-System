<?php
include_once 'header.php';
?>
    <div class="registerbody">
    <div class="registerbox">
        <div class="registercontant">

                <img class="registerimg" src="images/movie 4.png" alt="">

            <form action = "includes/registration.inc.php" method = "post" class="registerform">
                <h2 class="register_h2">Register</h2>
                <div class="register_inputs">
                <input type="text" placeholder="First Name" name ="uid"> <br>
                <input type="text" placeholder="Last Name" name ="lname"> <br>
                <input type="text" placeholder="E-mail" name ="mails"> <br>
                <input type="text" placeholder="NIC number" name ="nic"> <br>
                <input type="text" placeholder="Contact number" name ="contactno"> <br>
                <input type="password" placeholder="Password" name ="pwd"> <br>
                <input type="password" placeholder="Confirm password" name ="pwdrepeat"> <br>


                <p class="accept"><input type="checkbox"> Accept <a class="t_and_c" href="">terms and conditions</a></p>

                <input type="submit" value="Sign-up" name ="submit">
                <!-- <button>log</button>-->

                <p class="alreadyhavepara">Already have an account ?<a class="login_a"href="login.php">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    
    </div>

    <?php
    include_once 'footer.php';
    ?>





