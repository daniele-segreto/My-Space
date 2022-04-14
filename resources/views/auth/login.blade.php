<x-_layout>

    <h1 class="text-center mt-5 text-primary"><b>MySpace.ME</b></h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">
                {{-- Form --}}
                <form method="POST" action="{{ route('login') }}" class="mb-5">
                    @csrf
                    <div class="mb-3">
                        <label for="InputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="InputEmail1" aria-describedby="emailHelp"
                            name="email">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="InputText" aria-describedby="emailHelp"
                            name="password">
                    </div>
                    <button type="submit" class="btn btn-primary mb-5">Accedi</button>
                </form>
            </div>
        </div>
    </div>

</x-_layout>
