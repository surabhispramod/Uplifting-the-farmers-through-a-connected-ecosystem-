<nav id="sidebar">
    <div class="sidebar-header">
        <h4>Farming Assistance</h4>
    </div>

    <ul class="list-unstyled components">
        <p></p>
        <li class="active">
            <a href="dashboard.php" class="fa fa-th"> Dashboard</a>

        </li>
       
         
       <li>
            <a href="#pageSubmenuRuebaeRamus"  data-toggle="collapse" aria-expanded="false" class="fa fa-thermometer-half dropdown-toggle"> Weather Updates</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebaeRamus">
                

                <li>
                    <a href="weather_view.php">view</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#pageSubmenuRuebae"  data-toggle="collapse" aria-expanded="false" class="fa fa-lightbulb-o dropdown-toggle"> Farming Tips</a>
            <ul class="collapse list-unstyled" id="pageSubmenuRuebae">
                

                <li>
                    <a href="pest_view.php">view</a>
                </li>
            </ul>
        </li>
        
        <li>
            <a href="#pageSubmenu1"  data-toggle="collapse" aria-expanded="false" class="fa fa-users dropdown-toggle"> Experts</a>
            <ul class="collapse list-unstyled" id="pageSubmenu1">
                
                <li>
                    <a href="experts_view.php">view</a>
                </li>

            </ul>
        </li>

         <li>
            <a href="#pageSubmenu2"  data-toggle="collapse" aria-expanded="false" class="fa fa-book dropdown-toggle"> Posts</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                
                <li>
                    <a href="add-post.php"><span class="fa fa-plus-circle"></span> Add Post</a>
                </li>
                <li>
                    <a href="view-post.php"><span class="fa fa-eye"></span> View Post</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#pageSubmenu3"  data-toggle="collapse" aria-expanded="false" class="fa fa fa-video-camera dropdown-toggle"> Videos</a>
            <ul class="collapse list-unstyled" id="pageSubmenu3">
                
                <li>
                    <a href="add-videos.php"><span class="fa fa-plus-circle"></span> Add Videos</a>
                </li>
                <li>
                    <a href="view-videos.php"><span class="fa fa-eye"></span> View Videos</a>
                </li>

            </ul>
        </li>

        <li><a href="view-results.php"><span class="fa fa-eye"></span>  View Results</a></li>
       

        
         <li><a href="community.php"><span class="fa fa-university"></span> Community</a></li>

        </ul>
</nav>


<!-- Page Content  -->
<div id="content">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">

        <!-- <button type="button" id="sidebarCollapse" class="btn sm-btn-toggle ">
            <i class="fa fa-align-left"></i>
            <span>Toggle</span>
        </button> -->
    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-align-justify"></i>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#" class="fa fa-power-off"><b> Welcome 
                    <?php echo $_SESSION['name'] ?></b></a>
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