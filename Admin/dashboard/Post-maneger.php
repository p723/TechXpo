<!DOCTYPE html>
<html lang="en">
<?php require_once "../../assets/backend/dbcon/connection.php"; 
session_start();
$email = $_SESSION['ademail'];

$password = $_SESSION['adpass'];
if($email != false && $password != false){
    $sql = "SELECT * FROM auth_data WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);

        $status = $fetch_info['status'];
        $code = $fetch_info['otp'];
        if($status == "verified"){
            if($code != 0){
                header('Location: ../Forgot-Password');
            }
        }else{
            header("Location: ../Verify");
        }
    }else{
       
    }
}else{
    header('Location: ../Admin-login');
}
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../../assets/vendor/bootstrap3/css/bootstrap3.min.css">
	<link rel="stylesheet" href="../../assets/vendor/datatables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../../assets/css/table.css">
	<link rel="stylesheet" href="../../assets/vendor/sweetalert2/css/sweetalert2.min.css">
	<link rel="stylesheet" href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css">
   <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
   <link rel="stylesheet" href="../../assets/css/app.css">
 <style>
    .burger-btn{
       display: block !important;
    }
    header{
       margin: 20px;
       margin-bottom: 0;
       
    }
 </style>
	<title>User Control Panel</title>
</head>

<body>
   
<?php include("../../assets/sidebar/sidebar.php"); ?>
       
               <header class="m-3">
                  <a href="#" style="font-size: 30px" class="burger-btn d-block d-xl-none text-primary">
                     <i class="bi bi-justify fs-3"></i>
                  </a>
               </header>
	<div class="container p-30">
		<div class="row">
			<div class="col-md-12 main-datatable">
				<div class="card_body">
					<div class="row d-flex">
						<div class="col-sm-4 createSegment">
							<a class="btn dim_button create_new" href="../Add-post"> <span class="glyphicon glyphicon-plus"></span> Create New</a>
						</div>
						<div class="col-sm-8 add_flex">
							<div class="form-group searchInput">
								<label for="email">Search:</label>
								<input type="search" class="form-control" id="filterbox" placeholder="">
							</div>
						</div>
					</div>
					<div class="overflow-x">
						<table style="width:100%;" id="filtertable" class="table cust-datatable dataTable no-footer">
							<thead>
								<tr>
									<th style="min-width:50px;">ID</th>
									<th style="min-width:150px;">Title</th>
									<th style="min-width:200px;">Date</th>
									<th style="min-width:100px;">Labels</th>
									<th style="min-width:100px;">catagory</th>
									<th style="min-width:150px;">Status</th>
									<th style="min-width:150px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $selectq="select * from blog_content" ; $quary=mysqli_query($con, $selectq); while ($res=mysqli_fetch_array($quary)) { ?>
								<tr>
									<td><?php echo $res['id'] ?></td>
									<td><?php echo $res['title'] ?></td>
									<td><span class="mode mode_process"><?php echo $res['date'] ?></span>
									</td>
									<td><span class="mode mode_process">Coming soon..!</span></td>
									<td><?php echo $res['catagory']; ?></td>
									<td><?php $status = $res['status']; if($status == '1'){?><span class="mode mode_on">Public</span>
									<?php }elseif($status == '0'){?><span class="mode mode_off">Draft</span><?php }else{ ?><span class="mode mode_none">Not Defined</span><?php } ?>
									</td>
									<td>
										<div class="btn-group">
											<a class="dropdown_icon" href="Update-post/<?php echo $res['id'] ?>"> <i class="bi bi-pencil-square"></i> 
											</a>
										</div>
										<div class="btn-group">
                                 <a class="dropdown_icon" href="#"><i class="bi bi-envelope"></i></a>
										</div>
										<div class="btn-group">
											<a class="dropdown-toggle dropdown_icon" data-toggle="dropdown"> <i class="bi bi-three-dots"></i>
											</a>
											<ul class="dropdown-menu dropdown_more">
												<li>
													<a href="#" target="_black"> <i class="bi bi-envelope"></i>Duplicate</a>
												</li>
												<li>
													<a href="Delete-post/<?php echo $res['id'] ?>" target="_black"> <i class="bi bi-trash"></i> Delete</a>
												</li>
												<li>
													<a href="#" target="_black"> <i class="bi bi-list"></i>Activity</a>
												</li>
											</ul>
										</div>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script>
	   function deletetb(){
	      Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
	   }
	</script>
	<script src="../../assets/vendor/jquery/jquery-3.6.0.js"></script>
<script src="../../assets/vendor/bootstrap3/js/bootstrap3.min.js"></script>
	<script src="../../assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../../assets/js/table.js"></script>
	<script src="../../assets/js/main1.js"></script>
	<script src="../../assets/vendor/sweetalert2/js/sweetalert2.min.js"></script>
</body>

</html>