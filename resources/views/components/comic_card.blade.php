<div class="card h-100 bg-transparent text-decoration-none">
    <a href="{{route('comics.detail',["id"=>$image_id])}}">
        <img src="{{$image_path}}" class="card-img-top" alt="{{$image_description}}">
        <div class="card-body">
            <p class="card-text text-uppercase text-white">{{$image_title}}</p>
        </div>
    </a>
</div>
