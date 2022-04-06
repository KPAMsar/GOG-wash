<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="csrf-token" content="{{ csrf_token() }}">

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/js/my.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
      var incrementItemID_Z9 = (e, id) => {
          id = 'qty-id-' + id;
        //   console.log(id);
    e.preventDefault();
             var inc_value = $('#' + id).val();
            // var inc_value = $(this).closest('laundry_data').find('#' + id).val();
            var value = parseInt(inc_value);
            value = isNaN(value) ? 0:value;

            // if(value < 10){
                value++;
                 $('#' + id).val(value);
                // $(this).closest('laundry_data').find('#' + id).val();
            // }
    }

    var decrementItemID_Z9 = (e, id) => {
        id = 'qty-id-' + id;
        // console.log(id);
    e.preventDefault();
             var inc_value = $('#' + id).val();
            // var inc_value = $(this).closest('laundry_data').find('#' + id).val();
            var value = parseInt(inc_value);
            value = isNaN(value) ? 0:value;

             if(value > 0){
                value--;
                 $('#' + id).val(value);
                // $(this).closest('laundry_data').find('#' + id).val();
            }
    }

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


<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

<title>@yield('title')</title>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<!-- favicon -->
<link href="assets/images/favicon/favicon.png" rel="icon" />

<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


<!-- Custom fonts for this template-->
<link href="{{ url('assets/sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->

<link src="{{ asset('assets/sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

<link rel="stylesheet" src="{{ asset('css/app.css') }}">







<!-- Custom fonts for this template-->
<link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">











<!-- Bootstrap link -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- end of Bootstrap css -->

<!-- Bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- Jquery -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous">
</script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css">
@stack('css')












<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title>@yield('title')</title>

<!-- Custom fonts for this template-->
<link href="{{ asset('sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="{{ asset('sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

@stack('css')
