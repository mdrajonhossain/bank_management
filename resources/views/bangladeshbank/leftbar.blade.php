<!-- Sidebar (hidden on mobile) -->
<div class="sidebar d-none d-md-block bg-info text-white">
    <h3 style="color: white; font-size: 20px; font-weight: bold; margin-top: 60px; margin-bottom: 30px;">BD Bank</h3>
    <a href="{{ url('/bank') }}"
        style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank') ? 'background-color: #ddd; color: blue;' : '' }}">Dashboard</a>
    <a href="{{ url('/bangladeshBank') }}"
        style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank/apli_received') ? 'background-color: #ddd; color: blue;' : '' }}">FDR
        Manage</a>
        <a href="{{ url('/bangladeshBank/banklist') }}"
        style="font-size: 15px; font-weight: 500; text-decoration:none; {{ Request::is('bank/apli_received') ? 'background-color: #ddd; color: blue;' : '' }}">Bank List</a>
</div>


