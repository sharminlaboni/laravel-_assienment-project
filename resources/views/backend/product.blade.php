
 
        
                  
                       
         <x-masterdash>              
    <div class="container">
      <div class="col-md-12 fw-bold fs-3">Product List</div>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4>Filter List</h4>
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Medicine Name" aria-label="Medicine Name" aria-describedby="med-search">
                          <button class="btn btn-outline-secondary" type="button" id="med-search">Search</button>
                        </div>
                        <p>Filter By: </p>
                        <ul>
                          <li><a href="">Stock</a></li>
                          <li><a href="">Name</a></li>
                          <li><a href="">Price</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">Category</li>
                      <li class="breadcrumb-item active" aria-current="page">Tablets</li>
                    </ol>
                </nav>

                <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                  Add Product
                </button>
                
                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
                            <input type="text" class="form-control" id="product_name" aria-describedby="textHelp">
                          </div>
                          <div class="mb-3">
                            <label for="product_name" class="form-label">Company</label>
                            <input type="text" class="form-control" id="product_name" aria-describedby="textHelp">
                          </div>
                          <div class="mb-3">
                            <label for="product_name" class="form-label">Unit Price</label>
                            <input type="text" class="form-control" id="product_name" aria-describedby="textHelp">
                          </div>
                          <div class="mb-3">
                            <label for="product_name" class="form-label">Total Stock</label>
                            <input type="text" class="form-control" id="product_name" aria-describedby="textHelp">
                          </div>
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Modal Ends -->
                <table class="table table-hover table-bordered">
                  <tr>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Stock</th>
                    <th>Unit Price</th>
                    <th>Options</th>
                  </tr>
                  <tr>
                    <td>Sergel 20</td>
                    <td>Square Ph LTD</td>
                    <td>450</td>
                    <td>7</td>
                    <td>
                      <!-- <button type="button" class="btn btn-outline-primary btn-sm"></button> -->
                      <a href="./product_update.html" class="btn btn-outline-primary btn-sm">Update</a>
                      <button type="button" class="btn btn-outline-danger btn-sm">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Tufnil</td>
                    <td>Square Ph LTD</td>
                    <td>500</td>
                    <td>10.02</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">Update</button>
                      <button type="button" class="btn btn-outline-danger btn-sm">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                  <tr>
                    <td>Monas</td>
                    <td>ACME LTD</td>
                    <td>25</td>
                    <td>15</td>
                    <td>
                      <button type="button" class="btn btn-outline-primary btn-sm">Update</button>
                      <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="fa-solid fa-trash"></i>
                      </button>
                    </td>
                  </tr>
                </table>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                Are you sure?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
</x-masterdash>