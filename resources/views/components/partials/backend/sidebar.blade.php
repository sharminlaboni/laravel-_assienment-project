<nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="dashboard">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Dashboard</span>
                    </div>
                  </a>

                </li>
                <li class="nav-item">
                  <!-- label-->
                  <p class="navbar-vertical-label">Core</p>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="shopping-cart"></span></span><span class="nav-link-text">Category</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#admin" data-bs-toggle="collapse" aria-expanded="true" aria-controls="e-commerce">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">catagory</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent show" id="admin">
                        <li class="nav-item"><a class="nav-link" href="{{route('catagories.index')}}" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">Catagory List</span></div>
                          </a><!-- more inner pages-->
                        </li>

                       </ul>
                      </li>
                      </ul>
                    <!-- parent pages-->
                  <a class="nav-link dropdown-indicator" href="#project-management" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="project-management">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="clipboard"></span></span><span class="nav-link-text">Product</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="project-management">
                    <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}"data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Product List</span></div>
                      </a><!-- more inner pages-->
                    </li>


                </ul>
                </li>
                <!--app ses -->

                <li class="nav-item">
                  <!-- label-->
                  <p class="navbar-vertical-label">Count</p><!-- parent pages-->


                  <a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="tag"></span></span><span class="nav-link-text">Order</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="{{route('order.index')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Order List</span></div>
                      </a><!-- more inner pages-->
                    </li>

                  </ul>
                  <a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="alert-triangle"></span></span><span class="nav-link-text">Delivery</span>
                    </div>

                  </a>
                  <ul class="nav collapse parent" id="errors">
                    <li class="nav-item"><a class="nav-link" href="{{url('/delivery')}}" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">delivery List</span></div>
                      </a><!-- more inner pages-->
                    </li>

                  </ul><!-- parent pages-->
                </li>

                  <!-- label-->
                  <p class="navbar-vertical-label">Modules</p>
                  <!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="file-text"></span></span><span class="nav-link-text">Customer</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="forms">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#basic" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center">
                         <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">customer List</span>
                      </div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href=" " data-bs-toggle="" aria-expanded="false">
                      <div class="d-flex align-items-center"><span class="nav-link-text"> </span></div>
                    </a><!-- more inner pages-->
                  </li>
                   </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">User</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="advance">
                        <li class="nav-item"><a class="nav-link" href="{{route('users.index')}}" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">User List</span></div>
                          </a><!-- more inner pages-->
                        </li>
                     </ul>
                   </li>

                   <li class="nav-item"><a class="nav-link dropdown-indicator" href="#advance" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                        <div class="d-flex align-items-center">
                          <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-text">color</span>
                        </div>
                      </a><!-- more inner pages-->
                      <ul class="nav collapse parent" id="advance">
                        <li class="nav-item"><a class="nav-link" href="{{route('colors.index')}}" data-bs-toggle="" aria-expanded="false">
                            <div class="d-flex align-items-center"><span class="nav-link-text">color List</span></div>
                          </a><!-- more inner pages-->
                        </li>
                     </ul>
                   </li>



                  <a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center">
                      <div class="dropdown-indicator-icon d-flex flex-center"><span class="fas fa-caret-right fs-0"></span></div><span class="nav-link-icon"><span data-feather="package"></span></span><span class="nav-link-text">Report</span>
                    </div>
                  </a>
                  <ul class="nav collapse parent" id="components">
                    <li class="nav-item"><a class="nav-link" href=" data-bs-toggle=" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">order report</span></div>
                      </a><!-- more inner pages-->
                    </li>

                    <li class="nav-item"><a class="nav-link" href=" "data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">sales report</span></div>
                      </a><!-- more inner pages-->
                    </li>
              </li>
              </ul>
            </div>
            <!--footer-->
            <div class="navbar-vertical-footer"><a class="btn btn-link border-0 fw-semi-bold d-flex ps-0" href="../pages/authentication/simple/sign-out.html"><span class="navbar-vertical-footer-icon" data-feather="log-out"></span><span>Sign out</span></a></div>

          </div>
          <!--footer-->
        </nav>
