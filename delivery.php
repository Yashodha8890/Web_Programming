<?php $title = "Event Booking";
include "header.php"
?>


<h2 class="text-center">Input Your Information Below:</h2>
<div class="container container-delivery container-additem">
<form name="form1" method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
    <div class="form-group">
        <div class="row">
            <div class="col-sm-2">
                <label for="oder_id">Order ID:</label>
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="oder_id" placeholder="Enter your Order ID" name="order_id" required>
            </div>
            <div class="col-sm-2">
                <label for="delivery_address">Delivery Address:</label>
            </div>
            <div class="col-sm-4">
    <input type="text" class="form-control" id="delivery_address" placeholder="Enter Delivery Address" name="delivery_address" required>
    <span id="deliveryAddressError" class="text-danger"></span>
      </div>

        </div>
        <div class="row">
            <div class="col-sm-2">
                <label for="delivery_date">Delivery Date:</label>
            </div>
            <div class="col-sm-4">
                <input type="date" class="form-control" id="delivery_date" name="delivery_date" required>
            </div>
            <div class="col-sm-2">
                <label for="delivery_time">Delivery Time:</label>
            </div>
            <div class="col-sm-4">
                <input type="time" class="form-control" id="delivery_time" name="delivery_time" required>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <label for="delivery_method">Select Delivery Method:</label>
            </div>
            <div class="col-sm-4">
                <select class="form-control" id="delivery_method" name="delivery_method">
                    <option value="FastDelivery">Fast Delivery</option>
                    <option value="NormalDelivery">Normal Delivery</option>
                </select>
            </div>
            <div class="col-sm-2">
                <label for="payment_method">Select Payment Method:</label>
            </div>
            <div class="col-sm-4">
                <select class="form-control" id="payment_method" name="payment_method">
                    <option value="CashOnDelivery">Cash On Delivery</option>
                    <option value="OnlinePayment">Online Payment</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
    <div class="col-sm-1 text-center">  
    <button type="submit" class="btn btn-primary" name="submitDelivary">Submit</button>
    </div>
    </div>

</form>

<?php
    //connect to database server
    include 'config/db.php';


    if (isset($_POST['submitDelivary']))
    {
        $oder_id= $_POST['order_id'];
        $delivery_address= $_POST['delivery_address'];
        $delivery_date= $_POST['delivery_date'];
        $delivery_time= $_POST['delivery_time'];
        $delivery_method= $_POST['delivery_method'];
        $payment_method= $_POST['payment_method'];
        $oder_status= 0;
   

        // write sql statment to insert data
        $sql = "INSERT INTO delivery(oder_id, delivery_address, delivery_date, delivery_time, delivery_method, payment_method, oder_status)
        VALUES ('$oder_id', '$delivery_address', '$delivery_date', '$delivery_time', '$delivery_method', '$payment_method', '$oder_status')";

        if ($conn-> query($sql)===TRUE)
        {
            echo "Your data was recorded";
        }

        else{
            echo "Error:" .$sql. "<br>" . $conn-> error;
        }
        // close the database connection

        $conn-> close();
    }


?>
</div>
<br>

<?php
    include "footer.php"
    ?>


<script>
    // Validate the Delivery Address
    function validateDeliveryAddress() {
        const deliveryAddress = document.getElementById("delivery_address").value;
        const deliveryAddressError = document.getElementById("deliveryAddressError");

        if (deliveryAddress.trim() === "") {
            deliveryAddressError.innerHTML = "Delivery address is required!";
            return false;
        } else if (deliveryAddress.length < 6 || deliveryAddress.length > 100) {
            deliveryAddressError.innerHTML = "Address must be between 6 and 100 characters!";
            return false;
        } else {
            deliveryAddressError.innerHTML = "";
            return true;
        }
    }
    document.getElementById("delivery_address").addEventListener("input", validateDeliveryAddress);
</script>
