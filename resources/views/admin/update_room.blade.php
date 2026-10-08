<!DOCTYPE html>
<html>
  <head> 

    <base href="/public">


    @include('admin/css')

    <style type="text/css">

    label
    {
        display:inline-block;
        width:200px;
    }
    .div_deg
    {
        padding-top: 30px;
    }
    .div_center
    {
        text-align: center;
        padding-top: 40px;
    }

    </style>
  </head>
  <body>
    @include('admin/header')


    @include('admin/sidebar')

      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">


            <div class="div_center">

                <h1 style="font-size: 30px; font-weight:bold;">Update Room</h1>

                <form action="{{url('edit_room',$room->id)}}" method="Post" enctype="multipart/form-data">

                    @csrf

                    <div class="div_deg">
                        <label>Room title</label>
                        <input type="text" name="title" value="{{$room->room_title}}">

                    </div>

                     <div class="div_deg">
                        <label>Description</label>
                        <textarea name="description">{{$room->description}}
                        </textarea>
                    </div>

                     <div class="div_deg">
                        <label>Price</label>
                        <input type="number" name="price" value="{{$room->price}}">
                    </div>

                     <div class="div_deg">
                        <label>Room Type</label>
                        <select name="type">

                            <option selected value="{{$room->room_type}}">{{$room->room_type}}</option>

                            <option value="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select>

                    </div>

                    <div class="div_deg">
                        <label>Free Wifi</label>
                        <select name="wifi">

                            <option selected value="{{$room->wifi}}">{{$room->wifi}}</option>

                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                     <div class="div_deg">
                        <label>Current Image</label>
                        <img style="margin:auto;" width="100" src="/room/{{$room->image}}" alt="">
                    </div>


                    <div class="div_deg" style="padding-inline-start: 40%">
                        <label>Upload Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="div_deg">
                        <input class="btn btn-primary" type="submit" value="Update Room">

                    </div>

                </form>




            </div>

     </div>   
       </div>   
          </div>   
    


        @include('admin/footer')
        
  </body>
</html>