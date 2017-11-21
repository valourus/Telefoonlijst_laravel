@extends("layouts.app") 

@section("content")
<div class="container">
	<div class="row">
		<div class="col-lg-3">
		<h3 class="my-4">De afdelingen</h3>
			<div class="list-group">
				<a href="/team-ao" class="list-group-item">Team AO</a>
				<a href="/team-ib" class="list-group-item">Team IB</a>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="card mt-4">
				<img class="card-img-top img-fluid" src="{{ asset('storage/locatie.jpg') }}" alt="coudn't find image!">
				<div class="card-body">
					<h3 class="card-title">Welkom op het ROC mondriaan</h3>
					<p class="card-text">
						Wij zijn een school voor ICT bestaande uit twee afdelingen. De afdeling ICT beheer en de afdeling Applicatieontwikkeling.
						Onze school heeft ongeveer 30 collega's verdeeld over beide afdelingen De school heeft als manager drs. de Kok
					</p>
				</div>
			</div>
			<div class="card card-outline-secondary my-4">
				<div class="card-header">Onze gegevens</div>
				<div class="card-body">
					<p>
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">Gegevens</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>School</td>
									<td>ROC Mondriaan school voor ICT</td>
								</tr>
								<tr>
									<td>Straat</td>
									<td>Tinwef 10</td>
								</tr>
								<tr>
									<td>Postcode</td>
									<td>2544 ED</td>
								</tr>
                                <tr>
									<td>Plaats</td>
									<td>Den Haag</td>
								</tr>
                                <tr>
									<td>Telefoon</td>
									<td>088 6663600</td>
								</tr>
							</tbody>
						</table>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection