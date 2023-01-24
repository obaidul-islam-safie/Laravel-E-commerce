<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        label{
            display: inline-block;
            width: 150px;
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

                <h1 style="text-align: center; font-size: 25px;">Send Email to: {{$order->email}}</h1>

                <form action="{{url('/send_user_email',$order->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf

                <div style="padding-left: 35%; padding-top:30px">
                <div class="pb-2">
                    <label for="">Email Greeting</label>
                    <input class="bg-light text-dark mt-1" type="text" name="greeting">
                 </div>

                 <div class="pb-2">
                    <label for="">Email First Line</label>
                    <input class="bg-light text-dark mt-1" type="text" name="firstline">
                 </div>

                 <div class="pb-2">
                    <label for="">Email Body</label>
                    <input class="bg-light text-dark mt-1" type="text" name="body">
                 </div>

                 <div class="pb-2">
                    <label for="">Email Button Name</label>
                    <input class="bg-light text-dark mt-1" type="text" name="button">
                 </div>

                 <div class="pb-2">
                    <label for="">Email url</label>
                    <input class="bg-light text-dark mt-1" type="text" name="url">
                 </div>

                 <div class="pb-2">
                    <label for="">Email Last Line</label>
                    <input class="bg-light text-dark mt-1" type="text" name="lastline">
                 </div>

                 <div class="pb-2">
                    
                    <input class="btn btn-primary mt-3" type="submit" value="Send Email">
                 </div>

                </div>

                 

                </form>


             </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>