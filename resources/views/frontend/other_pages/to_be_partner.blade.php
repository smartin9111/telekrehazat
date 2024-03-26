@extends('frontend.frontend_dashboard')
@section('main')
    <section class="my-5">
        <div class="container">
            <h2 class="mb-4">Miért legyen partnerünk?</h2>
            <ul class="list-unstyled">
                <li class="mb-2"><strong>Időt spórolunk:</strong> A tájékoztató árakat nálunk megnézhetik az érdeklődők,
                    így csökken az ajánlatadással járó idő.</li>
                <li class="mb-2"><strong>Elérjük a célcsoportot:</strong> Marketing és gyűjtő tevékenységünkkel elérjük az
                    építkezők jelentős részét.</li>
                <li class="mb-2"><strong>Hitelességet erősítünk:</strong> Segítünk visszanyerni a bizalmat a kivitelezők
                    felé azzal, hogy előszűrjük partnereinket és arra törekszünk, hogy hiteles és megbízható vállalatok
                    jelenjenek meg felületünkön.</li>
                <li class="mb-2"><strong>Kedvező árszabás és reklám:</strong> Bevezető havidíjas csomagokkal nyújtunk
                    választási lehetőséget a felületünkön megjeleníteni kívánt tartalomra, valamint extra szolgáltatásokat
                    és elérhető reklám felületeteket biztosítunk a nálunk előfizetett partnereink számára.</li>
            </ul>

            <h3 class="mt-5 mb-3">Hogyan legyen partnerünk?</h3>
            <p>Vegye fel a kapcsolatot velünk az alábbi elérhetőségen: <a
                    href="mailto:info@telekrehazat.hu">info@telekrehazat.hu</a>! Az üzenetben meséljen számunkra néhány
                mondatban korábbi munkáiról és a cég történetéről! Mi pedig felvesszük Önnel a kapcsolatot!</p>
        </div>
    </section>

    <section class="text-center mt-5">
        <img src="{{ asset('frontend/assets/images/other_pages/puzzle_partner.png') }}" alt="Legyen Partnerünk"
            class="img-fluid" style="max-height: 500px;">
    </section>
@endsection
