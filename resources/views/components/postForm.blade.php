@csrf
@if ($post)
    <input id="id" type="hidden" value="{{$post->id}}" name="id">
@endif
                
<div class="form-group row">
   <label for="category_id" class="col-md-4 col-form-label text-md-right">Categoria:</label>
   <div class="col-md-6">
       <select class="form-control custom-select mr-sm-2 @error('marca_id') is-invalid @enderror" id="category_id"
           name="category_id">
           @if (old('category_id'))
           <option value="{{$categories[old('category_id')-1]->id}}" selected>{{$categories[old('category_id')-1]->name}}</option>
           @else
           @if ($post->category != null)
           <option value="{{$post->category->id}}" selected>{{$post->category->name}}</option>
           @else
           <option value="" selected>Seleccione la categoria del post</option>
           @endif
           @endif 
           @foreach ($categories as $category)
           <option value="{{$category->id}}">{{$category->name}}</option>
           @endforeach
       </select>
       @error('category_id')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
       @enderror
   </div>
</div>

<div class="form-group row">
   <label for="title" class="col-md-4 col-form-label text-md-right">Titulo:</label>
   <div class="col-md-6">
       <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
           placeholder="Ingrese el titulo del post..." name="title" value="{{old('title', $post->title)}}">
       @error('title')
       <span class="invalid-feedback" role="alert">
           <strong>{{ $message }}</strong>
       </span>
       @enderror
   </div>
</div>     


<div class="form-group row">
<label for="contents" class="col-md-4 col-form-label text-md-right">Contenido:</label>
<div class="col-md-6">
    <textarea name="contents" id="contents" cols="30" rows="10" class="form-control" @error('contents') is-invalid @enderror" 
    placeholder="Ingrese el contenido del post" value="{{old('contents', $post->contents)}}"></textarea>
@error('contents')
<span class="invalid-feedback" role="alert">
<strong>{{ $message }}</strong>
</span>
@enderror
</div>
</div>



<div class="form-group row mb-0">
<div class="col-md-3 offset-md-4">
<button type="submit" class="btn btn-primary">
{{$btntext}}
</button>
</div>
</div>
