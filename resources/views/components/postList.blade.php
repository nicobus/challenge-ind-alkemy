<h1 class="p-3 mx-auto d-inline">
    {{$title}}
</h1>

<div class="table-responsive bg-light w-75 mx-auto">
    <table class="table my-5">
        <tr>
            <th>Título</th>
            <th class="float-end mx-4">Acciones</th>
        </tr>
        @foreach ($posts as $post)
        <tr>
            <td>
                <a href="{{route('postDetail', ['id' => $post->id])}}">
                    {{$post->title}}
                </a>
            </td>
            <td class="float-end mx-4">
                <a href="{{route('postEdit', ['id' => $post->id])}}">
                    <i class="fa fa-pencil m-2" aria-hidden="true"></i>
                </a>
                <form class="form-eliminar d-inline-flex" action="{{route('postDelete', ['id' => $post->id])}}" method="POST">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$post->id}}">
                        <button type="submit" class="btn btn-danger fa fa-trash btn-eliminar">
                        </button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
<p>{{$posts->links()}}</p>
</div>