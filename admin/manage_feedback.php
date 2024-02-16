<?php include 'header_adminpages.php';

    include '../config/db.php';

    $a = $_GET['feedback_id'];

    // $result = mysqli_query($conn,"SELECT * FROM customer_feedback WHERE feedback_id= '$a' AND message_type='feedback'");
    $result = mysqli_query($conn,"SELECT * FROM customer_feedback WHERE feedback_id= '$a'");
    $row = mysqli_fetch_array($result);
?>

<h2 class="text-center">Manage Feedbacks</h2>
<div class="update-item bg-light">
  <form name= "form_update_item" method="post" action="">
    <div class="row">
        <div class="col-md-6">
          <label for="feedback_id"><b>Feedback Id :</b></label>
          <input type="text" class="form-control" placeholder="" id="feedback_id" name="feedback_id" required value="<?php echo $row['feedback_id']; ?>">
        </div>
        
        <div class="col-md-6">
        <label for="member_id"><b>Member Id :</b></label>
          <input type="text" class="form-control disabled" placeholder="" id="member_id" name="member_id" required disabled value="<?php echo $row['member_id']; ?>" >
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label for="itemName"><b>Name :</b></label>
        <input type="text" class="form-control" placeholder="" id="itemName" name="itemName" required value="<?php echo $row['name']; ?>">
      </div>

      <div class="col-md-6">
        <label for="email"><b>Email :</b></label>
        <input type="text" class="form-control" placeholder="" id="email" name="email" required value="<?php echo $row['email']; ?>">    
      </div>
    </div>
      <br>
        
    <div class="row">
      <div class="col-md-3">
        <label for="subject"><b>Subject :</b></label>
        <input type="text" class="form-control" placeholder="" id="subject" name="subject" required value="<?php echo $row['subject']; ?>">    
      </div>

      <div class="col-md-3">
        <label for="message_typ"><b>Message Type :</b></label>        
        <input type="text" class="form-control" placeholder="" id="message_type" name="message_type" required value="<?php echo $row['message_type']; ?>">
        </div>
      </div>

      <div class="col-md-3">
        <label for="Message"><b>Message :</b></label> <br>          
        <input type="text" class="form-control" placeholder="" id="message" name="message" value="<?php echo $row['message']; ?>">     
      </div> 

      <div class="col-md-3">
        <label for="admin_Message"><b>Admin Message :</b></label> <br>          
        <input type="text" class="form-control" placeholder="" id="admin_Message" name="admin_Message">     
      </div>

    </div>
    <br>

    <div class="row">
      <div class="col-md-3">        
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="updateFeedback">Update your Information</button>
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="deleteFeedback">Delete your Information</button>
      </div>
      <div class="col-md-3">        
      </div>      
    </div>
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
if (isset($_POST['updateFeedback']))
{
    
    $admin_message = $_POST["admin_Message"];   
    
    $query = mysqli_query($conn,"UPDATE customer_feedback set admin_message= '$admin_message' where feedback_id='$a'");
    if($query)
    {
        echo "<h2>Your information is updated Successfully</h2>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
}
  if (isset($_POST['deleteFeedback']))
  {
      $query = mysqli_query($conn,"DELETE FROM customer_feedback where feedback_id='$a'");
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