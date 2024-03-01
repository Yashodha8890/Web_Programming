<?php include 'header_adminpages.php';
?>
<div class="container container-additem">
    <div class="row">    
        <div class="col-sm-4">
        <h3 class="text-center">Add Categories</h3>
            <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                <label for="formGroupExampleInput1">Item Catergory name:</label>
                <input type="text" class="form-control" id="formGroupExampleInput1" name="catName" placeholder="" maxlength="100" required><br/>
                <input type="submit" class="btn btn-primary text-center" name="addCategory" value="Save Category"> <br/><br/>
            </form>

            <?php 
            // if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addCategory'])){
            
            //connecting to DB service

            include '../config/db.php';
                $sql = "SELECT * FROM food_categories";
                    // Execute the SQL query and store the result
                    $result = $conn->query($sql);

                    // Check if there are any results
                    if ($result->num_rows > 0) {
                        echo "<table class='table table-striped table-responsive'>
                            <thead>
                                <tr>
                                    <th>Category No</th>
                                    <th>Category Name</th> 
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>";

                        // Loop through the result set and display data in rows
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>{$row['categoryId']}</td>
                                    <td>{$row['categoryName']}</td> 
                                    <td><a class='btn btn-danger btn-sm' name='deleteCat' href=''>Delete</a></td>
                                </tr>";
                        }

                        echo "</tbody></table>";
                    } else {
                        // Display a message if no results are found
                        echo "No results";
                    }
                    // close the connection when done
                    $conn->close();
        // }
 


    ?>

<!--Add food Items form-->
        </div>
        <div class="col-sm-8">
            <h3 class="text-center">Add Items</h3>
            <form method="post" action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>>
                <label for="itemName">Item Name :</label>   
                <input type="text" class="form-control" id="itemName" name="additemname" minlength="2" maxlength="100" required>
                <span id="additemnameError" style="color:red;" ></span><br>

                <label for="addImage">Image :</label>   
                <input type="file" accept="image/png, image/jpeg, image/jpg" class="box" id="addImage" name="addImage" ><br/><br/>
                <label for="cat">Item Catergory :</label>
                <select class="form-select" aria-label="Default select example" id="cat" name="catergoryId" required>
                            <option selected>Select Catergory</option>
                            <option value="1">Sri Lankan</option>
                            <option value="2">Indian</option>
                            <option value="3">Malaysian</option>
                            <option value="4">Snacks</option>
            </select><br/>
                <label for="description">Item Description :</label>
                    <!-- <input type="text" class="form-control" id="formGroupExampleInput3" name="description" max="200" required><br/> -->
                    <textarea class="form-control" id="description" name="description" maxlength="200" rows="3" required></textarea><br/><br/> 
                    <span id="itemDecscriptionError"></span>

                    <label for="unitPrice">Unit Price :</label>
                    <input type="number" class="form-control" id="unitPrice" name="unitPrice" min="0" required>
                    <span id="itemUnitPriceError" style="color:red;"></span> <br>                  

                    <input type="submit" class="btn btn-primary text-center" name="addItem" href="manage_food_items.php" value="Save Item"> <br/><br/> 
            </form>

            <!-- to add real time js validations -->
            <script>
                //validate the Item Name
                function validateItemName()
                {
                    const additemname = document.getElementById("itemName").value;
                    const additemnameError = document.getElementById("additemnameError");
                    
                    if(additemname.length < 3 || additemname.length >100 )
                    {
                        additemnameError.innerHTML = "Item name must be more than 2 and less than 100 characters!";
                        return false;
                    }
                    else
                    {
                        additemnameError.innerHTML = "";
                        return true;
                    }
                    
                }

                 //validate the unit Price
                function validateUnitPrice()
                {
                    const itemUnitPrice = document.getElementById("unitPrice").value;
                    const itemUnitPriceError = document.getElementById("itemUnitPriceError");

                    if(itemUnitPrice < 1 )
                    {
                        itemUnitPriceError.innerHTML = "Cannot insert minus values !";
                        return false;
                    }
                    else
                    {
                        itemUnitPriceError.innerHTML = "";
                        return true;
                    }
                }

                //add event listners 
                document.getElementById("itemName").addEventListener("input", validateItemName);
                document.getElementById("unitPrice").addEventListener("input", validateUnitPrice);

            </script>
        </div>
</div>

<!--Save Item catergories--->
<?php
    //Processing data of the form in the same page
    //Check for a post request
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addCategory']))
        {
            $categoryName = $_POST["catName"];
                        
            //connecting to DB service
            include '../config/db.php';

            //Write SQL statement to add data to the table
            $sql="insert into food_categories(categoryName) values('$categoryName')";

            if($conn -> query($sql)==TRUE)
            {
                echo "Your data was saved.";
            }

            else
            {
                echo "Error" . $sql . "<br>" . $conn -> error;
            }    

            //closing the opened db connection
            $conn->close();                
        }
            // }        
    ?>


<!--Add food Items php-->
<?php
    //Processing data of the form in the same page
    //Check for a post request
    
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addItem']))
        {       
            $itemName = $_POST["additemname"];     
            $itemImage = $_POST["addImage"];        
            $catergoryId = $_POST["catergoryId"];
            $itemDescription = $_POST["description"];
            $unitPrice = $_POST["unitPrice"];
            
            //connecting to DB service
            include '../config/db.php';

            //Write SQL statement to add data to the table
            $sql="insert into food_items(itemName,image,categoryId,itemDescription,unitPrice) values('$itemName','$itemImage','$catergoryId','$itemDescription','$unitPrice')";

            if($conn -> query($sql)==TRUE)
            {
                echo "Your data was saved.";
            }

            else
            {
                echo "Error" . $sql . "<br>" . $conn -> error;
            }    

            //closing the opened db connection
            $conn->close();                
        }
            // }        
    ?>


