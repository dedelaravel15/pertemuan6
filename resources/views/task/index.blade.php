<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Task managermen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center">Task Managerment</h1>
    <hr>
    <table class="table mt-5 text-center">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Dedline</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach ($tasks as $task)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$task['name']}}</td>
                <td>{{$task['deadline']}}</td>
                <td>{{$task['status']}}</td>
                <td>
                    <a href="task/{{$task['id']}}" class="btn btn-primary">View</a>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="#" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
