{{-- <div class="navbar bg-primary text-white">
  <div class="flex-1">
    <a class="btn btn-ghost normal-case text-xl" href = "/">Rizki Susilo Ramadhan</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal p-0">
      <li><a href = "/products">Products</a></li>
      <li tabindex="0">
        <a>
          UTS 
          <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M7.41,8.58L12,13.17L16.59,8.58L18,10L12,16L6,10L7.41,8.58Z"/></svg>
        </a>
        <ul class="p-2 bg-neutral">
          <li><a href='/view_employee'>View Employee</a></li>
          <li><a href="/delete_employee">Delete Employee</a></li>
          <li><a href = "/edit_employee">Edit Employee</a></li>
        </ul>
      </li>
      <li><a>Another Menu</a></li>
    </ul>
  </div>
</div> --}}
<div className="drawer drawer-mobile">
  <input id="my-drawer-2" type="checkbox" className="drawer-toggle" />
  <div className="drawer-content flex flex-col items-center justify-center">
    <!-- Page content here -->
    <label htmlFor="my-drawer-2" className="btn btn-primary drawer-button lg:hidden">Open drawer</label>
  
  </div> 
  <div className="drawer-side">
    <label htmlFor="my-drawer-2" className="drawer-overlay"></label> 
    <ul className="menu p-4 w-80 bg-base-100 text-base-content">
      <!-- Sidebar content here -->
      <li><a>Sidebar Item 1</a></li>
      <li><a>Sidebar Item 2</a></li>
    </ul>
  
  </div>
</div>