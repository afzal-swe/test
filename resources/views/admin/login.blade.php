<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin login</title>
</head>
<body>
   
       
            <div class="container">
                
                <form action="{{ route('admin.login') }}" method="POST">
                    @csrf
                   
                      
                        {{-- Product Name Section Start --}}
                        <div class="row">
                          <label for="example-text-input" class="col-sm-2 col-form-label">E-mail <span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                              <input name="email" type="email">
                              
                             
                          </div>
                        </div><br>
                        {{-- Product Name Section End --}}
        
                        
                        {{-- Product Name Section Start --}}
                        <div class="row">
                          <label for="example-text-input" class="col-sm-2 col-form-label">Password <span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                              <input name="password" type="password">
                              
                              
                          </div>
                        </div><br>
                        {{-- Product Name Section End --}}
        
                        
                       
        
                        <input type="submit" value="Login">
                </form>
            </div>
</body>
</html>