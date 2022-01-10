@php
$navObject = [
[
'title' => 'characters',
'route' => 'characters.index',
],
[
'title' => 'comics',
'route' => 'comics.index',
],
[
'title' => 'movies',
'route' => 'movies.index',
],
[
'title' => 'tv',
'route' => 'tv.index',
],
[
'title' => 'games',
'route' => 'games.index',
],
[
'title' => 'collectibles',
'route' => 'collectibles.index',
],
[
'title' => 'videos',
'route' => 'videos.index',
],
[
'title' => 'fans',
'route' => 'fans.index',
],
[
'title' => 'news',
'route' => 'news.index',
],
[
'title' => 'shop',
'route' => 'shop.index',
],
];
@endphp

<header>
    <div class="top-line">
        testo
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="navbar-logo-img" src="/img/dc-logo.png" alt="dc logo"></a>

            <ul class="navbar-nav mx-5 flex-grow-1 justify-content-evenly mb-2 mb-lg-0">
                @foreach($navObject as $singleItem)
                <li class="nav-item {{$singleItem["route"]==Route::currentRouteName()?'active':''}}">
                    <a class="nav-link active" aria-current="page" href="{{route($singleItem["route"])}}">
                        {{$singleItem["title"]}}
                    </a>
                </li>

                @endforeach
                {{-- <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li> --}}
            </ul>
            <form class="d-flex flex-column justify-content-center">
                <div class="search-container">
                    <input class="search-box " type="search" placeholder="Search" aria-label="Search">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                {{-- <button class="btn btn-outline-success" type="submit">Search</button> --}}
            </form>

        </div>
    </nav>
    <div class="jumbotron">

    </div>
</header>
