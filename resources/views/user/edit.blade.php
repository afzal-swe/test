<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit User</title>
</head>
<body>
    <div class="container">
        <div>
            <a href="{{ route('dashboard') }}">Go To Back</a><br>
        </div><br>
        <form action="{{ route('update.user',$edit->id) }}" method="POST">
            @csrf
           
              
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                      <input name="name" class="form-control" type="text" value="{{$edit->name}}">
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">E-mail</label>
                  <div class="col-sm-10">
                      <input name="email" class="form-control" type="email" value="{{$edit->email}}">
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Phone</label>
                  <div class="col-sm-10">
                      <input id="title" name="phone" class="form-control" type="text" value="{{$edit->phone}}">
                      
                      @error('title')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                  </div>
                </div><br>
                {{-- Product Name Section End --}}

                
                {{-- Product Name Section Start --}}
                <div class="row">
                  <label for="example-text-input" class="col-sm-2 col-form-label">Address</label>
                  <div class="col-sm-10">
                      <input id="title" name="address" class="form-control" type="text" value="{{$edit->address}}">
                      
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