<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        .card {
            width: 50%;
            margin: 30px auto;
            text-align: center;
            color: black;
            background: white;
            border: 2px solid;
            border-radius: 20px;
        }

        .form-group {
            width: 50%;
            margin: 30px auto;
            border-radius: 5px;
            padding: 10px;
            background: #fff8dc;
            border: 1px solid;
        }
        /* .task_input {
            width: 75%;
            height: 15px;
            padding: 10px;
            border: 2px solid;
        }
        .submit_btn {
            width: 20%;
            height: 39px;
            padding: 10px;
            border: 2px solid;
        }
        tr {
            border-bottom: 1px solid;
        }

        th {
            font-size: 19px;
            color: #6B8E23;
        }

        th , td {
            border: none;
            height: 30px;
            padding: 2px;
            margin: 30px auto;
            text-align: center;
        } */

        /* table {
            width: 50%;
            margin: 30px auto;
            border: black;
        } */ */


    </style>
</head>
<body>
    <div class="card">
        <h2>Todo List App</h2>
    </div>

    <form action="/index" method="POST" >
        @csrf
        <div class="form-group">
            <input type="text" name="task" class="task_input" style="width: 85%; height: 30px;" required>
            <button type="submit" name="submit" class="submit_btn">Add Task</button>
        </div>
    </form>



    <div style="width: 50%; margin: 30px auto;">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task )
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                        <form action="{{ url('index/'.$task->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
