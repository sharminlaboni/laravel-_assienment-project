<x-masterDashboard>
  <div class="container">
    <div class="col-md-12 fw-bold fs-3">Order List</div>
    <!-- Modal -->
    <div
      class="modal fade"
      id="staticBackdrop"
      data-bs-backdrop="static"
      data-bs-keyboard="false"
      tabindex="-1"
      aria-labelledby="staticBackdropLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">New Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="">
              <div class="mb-3">
                <label for="product_name" class="form-label">Name</label>
                <input type="text" class="form-control" id="product_name" aria-describedby="textHelp" />
              </div>
              <div class="mb-3">
                <label for="product_name" class="form-label">Company</label>
                <input type="text" class="form-control" id="product_name" aria-describedby="textHelp" />
              </div>
              <div class="mb-3">
                <label for="product_name" class="form-label">Unit Price</label>
                <input type="text" class="form-control" id="product_name" aria-describedby="textHelp" />
              </div>
              <div class="mb-3">
                <label for="product_name" class="form-label">Total Stock</label>
                <input type="text" class="form-control" id="product_name" aria-describedby="textHelp" />
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="fa-solid fa-trash"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal Ends -->
    <table class="table table-hover table-bordered">
      <tr>
        <th>Order ID</th>
        <th>Customer_name</th>
        <th>Address</th>
        <th>product_name</th>
        <th>Unit Price</th>
        <th>Total price</th>
        <th>Options</th>
      </tr>
      <tr>
        <td>0</td>
        <td>md. sojib</td>
        <td>gulsan,road-8,house27</td>
        <td>Sergel 20</td>
        <td>7</td>
        <td>300</td>
        <td>
          <!-- <button type="button" class="btn btn-outline-primary btn-sm"></button> -->
          <!-- <button type="button" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pencil"></i></button> -->
          <a href="./order_update.html" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>

          <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-trash"></i>
          </button>
          <button type="button" class="btn btn-outline-primary btn-sm">confirm</button>
        </td>
      </tr>
      <tr>
        <td>1</td>
        <td>karim</td>
        <td>mirpur</td>
        <td>napa</td>
        <td>10</td>
        <td>150</td>
        <td>
          <a href="./order_update.html" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>

          <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-trash"></i>
          </button>
          <button type="button" class="btn btn-outline-primary btn-sm">confirm</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>saima</td>
        <td>uttara,dhaka-1230</td>
        <td>Monas</td>
        <td>15</td>
        <td>200</td>
        <td>
          <a href="./order_update.html" class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-pencil"></i></a>
          <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-trash"></i>
          </button>
          <button type="button" class="btn btn-outline-primary btn-sm">confirm</button>
        </td>
      </tr>
    </table>
  </div>

  <!-- Modal -->

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">Are you sure?</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

</x-masterDashboard>