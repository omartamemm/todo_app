<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: white;
            padding: 20px;
        }
        .task-list {
            margin-top: 20px;
        }
        .card {
            border: none;
            border-radius: 10px;
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">To-Do App</h1>
    <form class="mb-4">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Task Title" aria-label="Task Title" required>
        </div>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Task Content" aria-label="Task Content" required>
        </div>
        <button class="btn btn-primary btn-block" type="button">Add Task</button>
    </form>

    <div class="task-list">
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">Sample Task 1</h5>
                <p class="card-text">This is the content for task 1.</p>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">Sample Task 2</h5>
                <p class="card-text">This is the content for task 2.</p>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body">
                <h5 class="card-title">Sample Task 3</h5>
                <p class="card-text">This is the content for task 3.</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>