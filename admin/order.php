<?php include("includes/menu.php"); ?>

        <!-- Main Section Beginning-->
        <div class="main-content">
            <div class="wrapper">

                <h1 class="text-center">Order Management Page</h1>
                <br/>

                <table class="tbl-full">
                    <tr>
                        <th>ID</th>
                        <th>FOOD</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
                        <th>ORDERED DATE</th>
                        <th>STATUS</th>
                        <th>CUSTOMER NAME</th>
                        <th>CONTACT</th>
                        <th>EMAIL</th>
                        <th>ADDRESS</th>
                        <th>ACTIONS</th>
                    </tr>

                    <?php
                        //Get all data from database
                        $sql = "SELECT * FROM order ORDER BY id DESC";
                        //Execute query
                        $res = mysqli_query($connection, $sql);
                        //Count the rows
                        $count = mysqli_num_rows($res);

                        $sn = 1; //serial number

                        if($count>0){
                            //Order available
                            while($row = mysqli_fetch_assoc($res)){
                                //Get Order Values
                                $id = $row['id'];
                                $food = $_row['food'];
                                $price = $_row['price'];
                                $qty = $_row['qty'];
                                $total = $_row['total'];
                                $order_date = $_row['order_date'];
                                $status = $_row['status'];
                                $customer_name = $_row['customer_name'];
                                $customer_contact = $_row['customer_contact'];
                                $customer_email = $_row['customer_email'];
                                $customer_address = $_row['customer_address'];
                                ?>
                                <tr>
                                    <td><?php echo $sn++; ?></td>
                                    <td><?php echo $food; ?></td>
                                    <td><?php echo $price; ?></td>
                                    <td><?php echo $qty; ?></td>
                                    <td><?php echo $total; ?></td>
                                    <td><?php echo $order_date; ?></td>
                                    <td><?php echo $status; ?></td>
                                    <td><?php echo $customer_name; ?></td>
                                    <td><?php echo $customer_contact; ?></td>
                                    <td><?php echo $customer_email; ?></td>
                                    <td><?php echo $customer_address; ?></td>
                                    <td>
                                        <a href="<?php echo SITEURL; ?>admin/update_order.php?id=<?php echo $id; ?>" class="btn-secondary">Update Order</a>
                                        
                                    </td>
                                </tr>
                                <?php
                            }
                        }else{
                            //Order not available
                            echo "<tr><td colspan='12' class='error'>Order(s) Not Available</td></tr>";
                        }
                    ?>
                </table>
    
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Main Section End-->

<?php include("includes/footer.php"); ?>