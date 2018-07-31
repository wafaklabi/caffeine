<?php
if(isset($_SESSION['uname']))
{
  include ('connect.php');
  $sql = "SELECT * FROM tbl_login ";
  $result = mysqli_query($con,$sql);
  while($row = mysqli_fetch_array($result))
	{$username=$row['username'];

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Paramètres du compte</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
  .alert{padding:15px;margin-bottom:20px;margin-top:2px;margin-left:250px;border:1px solid transparent;border-radius:4px}
</style>
</head>

<body>

    <div id="wrapper">

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
                    <a  class="dropdown-toggle " data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php  echo "$username"; } ?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user" >
                             <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
                            <li class="active"><a href="account.php"><i class="fa fa-cog fa-fw"></i> Paramètres du compte</a>  </li>
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
                      
                            <li >
                                  <a href="#"><i class="fa fa-instagram fa-fw"></i> Menu<span class="fa arrow"></span></a>
                                      <ul class="nav nav-second-level">
                                          <li><?php if(isset($_SESSION['uname'])){?>
                                                <a  href="addgallery.php">Ajouter un nouveau menu</a><?php }?>    </li>
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
<?php } ?>
