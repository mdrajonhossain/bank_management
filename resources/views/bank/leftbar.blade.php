  <!-- Sidebar (hidden on mobile) -->
  <div class="sidebar d-none d-md-block">
    <h3>{{ Auth::user()->name }}</h3>
    <h3 style="color: #7367F0; font-size: 20px; font-weight: bold; margin-top: 20px; margin-bottom: 40px;">Bank Panel</h3>        
    <a href="{{ url('/bank') }}" style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank') ? 'background-color: #ddd; color: blue;' : '' }}">Dashboard</a>        
    <a href="{{ url('/bank/apli_received') }}" style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank/apli_received') ? 'background-color: #ddd; color: blue;' : '' }}">FDR Manage</a>        
    <a href="{{ url('/bank/bank_branch') }}" style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank/bank_branch') ? 'background-color: #ddd; color: blue;' : '' }}">Bank Branch List</a>       
</div>