<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') - Blog Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            color: #333;
        }

        .nav {
            background-color: #333;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
        }

        .nav a {
            color: white;
            text-decoration: none;
            padding: 10px;
        }

        .nav a:hover {
            background-color: #555;
        }

        .content {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        form {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .blog-item {
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        .blog-item h2 {
            margin: 0;
            color: #333;
        }

        .blog-item p {
            margin: 10px 0 0;
            color: #555;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="left-links">
            <a href="{{ url('/') }}">Home</a>
            <a href="{{ url('/posts/create') }}">Create Post</a>
            <a href="{{ url('/posts') }}">My Posts</a>
        </div>
        <div class="right-links">
            <a href="{{ url('/logout') }}">Logout</a>
        </div>
    </div>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
