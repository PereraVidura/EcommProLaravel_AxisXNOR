<!DOCTYPE html>
<html>
  <head> 

    @include('admin.css')

    <style type="text/css">

        input[type='text']
        {
            width: 400px;
            height: 50px;
        }

        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
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
            <h2 class="h2 no-margin-bottom" style="color: white;"> Update Category </h2>
          </div>
        </div>

            <div class="div_deg">
            <form action="{{url('update_category',$data->id)}}" method="post">
                @csrf
                <div>
                    <input type="text" name="category" value="{{$data->category_name}}">
                
                    <input class="btn btn-primary" type="submit" value="Update Category">
                </div>
            </form>
            </div>
            
      </div>
    </div>
    
    @include('admin.footer')
    
  </body>
</html>