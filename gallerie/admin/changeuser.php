<?php session_start();
if(isset($_SESSION['uname']))
{


 include "header1.php";
 include "menu/accmenu.php";

if(isset($_POST['submit']))
{
include '../connect.php';

$name = $_POST['name'];
$sql=mysqli_query($con,"UPDATE tbl_login SET username='$name'");

        echo "<div class='alert alert-success'> Votre nom d'utilisateur a été modifié avec succès. </div>";
        echo("<script>location.href = 'account.php';</script>");
      }

 ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Paramètres de votre compte</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Changez le nom de l'utilisateur
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">

                                      <div class="form-group">
                                          <label>Nouveau nom d'utilisateur</label>
                                          <input type="username" class="form-control" placeholder="Nouveau nom d'utilisateur" name="name">
                                      </div>

                                      <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                                        <a href="account.php"><button type="button" class="btn btn-default">Annuler</button></a>

                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
