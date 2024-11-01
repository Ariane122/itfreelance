@extends('front-end.layouts.app')
@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area style2 "
        style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('front-end/images/resources/bigdata.jpg') }})">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content-box clearfix">
                        <div class="title-s2 text-center">
                            <span>À la recherche de consultants pour votre projet informatique ?</span>
                            <h3 style="color: white ">
                                Nous pouvons vous mettre en relation avec les meilleurs consultants indépendants en
                                informatique, basés en Afrique.
                            </h3>
                            <div class="read-more text-center">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End breadcrumb area-->


    <section class="slogan-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="card-body">
                            <h3 class="card-title text-center" style="margin: 30px 0px">Creer votre cv</h3>
                            @if ($errors->any())
                                <div class="text-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="POST" action="{{ route('cv.create') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Titre professionnel </label>
                                    <input type="text" class="form-control" name="titre" id="email"
                                        placeholder="titre" required>
                                </div>


                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Nom </label>
                                        <input type="text" class="form-control" name="nom" id="email"
                                            placeholder="Nom" required>
                                    </div>
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Prenom </label>
                                        <input type="text" class="form-control" name="prenom" id="email"
                                            placeholder="Prénom" required>
                                    </div>


                                <h5 style="margin-top : 10px">Experience professionnelle</h5>
                                <h6 style="margin-top : 10px ; margin-bottom: 1Opx">Experience 1</h6>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Nom de l'entreprise </label>
                                    <input type="text" class="form-control" name="NomEntreprise1" id="email"
                                        placeholder="Prénom" required>
                                </div>


                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Date de debut</label>
                                        <input type="date" class="form-control" name="debut1" id="email"
                                            placeholder="Date de debut" required>
                                    </div>
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Date de Fin</label>
                                        <input type="date" class="form-control" name="fin1" id="email"
                                            placeholder="Date de Fin" required>
                                    </div>


                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="message" class="col-form-label">Description du poste</label>
                                        <textarea class="form-control" name="description1" id="message" cols="30" rows="4" placeholder="A propos de moi"></textarea>
                                    </div>
                                </div>
                                <h6 style="margin-top : 10px ; margin-bottom: 1Opx" >Experience 2</h6>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Nom de l'entreprise </label>
                                    <input type="text" class="form-control" name="NomEntreprise2" id="email"
                                        placeholder="Prénom" required>
                                </div>


                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Date de debut</label>
                                        <input type="date" class="form-control" name="debut2" id="email"
                                            placeholder="Date de debut" required>
                                    </div>
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="" class="col-form-label">Date de Fin</label>
                                        <input type="date" class="form-control" name="fin2" id="email"
                                            placeholder="Date de Fin" required>
                                    </div>



                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="message" class="col-form-label">Description du poste</label>
                                        <textarea class="form-control" name="description2" id="message" cols="30" rows="4" placeholder="A propos de moi"></textarea>
                                    </div>
                                </div>
                                <h5 style="margin-top : 10px ; margin-bottom: 1Opx">FORMATION</h5>
                                <h6 style="margin-top : 10px ; margin-bottom: 1Opx">Diplome scolaire</h6>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Intitulé du diplome </label>
                                    <input type="text" class="form-control" name="intitule1" id="email"
                                        placeholder="Prénom" required>
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Nom de l'ecole </label>
                                    <input type="text" class="form-control" name="NomEcole1" id="email"
                                        placeholder="Prénom" required>
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Date d'obtention</label>
                                    <input type="date" class="form-control" name="obtention1" id="email"
                                        placeholder="Date de Fin" required>
                                </div>

                                <h6>Diplome universitaire</h6>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Intitulé du diplome </label>
                                    <input type="text" class="form-control" name="intitule2" id="email"
                                        placeholder="Prénom" required>
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Nom de l'université </label>
                                    <input type="text" class="form-control" name="NomEcole2" id="email"
                                        placeholder="Prénom" required>
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Date d'obtention</label>
                                    <input type="date" class="form-control" name="obtention2" id="email"
                                        placeholder="Date de Fin" required>
                                </div>

                                <h5 style="margin-top : 10px ; margin-bottom: 1Opx">Compétences</h5>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Compétence</label>
                                    <input type="text" class="form-control" name="competence1" id="email"
                                        placeholder="Compétence" required>
                                </div>
                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Compétence</label>
                                    <input type="text" class="form-control" name="competence2" id="email"
                                        placeholder="Compétence" required>
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Compétence</label>
                                    <input type="text" class="form-control" name="competence3" id="email"
                                        placeholder="Compétence" required>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <script>
        function toggleInput(select) {
  var input = document.getElementById("myOtherInput");
  var input2 = document.getElementById("test");
  if (select.value === "autre") {
    input.style.display = "inline-block";
  } else {
    input.style.display = "none";

  }
}

$(document).ready(function() {
			var count = parseInt($('#inputCount').val());
			var inputHtml = '';

			for (var i = 0; i < count; i++) {
				inputHtml += '<div class="form-group">';
				inputHtml += '<label for="input' + i + '">Input ' + (i + 1) + ' :</label>';
				inputHtml += '<input type="text" class="form-control" id="input' + i + '">';
				inputHtml += '</div>';
			}

			$('#inputContainer').html(inputHtml);

			$('#inputCount').change(function() {
				var count = parseInt($(this).val());
				var inputHtml = '';

				for (var i = 0; i < count; i++) {
					inputHtml += '<div class="form-group">';
					inputHtml += '<label for="input' + i + '">Input ' + (i + 1) + ' :</label>';
					inputHtml += '<input type="text" class="form-control" id="input' + i + '">';
					inputHtml += '</div>';
				}

				$('#inputContainer').html(inputHtml);
			});
		});


    </script>
@endsection

