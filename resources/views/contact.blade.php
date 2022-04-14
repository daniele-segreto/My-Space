<x-_layout>

    <h1 class="text-center mt-5 text-primary"><b>Hai un suggerimento?</b></h1>

    <div class="container mt-5">

        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">

                {{-- Validation Error --}}
                @if ($errors->any())
                    <div class="alert alert-danger mb-5">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                {{-- Form --}}
                <form method="POST" action="{{ route('submit') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="InputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="InputText" aria-describedby="emailHelp"
                            name="name">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <textarea cols="30" rows="10" id="InputMessage" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Contattaci</button>
                </form>
            </div>
        </div>
    </div>

</x-_layout>
