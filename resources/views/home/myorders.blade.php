<!DOCTYPE html>
<html>

<head>

    @include('home.css')

    <style type="text/css">

        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table
        {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th
        {
            border: 2px solid black;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
            padding: 10px;
        }

        td
        {
            border: 1px solid skyblue;
            padding: 10px;
        }

    </style>

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->

        @include('home.header')
        
    <!-- end header section -->
  </div>
  
  <div class="div_deg">

    <table>
        <tr>
            <th> Product Title </th>
            <th> Price </th>
            <th> Delivery Status </th>
            <th> Image </th>
        </tr>

        @foreach($order as $order)

        <tr>
            <td> {{$order->product->title}} </td>
            <td> {{$order->product->price}} </td>
            <td> {{$order->status}} </td>
            <td>
                <img height="100" width="150" src="/products/{{$order->product->image}}">
            </td>
        </tr>

        @endforeach

    </table>
  </div>

  <br> <br> <br>
  
  <!-- info section -->

    @include('home.footer')

</body>

</html>