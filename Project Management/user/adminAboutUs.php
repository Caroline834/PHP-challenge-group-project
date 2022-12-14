<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./css/adminAboutUs.css?v="<?=time()?>>
    <link rel="stylesheet" href="./css/adminContact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

<!-- Bootstrap -->
<link href="./bb/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./bb/dist/css/Admin.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="skin-blue">
    
<!-- Header -->
<?php include("./bb/1.php"); ?>
    <div class="container">
        <div class="row">
            
            <!-- <div class="col-md-3 col-sm-2 col-2"></div> -->
            <div class="col-md-6  col-sm-8 col-8 adminAbout-col">
                <form action="" class="form-horizontal hr adminContact-form">
                    <div class="subtitleAboutus">Change About Us Page</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="username" class="control-label col-md-4">Username</label> -->
                        <div class="col-md-12">
                            <textarea rows="3" type="text" class="form-control adminContactTextarea" id="usernaem" placeholder="Welcome Text"></textarea>
                        </div>
                    </div>
                    <div class="subtitleAboutus">Change Photo or Picture</div>
                    <div class="form-group">
                        <div class=" col-md-12 selectBoxAboutus">
                            <label for="Aboutfile-upload" class="Aboutcustom-file-upload">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                Select
                            </label>
                            <input id="Aboutfile-upload" type="file" />
                            <div id="Aboutfile-chosen">No file chosen</div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <input type="button" value="Change" class="adminContactbtn">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-2 col-2"></div>
        </div>
    </div>

    <!-- Header -->
<?php include("./bb/2.php"); ?>
    <script src="css/adminAboutUs.js"></script>
</body>

</html>