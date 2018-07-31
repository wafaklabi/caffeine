<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header.php"; ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-lg-3 col-md-6">
                  <div class="panel panel-red">
                      <div class="panel-heading">
                          <div class="row">
                              <div class="col-xs-3">
                                  <i class="fa fa-envelope fa-5x"></i>
                              </div>
                              <div class="col-xs-9 text-right">
                                  <div class="huge"><?php

      include "connect.php";
      $result = mysqli_query($con,"select count(*) as total from tbl_message ");
      $data=mysqli_fetch_assoc($result);
      echo $data['total'];
      ?></div>
                                  <div>Messages</div>
                              </div>
                          </div>
                      </div>
                      <a href="message.php">
                          <div class="panel-footer">
                              <span class="pull-left">View Details</span>
                              <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                              <div class="clearfix"></div>
                          </div>
                      </a>
                  </div>
              </div>


                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-instagram fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php

        include "connect.php";
        $result = mysqli_query($con,"select count(*) as total from tbl_menu where status='process'");
        $data=mysqli_fetch_assoc($result);
        echo $data['total'];
        ?></div>
                                    <div>Photos de menu</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewsgimages.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-instagram fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php

        include "connect.php";
        $result = mysqli_query($con,"select count(*) as total from tbl_slider where status='process'");
        $data=mysqli_fetch_assoc($result);
        echo $data['total'];
        ?></div>
                                    <div>Photos dans slider</div>
                                </div>
                            </div>
                        </div>
                        <a href="viewslider.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>



                           <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/plugins/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>
