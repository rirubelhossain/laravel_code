<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">



</head>
<body>

<h1>there is no post yet</h1>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add New Post
                    </div>
                    <div class="card-body">
                        @if(Session::has('post_created'))
                            <div class = "alert alert-success" role = "alert">
                                {{Session::get('post_created')}}
                            </div>
                        @endif
                        <form action = "{{route('post.addsubmit')}}" method = "POST">
                                @csrf
                                <div class="form-group">
                                    <lable  for = "title ">Post Title</lable>
                                    <input type = "text" name = "title" class = "form-control" placeholder ="Enter Post Title ">
                                </div>
                                <div class="form-group">
                                    <lable for = "body">Post Description</lable>
                                    <textarea class = "form-control" name = "body" rows = "3"></textarea>
                                </div>
                                <input type = "submit" class = "btn btn-success" value = "Submit" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>