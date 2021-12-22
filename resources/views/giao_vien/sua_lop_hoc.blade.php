<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/style_request2.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <title>Cập nhật lớp học</title>
</head>
<body class="background-color1">
    <div class="">
        <form action="{{route('xl_sua_lop_hoc',['id'=>$user->id])}}" method ="POST" enctype="multipart/form-data" class="modal-content animate">
           @csrf
        <div class="container">
               
                    <input type="hidden" name="id" value="">
                    <h1>Cập nhật lớp học </h1>
                    <a href="{{route('trangchu')}}"> <i class="fas fa-backspace"></i></a></br>
                    <div class="mb-3">
                        <label for="class_name"><b>Tên lớp học</b></label>
                        <div class="input-group">
                            <input value= "{{$user->tenlop}}" type="text" class="form-control" id="class_name" placeholder="Tên lớp học (bắt buộc)" name="name" required>
                      
                        </div>   
                        @error('name')
                        <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                        @enderror               
                    </div>
                   
                    <div class="mb-3">
                    <label for="class_code"><b>Tiêu đề</b></label>
                        <div class="input-group">
                        <input value= "{{$user->tieude}}" type="text" class="form-control" id="class_code" placeholder="Tiêu đề" name="tieu_de" required>
                        </div>
                        @error('tieu_de')
                        <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="mb-3">
                    <label for="class_code"><b>Hình nền</b></label>
                        <div class="input-group">
                        <input  type="file" class="form-control" id="class_code" placeholder="Hình nền" name="hinh_nen" >
                        </div>
                        @error('hinh_nen')
                        <div class="alert alert-danger" style="color: red">{{ $message }}</div>
                        @enderror  
                    </div>
                    <div class="mb-3">
                    <label for="class_code"><b>Mã vào lớp</b></label>
                        <div class="input-group">
                        <input value=   "{{$user->mavaolop}}" type="text" class="form-control" id="class_code" placeholder="Mã vào lớp" name="ma_vao_lop" required>
                        </div>
                    </div>
                    <button class="btn btn-success btn-lg btn-block" type="submit">Cập nhật</button>                 
            </div>
        </form>
    </div> 
</body>
</html>