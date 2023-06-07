<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/forms/sales.html">
              <i class="bi bi-receipt-cutoff menu-icon"></i>
              <span class="menu-title">Sales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-circle-outline menu-icon"></i>
              <span class="menu-title">Categories</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category/create') }}">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/category') }}">View Category</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-plus-circle menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products/create') }}">Add Product</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products') }}">View Product</a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/authors')}}">
              <i class="mdi mdi-view-headline menu-icon"></i>
              <span class="menu-title">Authors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/user')}}">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Users</span>
            </a>
          </li>
    

          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/sliders')}}">
              <i class="mdi mdi-emoticon menu-icon"></i>
              <span class="menu-title">Home Slider</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{url('admin/order')}}">
              <i class="mdi mdi-file-document-box-outline menu-icon"></i>
              <span class="menu-title">Orders</span>
            </a>
          </li>
        </ul>
      </nav>