<nav
  class="h-screen bg-blue-400 text-center flex flex-col pt-44 px-10 text-white {{request()->routeIs('profile.show') ? 'sticky top-0' : 'relative'}}">
  <a href="{{route('inventory')}}"
    class="{{request()->routeIs('inventory') ? 'active' : ''}} focus:outline-none hover:border-white hover:border-b-2">Inventario</a>
  @if(auth()->user()->role)
  <a href="{{route('register.stores')}}"
    class="{{request()->routeIs('register.stores') || request()->routeIs('register.employees') ? 'active' : ''}} my-5 focus:outline-none hover:border-white hover:border-b-2">Resgistro</a>
  @endif
</nav>