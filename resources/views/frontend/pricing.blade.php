@include('frontend.header')

      <section class="pricing pricing-1" id="pricing-1">
         <div class="container">
            <div class="row">
               <div class="col-12 col-lg- offset-lg-">
                  <div class="heading heading-8 text-center">
                     <p class="heading-subtitle">Our Pricing And Plans </p>
                     <h2 class="heading-title"> Pricing That Adapts Your Needs</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="">
                  <div class="pricing-table">
                     <div class="">
                        <div class="pricing-body">
                           <div class="pricing-heading">

</div>

                           <div class="table-responsive">
                    <table id="table_id" class="table table-striped table-bordered">
                <thead>
                                     <tr>
                                       <th scope="col">#</th>
                                       <th scope="col">ITEM</th>
                                       <th scope="col">PRICE(NGN)</th>
                                       <th scope="col">EXPRESS LAUNDRY(NGN)</th>
                                    </tr>
                </thead>


                <tbody>
                     
                @foreach($data as $item)
                   
                    <tr >
                    <th scope="row">◦</th>
                    <td>{{$item->item}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->express_laundry}}</td>
                    </tr>
                @endforeach



                </tbody>

            </table>
                    </div>




                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-12 col-lg-6 offset-lg-3">
                     <div class="processes-note">
                        <div class="note-bg"><i class="fimanager flaticon-008-hand"></i></div>
                        <p>A specialized team of qualified specialists is required for a laundry
                          that meets your highest requirements. <a href="{{url('contact-us')}}">Contact Us For More Information<i class="icon-arrow-right"></i></a>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
      </section>


@extends('frontend.footer')
