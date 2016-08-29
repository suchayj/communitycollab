<ul class="list-group">
    @if(count($links))

        @foreach ($links as $link)
            <li class="list-group-item">
                    <a href="/community/ $link->channel->slug" class="label label-default" style="background: blue;margin-right: 1em">
                        PHP
                    </a>

                <a href="{{ $link->link }}" target="_blank">
                    {{ $link->title }}
                </a>

                <small>
                    Contributed By: <a href="#"> {{ $link->user_id }}</a>
                    {{ $link->updated_at->diffForHumans() }}
                </small>

            </li>

        @endforeach
    @else
        <li class="$links-$link">
            No contribution yet.
        </li>
    @endif

</ul>

{{ $links->links() }}