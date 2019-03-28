<section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['p_name'];?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <!-- REGISTRATION -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Registration</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="active"><a href="checkin.php"><i class="fa fa-circle-o"></i> Check In</a></li>
            <li><a href="walkin.php"><i class="fa fa-circle-o"></i> Walkin</a></li>
            <li><a href="stubkit.php"><i class="fa fa-circle-o"></i> Stub and Kit</a></li>
          </ul>
        </li>

        <!-- PAYMENT -->
        <li class=""> 
          <a href="payment.php">
                <i class="fa fa-users" aria-hidden="true"></i> <span>Payment</span>
          </a>
        </li>

        <!-- REPORTS -->
        <li class=""> 
          <a href="report.php">
                <i class="fa fa-users" aria-hidden="true"></i> <span>Reports</span>
          </a>
        </li>

        <!-- USER MANAGEMENT -->
        <li class=""> 
          <a href="user.php">
                <i class="fa fa-users" aria-hidden="true"></i> <span>User Accounts</span>
          </a>
        </li>

        <!-- CONFIG -->
        <li class=""> 
          <a href="config.php">
                <i class="fa fa-gear" aria-hidden="true"></i> <span>Config</span>
          </a>
        </li>

      </ul>


 </section>