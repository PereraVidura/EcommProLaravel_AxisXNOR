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
            border: 2px solid skyblue;
            text-align: center;
        }

        th
        {
            background-color: skyblue;
            padding: 5px;
            font-size: 18px;
            font-weight: bold;
            color: black;
            
        }

        td
        {
            color: white;
            padding: 5px;
            border: 1px solid skyblue;
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
            <h2 class="h2 no-margin-bottom" style="color: white;"> View All Orders </h2>
          </div>
        </div>

            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th> Customer Name </th>
                        <th> Address </th>
                        <th> Phone </th>
                        <th> Product Title </th>
                        <th> Price </th>
                        <th> Image </th>
                        <th> Payment Status </th>
                        <th> Status </th>
                        <th> Change Status </th>
                        <th> Print PDF </th>
                    </tr>

                    @foreach($data as $data)

                    <tr>
                        <td> {{$data->name}} </td>
                        <td> {{$data->rec_address}} </td>
                        <td> {{$data->phone}} </td>
                        <td> {{$data->product->title}} </td>     
                        <td> {{$data->product->price}} </td>
                        <td>
                            <img height="100" width="150" src="products/{{$data->product->image}}">
                        </td>
                        <td> {{$data->payment_status}} </td>
                        <td>
                            @if($data->status == 'in progress')

                            <span style="color:red"> {{$data->status}} </span>

                            @elseif($data->status == 'On the way')

                            <span style="color:blue"> {{$data->status}} </span>

                            @else

                            <span style="color:yellow"> {{$data->status}} </span>

                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" href="{{url('on_the_way',$data->id)}}"> On the way </a>
                            <a class="btn btn-success" href="{{url('delivered',$data->id)}}"> Delivered </a>
                        </td>
                        <td> <a class="btn btn-secondary" href="{{url('print_pdf',$data->id)}}"> Print PDF </a> </td>
                    </tr>

                    @endforeach

                </table>
            </div>
            <br> <br> <br> <br>

      </div>
    </div>
    
    @include('admin.footer')
    
  </body>
</html>