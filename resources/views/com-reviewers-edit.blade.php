<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Comreviewer Edit</title>
</head>
<body>

    <div class='container-fluid'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <h1 style='text-align: center'>Edit Reviewers</h1>
            <form action="/Demo/com-reviewers/edit/{{$reviewer->reviewer_id}}" method='POST'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="exampleInputEmail1">User_ID</label>
                    <input type="" name ="user_id" value = "{{$reviewer -> user_id}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input class="form-control" name="name" value = "{{$reviewer -> name}}" name= "content">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="" name ="status" value = "{{$reviewer -> status}}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Action</label>
                    <input type="" name ="action" value = "{{$reviewer -> action}}" class="form-control">
                </div>
                <div style='text-align: center'>
                    <button type="submit" class="btn btn-primary" style='text-align: center'>Submit</button>
                </div>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>

</body>
</html>