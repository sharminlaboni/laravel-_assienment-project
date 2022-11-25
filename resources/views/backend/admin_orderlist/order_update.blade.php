<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital@0;1&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../dashboard/dashboard.css" />
    <title>Order Update</title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <!-- offcanvas Trigger -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="offcanvasExample">
          <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
        </button>

        <!-- offcanTriggervas  -->
        <a class="navbar-brand fw-bold text-uppercase" href="../dashboard/dashboard.html">E-Pharmacy</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
          <form class="d-flex">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="search" aria-label=" username with two button addons" />
              <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
            </div>
          </form>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-person"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">admin</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-person"></i> Profile</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Logout</a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-bell"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item text-center" href="#"></a>Notification</li>
                <li><hr class="dropdown-divider" /></li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-envelope-dash"></i>messege1</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-envelope-dash"></i>messege2</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#"><i class="bi bi-envelope-dash"></i>messege3</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar -->

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start bg-dark trxtwhite sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <!-- <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts6">
                <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
                <span>Medicine Brand</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts6">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Brand List</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="collapse" id="layouts6">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-file-plus"></i></span>
                      <span>Add Brand</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li> -->

            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts">
                <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
                <span>Medicine Catagory</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="../admin_category/category.html" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Catagory List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts1">
                <span class="me-2"><i class="bi bi-capsule-pill"></i></span>
                <span>Medicine</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts1">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="../admin_product/product_list.html" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Medicine List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts2">
                <span class="me-2"><i class="bi bi-truck"></i></span>
                <span>Order</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts2">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Order List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts3">
                <span class="me-2"><i class="bi bi-cash-coin"></i></span>
                <span>Sales</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts3">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Sales List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts0">
                <span class="me-2"><i class="bi bi-cart"></i></span>
                <span>Delivery</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts0">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Delivery List</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts4">
                <span class="me-2"><i class="bi bi-person-circle"></i></span>
                <span>Cusromer</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts4">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span> Customer List</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="collapse" id="layouts4">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-file-plus"></i></span>
                      <span>Add Customer</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a class="nav-link px-3 sidebar-link" data-bs-toggle="collapse" href="#layouts5">
                <span class="me-2"><i class="bi bi-person-circle"></i></span>
                <span>Employee</span>
                <span class="ms-auto">
                  <span class="right-icon">
                    <i class="bi bi-chevron-down"></i>
                  </span>
                </span>
              </a>
              <div class="collapse" id="layouts5">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-card-checklist"></i> </span>
                      <span>Employee List</span>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="collapse" id="layouts5">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"><i class="bi bi-file-plus"></i></span>
                      <span>Add Employee</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>

            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>

            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-graph-up"></i></span>
                <span>Charts</span>
              </a>
            </li>
            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
    <!-- Sidebar -->
    <div class="container mt-3">
      <div class="col-md-12 fw-bold fs-3">Update order</div>
      <div class="card product-update-card">
        <div class="card-body">
          <div class="card-text">
            <form action="">
              <div class="mb-3">
                <label for="customer_name" class="form-label">Customer_Name</label>
                <input name="customer_name" type="text" class="form-control" id="customer_name" aria-describedby="textHelp" value="saima" />
              </div>
              <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input name="address" type="text" class="form-control" id="address" aria-describedby="textHelp" value="uttara,dhaka-1230" />
              </div>
              <div class="mb-3">
                <label for="product_name" class="form-label">Product_name</label>
                <input name="product_name" type="text" class="form-control" id="product_name" aria-describedby="textHelp" value="napa" />
              </div>
              <div class="mb-3">
                <label for="unit_price" class="form-label">Unit_price</label>
                <input name="unit_price" type="text" class="form-control" id="unit_price" aria-describedby="textHelp" value="7" />
              </div>
              <div class="mb-3">
                <label for="Total_price" class="form-label">Total_price</label>
                <input name="Total_price" type="text" class="form-control" id="Total_price" aria-describedby="textHelp" value="300" />
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
              <button class="btn btn-secondary">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
