<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
</head>
<body>
    <h1>Products List</h1>
    <ul id="product-list">
        <!-- Data will be dynamically populated here -->
    </ul>

    <script>
        // Fetch data from API endpoint
        fetch('/api/products')
            .then(response => response.json())
            .then(data => {
                // Loop through the data and populate the list
                data.forEach(product => {
                    const listItem = document.createElement('li');
                    listItem.textContent = `${product.id}: ${product.name} - ${product.price} - ${product.location}`;
                    document.getElementById('product-list').appendChild(listItem);
                });
            })
            .catch(error => console.error('Error fetching products:', error));
    </script>
</body>
</html>
