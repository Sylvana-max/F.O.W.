<?php include("includes/menu.php"); ?>


        <!-- Main Section Beginning-->
        <div class="main-content">
            <div class="wrapper">
                <h1>Dashboard</h1>
<br/>
                <?php
                    if(isset($_SESSION['login'])){
                        echo $_SESSION['login'];//Displays message
                        unset($_SESSION['login']);//Removing session message
                    }
                ?><br/>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Main Section End-->

<?php include("includes/footer.php"); ?>