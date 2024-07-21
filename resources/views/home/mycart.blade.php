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

        .cart_value
        {
            text-align: center;
            padding: 18px;
        }

        .order_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        label
        {
            display: inline-block;
            width: 150px;
        }

        .div_gap
        {
            padding-bottom: 20px;
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
            <th> Image </th>
            <th> Remove </th>
        </tr>

        <?php

        $value = 0;

        ?>

        @foreach($cart as $cart)

        <tr>
            <td> {{$cart->product->title}} </td>
            <td> {{$cart->product->price}} </td>
            <td>
                <img height="100" width="150" src="/products/{{$cart->product->image}}">
            </td>
            <td> 
                <a class="btn btn-danger" href="{{url('delete_cart',$cart->id)}}"> Remove </a> 
            </td>
        </tr>

        <?php

        $value= $value + $cart->product->price;

        ?>

        @endforeach

    </table>

  </div>

  <div class="cart_value">
    <h4> Total Value of Cart is : ${{$value}} </h4>
  </div>

  <br> <br> <br>

  <div class="order_deg">
    <form action="{{url('comfirm_order')}}" method="post">
        @csrf

        <div class="div_gap">
            <label> Receiver Name </label>
            <input type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="div_gap">
            <label> Receiver Address </label>
            <textarea name="address"> {{Auth::user()->address}} </textarea>
        </div>
        <div class="div_gap">
            <label> Receiver Phone </label>
            <input type="text" name="phone" value="{{Auth::user()->phone}}">
        </div> <br>
        <div class="div_gap">
            <input class="btn btn-primary" type="submit" value="Cash On Delivery">
            <a class="btn btn-success" href="{{url('stripe',$value)}}"> Pay Using Card </a>
        </div>
        
    </form>
  </div>

  <br> <br> <br>
  
  <!-- info section -->

    @include('home.footer')

</body>

</html>