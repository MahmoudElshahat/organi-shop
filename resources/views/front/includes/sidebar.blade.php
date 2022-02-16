
        <ul>
            @if(isset($categories))
                @foreach($categories as $categore)

                <li><a href="#">{{$categore->name}}</a></li>

                @endforeach
            @endif
        </ul>


