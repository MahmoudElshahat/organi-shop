<div>
        <form action="#">
            <input type="text" placeholder="Search..." wire:model="search">
            <button type="submit"><span class="icon_search"></span></button>
        </form>

        <div class="hero__search__form text-center">
            @if($search !='')
                    @foreach($data as $da)
                        <ul>
                            <li class="list-unstyled text-align-center">
                                    <a href="#about">{{$da->name}}</a>
                            </li>
                        </ul>
                @endforeach
            @endif
        </div>
</div>
