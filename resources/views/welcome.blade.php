
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task Management</title>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <br/>
        <div class="container">
            <form action="/addtask" method="post">
                {{csrf_field()}}
                <input type="text" class="form-control" name="task" id="task" placeholder="Add Your Task">
                <br/>
                <input type="submit" class="btn btn-primary" value="Add">
                <input type="button" class="btn btn-warning" value="Reset">
             </form>
             <br/>
             <table class="table table-dark">
                <th>ID</th>
                <th>Task</th>
                <th>Iscompleted</th>
                <th>Action</th>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            @if($task->iscompleted)
                                <td><button class="btn btn-success">Completed</button></td>
                            @else
                                <td><button class="btn btn-warning">Not Completed</button></td>
                            @endif
                            <td>
                                @if(!$task->iscompleted)
                                    <a class="btn btn-success" href="/completed{{$task->id}}">Mark as completed</a>
                                @else
                                    <a class="btn btn-warning" href="/notcompleted{{$task->id}}">Mark as not completed</a>
                                @endif
                                <a class="btn btn-primary" href="/updatetask{{$task->id}}">Update</a>
                                <a class="btn btn-danger" href="/deletetask{{$task->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
             </table>
        </div>
    </body>
</html>