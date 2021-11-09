<x-slot name="header">
  <a href="{{route('register.stores')}}" class="focus:outline-none font-semibold text-gray-800 leading-tight mr-5">
    {{ __('Tiendas') }}
  </a>
  <a href="{{route('register.employees')}}" class="focus:outline-none font-semibold text-gray-800 leading-tight">
    {{ __('Encargados') }}
  </a>
</x-slot>