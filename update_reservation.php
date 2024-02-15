<?php include 'headers/reservation_header.php';

    include 'config/db.php';

    $a = $_GET['reservation_id'];

    $result = mysqli_query($conn,"SELECT * FROM table_reservation WHERE reservation_id= '$a'");
    $row = mysqli_fetch_array($result);
?>


<h2 class="text-center">Update Table Reservation</h2>
<div class="update-item bg-light">
  <form name= "form_table_reservation" method="post" action="">
    <div class="row">
        <div class="col-sm-6">
          <label for="reservation_Id"><b>Reservation Id :</b></label>
          <input type="text" class="form-control" placeholder="" id="reservation_Id" name="reservation_Id" required disabled value="<?php echo $row['reservation_id']; ?>">
        </div>

        <div class="col-sm-6">
        <label for="cutomerName"><b>Name :</b></label>
          <input type="text" class="form-control disabled" placeholder="" id="cutomerName" name="cutomerName" required value="<?php echo $row['name']; ?>" >
        </div>
  </div>
  <br>

  <div class="row">
      <div class="col-sm-6">
        <label for="reservation_date"><b>Reservation date :</b></label>
        <input type="text" class="form-control" placeholder="" id="reservation_date" name="reservation_date" required value="<?php echo $row['reservation_date']; ?>">
      </div>

      <div class="col-sm-6">
        <label for="guest"><b>No of Guest :</b></label>
          <input type="text" class="form-control" placeholder="" id="guest" name="guest" required value="<?php echo $row['number_of_guests']; ?>">    
      </div>         
  </div>
  <br>

  <div class="row">
      <div class="col-md-6">
        <label for="checkInTime"><b>Check In Time :</b></label>
        <input type="text" class="form-control" placeholder="" id="checkInTime" name="checkInTime" required value="<?php echo $row['check_in_time']; ?>">    
      </div>
      <div class="col-md-6">
        <label for="checkOutTime"><b>Check Out Time :</b></label>
        <input type="text" class="form-control" placeholder="" id="checkOutTime" name="checkOutTime" value="<?php echo $row['check_out_time']; ?>">    
      </div>
    </div>
    <br>
        
    <div class="row">
      <div class="col-md-6">
        <label for="contactNumber"><b>Contact Number :</b></label>
        <input type="text" class="form-control" placeholder="" id="contactNumber" name="contactNumber" required value="<?php echo $row['contact_number']; ?>">    
      </div>

      <div class="col-md-6">
        <label for="view"><b>Preferable view :</b></label>
          <input type="text" class="form-control" placeholder="" id="view" name="view" required value="<?php echo $row['preferable_view']; ?>">    
       </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <label for="arrangement"><b>Special Arrangements :</b></label>
        <input type="text" class="form-control" placeholder="" id="arrangement" name="arrangement" required value="<?php echo $row['special_arrangements']; ?>">    
    </div>        
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">        
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="update_table_reservation">Update my Reservation</button>
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="delete_table_reservation">Cancel my Reservation</button>
      </div>
      <div class="col-md-3">        
      </div>      
    </div>
    <br>
    <br> 
  </form>
</div>

<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['update_table_reservation']))
{
    $cutomer_Name =$_POST['cutomerName'];
    $cutomer_contactNumber =$_POST['contactNumber'];
    $table_reservationDate =$_POST['reservation_date'];
    $numberOfGuests =$_POST['guest'];
    $CheckInTime =$_POST['checkInTime'];
    $CheckOutTime =$_POST['checkOutTime'];
    $PreferableView =$_POST['view'];
    $SpecialArrangement =$_POST['arrangement'];

    
    $query = mysqli_query($conn,"UPDATE table_reservation set name='$cutomer_Name', contact_number='$cutomer_contactNumber', reservation_date='$table_reservationDate', number_of_guests='$numberOfGuests', check_in_time='$CheckInTime', check_out_time='$CheckOutTime',  preferable_view='$PreferableView', special_arrangements='$SpecialArrangement' where reservation_id='$a'");
    if($query)
    {
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
}
  if (isset($_POST['delete_table_reservation']))
  {
      $query = mysqli_query($conn,"DELETE FROM table_reservation where reservation_id='$a'");
      if($query)
      {
        echo "Record Deleted with id: $a <br>";
        // if you want to redirect to update page after updating
        //header("location: update.php");
      }
        else 
        { 
          echo "Record Not Deleted";
        }
        
  }
$conn->close();

?>