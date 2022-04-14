<x-_layout>

    <h1 class="text-center mt-5 text-primary"><b>Cosa stai pensando?</b></h1>

    {{-- Form --}}
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="InputUsername" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="InputText" aria-describedby="emailHelp"
                            name="title">
                    </div>
                    <div class="mb-3">
                        <label for="InputUsername" class="form-label">Immagine</label>
                        <input type="file" class="form-control" id="InputText" aria-describedby="emailHelp" name="img">
                    </div>
                    <div class="mb-3">
                        <textarea type="text" cols="30" rows="10" id="InputMessage" name="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </form>
            </div>
        </div>
    </div>

    <hr>

    {{-- Cards --}}
    <div class="container w-card mt-3">
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-12 col-md-2">
                    <div class="card mt-5 border-0">
                        <img src="{{ Storage::url($post->img) }}" class="card-img-top image" alt="image"
                            style="opacity:1.0;" onmouseover="this.style.opacity=0.4;"
                            onmouseout="this.style.opacity=1.0;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>

                            {{-- Nome utente e Data --}}
                            @if ($post->user)
                                <h6>( {{ $post->user->name }} )</h6>
                                <h5><i>{{ $post->created_at->format('d-m-Y H:m:s') }}</i></h5>

                                <p class="card-text">{{ $post->body }}</p>

                                {{-- Permesso di modifica solo dall'utente loggato che lo ha caricato --}}
                                @if ($post->user->id === Auth::id())

                                    <a href="{{ route('post.update', compact('post')) }}"
                                        class="btn btn-success btn-sm">Modifica</a>
                                    <form method="POST" action="{{ route('post.delete', compact('post')) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm mt-1">Cancella</button>
                                    </form>

                                @endif
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-_layout>
