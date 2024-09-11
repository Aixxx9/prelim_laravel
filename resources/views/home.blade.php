
<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #f8f9fa;">
    <div class="container mt-4">
        <h1>Home Page</h1>
        <nav>
            <a href="{{ route('item') }}" class="btn btn-primary">Items Page</a>
            <a href="{{ route('picture') }}" class="btn btn-secondary">Pictures Page</a>
        </nav>
    </div>
</body>
</html>
