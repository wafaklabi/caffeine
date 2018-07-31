<?php session_start();
if(isset($_SESSION['uname']))
{
?>


<?php include "menu/accmenu.php";

if(isset($_POST['submit']))
{
include '../connect.php';

$name = $_POST['name'];
$passact = $_POST['passact'];
$passnew =$_POST['passnew'];
$pass=$_POST['pass'];
$result = mysqli_query($con,"SELECT * FROM tbl_login ");
while($row = mysqli_fetch_assoc($result)) {
        if($name!=$row['username'])
        {
          echo " <div class='alert alert-danger'><strong>Le nom d'utilisateur saisi n'existe pas</strong> </div>";
        }
        elseif ($passact != $row['password'])
        {
             echo " <div class='alert alert-danger'><strong>Vous avez saisi un mot de passe incorrect</strong> </div>";
            }

        elseif($passnew==$pass)
          {

            $sql=mysqli_query($con,"UPDATE tbl_login SET password='$passnew' where username='$name'");
              if($sql)
                {
                  echo "<div class='alert alert-success'> Votre mot de passe a été modifié avec succès. </div>";
                  echo("<script>location.href = 'account.php';</script>");
                }
          }
              else
                {
                  echo " <div class='alert alert-danger'><strong>les deux mots de passe ne sont pas identiques</strong> </div>";

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
                            Changez votre mot de passe
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">

                                      <div class="form-group">
                                          <label>Nom d'utilisateur</label>
                                          <input type="username" class="form-control" placeholder="Nom d'utilisateur" name="name">
                                      </div>
                                      <div class="form-group">
                                          <label>Mot de passe actuel</label>
                                          <input type="password" class="form-control" placeholder="Mot de passe actuel" name="passact">
                                      </div>
                                      <div class="form-group">
                                          <label>Nouveau mot de passe</label>
                                          <input type="password" class="form-control" placeholder="Nouveau mot de passe" name="passnew">
                                      </div>
                                      <div class="form-group">
                                          <label>Confirmer le nouveau mot de passe</label>
                                          <input type="password" class="form-control" placeholder="Confirmer le nouveau mot de passe" name="pass">
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
