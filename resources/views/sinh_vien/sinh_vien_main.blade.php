

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     <link rel="stylesheet" href="./css/style_request2.css">
    <script src="./js/Collapse_sidebar.js"></script>
   
    <title>Class</title>
</head>

<style>
		
	@media screen and (min-width:768px){
		.col-3item{
			-ms-flex:0 0 33.3%;
			flex:0 0 33.3%;
			max-width:33.3%;
		}
	}
	
	@media screen and (min-width:992px){
		.col-4 mb-3item{



			-ms-flex:0 0 25%;
			flex:0 0 25%;
			max-width:25%;
		}
	}
	
	@media screen and (min-width:1200px){
		.col-xl-5item{
			-ms-flex:0 0 20%;
			flex:0 0 20%;
			max-width:20%;
		}
	}
   .icon{
      position: absolute;
      top:0%;
      
      right:5%;
   }

	
</style>
<body>
  
      <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
         <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
         </div>
         <div id="main">
            <button class="openbtn" onclick="openNav()"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-justify" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
               <path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
             </svg> </button>  
         </div>
         <a class="navbar-brand" href="#">
            <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t1.18169-9/18118509_1855268601400040_1557862388781110452_n.png?_nc_cat=104&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=lLnANmIz9PgAX9ngb2w&_nc_ht=scontent-sin6-3.xx&oh=00_AT_kqgIYaRjehYJqCTgYg2j61LLHbC5tCCyJTnJP-3ixGg&oe=61D74591" width="30" height="30" class="d-inline-block align-top" alt="">
           Cao Đẳng Kĩ Thuật Cao Thắng
         </a>

         <ul class="navbar-nav ml-auto">
             <li class="nav-item">
               <a class="Join" href="{{route('tham_gia_lop_hoc')}}" data-toggle="tooltip" title="Join Class"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg></a>
             </li>
         </ul>
         <ul class="navbar-nav">
            <li class="nav-item dropdown">
               <a class="nav-link avatar "
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                </svg>
               </a>
             <div class="dropdown-menu dropdown-menu-right" >
               <a class="dropdown-item" href="{{route('doi_thong_tin')}}">Tài khoản của tôi</a>
               <a class="dropdown-item" href="{{route('doi_mat_khau')}}">Thay đổi mật khẩu</a>
               <a class="dropdown-item" href="{{route('dang_xuat')}}">Đăng xuất</a>
             </div>
            </li>
         </ul>
      </nav>

   <div class="container-fluid">
 
         <div class = "row">
            @foreach($ds as $p)
            @if($p->pivot->cho_hay_khong==1)
            <div class= " col-3item col-sm-6 cel  ">
               <div class="card shadow position-relative">
               @if($p->hinh_nen!= "a4.jpg")
                  <div class="card-header" style="position:relative;z-index:999;background-color:transparent" >
                     <img src="./app/images/{{$p->hinh_nen}}"  style="position:absolute ;top:0px;left:0px;width:100%;max-height:100% ;
                     z-index:-1;
                     object-fit:cover">
                
                     <h4 ass="card-title ">
                     <ul class="navbar-nav">
                        @else
                        <div class="card-header " style="background-image: url(./image/a4.jpg)">
                     <h4 ass="card-title ">
                     <ul class="navbar-nav">
                        @endif
            <li class="nav-item dropdown">
               <a class="nav-link avatar "
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                  <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                </svg>
               </a>
             <div class="dropdown-menu dropdown-menu-right" >
               <a class="dropdown-item" href="{{route('huy_lop_hoc',['id'=>$p->id])}}">Hủy lớp học</a>
             </div>
            </li>
         </ul>
                        <a href="{{$p->id}}"><h5 class="card-title text- dark">{{$p->tenlop}} </h5></a>
                        <p>{{$p->tieude}}</p>
                     </h4>
                   </div>
                  
                  <div class="card-body">
                     <h5 class="card-title">Mã vào lớp :{{$p->mavaolop}}</h5>
                     <p class="card-text">
                        Some quick example text to build on the card
                        title and make up the bulk of the card's content.
                     </p>
                  </div>
                  <div class= "card-footer">
                     footer
                  </div>
               </div>
            </div>
            @endif
            @endforeach
   </div>
</body>
</html>
