<?php

include "../Controller/adminDoctorListController.php";
include "../Controller/hospitalListController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctor Lists</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./resources/css/root.css" />
  <link rel="stylesheet" href="./resources/css/all.css" />

  <!-- logouticon2 -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

  <!-- fontawesome cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./resources/css/doctorList.css">
  <!-- <script src="./resources/js/doctorList.js" defer></script> -->
  <script src="./resources/js/jquery3.6.0.js" ></script>
  <script src="./resources/js/booking.js" defer></script>
  
</head>

<body>

  <?php include("./common/top.php"); ?>

  <div class="container-fluid">
    

    <div class="body-content position-relative  ">
      <div class="p1 fs-5 fw-bold mt-3 ">Let’s get started for booking.</div>
      <div class="p1 fs-5 fw-bold  ">You can find doctors and hospital here.</div>
      <div class="dropdown">
        
        <select class="hospitalDropDown mt-3 mb-3" aria-label="Default select example" name="hospital" id="hospitalChoose">
          <?php foreach ($hospitalList as $key => $hospital) { ?>
            <option value="<?= $hospital["id"] ?>"><?= $hospital["name"] ?></option>
          <?php } ?>
        </select>
      </div>

      <div class="hospitalCards">
        <!-- Hospital Logo -->
        <!-- <div class="hospitalLogo position-relative start-0 ms-5">
          <img src="./storages/pun hlaing logo 1.png" alt="">
        </div> -->

        <!-- Department -->
        <!-- <div class="department m-3 " style="background-color: #F9C56B; border-radius: 30px; max-width: 500px; ">

          <img src="./storages/department item.png" alt="">
          <span class="fs-5 fw-bold ms-5">Cardiology Department</span>
        </div> -->

        <!-- cards -->
        <div id="cardResult">
        <?php foreach ($doctorList as $key => $doctor) { ?>
          <div class="card m-3  d-flex justify-content-evenly p-2" style="max-width: 1000px; border-radius: 25px;">
            <div class="row g-3 ">
              <div class="col-md-2">
                <img src="./storages/image/<?= $doctor["doctor_photo"]?>" width="100px" class="img-fluid rounded-start " alt="...">
              </div>
              <div class="col-md-4">
                <div class="card-body">
                  <h5 class="card-title"><?= $doctor["name"] ?></h5>
                  <span class="card-title"><?= $doctor["depname"] ?> Department</span>
                  <span class="card-title"> (<?= $doctor["dr_expert_in"] ?>)</span>
                  <p class="card-title"><?= $doctor["dr_degree"] ?></p>
                  <span class="card-title">(<?= $doctor["duty_day"] ?>) </span>
                  <span class="card-title"><?= $doctor["duty_start_time"] ?> to </span>
                  <span class="card-title"><?= $doctor["duty_end_time"] ?></span>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card-body " style="color: #188067">

                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>

                </div>
              </div>
              <div class="col-md-2">
                <a href="../Controller/doctorlistC.php?doctorID=<?=$doctor['id']?>" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                  <img src="booking.png" alt="">
                  Book</a>
              </div>
            </div>
          </div>
        <?php } ?>
        </div>

        <!-- <div class="card m-3  d-flex justify-content-evenly p-2" style="max-width: 1000px; border-radius: 25px;">
          <div class="row g-3 ">
            <div class="col-md-2">
              <img src="./storages/doctor1.png" width="100px" class="img-fluid rounded-start " alt="...">
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body " style="color: #188067">

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                
              </div>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                <img src="./storages/booking.png" alt="">
                Book</a>
            </div>
          </div>
        </div> -->

        <!-- <div class="card m-3  d-flex justify-content-evenly p-2" style="max-width: 1000px; border-radius: 25px;">
          <div class="row g-3 ">
            <div class="col-md-2">
              <img src="./storages/doctor1.png" width="100px" class="img-fluid rounded-start " alt="...">
            </div>
            <div class="col-md-4">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-body " style="color: #188067">

                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                
              </div>
            </div>
            <div class="col-md-2">
              <a href="#" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                <img src="./storages/booking.png" alt="">
                Book</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>

    <?php include('./common/footer.php'); ?>
</body>

</html>