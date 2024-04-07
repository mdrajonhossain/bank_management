<!-- Sidebar (hidden on mobile) -->
<div class="sidebar d-none d-md-block bg-info text-white">
    <h3 style="color: white; font-size: 20px; font-weight: bold; margin-top: 20px; margin-bottom: 40px;">BD Bank</h3>
    <a href="{{ url('/bank') }}"
        style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank') ? 'background-color: #ddd; color: blue;' : '' }}">Dashboard</a>
    <a href="{{ url('/bangladeshBank') }}"
        style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank/apli_received') ? 'background-color: #ddd; color: blue;' : '' }}">FDR
        Manage</a>
</div>


