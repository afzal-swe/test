<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User</title>
</head>
<body>
    <div class="container">
        <div>
            <a href="{{ route('dashboard') }}">Go To Back</a><br>
        </div><br>
        <form action="{{route('add.user')}}" method="POST">
            @csrf
           
              
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Name <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                      <input name="name" class="form-control" type="text" placeholder="Name" required>
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">E-mail <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                      <input name="email" class="form-control" type="email" placeholder="E-mail" required>
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Phone <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                      <input id="title" name="phone" class="form-control" type="text" placeholder="018XXXXXXXXX" required>
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Address <span class="text-danger">*</span></label>
                  <div class="col-sm-10">
                      <input id="title" name="address" class="form-control" type="text" placeholder="Address" required>
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                <input type="submit" value="Submit">

                

                
          
        </form>
    </div>
    
</body>
</html>