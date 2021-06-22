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

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">MagicNotes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul> -->
                    <!-- </li> -->
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input id="searchTxt" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container my-3">
        <h1>Welcome To Magic Notes</h1>
        <div class="card">
            <form id="mForm" method="POST" action="submit">
                @csrf
                <div class="card-body">
                    <h5 class="card-title">Add a note Title</h5>
                    <div class="form-group">
                        <textarea class="form-control" id="addTxt2" name="title" required></textarea>
                    </div>
                    <br>
                    <h5 class="card-title">Add a note</h5>
                    <div class="form-group">
                        <textarea class="form-control" id="addTxt" rows="3" name="note" required></textarea>
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" name="submit" value="Add Note">
                </div>
                </form>
        </div>
    
        
        
        
        <hr>
        <h1>Your Notes</h1>
        <hr>
        <div class="row container-fluid">
        @foreach($noteArr as $arr)
        <div class="noteCard my-2 mx-2 card" style="width: 18rem; background-color: yellow">
            <div class="card-body">
                <h5 class="card-title">{{$arr->title}}</h5>
                <i class="bi bi-trash"></i>
                <p class="card-text">{{$arr->note}}</p>
                <a href="delete/{{$arr->id}}" class="btn btn-outline-danger">Delete</a>
                <a href="create/{{$arr->id}}" class="btn btn-outline-success">Update</a>
            </div>
        </div>
        @endforeach
        </div>
    </div>
       
<span>
{{$noteArr->links()}}
</span>
<style>
.w-5{
    display: none;
}
</style>
<script>
 let search = document.getElementById('searchTxt');
    search.addEventListener('input',function(){
        let inputVal = search.value.toLowerCase();
        // console.log('Input fired', inputVal);
        let noteCards = document.getElementsByClassName('noteCard');
        Array.from(noteCards).forEach(function(element){
            let cardTxt = element.getElementsByTagName("p")[0].innerText;
            if(cardTxt.includes(inputVal)){
                element.style.display = "block";
            }
            else{
                element.style.display = "none";
            }
            console.log(cardTxt);
        })
    })
</script>
@include('sweetalert::alert')
</body>

</html>