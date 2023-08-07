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
        
      
        <li><a href="enter-details.php"><span class="fa fa-user"></span>  Enter Personal Details</a></li>
        <li><a href="enter-sampling.php"><span class="fa fa-briefcase"></span> Enter Sampling Data</a></li>
        <li><a href="view-results.php"><span class="fa fa-eye"></span>  View Results</a></li>
              <li><a href="interact.php"><span class="fa fa-users"></span> Post Query</a></li>
              <li><a href="community.php"><span class="fa fa-university"></span> Community</a></li>
          <li>
            <a href="#pageSubmenu2"  data-toggle="collapse" aria-expanded="false" class="fa fa-shopping-cart dropdown-toggle"> Buy /Sale</a>
            <ul class="collapse list-unstyled" id="pageSubmenu2">
                
                <li><a href="market.php"><span class="fa fa-cart-plus"></span> Marketplace</a></li>
          <li><a href="sale.php"><span class="fa fa-handshake-o"></span> Post for sale </a></li>
        <li><a href="my-ads.php"><span class="fa fa-eye"></span> Your Ads</a></li>
            </ul>
        </li>
        <li><a href="fund-transfer.php"><span class="fa fa-money"></span> Funds</a></li>
        <li><a href="balance.php"><span class="fa fa-credit-card-alt"></span> Wallet</a></li>

         

          <li><a href="view-mandi.php"><span class="ffa fa-calculator"></span> View Mandi</a></li>

          <li><a href="view-market.php"><span class="fa fa-calendar-o"></span> View Market</a></li>
         

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
                <a class="nav-link" href="#" class="fa fa-power-off"><b>Welcome <?php echo $_SESSION['name'] ?></b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" id="date_time"></a>
                <script type="text/javascript">window.onload = date_time('date_time');</script>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php" class="fa fa-power-off"><b>Logout</b></a>
            </li>
        </ul>
    </div>
    </div>
</nav>