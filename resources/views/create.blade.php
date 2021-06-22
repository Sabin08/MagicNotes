<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>

<div class="container my-3">
        <h1>Update Your Note Here</h1>
        <div class="card">
            <form id="mForm" method="POST" action="{{route('name.update',[$noteArr->id])}}">
                @csrf
                <div class="card-body">
                    <h5 class="card-title">Your Note Title</h5>

                    <div class="form-group">
                        <textarea class="form-control" name="title" required>{!!$noteArr->title!!}</textarea>
                    </div>
                    <br>
                    <h5 class="card-title">Your note</h5>
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="note" required>{{$noteArr->note}}</textarea>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Update Note">
                </div>
                </form>
        </div>
        
        <hr>
       
    </div>
    
</body>
</html>