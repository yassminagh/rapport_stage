<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order PDF</title>
</head>
<body>
    <h1>Order Details</h1>
    Customer Name :<h3>{{$order->name}}</h3>
    Product Name :<h3>{{$order->product_name}}</h3>
    Product Quantity :<h3>{{$order->quantity}}</h3>
    Product price :<h3>{{$order->selling_price}}</h3>
    Product Status :<h3>{{$order->atatus}}</h3>

    <br><br>

</body>
</html>