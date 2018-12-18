
<nav class="sidebar sidebar-offcanvas" id="sidebar">

          <ul class="nav">

          <!-- icon sidebar -->

          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
            
           
            <li class="nav-item">
            <?php 
              if($_SESSION['member']['permission'] == 'admin')
            {
              ?>
              <a class="nav-link" href="admindetal_asree.php" >
              <?php
            }
            else
            {
            ?>
              <a class="nav-link" href="userpage.php" >
            <?php
            }
            ?>
                <i class="menu-icon mdi mdi-home"></i>
                <span class="menu-title">Gerenal Infomation</span>
                <i class="menu-arrow"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="physical_search.php" data-target="#test2" >
                <i class="menu-icon mdi mdi-leaf"></i>
                <span class="menu-title">Physical Search</span>
                <i class="menu-arrow"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#test2" >
                <i class="menu-icon mdi mdi-dna"></i>
                <span class="menu-title">Genome Search</span>
                <i class="menu-arrow"></i>
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="locationAll.php">
                <i class="menu-icon mdi mdi-map-marker"></i>
                <span class="menu-title">Location Search</span>
                <i class="menu-arrow"></i>
              </a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="#test4" >
                <i class="menu-icon mdi mdi-sitemap"></i>
                <span class="menu-title">Ontology Search</span>
                <i class="menu-arrow"></i>
              </a>
            </li>


            <?php 
            if($_SESSION['type']=='admin')
            {
              ?>
            <li class="nav-item">
              <a class="nav-link" href="User_dataShare.php" >
                <i class="menu-icon  mdi mdi-share-variant"></i>
                <span class="menu-title"> Data sharing </span>
                <i class="menu-arrow"></i>
              </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="admin_manage.php" >
                <i class="menu-icon mdi mdi-settings"></i>
                <span class="menu-title">User management</span>
                <i class="menu-arrow"></i>
              </a>
            </li>

            <?php
            }
              else{
            ?>
            <li class="nav-item">
              <a class="nav-link" href="data_share.php" >
                <i class="menu-icon mdi mdi-share-variant"></i>
                <span class="menu-title"> Data sharing </span>
                <i class="menu-arrow"></i>
              </a>
            </li>
          <?php } ?>


            

          </ul>

        </nav>