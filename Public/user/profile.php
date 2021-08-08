<!DOCTYPE html>

<?php
require_once("../../assets/backend/dbcon/connection.php");
   $errors = array();
   $success = array();
   $user = $_GET['user']; $selectq="select * from auth_data where username='$user'" ; $quary=mysqli_query($con, $selectq); $res=mysqli_fetch_array($quary);
   echo $user; 
   if(isset($_POST["upload-img"])){
       $man = $res['username'];
       $oldimg = $res['pimage'];
       unlink("image/".$oldimg);
       $filename = $_FILES["u-image"]["name"];
       $tempname = $_FILES["u-image"]["tmp_name"];    
       $folder = "image/".$filename;
       $imgs = 1;
       if (move_uploaded_file($tempname, $folder))  {
               
                   echo "<script>alert ('imgDone...!')</script>";
       
               }else{
       
                   echo "<script>alert ('imgfail...!')</script>";
       
             }
       
       $update_pimage = "UPDATE auth_data SET pimage='$filename', Pstatus=$imgs WHERE username='$user'";

       $run_query = mysqli_query($con, $update_pimage);
         if($run_query){
               header("Location: profile.php?user=$man");
               echo "<script>alert ('done ...!')</script>";
            }else{
             echo "<script>alert ('Fail...!')</script>";
            }
   }
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../assets/vendor/sweetalert2/css/sweetalert2.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/css/profile.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.min.css" type="text/css" media="all" />
    <link href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <title></title>
</head>
<body>

                            <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-xl-6 col-md-12">
             
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form class="" action="" method="post" accept-charset="utf-8" enctype="multipart/form-data">
           <div class="form-group">
              <input class="form-control" type="file" name="u-image" id="" value="" />
           </div>
           <div class="form-group mt-3">
              <input class="form-control" type="submit" name="upload-img" id="upload-img" value="Upload" />
           </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                <div class="card user-card-full d-flex justify-content-center">
                    <div class="row m-l-0 m-r-0 mob-w">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                               <div class="text-left">
                              <a class="imgh"><i class="bi bi-arrow-left"></i></a>
                              
                              <div class="group" style="float: right; background: none;">
  <span  class="" data-bs-toggle="dropdown" aria-expanded="true">
<i class="bi bi-plus"></i>
  </span>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Upload Profilep Picture</a></li>
    <li><a class="dropdown-item" href="#">Delete Profile Picture</a></li>
    <li><a class="dropdown-item" href="#">Logout</a></li>
  </ul>
</div>
                               </div>
                                <div class="m-b-25"><div class=""><img style="background-image: url('image/<?php echo $res['pimage'] ?>');" class="img-radius"></div></div>
                                <h5 class="f-w-600"><?php echo $res['username'] ?></h5>
                                <p>Web Designer</p> <i class="bi bi-pencil-square feather icon-edit m-t-10 f-16"></i>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400"><?php echo $res['email'] ?><span class="m-1 text-primary"><?php if($res['status'] == "verified"){echo"<img style='width='15px; height='15px;' class='checki' src='check.png' >"; echo $res['status'];}elseif($res['status'] == "notverified"){echo $res['status'];}else{echo("Error to Fetching data");} ?></span></h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone</p>
                                        <h6 class="text-muted f-w-400"><?php echo $res['phone'] ?><span class="m-2 text-danger">Verification system in under work</span></h6>
                                    </div>
                                </div>
                                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Recent</p>
                                        <h6 class="text-muted f-w-400">Sam Disuja</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Most Viewed</p>
                                        <h6 class="text-muted f-w-400">Dinoter husainm</h6>
                                    </div>
                                    <label class="switch">
				                           	<input type="checkbox" id="switch" onclick="change()" <?php if($_COOKIE["theme"] == "dark") { echo "checked"; }?>>
				                           	<span class="slider round"></span>
				                        </label>
                                </div>
                                <ul class="social-link list-unstyled m-t-40 m-b-10">
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="bi bi-facebook"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="bi bi-twitter"></i></a></li>
                                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="bi bi-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" charset="utf-8">
  function uploadpic(){
   Swal.fire({
   title: 'Are you sure?',
   text: "You won't be able to revert this!",
   icon: 'warning',
   input: 'file',
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
<script>
			function change() {
			    var decider = document.getElementById('switch');
			    if(decider.checked){
			        document.cookie = "theme=dark; expires=Thu, 01 Jan 2022 12:00:00 GMT; path='/'";
					location.reload();
			    } else {
			      document.cookie = 'theme=; Max-Age=0';
			      location.reload();
			    }
			}
		</script>
<script src="../../assets/vendor/sweetalert2/js/sweetalert2.min.js" type="text/javascript" charset="utf-8"></script>
 <script src="../../assets/vendor/bootstrap/js/bootstrap5.1.bundle.js"></script>
 <script src="../../assets/vendor/jquery/jquery-3.6.0.js"></script>


                            </body>

</html>