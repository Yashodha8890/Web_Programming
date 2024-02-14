<?php include 'headers/reservation_header.php'; ?>
<div class="table_reservation">
        <h3 class="text-center">Table Reservation</h3>   
            <div class="container container-registration">
            <form  method="post" action="process_table.php">

                <div class="row">
                    <div class="col-sm-4">                    
                    <label>Member ID:</label>                
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="member_id" placeholder="Member ID"><br><br>
                    </div> 
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Name:</label>
                </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="name" placeholder="Name"><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Contact Number:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="number" name="contact_number" placeholder="Contact Number"><br><br>
                    </div>
                </div>
 
                <div class="row">
                    <div class="col-sm-4">
                    <label>Booking Date:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="date" name="booking_date" placeholder="Booking Date"><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Reservation Date:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="date" name="reservation_date" placeholder="Reservation Date"><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                    <label>Number of Guests:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="number" name="number_of_guests" placeholder="Number of Guests"><br><br>
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
                    <label>Check in Time:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="time" name="check_in_time" placeholder="Check in Time"><br><br>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-sm-4">
                    <label>Check out Time:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="time" name="check_out_time" placeholder="Check out Time"><br><br>                
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">                    
                    <label for="preferable_view">Preferable View:</label>                
                    </div>
                    <div class="col-sm-8">
                    <select class="form-control" id="preferable_view" name="preferable_view" style=width:400px>
                    <option value="OceanView">Ocean view</option>
                    <option value="Outdoor">Out door</option>
                    <option value="indoor">Indoor</option>
                    <option value="lakeview">Lake view</option>            
                </select><br>                                 
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                    <label>Special arrangements:</label>
                    </div>
                    <div class="col-sm-8">
                    <input class="registration-form-input" type="text" name="special_arrangements" placeholder="Special Arrangements"><br><br>               
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4"></div>
                    <div class="col-sm-4">
                        <button class="btn btn-primary text-center" type="submit" name="reserve_submit">Reserve Table</button><br><br>
                        <!-- <button class="btn btn-primary text-center" type="submit" name="reserve_submit">View My reservation</button><br><br> -->
                    </div>
                <div class="col-sm-4"></div>
