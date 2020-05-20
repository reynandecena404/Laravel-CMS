<div class="col-md-8 col-xl-9">
  <div class="row gap-y">
    @forelse ($posts->sortByDesc('created_at') as $post)
      <div class="col-md-6">
        <div class="card border hover-shadow-6 mb-6 d-block">
          <a href="{{ route('blog.show', $post->id) }}">
            <img class="card-img-top" src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
          </a>
          <div class="p-6 text-center">
            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="{{ route('blog.category', $post->category->id) }}">{{$post->category->name}}</a></p>
            <h5 class="mb-3"><a class="text-dark" href="{{ route('blog.show', $post->id) }}">{{$post->title}}</a></h5>                        
              @foreach ($tags as $tag)
                @if (isset($post))
                  @if (in_array($tag->id, $post->tags->pluck('id')->toArray()))
                  <a class="badge badge-secondary" href="{{ route('blog.tag', $tag->id) }}">
                    {{$tag->name }}
                  </a>
                  @endif  
                @endif                                    
              @endforeach                        
          </div>
        </div>
      </div>   

      @empty
        <h1 class="text-center">
          No results found for the query of <strong>{{ request()->query('search') }}</strong>
        </h1>
      @endforelse
  </div>              
  {{ $posts->appends(['search' => request()->query('search')])->links() }}
</div>

<div class="col-md-4 col-xl-3">
    <div class="sidebar px-4 py-md-0">

      <h6 class="sidebar-title">Search</h6>
    <form class="input-group" action="" method="GET">
      <input type="text" class="form-control" name="search" placeholder="Search" value="{{request()->query('search')}}">
        <div class="input-group-addon">
          <span class="input-group-text"><i class="ti-search"></i></span>
        </div>
      </form>

      <hr>

      <h6 class="sidebar-title">Categories</h6>
      <div class="row link-color-default fs-14 lh-24">
        @foreach ($categories as $category)
          <div class="col-6">
            <a href="{{ route('blog.category', $category->id) }}">
              {{$category->name}}
            </a>
          </div>
        @endforeach
      </div>

      <hr>

      <h6 class="sidebar-title">Tags</h6>
      <div class="gap-multiline-items-1">
        @foreach ($tags as $tag)
          <a class="badge badge-secondary" href="{{ route('blog.tag', $tag->id) }}">{{$tag->name}}</a>
        @endforeach
      </div>

      <hr>

      <h6 class="sidebar-title">About</h6>
      <p class="small-3">
        A Laravel CMS Project                  
      </p>
      <span class="mt-1 small-3">
        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
      </span>


    </div>
  </div>