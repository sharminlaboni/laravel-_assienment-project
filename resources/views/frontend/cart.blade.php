<x-masterfront>


    <section class="product_section layout_padding">
       <div class="container">

          <div class="row">
            <main>
                <div class="row m-5 px-5 bg-light">
                <div class="col-8">

                <table class="table table-striped table-hover" style="width: 1000px; margin-left: 180px;">
                  <thead class="text-center">
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Product</th>
                      <th scope="col">Price</th>
                      <th scope="col">Total</th>
                      <th scope="col">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="{{ url('/frontend/image/product_01.png') }}" style="height: 150px; width: 150px;"></td>
                      <td style="padding-top: 80px;">Bioderma</td>
                      <td style="padding-top: 80px;">৳750</td>
                      <td style="padding: 70px 0 70px 50px;">
                        <div class="mb-4 text-center">
                          <div class="input-group" style="max-width: 150px;">
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-info js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                              <button class="btn btn-outline-info js-btn-plus" type="button">&plus;</button>
                            </div>
                          </div>

                        </div>
                      </td>
                      <td style="padding-top: 80px;">৳750</td>
                      <td style="padding-top: 55px;">
                        <button type="button" class="btn" style="font-size: 45px;"><i class="fa-solid fa-trash-can text-danger"></i></button>
                      </td>
                    </tr>


                  </tbody>
                </table>
            </div>

                <div class="row my-4 mx-1">
                  <div class="col-6" style="padding-left: 125px;">
                    <p><a href="{{ url('/home') }}" class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info mx-5 my-2">UPDATE CART</a>
                      <a href="{{ url('/home') }}" class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info my-2">CONTINUE SHOPPING</a>
                    </p>
                    <div style="padding-left: 45px;">
                      <h3>Coupon</h3>
                      <p>Enter your coupon code if you have one.</p>
                    </div>
                    <form class="form-inline">
                      <div class="form-group mx-sm-3 mb-2" style="padding-left: 25px;">
                        <label for="number"></label>
                        <input type="number" class="number" id="number" placeholder="Coupon code" style="padding: 6px; margin-top: 2px;">
                        <button type="submit" class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info ml-5">APPLY COUPON</button>
                      </div>
                    </form>
                  </div>

                  <div class="col-5">
                    <table class="table table-dark text-center mt-2">
                      <thead>
                        <tr>
                          <th></th>
                          <th>CART TOTALS</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Subtotal</td>
                          <td class="text-center">৳1750</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td class="text-center">৳1750</td>
                        </tr>
                      </tbody>

                    </table>


                    <div class="text-center">
                      <a href="{{ url('/checkout') }}" class="btn btn-sm px-5 py-2 btn-info btn-outline-light border-info my-3">PROCEED TO CHECKOUT</a>
                    </div>
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
