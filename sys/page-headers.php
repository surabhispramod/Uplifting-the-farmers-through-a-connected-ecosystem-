


<nav id="sidebar">
    <div class="sidebar-header">
        <h6>Farming Assistance</h6>
    </div>

    <ul class="list-unstyled components">
        <p></p>
        <li class="active">
            <a href="dashboard.php" class="fa fa-th"> Dashboard</a>

        </li>
         <li>
            <a href="#pageSubmenuRue"  data-toggle="collapse" aria-expanded="false" class="fa fa-user-circle-o dropdown-toggle"> Farmers</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRue">
                <li>
                    <a href="farms_add.php">Add</a>
                </li>

                <li>
                    <a href="farms_view.php">view</a>
                </li>
            </ul>
        </li>
         
       <li>
            <a href="#pageSubmenuRuebaeRamus"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle"> Weather Updates</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus">
                <li>
                    <a href="weather_add.php">Add</a>
                </li>

                <li>
                    <a href="weather_view.php">view</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenuRuebae"  data-toggle="collapse" aria-expanded="false" class="fa fa-lightbulb-o dropdown-toggle"> Farming Tips</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebae">
                <li>
                    <a href="pest_add.php">Add</a>
                </li>

                <li>
                    <a href="pest_view.php">view</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#pageSubmenu1"  data-toggle="collapse" aria-expanded="false" class="fa fa-users dropdown-toggle"> Experts</a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                <li>
                    <a href="experts_add.php">Add</a>
                </li>
                <li>
                    <a href="experts_view.php">view</a>
                </li>

            </ul>
        </li>
        <!-- // -->
        <li>
            <a href="#pageSubmenu5"  data-toggle="collapse" aria-expanded="false" class="fa fa-video-camera dropdown-toggle"> Videos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu5">
                <li><a href="add-videos.php"><span class="fa fa-plus-circle"></span> Add videos</a></li>
                <li><a href="view-videos.php"><span class="fa fa-eye"></span> View videos</a></li>

            </ul>
       </li>   <!--   //// -->
         <li>
            <a href="#pageSubmenu8"  data-toggle="collapse" aria-expanded="false" class="fa fa-cart-plus dropdown-toggle"> Market</a>
            <ul class="collapse list-unstyled" id="pageSubmenu8">
                <li><a href="add-market.php"><span class="fa fa-plus-circle"></span> Add Market Rate</a></li>
                <li><a href="view-market.php"><span class="fa fa-eye"></span> View Market rate</a></li>

            </ul>
       </li>   <!--   //// -->
        
          

           
            <li>
            <a href="#pageSubmenu6"  data-toggle="collapse" aria-expanded="false" class="fa fa-book dropdown-toggle"> Posts</a>
            <ul class="collapse list-unstyled" id="pageSubmenu6">
                <li><a href="add-post.php"><span class="fa fa-plus-circle"></span> Add Post</a></li>

            <li><a href="view-post.php"><span class="fa fa-eye"></span> View post</a></li>
            <hr>

            </ul>
       </li>   <!--   //// -->

            <li>
            <a href="#pageSubmenu7"  data-toggle="collapse" aria-expanded="false" class="fa fa-calculator dropdown-toggle"> Mandi</a>
            <ul class="collapse list-unstyled" id="pageSubmenu7">
                
        <li><a href="add-mandi.php"><span class="fa fa-plus-circle"></span> Add Mandi Rates</a></li>

       

        <li><a href="view-mandi.php"><span class="fa fa-eye"></span> View Mandi Rates</a></li>
            <hr>

            </ul>
       </li>   <!--   //// -->
        
            

        <li><a href="feedback.php">View Feedback</a></li>

        </ul>
</nav>


<!-- Page Content  -->
<div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        
       
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" class="fa fa-power-off"><b>Welcome <?php
                echo $_SESSION['name'] ?></b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="date_time"></a>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" class="fa fa-power-off"><b>logout</b></a>
            </li>
        </ul>
    </div>
    </div>
</nav>