  <!-- Sidebar (hidden on mobile) -->
  <div class="sidebar d-none d-md-block">
        <h3>{{ Auth::user()->name; }}</h3>
        <h3 style="color: #7367F0; font-size: 20px; font-weight: bold; margin-top: 20px; margin-bottom: 40px;">Branch Panal</h3>        
        <a href="">Dashboard</a>
        <a href="{{ url('/branch') }}">FDR Manage</a>
        <a href="">Approve FDR List</a>
        <a href="">Reject FDR List</a>
        <a href="">Bank Info</a>
    </div>