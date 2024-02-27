<?php include 'header_adminpages.php';

    include '../config/db.php';

    $a = $_GET['itemId'];

    $result = mysqli_query($conn,"SELECT * FROM food_items WHERE itemId= '$a'");
    $row = mysqli_fetch_array($result);
?>

<h2 class="text-center">Update food Items</h2>
<div class="update-item bg-light">
  <form name= "form_update_item" method="post" action="">
    <div class="row">
        <div class="col-md-6">
          <label for="itemId"><b>Item Id :</b></label>
          <input type="text" class="form-control" placeholder="" id="itemId" name="itemId" required disabled value="<?php echo $row['itemId']; ?>">
        </div>

        <div class="col-md-6">
        <label for="categoryId"><b>Category Id :</b></label>
          <input type="text" class="form-control disabled" placeholder="" id="categoryId" name="categoryId" required disabled value="<?php echo $row['categoryId']; ?>" >
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label for="updateItemName"><b>Item Name :</b></label>
        <input type="text" class="form-control" placeholder="" id="updateItemName" name="itemName" required minlength="2" maxlength="100" value="<?php echo $row['itemName']; ?>">
        <span id="updateitemnameError" style="color:red;" ></span><br>
      </div>

      <div class="col-md-6">
        <label for="itemDescription"><b>Item Description :</b></label>
       <input type="text" class="form-control" placeholder="" id="itemDescription" name="itemDescription" maxlength="200" value="<?php echo $row['itemDescription']; ?>">
      </textarea>    
      </div>
    </div>
      <br>
        
    <div class="row">
      <div class="col-md-4">
        <label for="updateUnitPrice"><b>Unit Price (€) :</b></label>
        <input type="text" class="form-control" placeholder="" id="updateUnitPrice" name="unitPrice" min="0" required value="<?php echo $row['unitPrice']; ?>"><br> 
        <span id="updateItemUnitPriceError"  style="color:red;"></span>
      </div>

      <div class="col-md-4">
        <label for="image"><b>Image :</b></label>
        <div class="display-image">
          <img class="display-image " style: src="../images/menu/all/<?= $row['image']; ?>"> <br>
        </div>
      </div>

      <div class="col-md-4">
        <label for="addImage"><b>Change Image :</b></label> <br>  
        <input type="file" accept="image/png, image/jpeg, image/jpg" class="box" id="changeImage" name="addImage" ><br/><br/>         
      </div>        
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">        
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="submit">Update your Information</button>
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="delete">Delete your Information</button>
      </div>
      <div class="col-md-3">        
      </div>      
    </div>
  </form>

  <script>
      //validate the Item Name
          function validateFoodItemName()
          {
              const updateitemname = document.getElementById("updateItemName").value;
              const updateitemnameError = document.getElementById("updateitemnameError");
                    
                if(updateitemname.length < 3 || updateitemname.length >100 )
                {
                  updateitemnameError.innerHTML = "Item name must be more than 2 and less than 100 characters!";
                  return false;
                }
                else
                {
                  updateitemnameError.innerHTML = "";
                  return true;
                }
                    
                }

                 //validate the unit Price
                function validateUpdateUnitPrice()
                {
                    const updateItemUnitPrice = document.getElementById("updateUnitPrice").value;
                    const updateItemUnitPriceError = document.getElementById("updateItemUnitPriceError");

                    if(updateItemUnitPrice < 1 )
                    {
                      updateItemUnitPriceError.innerHTML = "Cannot insert minus values !";
                      return false;
                    }
                    else
                    {
                      updateItemUnitPriceError.innerHTML = "";
                      return true;
                    }
                }

                //add event listners 
                document.getElementById("updateItemName").addEventListener("input", validateFoodItemName);
                document.getElementById("updateUnitPrice").addEventListener("input", validateUpdateUnitPrice);

            </script>

</div>

<?php 
/* 
The isset() function is used to check if a variable is set and not NULL.
 In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit']))
{
    
    $itemName = $_POST["itemName"];            
    $itemDescription = $_POST["itemDescription"];
    $unitPrice = $_POST["unitPrice"];
    
    $query = mysqli_query($conn,"UPDATE food_items set itemName='$itemName', itemDescription='$itemDescription', unitPrice='$unitPrice' where itemId='$a'");
    if($query)
    {
        echo "<h6>Your information is updated Successfully</h6>";
        // if you want to redirect to update page after updating
    }
    else { echo "Record Not modified";}
}
  if (isset($_POST['delete']))
  {
      $query = mysqli_query($conn,"DELETE FROM food_items where itemId='$a'");
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