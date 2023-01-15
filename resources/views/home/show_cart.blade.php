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
   </head>

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

   <body>
      <div class="hero_area">
         <!-- header section strats -->
        @include('home.header');
         <!-- end header section -->
         <div>

            <table class="center my-4">
                <tr>
                    <th class="th_deg">Product title</th>
                    <th class="th_deg">Product Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Action</th>                   
                </tr>

                <?php $totalprice=0; ?>
                @foreach ($cart as $cart) 
                <tr>
                    <td>{{$cart->product_title}}</td>
                    <td>{{$cart->quantity}}</td>
                    <td>${{$cart->price}}</td>
                    <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                    <td><a class="btn btn-danger" onclick="return confirm('Are You Sure to Remove This?')" href="{{url('/remove_card',$cart->id)}}">Remove Product</a></td>
                </tr>
                <?php $totalprice=$totalprice + $cart->price ?>

                @endforeach
               
            </table>

            <div>
                <h1 class="total_deg">Total Price: ${{$totalprice}}</h1>
            </div>

            <div class="mb-5">
                <div class="center">
                    <h1 class="mb-5 text-font" style="font-size:30px;">Proceed to Order</h1>

                    <a href="{{url('cash_order')}}" class="btn btn-danger">Cash On Delivery</a>
                    <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay Using Card</a>
                </div>
            </div>

         </div>


      <!-- footer start -->
      @include('home.footer');
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
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