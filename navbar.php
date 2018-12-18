<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-danger">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <img style="" src="theme/assets/images/tomato/tomato_logo.png" alt="logo" />
            Tomato
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.php">
            <img src="theme/assets/images/tomato/tomato_logo.png" alt="logo" /> 
          </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">
         
          

          <ul class="navbar-nav navbar-nav-right">

          	 <li class="nav-item dropdown d-none d-xl-inline-block" >
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              	Species
              </a>
              <div style="padding-top: 10px;" class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              	<ul style="padding-left: 0px;" class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
            <li class="nav-item" id="chilli" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Chilli" data-custom-class="tooltip-warning">
              <a href="#" class="nav-link">
                <img class="img-link" src="theme/assets/images/tomato/chilli32.png" alt="logo" />
              </a>
            </li>
            <li class="nav-item" id="cucumber" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Cucumber" data-custom-class="tooltip-success">
              <a href="#" class="nav-link">
                <img class="img-link" src="theme/assets/images/tomato/cucumber32.png" alt="logo" />
              </a>
            </li>
            <li class="nav-item" id="banana" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Banana" data-custom-class="tooltip-warning">
              <a href="#" class="nav-link">
                <img class="img-link" src="theme/assets/images/tomato/banana32_2.png" alt="logo" />
              </a>
            </li>
            <li class="nav-item" id="eggplant" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eggplant" data-custom-class="tooltip-info">
              <a href="#" class="nav-link">
                <img class="img-link" src="theme/assets/images/tomato/aubergine32.png" alt="logo" />
              </a>
            </li>
          </ul>
              </div>

          	</li>
            
            <li class="nav-item dropdown d-none d-xl-inline-block">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              	<?php

              		if ($_SESSION['member']['permission'] == 'admin') {
              			echo '<span class="profile-text">'.$_SESSION['member']['username'].'</span>';
              			echo '<img class="img-sm rounded-circle" src="'.$_SESSION['member']['pictrue'].'" alt="Profile image"> </a>';
              		}
              		elseif($_SESSION['member']['permission'] == 'user') {
              			echo '<span class="profile-text">'.$_SESSION['member']['username'].'</span>';
              			echo '<img class="img-sm rounded-circle" src="'.$_SESSION['member']['pictrue'].'" alt="Profile image"> </a>';
              		}
                  else {
                    echo '<span class="profile-text">'.'Permission Error'.'</span>';
                    echo '<img class="img-sm rounded-circle" src="theme/assets/images/faces/face2.jpg" alt="Profile image"> </a>';
                  }
              	 ?>
                
              <div style="padding-top: 10px;" class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
               
                <?php 
              		if ($_SESSION['member']['permission'] == 'admin') {
              			echo '<a class="dropdown-item mt-2"> Manage Accounts </a>';
              			echo '<a class="dropdown-item"> Change Password </a>';
              			echo ' <a class="dropdown-item" href="logout.php"> Sign Out </a>';
              		}
              		else {
                    echo '<a class="dropdown-item mt-2"> Manage Accounts </a>';
              			echo '<a class="dropdown-item" href="#"> Change Password </a>';
              			echo ' <a class="dropdown-item" href="logout.php"> Sign Out </a>';
              		}
              	 ?>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="icon-menu"></span>
          </button>
        </div>
      </nav>