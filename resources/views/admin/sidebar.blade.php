<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('/admincss/img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Mark Stephen</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">

            <li class="active">
              <a href="{{ url('admin/dashboard') }}"> <i class="icon-home"></i>Home </a>
            </li>

            <li class="">
              <a href="{{ asset('view_category') }}"> <i class="icon-home"></i>Category</a>
            </li>
            
            <li>
              <a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Product </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">

                <li><a href="{{ url('add_product') }}">Add product</a></li>
                <li><a href="{{ url('view_product') }}">View product</a></li>

              </ul>
            </li>

            <li class="">
              <a href="{{ asset('view_orders') }}"> <i class="icon-home"></i>Orders</a>
            </li>
           
    </ul>
  </nav>