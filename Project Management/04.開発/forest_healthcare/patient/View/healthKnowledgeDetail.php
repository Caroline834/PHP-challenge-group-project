<?php

include "../Controller/articleDetailC.php";
$articleInfo =  $_SESSION["articleInfo"];
// print_r($articleInfo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Knowledge Detail</title>
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/healthKnowDetail.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/all.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-1 col-md-1 col-sm-1"></div>
            <div class="col-9 col-md-9 col-sm-8 mt-5 text-center">
                <strong for="" class="healthKtitle"><?= $articleInfo[0]["title"] ?></strong>
            </div>
            <div class="col-2 col-md-2 col-sm-3 fs-6 mt-3">
                <a href="../View/healthKnowledgeList.php" class="back"><i class="fa-regular fa-circle-left"></i>Go back to list</a>
            </div>
        </div>
        <div class="row">
            <div class="col-6 col-md-6 col-sm-6 mx-auto text-center mt-3">
                <img src="./storages/healthKnowl/<?= $articleInfo[0]["photo"] ?>" class="image" alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-8 col-sm-8 col-md-8 mx-auto">
            <p class="articaldetail"><?= $articleInfo[0]["description"] ?></p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>