<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="{{ route('dashboard') }}">Go To Back</a><br>
    </div><br>
    <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($view_data as $key=>$row)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $row->name }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
                <td>{{ $row->address }}</td>
                
                <td>
                    {{-- <a href="#" class="btn btn-success sm" title="View Data"><i class="ri-eye-off-fill"></i></a> --}}
                    <a href="{{ route('edit.user',$row->id) }}" class="btn btn-info sm" title="Edit Data">Edit</i></a>
                    <a href="{{ route('delete.user',$row->id) }}" class="btn btn-danger sm" title="Delete Data">Delete</a>
                    
                </td>
            </tr>
            @endforeach
          
        </tbody>
      </table>
</body>
</html>