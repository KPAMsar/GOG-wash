@extends('frontend.account.layouts.tables')

@section('title', '')

@section('content')
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible">
            {{ session('success') }}
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif
    @if (session()->has('fail'))
        <div class="alert alert-danger alert-dismissible">
            {{ session('fail') }}
            <button class="close" data-dismiss="alert">&times;</button>
        </div>
    @endif

    <div>
            <h5 class="dashboard-wel text-center" >Add items to Laundry List</h5>
    </div>

        <div class="container">
        <div class="row">
        <div class=" col-sm-12 ">
        <div class="card border-left-prima shadow h-100 py-2 cab-1">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold dashboard-danger text-uppercase mb-1">
                            <div class="row">
                            <div>

                    <div class=" py-2 d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="dashboard-wel text-center" ></h5>
                    </div>
                        <!-- <a href="{{ route('admin.admin_staff_show') }}" class="btn btn-sm btn-primary">Add</a> -->
                    </div>
                    </div>

                    <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered">
                <thead>
                      <tr>
                        <th>#</th>
                        <th>Laundry Items</th>
                        <th>Price</th>
                        <th>Quatity</th>
                        <th>Action</th>

                    </tr>
                </thead>


                <tbody>
                                    <!-- @php $total= 0; @endphp -->
                                        @foreach($data as $key => $item)
                                        <form id="quantity" class="laundry_items" action="{{url('add-to-cart/'.$item->id)}}" method="post">
                                            @csrf
                                            <tr>
                                            <th scope="row">
                                                <li><span class="fa-li"><i class="fa-solid fa-check-square"></i></span></li>
                                            </th>

                                            <td class="item_id" name="item_id">{{$item->item}}</td>
                                            <input type="hidden" value="{{$item->item}}" name="item_id">
                                            <td>{{$item->price}}</td>
                                            <td>

                                            <div class="input-group text-center mb-3" style="width:130px;">
                                                <button type="button" onclick="decrementItemID_Z9(event,  {{ $key }})"  class="input-group-text decrement-btn">-</button>


                                            <input id="{{ 'qty-id-'.$key }}" type="text" name="item_quantity " class="form-control  qty-input text-center  item_qty" value="1" style="width: 55px;">


                                                <button type="button" onclick="incrementItemID_Z9(event,  {{ $key }})" class="input-group-text increment-btn">+</button>
                                            </div>
                                            </td>


                                            <td>
                                                <button type="submit"  class="btn addToCartBtn" style="background-color:#063464; color:white;">Wash</button></a></td>
                                            </tr>
                                            </form>
                                            <!-- @php $total +=$item->price * -->
                                        @endforeach

                                    </tbody>
                            </table>

                                <a href="{{route('client.laundry-cart')}}"><button type="button" class="btn" style="background-color:#063464; color:white;" >Proceed</button></a>

                    </div>




        <script>
                $(document).ready(function() {

                $("#table_id").dataTable();





                } );
                $(document).ready(function() {

                      var addToCartBtn_1 = (e) => {
        e.preventDefault();
        var item_id =$('.item_id').text();
        var item_quantity =$('.item_qty').val();
        return

         $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
         });
        $.ajax({
            type: "post",
            url: "/add-to-cart/{id}",
            data: {
               item_quantity:item_quantity,
            },
            success: function (response) {
                alert(response.status);
            }
        });




                } );





        alert(item_quantity );
    //     $.ajax({
    //         url: "/add-to-cart/{id}",
    //         type: 'POST',
    //         data: {

    //      item_qty:item_quantity,
    //  },
    //         beforeSend: function (request) {
    //             return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
    //         },
    //         success: data => {
    //             console.log(data);
    //         }
    //     });
    }
        </script>

    </div>
        </div>



  </div>
</div>
</div>
            </div>





<br><br><br><br>


@endsection
@section('cartitems--handler')
<script src="js/cartitems--handler.js">

var addToCartBtn_1 = (e) => {
        e.preventDefault();
        var item_id =$('.item_id').text();
        var item_quantity =$('.item_qty').val();
        return

         $.ajaxSetup({
         headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
         });
        $.ajax({
            type: "post",
            url: "/add-to-cart/{id}",
            data: {
               item_quantity:item_quantity,
            },
            success: function (response) {
                alert(response.status);
            }
        });

        alert(item_quantity );
    //     $.ajax({
    //         url: "/add-to-cart/{id}",
    //         type: 'POST',
    //         data: {

    //      item_qty:item_quantity,
    //  },
    //         beforeSend: function (request) {
    //             return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
    //         },
    //         success: data => {
    //             console.log(data);
    //         }
    //     });
    }
</script>
@endsection
