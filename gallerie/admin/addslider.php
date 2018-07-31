<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header1.php"; ?>
<?php include "menu/smenu1.php"; ?>

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Ajouter une nouvelle photo</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <script type="application/javascript">
function img_up(){var fup = document.getElementById('upload');var fileName = fup.value;var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
if(ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG"){return true;}
else{alert("only jpeg format supported!");fup.focus();return false;}}</script>

<?php
if(isset($_POST['submit']))
{
$name = $_POST['name'];

$date = date('Y-m-d H:i:s');
$status='process';
$rd=rand();

$uploadedfile = $_FILES['upload']['tmp_name'];
if (empty($uploadedfile))
{
   echo " <div class='alert alert-danger'><strong>ERROR</strong> - Télécharger une photo!</div>";
}
else{
$src = imagecreatefromjpeg($uploadedfile);

list($width,$height)=getimagesize($uploadedfile);


$newwidth=290;
$newheight=($height/$width)*300;
$tmp=imagecreatetruecolor($newwidth,$newheight);

imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$newheight,$width,$height);

$filename = "scatch/".$rd. $_FILES['upload']['name'];
imagejpeg($tmp,$filename,100);

imagedestroy($src);
imagedestroy($tmp);
$photo=$rd.$_FILES['upload']['name'];
move_uploaded_file($_FILES["upload"]["tmp_name"],"supload/".$rd.$_FILES["upload"]["name"]);

if (empty($name))
{
 echo " <div class='alert alert-danger'><strong>ERROR</strong> - Empty fields are not allowed !</div>";
 }
else
{
include "connect.php";

$query="INSERT INTO tbl_slider(name,image,date,status) VALUES ('$name','$photo','$date','$status')";
if(mysqli_query($con,$query))
	{
echo " <div class='alert alert-success'>La nouvelle photo a été ajouté avec succès. <a href='viewslider.php'>Voir les photos</a> |<a href='addslider.php'> Ajouter une nouvelle photo</a></div>";
	}
	else
	{
		echo "error";
		print mysql_error();
	}

// echo "<script>location.href='addevent.php </script";
   }
}}
?>


            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Remplir ce formulaire pour ajouter une photo (uniquement les fichiers en jpg sont supportés)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form action="#" method="post" enctype="multipart/form-data" name="upload">

                                        <div class="form-group">
                                            <label>Nom de la photo</label>
                                            <input class="form-control" placeholder="Enter Title" name="name">
                                                <p class="help-block">Exemple "Café liégeois"</p>

                                        </div>


                                        <div class="form-group">
                                            <label>Télécharger la photo</label>
                                            <input type="file" name="upload"  id="upload" />

                                            <p class="help-block"> Attention: "La taille de l'image recommendé est 400*300 pixels"!</p>
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="submit">Enregistrer</button>
                                        <button type="reset" class="btn btn-default">Annuler</button>
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
