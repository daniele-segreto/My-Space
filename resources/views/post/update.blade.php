<x-_layout>

    <h1 class="text-center mt-5 text-primary"><b>Modifica il tuo post!</b></h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                {{-- Form --}}
    <form method="POST" action="{{route('post.edit', compact('post'))}}" enctype="multipart/form-data">
        @csrf
        @method('put') 
        <div class="mb-3">
            <label for="InputUsername" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="InputText" aria-describedby="emailHelp" name="title" value ="{{$post->title}}">
        </div>
        <div class="mb-3">
            <img src="{{Storage::url($post->img)}}" width="80" heigt="80" alt="">
            <label for="InputUsername" class="form-label">Immagine</label>
            <input type="file" class="form-control" id="InputText" aria-describedby="emailHelp" name="img">
        </div>
        <div class="mb-3">
            <textarea type="text" cols="30" rows="10" id="InputMessage" name="body">{{$post->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>
            </div>
        </div>
    </div>

</x-_layout>