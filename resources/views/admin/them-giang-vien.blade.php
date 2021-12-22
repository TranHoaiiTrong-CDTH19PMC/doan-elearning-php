<h1>them giang vien</h1>
<form method="POST" action="{{route('post-form-them-giang-vien')}}" enctype="multipart/form-data">
    @csrf
    <button type="submit" class="btn btn-success" >add</button>

    {{-- <div class="row">
      <div class="col-4 text-end">
        <img src="{{asset('assets/images/bg2.jpg')}}" alt="" style="width: 100%;height:100%;opacity:0.7;border-radius:20px">
      </div>
      <div class="col-8 " style="padding-left: 60px">
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Mã số</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="code"  required class="input-add-teacher" readonly>
          </div>
        </div>
        <div class="row  mb-4">
          <div class="col-2 ">
            <p class="field-add-teacher">Tên đăng nhập</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="username" required class="input-add-teacher">
          </div>
          @error('username')
              <span class="err-message">{{$message}}</span>
          @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Mật khẩu</p>
            
          </div>
          <div class="col-10">
            <input type="password" name="password" required class="input-add-teacher">
          </div>
          @error('password')
          <span class="err-message">{{$message}}</span>
      @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Họ và tên</p>
            
          </div>
          <div class="col-10">
            <input type="text" name="name" required class="input-add-teacher">
          </div>
       
          @error('name')
       
          <span class="err-message">{{$message}}</span> 
        @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Email</p>
            
          </div>
          <div class="col-10">
            <input type="email" name="email" required class="input-add-teacher">
          </div>
          @error('email')
          <span class="err-message">{{$message}}</span>
         @enderror
        </div>
        <div class="row mb-4">
          <div class="col-2">
            <p class="field-add-teacher">Ảnh đại diện</p>
            
          </div>
          <div class="col-10">
           
          <input type="file" name="avatar" required style="margin-top: 15px">
          </div>
          @error('avatar')
          <span class="err-message">{{ $message}} </span>
         @enderror
        </div>
        <div class="row">
          <div class="col-6 text-center">
            <button type="submit" class="btn btn-add-teacher" >add</button>
          </div>
        </div>
      </div> --}}
  </form>