<nav class="h-screen bg-blue-400 relative text-center flex flex-col pt-44 px-10 text-white">
  <p class="{{request()->routeIs('dashboard') ? 'active' : ''}}">Inventario</p>
  @if(auth()->user()->role)
  <p class="{{request()->routeIs('tiendas') ? 'active' : ''}} my-5">Tiendas</p>
  @endif
</nav>