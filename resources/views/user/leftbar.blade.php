  <!-- Sidebar (hidden on mobile) -->
  <div class="sidebar d-none d-md-block">
        <!-- <h3>{{ Auth::user()->name; }}</h3> -->
        <h3>User Panal</h3>
        <a href="{{url('/user')}}">Dashboard</a>
        <a href="{{url('/user/fdr')}}">FDR Apply</a>
        <a href="{{url('/user/fdrformsend')}}">FDR Manage</a>        
        <a href="#">FDE</a>
    </div>