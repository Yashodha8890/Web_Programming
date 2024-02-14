<?php
include 'header.php';
include 'config/db.php';

// Check if event_id is set in the URL
if(isset($_GET['event_id'])) {
    $a = $_GET['event_id'];

    // Check if $a is not empty
    if(!empty($a)) {
        $result = mysqli_query($conn,"SELECT * FROM event_booking WHERE event_id= '$a'");
        
        if ($result) {
            $row = mysqli_fetch_array($result);
        } else {
            echo "Error fetching data: " . mysqli_error($conn);
        }
    } else {
        echo "Event ID is empty.";
    }
}
?>

<!-- Your HTML form -->
<h2> Update your information below: </h2>
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="phone_number">Phone Number:</label>
                <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $row['phone_number']; ?>">
            </div>
            <div class="col">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="select_room">Select Room:</label>
                <select class="form-control" id="select_room" name="select_room">
                    <option value="BBCAP19" <?php if($row['select_room'] == 'BBCAP19') echo 'selected'; ?>>BBCAP19</option>
                    <option value="BBCAP20" <?php if($row['select_room'] == 'BBCAP20') echo 'selected'; ?>>BBCAP20</option>
                    <option value="BBCAP21" <?php if($row['select_room'] == 'BBCAP21') echo 'selected'; ?>>BBCAP21</option>
                    <option value="BBCAP22" <?php if($row['select_room'] == 'BBCAP22') echo 'selected'; ?>>BBCAP22</option>
                    <option value="Others" <?php if($row['select_room'] == 'Others') echo 'selected'; ?>>Others</option>
                </select>
            </div>
            <div class="col">
                <label for="number_of_guest">Number Of Guest:</label>
                <input type="text" class="form-control" id="number_of_guest" name="number_of_guest" value="<?php echo $row['number_of_guest']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="event_date">Event Date:</label>
                <input type="date" class="form-control" id="event_date" name="event_date" value="<?php echo $row['event_date']; ?>">
            </div>
            <div class="col">
                <label for="start_time">Start Time:</label>
                <input type="time" class="form-control" id="start_time" name="start_time" value="<?php echo $row['start_time']; ?>">
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="end_time">End Time:</label>
                <input type="time" class="form-control" id="end_time" name="end_time" value="<?php echo $row['end_time']; ?>">
            </div>
            <div class="col">
                <label for="menu_style">Select Menu Style:</label>
                <select class="form-control" id="menu_style" name="menu_style">
                    <option value="SriLankan" <?php if($row['menu_style'] == 'SriLankan') echo 'selected'; ?>>Sri Lankan</option>
                    <option value="Indian" <?php if($row['menu_style'] == 'Indian') echo 'selected'; ?>>Indian</option>
                    <option value="Malayasian" <?php if($row['menu_style'] == 'Malayasian') echo 'selected'; ?>>Malayasian</option>
                    <option value="Snack" <?php if($row['menu_style'] == 'Snack') echo 'selected'; ?>>Snack</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </div>
    </div>
</form>

<?php 
if (isset($_POST['submit'])) {
    // Update logic
    // Make sure to sanitize and validate input before executing the SQL query
    

    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $select_room = $_POST['select_room'];
    $number_of_guest = $_POST['number_of_guest'];
    $event_date = $_POST['event_date'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $menu_style = $_POST['menu_style'];
    $event_status = 0;

    $query = mysqli_query($conn, "UPDATE event_booking 
                                  SET 
                                      phone_number = '$phone_number',
                                      email = '$email',
                                      select_room = '$select_room',
                                      number_of_guest = '$number_of_guest',
                                      event_date = '$event_date',
                                      start_time = '$start_time',
                                      end_time = '$end_time',
                                      menu_style = '$menu_style',
                                      event_status = '$event_status'
                                  WHERE event_id='$event_id'");
    if($query) {
        echo "<h6>Your information is updated Successfully</h6>";
    } else { 
        echo "Error updating record: " . mysqli_error($conn);
    }
}

$conn->close();
include 'footer.php'; 
?>
