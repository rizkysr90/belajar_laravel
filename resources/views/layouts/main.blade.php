<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('sweetalert::alert')
    <div class="drawer drawer-mobile">
        <input id="my-drawer-2" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content flex flex-col bg-base-100">
          <!-- Page content here -->
          <div class="flex bg-primary justify-between items-center py-4 px-4">
            <h3 class="text-white text-3xl ml-10 ">Hi, Welcome back {{ auth()->user()->firstname }}</h3>
            <label for="my-drawer-2" class="btn btn-primary bg-secondary drawer-button lg:hidden">
              Open
            </label>
            @if (auth()->user()->role  === 'superadmin')
              <p>Ini admin ges</p>
            @elseif (auth()->user()->role === 'admin')
              <p>Ini bukan superadmin</p>
            @endif
           
            <form method="post" action="/users/logout">
                @csrf
                <button class="btn btn-warning" type="submit"> Logout </button>
            </form>
          </div>
          @yield('content')
        
        </div> 
        <div class="drawer-side text-white">
            <label for="my-drawer-2" class="drawer-overlay"></label> 
            <ul class="menu p-4 w-80 bg-base-100 text-base-content bg-base-300 text-white ">
                <!-- Sidebar content here -->
                <h1 class="font-bold text-2xl  mt-4 mb-8 text-primary text-center">Admin Dashboard</h1>
                <div class="collapse bg-base-100 rounded-lg">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-lg font-medium">
                      Manajemen Produk
                    </div>
                    <div class="collapse-content"> 
                        <li><a class=" text-sm" href="/products">Semua Produk</a></li>
                        <li><a class=" text-sm" href="/products/create">Tambah Produk</a></li>
                    </div>
                  </div>
                  <div class="collapse bg-base-100 rounded-lg mt-4">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-lg font-medium">
                      Manajemen Pembelian
                    </div>
                    <div class="collapse-content"> 
                        <li><a class=" text-sm" href="/purchases">Semua Pembelian</a></li>
                        <li><a class=" text-sm" href="/purchases/create">Tambah Pembelian</a></li>
                        <li><a class=" text-sm" href="/suppliers">Semua Supplier</a></li>
                        <li><a class=" text-sm" href="/suppliers/create">Tambah Supplier</a></li>
                    </div>
                  </div>
                  @if (auth()->user()->role  === 'superadmin')
                  <div class="collapse bg-base-100 rounded-lg mt-4">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-lg font-medium">
                      Manajemen Kasir 
                    </div>
                    <div class="collapse-content"> 
                        <li><a class=" text-sm" href="/users/kasir">Semua Kasir</a></li>
                        <li><a class=" text-sm" href="/users/kasir/register">Tambah Kasir</a></li>
                    </div>
                  </div>
                  @endif
                  @if (auth()->user()->role  === 'superadmin')
                  <div class="collapse bg-base-100 rounded-lg mt-4">
                    <input type="checkbox" /> 
                    <div class="collapse-title text-lg font-medium">
                      Manajemen Keuangan
                    </div>
                    <div class="collapse-content"> 
                        <li><a class=" text-sm" href="/purchases">Penghasilan</a></li>
                    </div>
                  </div>
                  @endif
            </ul>

            
        
        </div>
      </div>
</body>
</html>