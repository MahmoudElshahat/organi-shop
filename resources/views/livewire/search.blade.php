<div>


        <div class="hero__search__form">
            <form action="#">
                <div class="hero__search__categories">
                    All Categories
                    <span class="arrow_carrot-down"></span>
                </div>

                <input type="search" placeholder="What do yo u need?" wire:model="search">
            </form>


        </div>
        <div class="hero__search__form text-center">
                @if($search !='')
                    @foreach($data as $da)
                        <ul>
                            <li>
                                    <a href="#about">{{$da->name}}</a>
                            </li>
                        </ul>
                @endforeach
                @else
                <span>No,thing selected</span>
                @endif
        </div>

</div>
