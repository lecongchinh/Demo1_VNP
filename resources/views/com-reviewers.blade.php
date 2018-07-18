<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="{{url('plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{url('plugins/bootstrap/js/bootstrap.min.js')}}"></script> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Com Reviewers</title>
</head>
<body>

    <div class='container'>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Reviewer_id</th>
                    <th scope="col">User_ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Name_ID</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                    <th scope="col">Create_At</th>
                    <th scope="col">Update_At</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reviewers as $reviewer)
                    <tr>
                        <th scope="row">{{$reviewer->reviewer_id}}</th>
                        <td>{{$reviewer->user_id}}</td>
                        <td>{{$reviewer->name}}</td>
                        <td>{{$reviewer->name_id}}</td>
                        <td>{{$reviewer->status}}</td>
                        <td>{{$reviewer->action}}</td>
                        <td>{{$reviewer->created_at}}</td>
                        <td>{{$reviewer->updated_at}}</td>
                        <td><a href='/Demo/com-reviewers/edit/{{$reviewer -> reviewer_id}}'>Edit</a></td>
                        <td><a href='/Demo/com-reviewers/delete/{{$reviewer -> reviewer_id}}'>Delete</a></td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
        {{ $reviewers->links() }}
    </div>
    

</body>
</html>