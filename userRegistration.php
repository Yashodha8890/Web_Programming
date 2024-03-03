<?php include 'headers/registration_header.php'; ?>

        <div class="registration-form">
            <h3 class="text-center">Registration Form</h3>
            <div class="container container-registration">
            <form  method="post" action="process.php">

                <div class="row">
                    <div class="col-sm-4">
                    <label>First Name:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="firstname" placeholder="First name" required ><br><br>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Last Name:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="lastname" placeholder="Last name" required ><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Contact Number:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="number" name="contactnumber" placeholder="Contact Number" required ><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Email:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="email" name="email" placeholder="Email" required ><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Address:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="address" placeholder="Address" required ><br><br>
                    </div>
                </div>
                <!-- <div class="form-group">
            <div class="row">
            <div class="col">
                <label for="offers">Send Offers:</label>
                <select class="form-control" id="offers" name="send_offers" style=width:400px>
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    
            
                </select>

            </div> -->

                <div class="row">
                    <div class="col-sm-4">
                    <label>User Name:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="user_name" placeholder="User Name" required ><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Password:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="password" name="pass_word" placeholder="Password" required ><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary text-center" type="submit" name="submit">Register</button><br><br>
                    </div>
                    <div class="col-sm-4"></div>

                    
                </div>
            </form>
</div>
        </div>
    </body>
</html>