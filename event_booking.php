<?php $title = "Event Booking";
include "header.php"
?>

<h2 class="text-center">Input Your Event Booking Details:</h2>
<div class="container container-eventBooking">
    <form name="form1" method="post" action="event_process.php">
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="member_id">Member ID:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="member_id" placeholder="Enter your Member ID" name="member_id" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="first_name">First Name:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="last_name">Last Name:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="phone_number">Phone Number:</label>
                </div>
                <div class="col-sm-8">
                    <input type="text" class="form-control" id="phone_number" placeholder="Enter your phone number" name="phone_number" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="email">Email:</label>
                </div>
                <div class="col-sm-8">
                    <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="select_room">Select Room:</label>
                </div>
                <div class="col-sm-8">
                    <select class="form-control" id="select_room" name="select_room">
                        <option value="BBCAP19">Small</option>
                        <option value="BBCAP20">Large</option>
                        <option value="BBCAP21">Other</option>
                        
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="number_of_guest">Number Of Guest:</label>
                </div>
                <div class="col-sm-8">
                    <input type="number" class="form-control" id="number_of_guest" placeholder="Enter number of guests" name="number_of_guest" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="event_date">Event Date:</label>
                </div>
                <div class="col-sm-8">
                    <input type="date" class="form-control" id="event_date" name="event_date" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="start_time">Start Time:</label>
                </div>
                <div class="col-sm-8">
                    <input type="time" class="form-control" id="start_time" name="start_time" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="end_time">End Time:</label>
                </div>
                <div class="col-sm-8">
                    <input type="time" class="form-control" id="end_time" name="end_time" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-sm-2">
                    <label for="menu_style">Select Menu Style:</label>
                </div>
                <div class="col-sm-8">
                    <select class="form-control" id="menu_style" name="menu_style">
                        <option value="SriLankan">Sri Lankan</option>
                        <option value="Indian">Indian</option>
                        <option value="Malayasian">Malayasian</option>
                        <option value="Snack">Snack</option>
                    </select>
                </div>
            </div>
        </div>
        <br><br>
       <div class="text-center">
        <button type="submit" class="btn btn-primary text-center" name="submit">Book Event</button>
</div>
        
    </form>
</div>

<br><br>
<?php
include "footer.php"
?>
