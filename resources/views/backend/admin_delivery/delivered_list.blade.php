<x-masterDashboard>

  <div class="container mt-3">
      <div class="col-md-12 fw-bold fs-3">Delivery List</div>
      <table class="table table-hover table-bordered">
          <thead>
              <tr>
                  <th>Order ID</th>
                  <th>Name</th>
                  <th>Contact</th>
                  <th>Delivery Date</th>
                  <th>Options</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <td>1</td>
                  <td>Arif</td>
                  <td>44551561</td>
                  <td>10/01/11</td>
                  <td>
                      <span class="badge bg-success">Delivered</span>
                      <button class="btn btn-outline-primary btn-sm">Set Not Delivered</button>
                  </td>
              </tr>
              <tr>
                  <td>2</td>
                  <td>Mridul</td>
                  <td>44551561</td>
                  <td>25/02/11</td>
                  <td>
                      <span class="badge bg-info text-dark">Pending</span>
                      <button class="btn btn-outline-primary btn-sm">Set Not Delivered</button>
                  </td>
              </tr>
              <tr>
                  <td>3</td>
                  <td>Oishi</td>
                  <td>86157455</td>
                  <td>08/01/22</td>
                  <td>
                      <span class="badge bg-success">Delivered</span>
                      <button class="btn btn-outline-primary btn-sm">Set Not Delivered</button>
                  </td>
              </tr>
          </tbody>
      </table>
  </div>

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
