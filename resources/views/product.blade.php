<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1>PHP Product</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>id</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            @if (!@empty($users))
                @foreach ($users as $key => $item)
                    <tr>
                        <td>{{$key + 1}}</td>
                        <td>{{$item -> fullname}}</td>
                        <td>{{$item -> email}}</td>
                        <td>{{$item -> create_at}}</td>
                    </tr>
                @endforeach
             @else
                <tr>
                <td colspan="4">Không có người dùng</td>
            </tr> 
            @endif
           
        </tbody>
        
    </table>
</body>
</html>