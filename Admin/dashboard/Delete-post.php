<?php
$iid = $_GET['id'];
      require "../../assets/backend/dbcon/connection.php"; 
    ?>
<!DOCTYPE html>
<html>

<head>
    <script src="../../assets/vendor/jquery/jquery-3.6.0.js">
    </script>
    <script src="../../assets/vendor/sweetalert2/js/sweetalert2.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" href="../../assets/vendor/sweetalert2/css/sweetalert2.min.css" type="text/css" media="all" />
</head>
<body>
    <script type="text/javascript">/*
        // document.ready function
        $(document).ready(function() {
            // selector has to be . for a class name and # for an ID
            $('#call').click(function(e) {
                e.preventDefault(); // prevent form from reloading page
                console.log('working')
                  */
                  var delid = $(this).closest('#buttons').find('#ivval').val();
                  Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showDenyButton: true,
  confirmButtonColor: '#3085d6',
  denyButtonText: `Cancel`,
  confirmButtonText: 'Yes, delete it!',
  background: '#fff url(/images/trees.png)',
  backdrop: `
    rgb(0,123,255)
    url("/images/nyan-cat.gif")
    left top
    no-repeat
  `
}).then((result) => {
  if (result.isConfirmed) {
    
      $.ajax({
         type: "post",
         url: "../Delete-post/<?php echo $iid ?>",
         data: { "delete_btn_set": 1, "delete_id": delid, },
         success: function (response){
            Swal.fire({
               title: 'deleted',
     icon: 'success',
    }).then((result) =>{
        location.replace('../Posts-Maneger');
    });
         }
      });
  }else if (result.isDenied) {
        location.replace('../Posts-Maneger');
  }
});/*
});
});*/
    </script>
</body>

</html>
    <?php
      if(isset($_POST['delete_btn_set'])){
      $uid = $_GET['id'];
      
      $delete_table = "DELETE FROM blog_content WHERE id=$uid";

            $run_query = mysqli_query($con, $delete_table);

            if($run_query){
                header('Location: ../Posts-Maneger');
            }else{
                $errors['db-error'] = "Failed to change your password!";
            }
      }
?>