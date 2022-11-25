<x-masterdash>

  <div class="container mt-3">
      <div class="col-md-12 fw-bold fs-3">Customer List</div>
      <div class="row">
          <div class="col-md-3">
              <div class="card">
                  <div class="card-body">
                      <div class="card-title"><h4>Sort List</h4></div>
                      <div class="card-text">
                          <ul>
                              <li><a href="">Name</a></li>
                              <li><a href="">Total Ordered</a></li>
                              <li><a href="">Contact Number</a></li>
                          </ul>
                          <form action="">
                              <div class="input-group mb-3">
                                  <input type="text" class="form-control" placeholder="Customer Search" aria-label="Recipient's customer_search" aria-describedby="button-addon2">
                                  <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
                                </div>
                                
                          </form>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-9">
              <table class="table table-hover table-bordered">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Contact</th>
                          <th>Total Orders</th>
                          <th>Options</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>0001</td>
                          <td>Arif Hossain</td>
                          <td>Khilkhet, Dhaka</td>
                          <td>+8801754694654</td>
                          <td>15</td>
                          <td>
                              <a href="./customer_add.html"  class="btn btn-outline-primary btn-sm">Update</a>
                              <button class="btn btn-outline-danger btn-sm">Delete</button>
                          </td>
                      </tr>
                      <tr>
                          <td>0002</td>
                          <td>Oishi Tabassum</td>
                          <td>Kuril, Dhaka</td>
                          <td>+8801754694654</td>
                          <td>0</td>
                          <td>
                              <a href="./customer_add.html"  class="btn btn-outline-primary btn-sm">Update</a>
                              <button class="btn btn-outline-danger btn-sm">Delete</button>
                          </td>
                      </tr>
                      <tr>
                          <td>0003</td>
                          <td>Xefer Rahman</td>
                          <td>Dhanmondi, Dhaka</td>
                          <td>+8801754694654</td>
                          <td>7</td>
                          <td>
                              <a href="./customer_add.html"  class="btn btn-outline-primary btn-sm">Update</a>
                              <button class="btn btn-outline-danger btn-sm">Delete</button>
                          </td>
                      </tr>
                  </tbody>
              </table>
          </div>
      </div>
  </div>
  
</x-masterdash>


