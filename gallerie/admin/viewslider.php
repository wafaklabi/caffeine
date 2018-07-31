<?php session_start();
if(isset($_SESSION['uname']))
{
?>
<?php include "header1.php"; ?>
<?php include "menu/smenu2.php"; ?>
<style>.navigation_item{
		padding: 0px 5px;
		background: #fff;
		text-decoration: none;

		color: #e3e3e3 !important;
		font-size: 12px;
		border: 2px solid #e3e3e3;
		border-radius: 1px;
		-webkit-transition: all 0.2s linear;
		-moz-transition: all 0.2s linear;
		-ms-transition: all 0.2s linear;
		-o-transition: all 0.2s linear;
	}
	.navigation_item:hover,.selected_navigation_item{
		border: 2px solid #2A6496;
		border-radius: 2px;
		color: #2A6496 !important;
		background: #fff;
	}
	</style>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Galerie des photos</h1>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         panneau de contrôle des photos
                        </div>
                        <div class="panel-body">
                           <div class="table-responsive table-bordered">
                           <?php
include"connect.php";
if (isset($_GET["page"])) { $page = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * 20;
$sql = "select * from tbl_slider where status='process' ORDER BY id DESC LIMIT $start_from, 20";
$rs_result = mysqli_query ($con,$sql);
?>
                                <table class="table">

<thead>
                                        <tr>
                                            <th width="20%">Nom de la photo</th>


                                            <th colspan=2 padding="10">Image</th>
											<th colspan=2 width="18%">Action (Retirer OU Modifier)</th>



                                        </tr>
                                    </thead>

<?php
while ($row = mysqli_fetch_assoc($rs_result)) {
?>

<tbody>
                                        <tr>
                                            <td> <?php echo $row["name"]; ?> </td>


                                            <td colspan=2 padding="10"><img src="scatch/<?php echo $row["image"]; ?>"  width="200px"/></td>
                                           <td><a href='slidedelete.php?key1=<?php echo $row["id"]; ?>'>Retirer</a>

                                        </tr>

										</tbody>

<?php
};
?>
</table>
<strong>Pages  </strong>

<?php
$sql = "SELECT COUNT(name) FROM tbl_slider";
$rs_result = mysqli_query($con,$sql);
$row = mysqli_fetch_row($rs_result);
$total_records = $row[0];
$total_pages = ceil($total_records / 20);
for ($i=1; $i<=$total_pages; $i++) {
echo "<a href='viewslider.php?page=".$i."' class='navigation_item selected_navigation_item'>".$i."</a> ";
};
?>


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

    <!-- DataTables JavaScript -->
    <script src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="js/plugins/dataTables/dataTables.bootstrap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>
<?php
}
else
{
header("location:login.php");
}
?>
</body>

</html>
