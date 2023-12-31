<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUps Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-6">
    <div>
        <div>
            <?php
            session_start();
            if(isset($_SESSION['msg'])){
                echo "<div class='text-center bg-red-500 text-white p-4 rounded'>".$_SESSION['msg']."</div>";
                session_unset(i);
            }
            ?>
        </div>
    </div>
    <div class="max-w-md mx-auto mt-6 bg-white p-6 rounded-lg shadow-md">
        <form action="submit.php" method="post" class="space-y-4">
            <input type="text" placeholder="Product Name" name="ProductName" class="w-full border rounded-lg px-3 py-2">
            <input type="text" placeholder="Description" name="Description" class="w-full border rounded-lg px-3 py-2">
            <input type="text" placeholder="Category" name "Category" class="w-full border rounded-lg px-3 py-2">
            <input type="number" placeholder="Price" name="Price" class="w-full border rounded-lg px-3 py-2">
            <input type="number" placeholder="Stock Quantity" name="StockQuantity" class="w-full border rounded-lg px-3 py-2">
            <input type="text" placeholder="Manufacturer" name="Manufacturer" class="w-full border rounded-lg px-3 py-2">
            <input type="text" placeholder="Supplier" name="Supplier" class="w-full border rounded-lg px-3 py-2">
            <input type="text" placeholder="Barcode" name="Barcode" class="w-full border rounded-lg px-3 py-2">
            <input type="date" placeholder="Release Date" name="ReleaseDate" class="w-full border rounded-lg px-3 py-2">
            <button type="submit" value="submit" name="submit" class="w-full bg-blue-500 text-white font-semibold rounded-lg px-4 py-2">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
