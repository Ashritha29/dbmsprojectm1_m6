<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>AIRPORT</title>
    <link rel="stylesheet" href="./openPage.css"> 
    <style>
    body{
        background-image:url('https://cdn.businesstraveller.com/wp-content/uploads/fly-images/819021/Passenger-airplane-taking-o-916x516.jpg');
        background-repeat:no-repeat;
        background-size:cover;
    }
    .child{
        padding:1rem;
     background-color:none; 
    border : 0.3rem solid black;
    border-radius:2rem;
    margin: 2rem;
    transition: 0.5s ease-out;
}
.child:hover{
    transform: scale(1.1);
}
.parent{
    margin-top: 7rem;
}
.navbarHead{
    font-weight:bolder;
    color:green;
}
.nav-link{
    font-size: 100%;
}
.department{
    font-weight: 600;
    text-shadow: 2px 2px grey;
}
</style>
</head>
<body>
    <!-- <div class=" headingInfo w-100 ">
        <h1 class="text-white ms-5">AIRPORT</h1>
    </div> -->
    <!-- nav bar creation -->
    <nav class="navbar navbar-expand-md  navbar-light bg-light ">
        <a href="#" class="navbarHead navbar-brand"><h1 class="p-3">AIRPORT</h1></a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#datamenu">
            <span class="  navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="datamenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/homepage.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/passenger.php" class="nav-link">Enter-Baggage-Details</a>
                </li>
                <li class="nav-item">
                    <a href="http://localhost/dbmsp/newadministration.php" class="nav-link">Administration</a>
                </li>
            </ul>
        </div>
        </button>
    </nav>
    <!-- navbar end -->
    <div >
        <!-- cards creation -->
        <div class=" parent d-flex justify-content-evenly row ">
            <div  class=" child col-10 col-md-3">
                <div class="cardHover">
                <div class=" header text-center mt-3"><h3 class="department text-shadow-info">ENTER BAGGAGE DETAILS</h3></div>
                <div class="body"><img class=" d-block mx-auto mt-4 w-75 rounded" src="https://www.ieiworld.com/_images/news/icon_share/1177.png" alt=""></div>
                
                    <button class="bg-primary mt-3 mb-3 w-100"><a class="text-white" style="text-decoration: none" href="http://localhost/dbmsp/passenger.php" target="_blank" class="button-link">OPEN</a></button>
                
                </div>
            </div>
            <div  class=" child col-10 col-md-3">
                <div class="cardHover">
                <div class=" header text-center mt-3  "><h3 class="department">DISPLAYING DETAILS</h3></div>
                <div class="body"><img class=" d-block mx-auto mt-4 w-75 rounded" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSe0KHBEvqLBE9qiMKV-6yY0W0ZT8DGYTA10Q&usqp=CAU" alt=""></div>
                
                    <button class="bg-primary mt-3 mb-3 w-100"><a class="text-white" style="text-decoration: none" href="http://localhost/dbmsp/newadministration.php" target="_blank" class="button-link">OPEN</a></button>

                </div>
            </div>
        </div>
    </div>
    <!-- <footer class=" footer w-100">hello</footer> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>