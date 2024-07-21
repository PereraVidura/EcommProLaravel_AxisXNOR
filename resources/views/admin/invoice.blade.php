<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Invoice </title>

    <style>

        body 
        {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .invoice-container
        {
            background-color: #fff;
            padding: 20px;
            margin: 30px auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h3 
        {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }

        h2 
        {
            margin: 15px 0;
            font-size: 22px;
            color: #444;
        }

        img 
        {
            margin-top: 20px;
            border-radius: 8px;
            height: 250px;
            width: 300px;
        }

        .customer-info 
        {
            margin-bottom: 20px;
            border-bottom: 1px solid #ddd;
            padding-bottom: 20px;
        }

        .product-info 
        {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .price
        {
            color: #28a745;
        }

    </style>

</head>
<body>

<div class="invoice-container">
    <div class="customer-info">
        <h3>Customer Name: {{$data->name}}</h3>
        <h3>Customer Address: {{$data->rec_address}}</h3>
        <h3>Phone: {{$data->phone}}</h3>
    </div>

    <div class="product-info">
        <h2>Product Title: {{$data->product->title}}</h2>
        <h2 class="price">Price: ${{$data->product->price}}</h2>
        <img src="products/{{$data->product->image}}" alt="Product Image">
    </div>
</div>

</body>
</html>
