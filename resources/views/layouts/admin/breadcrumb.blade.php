

@if(count($breadcrumbs))
<!-- Margin bottom mb-2 -->
    <nav class="mb-2 block">
        <ol class="flex flex-wrap text-slate-700 text-sm">
            @foreach($breadcrumbs as $item)
            <li class="flex items-center">
                <!-- ponle separador antes -->
                @unless($loop->first)
                    <span class="px-2 text-gray-400">/</span>

                @endunless

                @isset($item['href'])
                    <a href="{{ $item['href']}}"
                    class="opacity-60 hover:opacity-100 transition">
                    {{ $item['name']}}
                </a>
                @else
                    {{ $item['name']}}
                @endisset

            </li>

            @endforeach 

        </ol>

        <!-- validar el ultimo elemnto en negritas -->

        @if(count($breadcrumbs)>1)
        <!-- mt margin top -->
        <h6 class="font-bold mt-2">
            {{end($breadcrumbs)['name']}}
        </h6>

        @endif

    </nav>

@endif