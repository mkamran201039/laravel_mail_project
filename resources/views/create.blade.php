<!-- resources/views/create.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Product</title>
</head>
<body>
    <h1>Create New Product</h1>
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" step="0.01"><br><br>
        
        <label for="location">Location:</label><br>
        <input type="text" id="location" name="location"><br><br>
        
        <button type="submit">Create Product</button>
    </form>
</body>
</html>
