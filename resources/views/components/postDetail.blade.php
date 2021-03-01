<div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img onerror="this.src='/img/sin-imagen.png';" src="/storage/{{$post->image}}"  alt="post-image" class="card-img">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->contents}}</p>
          <p class="card-text"><small class="text-muted">{{$post->category->name}}</small></p>
        </div>
      </div>
    </div>
  </div>

  