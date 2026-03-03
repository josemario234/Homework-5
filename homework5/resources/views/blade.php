<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product View</title>
</head>
<body>
    <button>Add Product</button>
</body>
</html>

<?php
use Illuminate\Support\Facades\Route;
Route::get('/', function(){
    return view('index');
});

Route::get('/', function(){
    return view('create');
});

Route::get('/', function(){
    return view('edit');
});

