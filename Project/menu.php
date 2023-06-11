<?php require_once("auth.php");?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["name"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>

                <lottie-player src="https://assets4.lottiefiles.com/packages/lf20_DtvkYcs6vb.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
            </div>
            
            
        </div>


        <div class="col-md-8">

        
         <div class="card">
             <div class="card-body">
                 <form id="post-form">
                     <center><h3>Bagikan Poto Anda Di Sini</h3></center>
                     <textarea id="post" class="form-control" placeholder="Isi Judul Poto Anda..."></textarea>
                     <input type="file" class="form-control" id="image" accept="images/*">
                     <div class="text-center">
                         <button type="button" class="btn btn-success" onclick="upload()">Upload</button>
                     </div>

                 </form>
              </div>

         </div>
         <div class="row mt-4" id="posts">

         </div>
            
        </div>
    
    
</div>
<div class="text-center p-4" style="background-color: rgba(255, 255, 255,0.8); ">
    © 2023 Copyright:
    <a class="text-reset fw-bold" href="https://agungdev.id/">agungdev.id</a>
</div>

<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<!--Database Firebase-->
<script src="https://www.gstatic.com/firebasejs/7.14.2/firebase.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AgungPutra220903/Web/initfb.js"></script>
<script src="https://cdn.jsdelivr.net/gh/AgungPutra220903/Web/firebasenew.js"></script>
</body>
</html>