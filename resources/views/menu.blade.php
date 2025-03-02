@extends('layouts.app')

@section('title', 'Mapa del Sitio')

@section('content')
  

   <!-- Breadcrumbs -->
   {{ Breadcrumbs::render('menu') }}
   <!-- --------- -->

   <div class="menu-container-ms">
        <ul class="menu-ms">
            @if(isset($menuItems) && is_array($menuItems))
                @foreach($menuItems as $category)
                    <li class="menu-item-ms">
                        <a href="{{ $category['url'] }}" class="menu-link-ms">
                            {{ $category['name'] }}
                        </a>

                        @if(!empty($category['subcategories']))
                            <ul class="submenu-ms">
                                @foreach($category['subcategories'] as $subcategory)
                                    <li>
                                        <a href="{{ $subcategory['url'] }}" class="submenu-link-ms">
                                            {{ $subcategory['name'] }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
            @else
                <li class="no-items-ms">No hay categorías disponibles</li>
            @endif
        </ul>
    </div>



   @endsection
