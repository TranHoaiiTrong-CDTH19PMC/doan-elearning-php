<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Elearning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;

        }

        a {
            text-decoration: none;
        }

        .avt-admin {
            width: 50px;
            height: 50px;
            border-radius: 100%;
        }

        .logo-admin {
            width: 230px;
            height: 70px;
        }

        .nav-shadow {
            box-shadow: 2px 2px 2px 3px white;
            background-color: rgb(70, 75, 82);
        }

        .box {
            min-width: 50px;
            min-height: 50px;
            position: relative;
        }

        .bg-left {
            background-color: #595555;

        }

        .nav-right-shadow {
            box-shadow: 0px 2px 0px 3px #7b7575;
        }

        .content {
            font-size: 18px;
            color: whitesmoke;
            padding-left: 30px;
            margin-bottom: 20px;
            transition: 2s;
            animation: 2s;
            position: relative;
        }
        .content a{
            color: whitesmoke;
        }

        .fa-angle-left .fa-caret-down{
            position: absolute;
            left: 80%;
            top: 10%;
            transition: 2s;
            animation: 2s;
        }
        .fa-caret-down{
            opacity: 0;
        }

        .option-hidden {
            display: none;
            padding-left: 40px;
            transition: 2s;
            animation: 2s;
            opacity: 0;
        }

        .content:hover {
            background-color: red;
        }

        .content:hover .option-hidden {
            display: block;
            opacity: 1;
          
        }
        .content:hover  .fa-caret-down{
            opacity: 1;
        }
        .content:hover .fa-angle-left{
            display: none;
        }
        /* .content:hover .fa-angle-left{
            display: none;
        } */

        .content:hover .content a {
            color: whitesmoke;
        }

        .bg-content-left {
            background-color: rgb(70, 75, 82);
            position: relative;
        }
        .height-main{
            height: 91vh;
            
        }
       
      .pos-logout{
          position: absolute;
          bottom: 0%;
          
      }
    </style>
    <div class="container-fluid" style="padding: 0px;">
        <div class="row">
            <div class="col-2  bg-left">

                <div class="row nav-shadow">
                    <div class="col-12 text-center ">
                        <img src="http://www.ballinamorecs.ie/wp-content/uploads/2014/07/elearning-logo.png" alt=""
                            class="logo-admin">
                    </div>
                </div>
               


            </div>

            <div class="col-10 nav-right-shadow">
                <div class="box">
                    <nav class="navbar navbar-light  w-100  ">
                        <div class="container-fluid">
                            <a class="navbar-brand">
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </a>
                            <form class="d-flex justify-content-center align-items-center">
                                <span style="margin-right: 15px; font-size: 18px;font-weight: 600;">Admin-Anh
                                    Khoa</span>
                                <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/227575820_3004229169898620_7280293485296427890_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=bglJbdJPR7wAX8SG-Hd&_nc_ht=scontent.fhan3-2.fna&oh=00_AT8dDLUBlzk2FhrgU2pH3rbTbuuFHHja2OIV6BkNIFH6LA&oe=61C220C9"
                                    alt="" class="avt-admin">
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <div class="row height-main" >
            <div class="col-2 bg-content-left" >
                <div class="row">
                    <div class="col-12 p-3">
                        <div class="content">
                            <a href="#">
                                <span><i class="fas fa-home"></i></span>
                                <span>Trang chu</span>
                            </a>
                        </div>
                        <div class="content">
                            <a href="#">
                                <span><i class="fas fa-home"></i></span>
                                <span><a href="{{route('ds-giang-vien')}}">Giang vien</a></span>
                                <span style="padding-left: 20px;"><i class="fas fa-angle-left"></i></span>
                                <span><i class="fas fa-caret-down"></i></span>
                            </a>
                            <div class="option-hidden">
                                <ul class="list-unstyled">
                                    <li><a href="{{route('form-them-giang-vien')}}">Them giang vien</a></li>
                                </ul>
                            </div>
                        </div>
                   
                        <div class="content">
                            <a href="#">
                                <span><i class="fas fa-home"></i></span>
                                <span>Trang chu</span>
                                <span style="padding-left: 20px;"><i class="fas fa-angle-left"></i></span>
                                <span><i class="fas fa-caret-down"></i></span>

                            </a>
                            <div class="option-hidden">
                                <ul class="list-unstyled">
                                    <li><a href="#">Chuc nang 1</a></li>
                                    <li><a href="#">Chuc nang 1</a></li>
                                    <li><a href="#">Chuc nang 1</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="content">
                            <a href="#">
                                <span><i class="fas fa-home"></i></span>
                                <span>Trang chu</span>
                                <span style="padding-left: 20px;"><i class="fas fa-angle-left"></i></span>
                                <span><i class="fas fa-caret-down"></i></span>

                            </a>
                            <div class="option-hidden">
                                <ul class="list-unstyled">
                                    <li><a href="#">Chuc nang 1</a></li>
                                    <li><a href="#">Chuc nang 1</a></li>
                                    <li><a href="#">Chuc nang 1</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pos-logout w-100">
                    <button type="button" class="btn btn-danger">Dang xuat</button>
                </div>

            </div>
            <div class="col-10" style="font-size: 30px;">Trang chu</div>
        </div>
    </div>
    <!-- <nav class="navbar navbar-light  w-100 nav-shadow">
            <div class="container-fluid">
              <a class="navbar-brand">
                 
              </a>
              <form class="d-flex">
              <img src="https://scontent.fhan3-2.fna.fbcdn.net/v/t39.30808-6/227575820_3004229169898620_7280293485296427890_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=bglJbdJPR7wAX8SG-Hd&_nc_ht=scontent.fhan3-2.fna&oh=00_AT8dDLUBlzk2FhrgU2pH3rbTbuuFHHja2OIV6BkNIFH6LA&oe=61C220C9" 
              alt="" class="avt-admin">
              </form>
            </div>
          </nav>
          <main class="container-fluid" >
                <div class="row">
                    <div class="col-3">
                        1
                    </div>
                    <div class="col-9"><div class="box">2</div></div>
                </div>
          </main> -->

</body>

</html>