<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    {{-- Mention the Public Folder --}}
    <base href="/public">


    @include('admin.css')

    <style>

        .font-size{
            font-size: 30px;
        }

        label{
            display: inline-block;
            width: 200px;
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
            
                <div class="text-center mt-4 ">

                    <h1 class="font-size pb-5">Update Product</h1>

                    <form action="{{url('/update_product_confirm',$product->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf

                    <div class="pb-2">
                        <label for="">Product title</label>
                        <input class="bg-light text-dark" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
                     </div>

                     <div class="pb-2">
                        <label for="">Product Description</label>
                        <input class="bg-light text-dark" type="text" name="description" placeholder="Write a Description" required="" value="{{$product->description}}">
                     </div>

                     <div class="pb-2">
                        <label for="">Product price</label>
                        <input class="bg-light text-dark" type="number" name="price" placeholder="Write a Price" required="" value="{{$product->price}}">
                     </div>

                     <div class="pb-2">
                        <label for="">Discount Price</label>
                        <input class="bg-light text-dark" type="number" name="dis_price" placeholder="Write a discount" value="{{$product->discount_price}}">
                     </div>

                     <div class="pb-2">
                        <label for="">Product Quantity</label>
                        <input class="bg-light text-dark" type="number" name="quantity" placeholder="Write a Quantity" required="" value="{{$product->quantity}}">
                     </div>

                     <div class="pb-2">
                        <label for="">Product Catagory</label>
                        <select class="bg-light text-dark" name="catagory" id="" required="">
                            <option value="{{$product->catagory}}" selected="">{{$product->catagory}}</option>

                            @foreach ($catagory as $catagory)
                            <option value="{{$catagory->catagory_name}}">{{$catagory->catagory_name}}</option>
                            @endforeach

                        </select>
                     </div>

                     <div class="pb-2">
                        <label class="mb-2" for=""> Current Product Image</label>
                        <img style="margin:auto" height="100px" width="100px" src="/product/{{$product->image}}">
                     </div>





                     <div class="pb-2">
                        <label for=""> Change Product Image</label>
                        <input class="mt-2" type="file" name="image">
                     </div>

                     <div class="pb-2">
                        
                        <input type="submit" value="Update Product" class="btn btn-primary mt-3">
                     </div>

                    </form>


                </div>
            
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>