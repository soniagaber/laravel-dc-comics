
    <div>
        <div class="links-container">
            <div>
                <div id="link-sx">
                    @foreach ($footerLinksSx as $footerLinkSx)
                     <strong>{{ $footerLinkSx['title'] }}</strong>
                    @endforeach
            <ul >
                @foreach ($footerLinkSx['links'] as $link)
                <li>
                    {{ $link }}
                </li>
                @endforeach
            </ul>
        </div>
            </div>
        <div id="link-centro" >
            @foreach ($footerLinksCentro as $footerLinkCentro)
            <strong>{{ $footerLinkCentro['title'] }}</strong>
            <ul>
                @foreach ($footerLinkCentro['links'] as $link)
                <li>
                    {{ $link }}
                </li>
                @endforeach
            </ul>
            @endforeach
        </div>
        <div id="link-dx" >
            @foreach($footerLinksDx as $footerLinkDx)
            <strong>{{ $footerLinkDx['title'] }}</strong>
            <ul >
                @foreach ($footerLinkDx['links'] as $link)
                <li>
                    {{ $link }}
                </li>
                @endforeach
            </ul>
            @endforeach
        </div>
        </div>
        <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
    </div>
