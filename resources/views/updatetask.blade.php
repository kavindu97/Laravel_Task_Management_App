<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <br/>
    <div class="container">
        <form action="/renametask" method="post">
            {{csrf_field()}}
            <input type="text" class="form-control" name="task" id="task" placeholder="{{$tasks->task}}">
            <br/>
            <input type="numeric" class="form-control" name="id" id="id" value="{{$tasks->id}}" hidden>
            <input type="submit" class="btn btn-primary" value="Add">
            <input type="button" class="btn btn-warning" value="Reset">
        </form>
    </div>
</body>
</html>