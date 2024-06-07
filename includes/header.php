
<nav class="navbar fixed-top navbar-expand-lg navbar-light ">
        <div class="container-fluid">
        <a class="" href="#home">
            <img src="" class="h-8" alt="">ConferencePanel
          </a>
          <!-- Toggle button -->
          <div class="d-flex flex-row">
          <div class=" d-lg-none d-flex justify-content-end position-absolute top-50 end-0 me-5 pe-2 pe-sm-3 pe-md-4 pe-lg-0 translate-middle">
            <form role="search" method="get" class="search-form" action="">
                <label>
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search webinars" />
                </label>
                <input type="submit" class="search-submit" value="Search" />
            </form>
            <a class="nav-item nav-link mt-2" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <button
              class="navbar-toggler shadow-none border-0"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar"
            >
            <span class=""><i class="fa-solid fa-bars-staggered text-black"></i></span>
            </button>
          </div>

          <!-- Sidebar -->
          <div
            class="sidebar offcanvas offcanvas-end"
            tabindex="-1"
            id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel"
          >
            <!-- sidebar header  -->
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                <span style="color: black">Menu</span>
              </h5>
              <button
                type="button"
                class="btn-close shadow-none border-0"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <!-- sidebar body  -->
            <div class="offcanvas-body">
            <div class="navbar-nav mx-lg-auto mt-2">
                <a class="nav-item nav-link active" href="#" aria-current="page">Home</a>
                <a class="nav-item nav-link" href="#">About</a>
                <a class="nav-item nav-link" href="#">Webinars</a>
                <a class="nav-item nav-link" href="#">Free Webinars</a>
                <a class="nav-item nav-link" href="#">Blog</a>
            </div>
            <div class="navbar-nav d-lg-flex d-none ">
                <form role="search" method="get" class="search-form mt-lg-2" action="">
                    <label>
                        <input type="search" class="search-field" placeholder="Search …" value="" name="s" title="Search webinars" />
                    </label>
                    <input type="submit" class="search-submit" value="Search" />
                </form>
                <a class="nav-item nav-link position-relative" href="#"><i class="fa-solid fa-cart-shopping position-absolute top-50 start-50 translate-middle"></i></a>
            </div>
            <div class="navbar-nav me-lg-1 mt-lg-2">
                <a class="nav-item nav-link mt-lg-2" href="#">Sign in</a>
            </div>
            <div class="d-flex align-items-lg-center mt-3 mt-lg-0 ">
                <a href="#" class=" main-btn">
                Register
                </a>
            </div>
            </div>
          </div>
        </div>
      </nav>