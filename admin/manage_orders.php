<?php include 'header_adminpages.php';

    include '../config/db.php';

    $a = $_GET['orderNo'];

    $result = mysqli_query($conn,"SELECT * FROM order_details WHERE orderNo= '$a'");
    $row = mysqli_fetch_array($result);
?>

<h2 class="text-center">Manage Customer Orders</h2>
<div class="update-item bg-light">
  <form name= "form_update_item" method="post" action="">
    <div class="row">
        <div class="col-md-6">
          <label for="orderNo"><b>Order Number :</b></label>
          <input type="text" class="form-control" placeholder="" id="orderNo" name="orderNo" required disabled value="<?php echo $row['orderNo']; ?>">
        </div>

        <div class="col-md-6">
        <label for="orderItemName"><b>Item Name :</b></label>
          <input type="text" class="form-control disabled" placeholder="" id="orderItemName" name="orderItemName" required disabled value="<?php echo $row['itemName']; ?>" >
        </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label for="orderQty"><b>Quantity :</b></label>
        <input type="text" class="form-control" placeholder="" id="orderQty" name="orderQty" required value="<?php echo $row['quantity']; ?>">
        <span id="orderQtyError" style="color:red;"></span> <br>                  

      </div>

      <div class="col-md-6">
        <label for="orderUnitPrice"><b>Unit Price(€) :</b></label>
        <input type="text" class="form-control" placeholder="" id="orderUnitPrice" name="unitPrice" required value="<?php echo $row['unitPrice']; ?>">  
        <span id="orderUnitPriceError" style="color:red;"></span> <br>   
      </div>
    </div>
      <br>
        
    <div class="row">
      <div class="col-md-4">
        <label for="orderTotalPrice"><b>Total Price(€) :</b></label>
        <input type="text" class="form-control" placeholder="" id="orderTotalPrice" name="totalPrice" required value="<?php echo $row['totalUnitPrice']; ?>">    
        <span id="orderTotalPriceError" style="color:red;"></span> <br>  
      </div>

      <div class="col-md-4">
        <label for="orderStatus"><b>Order Status :</b></label>
        <input type="text" class="form-control" placeholder="" id="orderStatus" name="orderStatus" required value="<?php echo $row['orderStatus']; ?>">
        <span id="orderStatusError" style="color:red;"></span> <br> 
      </div>

      <div class="col-md-4">
        <label for="memberId"><b>Member Id :</b></label>
        <input type="text" class="form-control" placeholder="" id="memberId" name="memberId" required disabled value="<?php echo $row['memberId']; ?>">
      </div>       
    </div>
    <br>

    <div class="row">
      <div class="col-md-3">        
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="updateOrder">Update Order Status</button>
      </div>
      <div class="col-md-3">
        <button type="submit" class="btn btn-primary btn-seperate btn-sm" name="delete">Delete Order</button>
      </div>
      <div class="col-md-3">        
      </div>      
    </div>
  </form>

  <script>
      //validate the Item Name
          function validateQuantity()
          {
            const orderQty = document.getElementById("orderQty").value;
            const orderQtyError = document.getElementById("orderQtyError");
                    
                if(orderQty < 1 )
                {
                  orderQtyError.innerHTML = "Quantity cannot be 0 or empty!";
                  return false;
                }
                else
                {
                  orderQtyError.innerHTML = "";
                  return true;
                }
                    
          }

        //validate the unit Price
        function validateOrderUnitPrice()
        {
          const orderUnitPrice = document.getElementById("orderUnitPrice").value;
          const orderUnitPriceError = document.getElementById("orderUnitPriceError");

          if(orderUnitPrice < 1 )
            {
              orderUnitPriceError.innerHTML = "Unit Price Cannot be 0 or minus values !";
              return false;
            }
            else
            {
              orderUnitPriceError.innerHTML = "";
              return true;
            }
        }

        //validate the Total Price
        function validateOrderTotalPrice()
        {
          const orderTotalPrice = document.getElementById("orderTotalPrice").value;
          const orderTotalPriceError = document.getElementById("orderTotalPriceError");

          if(orderTotalPrice < 1 )
            {
              orderTotalPriceError.innerHTML = "Total Price Cannot be 0 or minus values !";
              return false;
            }
            else
            {
              orderTotalPriceError.innerHTML = "";
              return true;
            }
        }


        //validate the Order Status
        function validateOrderStatus()
        {
          const orderStatus = document.getElementById("orderStatus").value;
          const orderStatusError = document.getElementById("orderStatusError");

          if(orderStatus === "")
            {
              orderStatusError.innerHTML = "Order status cannot be empty !";
              return false;
            }
            else
            {
              orderStatusError.innerHTML = "";
              return true;
            }
        }

        //add event listners 
        document.getElementById("orderQty").addEventListener("input", validateQuantity);
        document.getElementById("orderUnitPrice").addEventListener("input", validateOrderUnitPrice);
        document.getElementById("orderTotalPrice").addEventListener("input", validateOrderTotalPrice);
        document.getElementById("orderStatus").addEventListener("input", validateOrderStatus);

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
if (isset($_POST['updateOrder']))
{    
    $quantity = $_POST["orderQty"];            
    $orderUnitPrice = $_POST["unitPrice"];
    $orderTotalPrice = $_POST["totalPrice"];
    $orderStatus = $_POST["orderStatus"];
    
    $query = mysqli_query($conn,"UPDATE order_details set quantity='$quantity', unitPrice='$orderUnitPrice', totalUnitPrice='$orderTotalPrice', orderStatus='$orderStatus' where orderNo='$a'");
    if($query)
    {
        echo "<h6>Your information is updated Successfully</h6>";
        // if you want to redirect to update page after updating
    }
    else 
    { 
        echo "Record Not modified";
    }
}
  if (isset($_POST['delete']))
  {
      $query = mysqli_query($conn,"DELETE FROM order_details where orderNo='$a'");
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