<?php
if(isset($_SESSION['uname']))
{
  include ('connect.php');
  $sql = "SELECT * FROM tbl_login ";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result))
	{$username=$row['username'];

?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">Admin Panel</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php  echo "$username"; }} ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                         <li><a href="account.php"><i class="fa fa-cog fa-fw"></i> Paramètres du compte</a>  </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">


                      <li>
                          <a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                          <!-- /.nav-second-level -->
                      </li>
                    
                          <li class="active">
                                <a href="#"><i class="fa fa-instagram fa-fw"></i> Menu<span class="fa arrow"></span></a>
                                    <ul class="nav nav-second-level">
                                        <li><?php if(isset($_SESSION['uname'])){?>
                                              <a class="active" href="addgallery.php">Ajouter un nouveau menu</a><?php }?>    </li>
                                                <li><?php if(isset($_SESSION['uname'])){?>
                                                  <a href="viewsgallery.php">Voir les menus</a><?php }?>  </li>
                                      </ul>
                          <!-- /.nav-third-level -->
                         </li>
                         <li >
                               <a href="#"><i class="fa fa-instagram fa-fw"></i> Slider<span class="fa arrow"></span></a>
                                   <ul class="nav nav-second-level">
                                       <li><?php if(isset($_SESSION['uname'])){?>
                                             <a  href="addslider.php">Ajouter une photo dans le slider</a><?php }?>    </li>
                                               <li><?php if(isset($_SESSION['uname'])){?>
                                                 <a href="viewslider.php">Voir toutes les photos dans le slider </a><?php }?>  </li>
                                     </ul>
                         <!-- /.nav-third-level -->
                        </li>
                        <li >
                              <a href="message.php"><i class="fa fa-envelope fa-fw"></i>Messages</a>

                        <!-- /.nav-third-level -->
                       </li>



                      </ul>

</div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
