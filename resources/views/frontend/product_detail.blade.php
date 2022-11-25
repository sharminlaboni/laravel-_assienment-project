<x-masterfront>


    <section class="product_section layout_padding">
       <div class="container">

          <div class="row">
            <main>
                <div class="row m-5 px-5 bg-light">
                  <div class="col-lg-8 col-md-8 col-sm-8 text-center my-4">
                    <img style="height: 350px;" src="{{ asset('storage/products/'.$product->image) }}" >
                  </div>

                  <div class="col-lg-4 col-md-4 col-sm-4 text-left p-3">
                    <h2 class="text-black">{{$product->title}}</h2>
                    <p>  {{$product->description}}</p>
                          <h3>{{$product->price}}</h3>
                  </div>

                    <div class="mb-4 text-center">
                      <div class="input-group mb-3" style="max-width: 220px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-info js-btn-minus" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-info js-btn-plus" type="button">&plus;</button>
                        </div>
                      </div>

                    </div>
                    <p>
                      <a style="padding: 10px 100px;" href="{{route('cart.detail',$product->id)}}" class="btn btn-sm btn-info btn-outline-light border-info mt-3"><strong>ADD TO CART</strong></a>

                    <p>
                      <button class="btn btn-dark text-light px-5 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">SPECIFICATION</button>
                    </p>


                    </div>
                  </div>



                </div>
              </main>






          </div>

       </div>
    </section>
    <!-- end product section -->

    <!-- subscribe section -->

    <!-- end subscribe section -->
    <!-- client section -->

    </x-masterfront>
