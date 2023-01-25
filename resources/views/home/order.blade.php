<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Home Page</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awhome/esome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom home/styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responshome/ive style --> 
      <link href="home/css/responsive.css" rel="stylesheet" />

      <style>

        .center{
            margin: auto;
            width: 50%;
            text-align: center;
            padding: 30px;

        }
        table,th,td{
            border: 1px solid gray;
        }
        .th_deg{
            font-size: 20px;
            padding: 5px;
            background: skyblue;
        }

        .img_deg{
            height: 150px;
            width: 150px;

        }

        .total_deg{
            font-size: 20px;
            padding: 40px;
            text-align: center;
        }


   </style>

   </head>
   <body>
      
         <!-- header section strats -->
        @include('home.header');
         
        <div>
            <table class="center my-4">
                <tr>
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th> 
                    <th class="th_deg">Image</th>   
                    <th class="th_deg">Cancel Order</th>                  
                </tr>

                
                @foreach ($order as $order) 
                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td><img class="img_deg" src="/product/{{$order->image}}"></td>

                    <td>
                    @if($order->delivery_status=='processing')

                        <a class="btn btn-danger" onclick="return confirm('Are You Sure to Cancel This Order?')" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>
                                   
                    @else
                    <p>Not Allowed</p>

                    @endif
                </td>

                </tr>
                

                @endforeach
               
            </table>
        </div>


      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>