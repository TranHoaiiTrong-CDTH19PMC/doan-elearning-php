
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/style_request2.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <script src="./js/Collapse_sidebar.js"></script>
   
    <title>Class</title>
</head>
<body>
    
<div class="container">
  <table class="table">
    <h2>Danh sách sinh viên trong lớp</h2><br/>
    <a href="{{route('ds_lop')}}"> <i class="fas fa-backspace"></i></a></br>
        <tr>
            <th>Tên sinh viên </th>
            <th>MSSV </th>
            <th>Email </th>
           <th>Chức năng</th>
           <th></th>
        </tr>
            @foreach($ds as $p)
               @if($loop->first)
                <a href="{{route('them_sinh_vien_vao_lop',['id'=>$p->pivot->lophoc_id])}}"><i class="far fa-plus-square"></i></a>
                   @endif
                @if($p->pivot->cho_hay_khong==1)
                    <form  action="{{route('xl_Kich_sinh_vien_ra_khoi_lop',['sinhvien_id'=>$p->pivot->sinhvien_id,
                        'lophoc_id'=>$p->pivot->lophoc_id])}}" method="post">
                    @csrf
                    <tr>
                    <td>{{$p->name}}</td>
                    <td>{{$p->mssv}}</td>
                    <td>{{$p->email}}</td>
                <td> <button type="submit" class= "btnOnClick">Cho ra khỏi lớp</button></td>
                    </form>
                
                </tr>
                    @endif
            @endforeach
  </table>
</div>
    </body>
</html>
