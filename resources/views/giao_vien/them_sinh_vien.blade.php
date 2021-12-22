<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <title>Thêm sinh viên vào lớp</title>
</head>
<body class="background-color1">
    <div>
    <form class="modal-content animate" action="{{route('xl_them_sinh_vien_vao_lop',['id'=>$ds->id])}}" method="post">
            @csrf
            <div class="container">
                <h2>Thêm sinh viên vào lớp {{$ds->tenlop}}</h2> 
                <a href="{{route('ds_lop')}}"> <i class="fas fa-backspace"></i></a></br>
               <div>
            </div>
                <label for="pw2"><b>Email</b></label>
                <input type="text" placeholder=" Nhập Email mới" name="email"  required>
                @error('email')
                <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                @enderror
            <div class="clearfix">
                <button type="cancel" class="btnCancel">Cancel</button>
                <button type="submit" class= "btnOnClick">Thêm</button>
                
            </div>
            </div>
        </form>

    </div>
</body>
</html>