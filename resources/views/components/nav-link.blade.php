<a {{$attributes}} class="{{ $active ? 'bg-blue-950 text-white' : 'text-gray-300 hover:bg-blue-900 hover:text-white'}} 
        rounded-md px-3 py-2 text-sm font-medium" aria-current="{{ $active ? 'page' : false }}">{{$slot}}</a>
