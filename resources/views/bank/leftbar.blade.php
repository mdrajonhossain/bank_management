  <!-- Sidebar (hidden on mobile) -->
  <div class="sidebar d-none d-md-block">
        <h3>{{ Auth::user()->name; }}</h3>
        <h3 style="color: #7367F0; font-size: 20px; font-weight: bold; margin-top: 20px; margin-bottom: 40px;">Bank Panal</h3>        
        <a href="{{ url('/bank') }}" style="font-size: 15px; font-weight: 500; text-decoration:none;">Dashboard</a>        
        <a href="{{ url('/bank/apli_received') }}" style="font-size: 15px; font-weight: 500; text-decoration:none;">FDR Manage</a>        
        <a href="{{ url('/bank/bank_branch') }}" style="font-size: 15px; font-weight: 500; text-decoration:none;">Bank Branch List</a>       
    </div>