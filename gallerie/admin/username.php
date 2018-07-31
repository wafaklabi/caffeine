<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<?php include "menu/accmenu.php";

if(isset($_POST['submit']))
{
include '../connect.php';


$passact = $_POST['passact'];

$result = mysqli_query($con,"SELECT * FROM tbl_login ");
while($row = mysqli_fetch_assoc($result)) {
        if($passact != $row['password'])
        {
             echo " <div class='alert alert-danger'><strong>You entered an incorrect password</strong> </div>";
            }
       else
        {
          echo("<script>location.href = 'changeuser.php';</script>");
        //  header("location: changeuser.php");

       }
     }}

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
                            Entrer le mot de passe de votre compte
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">


                                      <div class="form-group">
                                          <label>Mot de passe actuel</label>
                                          <input type="password" class="form-control" placeholder="Mot de passe actuel" name="passact">
                                      </div>

                                      <button type="submit" class="btn btn-primary" name="submit">Confirmer</button>
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
