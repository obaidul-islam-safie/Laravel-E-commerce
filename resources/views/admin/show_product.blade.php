<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>

        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        }

        .h2{

            font-size: 30px
        }
        
        .th_color{

            background-color: rgb(48, 107, 87);
        }

        .th_deg{
            padding: 20px;
        }
        .img_size{
            width: 150px;
            height: 100px;
        }


    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
       

        <div class="main-panel">
            <div class="content-wrapper">

                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif

                <h1 class="text-center h2 mt-3">All Product</h1>

                <table class="center">

                    <tr class="th_color">
                        <th class="th_deg">Product title</th>
                        <td class="th_deg">Description</td>
                        <td class="th_deg">Quantity</td>
                        <td class="th_deg">Catagory</td>
                        <td class="th_deg">Price</td>
                        <td class="th_deg">Discount Price</td>
                        <td class="th_deg">Product Image</td>
                        <td class="th_deg"> Edit </td>
                        <td class="th_deg">Delete</td>
                    </tr>

                    @foreach ($product as $product)

                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->catagory}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>

                            <td>
                                <img class="img_size" src="/product/{{$product->image}}"><img>
                            </td>

                            <td>
                                <a class="btb btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure to Delete This.')" href="{{url('delete_product',$product->id)}}">Delete</a>
                            </td>


                        </tr>

                    @endforeach

                </table>


            </div>
        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>