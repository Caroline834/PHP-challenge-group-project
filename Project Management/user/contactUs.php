<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/contactUs.css?v="<?=time()?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
</head>

<body class="bodyColor">
    <div class="container">
        <div class=" header"></div>
        <div class="row">
            <div class="col-md-5 col-sm-11 offset-1">
                <div class="Contact text-light">Contact Us</div>
                <div>
                    <input type="text" class="col-10 boxStyle" placeholder="User Name">
                </div>
                <div>
                    <input type="text" class="col-10 mt-3 boxStyle" placeholder="Email Address">
                </div>
                <div>
                    <input type="text" class="col-10 mt-3 boxStyle" placeholder="Phone Number">
                </div>
                <div>
                    <textarea rows="5" class="col-10 mt-3 boxStyle" placeholder="Message"></textarea>
                </div>

                <div class="btn btn-warning col-10 boxStyle sendButton">Send</div>
            </div>

            <!-- <div class="col-1">
                <div class="verticalLine"></div>
            </div> -->
            <div class="col-4 information">
                <div class="text-light infoTitle">INFORMATION</div>
                <div class="mt-3 text-light col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptatum pariatur.</div>
                <div class="mt-3">
                <i class="fa-solid fa-location-dot iconColor"></i>
                    <span class="text-light">Address</span>
                    <div class="infoDetail">Junction Square 3rd floor, Yangon</div>
                </div>
                <div>
                <i class="fa-solid fa-phone iconColor mt-3"></i>
                <span class="text-light">Lets Talk</span>
                <div class="infoDetail">01-253920116</div>
                </div>
                <div>
                <i class="fa-solid fa-envelope iconColor mt-3"></i>
                    <span class="mb-5 text-light">General Support</span>
                    <div class="infoDetail">forest@gmail.com</div>
                </div>
                <!-- <img src="./image/9cb7336155c2f3bccfe46a1a7f4c76de-removebg-preview 2.png" alt="" class="image"> -->
                
            </div>
        </div>
        <div class=" footer mt-5"></div>
    </div>

</body>

</html>