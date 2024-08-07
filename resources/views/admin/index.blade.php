<!DOCTYPE html>
<html>
  <head> 
   @include('admin.css')
  </head>
  <body>
    <header class="header">   
     @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">

      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <h2 class="h5 no-margin-bottom">Dashboard</h2>
          </div>
        </div>
        @include('admin.body')
      </div>
    </div>

    
    <!-- JavaScript files-->
    @include('admin.js')
    
  </body>
</html>