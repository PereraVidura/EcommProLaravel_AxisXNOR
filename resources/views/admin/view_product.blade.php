<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')

    <style type="text/css">

        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px; 
        }

        .table_deg
        {
            border: 2px solid yellowgreen;
            width: 900px;
        }

        th
        {
            background-color: skyblue;
            padding: 15px;
            font-size: 20px;
            font-weight: bold;
            color: black;
            text-align: center;
        }

        td
        {
            color: white;
            padding: 10px;
            border: 1px solid skyblue;
        }

        input[type='search']
        {
            width: 350px;
            height: 40px;
            margin-left: 600px;
        }

    </style>

  </head>
  <body>

    @include('admin.header')

    @include('admin.sidebar')

      <!-- Sidebar Navigation end-->
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h2 no-margin-bottom" style="color: white;"> View All Products </h2>
          </div>

          <form action="{{url('product_search')}}" method="get">
            @csrf
            <input type="search" name="search">
            <input type="submit" class="btn btn-secondary" value="Search">
          </form>

        </div>

            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th> Product Title </th>
                        <th> Description </th>
                        <th> Category </th>
                        <th> Price </th>
                        <th> Quantity </th>
                        <th> Image </th>
                        <th> Edit </th>
                        <th> Delete </th>
                    </tr>

                    @foreach($product as $products)

                    <tr>
                        <td> {{$products->title}} </td>
                        <td> {!!Str::limit($products->description,50)!!} </td>
                        <td> {{$products->category}} </td>
                        <td> {{$products->price}} </td>
                        <td> {{$products->quantity}} </td>
                        <td>
                            <img height="100" width="150" src="products/{{$products->image}}">
                        </td>
                        <td> <a class="btn btn-success" href="{{url('edit_product',$products->slug)}}"> Edit </a> </td>
                        <td> <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}"> Delete </a> </td>
                    </tr>

                    @endforeach

                </table>
            </div>
            <br> <br> <br>

            <div class="div_deg">

              {{$product->links()}}

            </div>
            <br> <br>
            
      </div>
    </div>
    
    @include('admin.footer')
    
  </body>
</html>