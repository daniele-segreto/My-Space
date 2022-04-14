<x-_layout>

    <h1 class="text-center mt-5 text-primary"><b>MySpace.ME</b></h1>

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 mt-5 mb-5">

                {{-- Rendirecting --}}
                @if (session('message'))
                    <div class="alert alert-success mb-5">
                        {{ session('message') }}
                    </div>
                @endif

                <p>Il concetto chiave non è più la "presenza" in rete, ma la "connessione": se si è presenti ma non
                    connessi, si è soli. MySpace.me è lo spazio di chi con un semplice post rivoluzionerà il modo di
                    essere social, a prova di mosaico.</p>

                <p>Niente interfacce pericolose, dati sparsi ovunque e multifunzionalità, un solo e unico scopo, postare
                    le tue passioni inserendo una semplice immagine, un titolo e un breve pensiero che ti consentirà di
                    creare un mini-mosaico da mettere in mostra. </p>

                <p>« Una volta avevo una vita. Ora ho un computer e una connessione wi-fi. » Questa frase non va bene,
                    il nuovo modo di essere social è quello di stare più tempo fuori dai social, postiamo un semplice
                    pensiero e via. Andiamo avanti con la nostra vita, con i nostri obiettivi.</p>

                <p>Molti utenti e membri della nostra community solitamente utilizzano la nostra piattaforma non
                    soltanto per scrivere un pensiero, mostrare il prorpio mosaico personale o cose del genere. VViene
                    utilizzato da molte persone come una specie di diario, un block notes, una To Do List a cui fare
                    riferimento, dove inserire obiettivi e visualizarli.</p>

                <p>"Tanti social, ma molto a-social." Direi che è arrivato il momento di essere Sociali. Entra anche tu
                    a far parte di questa grande community. Ti stiamo aspettando!</p>

                <p><b><i>Noi, non abbiamo bisogno di like.</i></b></p>
            </div>
        </div>
    </div>

</x-_layout>
