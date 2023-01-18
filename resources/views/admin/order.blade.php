<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .deg{
            font-size: 30px;
            font-weight: bold;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        .table_deg{
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
           
        }

        .image{
            width: 100px;
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

                <h1 class="text-center deg">All Order</h1>

                <table class="table_deg">

                    <tr style="background-color: rgb(85, 153, 212);">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product title</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Payment Status</th>
                        <th>Delivery Stutas</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print PDF</th>
                        

                    </tr>

                    @foreach($order as $order)
                    <tr>

                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td>

                            <img class="image" src="/product/{{$order->image}}" alt="">
                        </td>

                        <td>
                            @if($order->delivery_status=='processing')

                            <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-primary">Delivered</a>
                       
                            @else
                            <p style="color:green">Delivered</p>
                            @endif
                        </td>

                        <td>
                            <a href="{{url('print_pdf',$order->id)}}" class="btn btn-secondary">Print PDF</a>
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