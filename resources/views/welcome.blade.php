@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <h1 class="my-4">De afdelingen</h1>
                <div class="list-group">
                    <a href="/team-ao" class="list-group-item">Team AO</a>
                    <a href="/team-ib" class="list-group-item">Team IB</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src={{asset('img/locatie.jpg') }} alt="coudn't find image!">
                    <div class="card-body">
                        <h3 class="card-title">Welkom op het ROC mondriaan</h3>
                        <p class="card-text">
                            Wij zijn een school voor ICT bestaande uit twee afdelingen.
                            De afdeling ICT beheer en de afdeling Applicatieontwikkeling. Onze school heeft ongeveer 30 collega's verdeeld over beide afdelingen
                            De school heeft als manager drs. de Kok
                        </p>
                    </div>
                </div>
                <!-- /.card -->

                <div class="card card-outline-secondary my-4">
                    <div class="card-header">Onze gegevens</div>
                    <div class="card-body">
                        <p>
                            contact gegevens hier!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection