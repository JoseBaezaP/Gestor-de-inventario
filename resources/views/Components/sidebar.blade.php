<nav class="h-screen bg-blue-400 text-center flex flex-col pt-44 px-10 text-white sticky top-0">
  @if(!auth()->user()->role)
  <a href="{{route('inventory')}}"
    class="{{request()->routeIs('inventory') ? 'active' : ''}} focus:outline-none hover:border-white hover:border-b-2">Mis
    productos</a>
  @endif
  <a href="{{route('general')}}"
    class="{{request()->routeIs('general') ? 'active' : ''}} focus:outline-none hover:border-white hover:border-b-2">Inventario
    general</a>
  @if(auth()->user()->role)
  <a href="{{route('register.stores')}}"
    class="{{request()->routeIs('register.stores') || request()->routeIs('register.employees') ? 'active' : ''}} focus:outline-none hover:border-white hover:border-b-2">Registro</a>
  @endif
</nav>