<x-masterdash>

    <div class="container">

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"  style="text-align:center;"> From</h1>
        <a class="btn btn-success" href="{{route('product.index')}} ">List </a>

       </div>


<form action="{{route('product.update')}} " method="POST">
    @method('put')

 @csrf



  <div class="form-group">
      <label for="product_item" >Product_item</label>
      <input name="product_item" type="text" class="form-control" id="product_item"  placeholder="Enter product_item">
    </div>
    <div class="form-group">
        <label for="customer_name" >customer_name</label>
        <input name="customer_name" type="text" class="form-control" id="customer_name"  placeholder="Enter product customer_name">
      </div>

      <div class="form-group">
        <label for="customer_address" >customer_address</label>
        <input name="customer_address" type="text" class="form-control" id="customer_address"  placeholder="Enter product customer_address">
      </div>

      <div class="form-group">
        <label for="price" >price</label>
        <input name="price" type="number" class="form-control" id="price"  placeholder="Enter product price">
      </div>


      <div class="form-group">
        <label for="quantity" >Quantity</label>
        <input name="quantity" type="number" class="form-control" id="quantity"  placeholder="Enter product quantity">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</x-masterdash>


