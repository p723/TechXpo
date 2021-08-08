<?php include("../assets/header/header.php") ?>

<title><?php echo $fetch_info['username'] ?> | Home</title>
   <style>
      h1{
              position: absolute;
              top: 50%;
              left: 50%;
              width: 100%;
              text-align: center;
              transform: translate(-50%, -50%);
              font-size: 50px;
              font-weight: 600;
          }
   </style>
</head>

<body>
      <nav class="navbar navbar-dark bg-dark" aria-label="Second navbar example">
         <div class="container-fluid">
            <a class="navbar-brand" href="#">Brand</a>
            <a class="btn btn-primary" href="logout.php">Logout</a>
         </div>
     </nav>
         <h1>Welcome <?php echo $fetch_info['username'] ?></h1>
</body>

</html>