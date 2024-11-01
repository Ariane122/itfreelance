@extends('front-end.layouts.app')
@section('frontContent')
<div id="content" class="site-content">
            <div class="page-header flex-middle">
                <div class="container">
                    <div class="inner flex-middle">
                        <h1 class="page-title">Free lencer</h1>
                        <ul id="breadcrumbs" class="breadcrumbs none-style">
                            <li><a href="index.html">Home</a></li>
                            <li class="active">Free lencer</li>
                        </ul>    
                    </div>
                </div>
            </div>
            <div class="row">
        <div class="col-12">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            
        </div>
    </div>
            <section class="contact-page">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-left">
                                <div class="ot-heading">
                                    <span>// Free lencer details</span>
                                    <!-- <h2 class="main-heading">Contact us</h2> -->
                                </div>
                                <div class="space-5"></div>
                                <p>
                                Assurez-vous de maîtriser une ou plusieurs compétences en forte demande, comme le développement web, mobile,
                                 DevOps, cybersécurité, cloud computing, gestion de bases de données
                                </p>
                                <!-- <div class="contact-info box-style1">
                                    <i class="flaticon-world-globe"></i>                    
                                    <div class="info-text">
                                        <h6>Our Address:</h6>
                                        <p>411 University St, Seattle, USA</p>
                                    </div>
                                </div> -->
                                <div class="contact-info box-style1">
                                    <!-- <i class="flaticon-envelope"></i> -->
                                    <div class="info-text">
                                        <!-- <h6>Our Mailbox:</h6> -->
                                        <p>
                                        Les technologies évoluent rapidement, donc une formation régulière via des certifications, des tutoriels ou des formations en ligne est cruciale
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-info box-style1">
                                    <!-- <i class="flaticon-phone-1"></i> -->
                                    <div class="info-text">
                                        <!-- <h6>Our Phone:</h6> -->
                                        <p>
                                        Spécialisez-vous dans un domaine particulier (par exemple, Java, Angular, DevOps, etc.) pour vous démarquer et attirer des clients spécifiques.
                                        Une expertise bien définie dans un domaine peut vous rendre plus attractif pour des missions spécialisées.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-lg-6">
                            <!-- <form id="ajax-form" name="ajax-form" action="contact.php" method="post" class="wpcf7">
                                <div class="main-form">
                                    <h2>Prêt à commencer ?</h2>
                                    <p class="font14">Your email address will not be published. Required fields are marked *</p>
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                                    </p>
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                                    </p>
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                                    </p>
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                                    </p>
                                    <p>
                                        <label for="name"> <span class="error" id="err-name">please enter name</span></label>
                                        <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Name *" required="">
                                    </p>
                                    <p>
                                        <label for="email"> 
                                            <span class="error" id="err-email">please enter e-mail</span>
                                            <span class="error" id="err-emailvld">e-mail is not a valid format</span>
                                        </label>
                                        <input type="email" name="email" id="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email *" required="">
                                    </p>
                                    <p>
                                        <label for="message"></label>
                                        <textarea name="message" id="message" cols="40" rows="10" class="" aria-invalid="false" placeholder="Message..." required=""></textarea>
                                    </p>
                                    <p><button type="submit" id="send" class="octf-btn octf-btn-light">Send Message</button></p>
                                    <div class="clear"></div>   
                                    <div class="error" id="err-form">There was a problem validating the form please check!</div>
                                    <div class="error" id="err-timedout">The connection to the server timed out!</div>
                                    <div class="error" id="err-state"></div>
                                </div>
                            </form> -->

                    <form id="ajax-form" name="ajax-form" class="px-3 wpcf7" method="POST" action="{{ route('freelence.create') }}" enctype="multipart/form-data">

                    <div class="main-form">
                    <h2>Prêt à commencer ?</h2>

                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Nom</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="nom" placeholder="Nom">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1">Prenom</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="prenom" placeholder="Prenom ">
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email</label>
                        <input class="form-control" type="email" id="emailaddress" required="" name="email" placeholder="john@deo.com">
                    </div>

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Mot de passe</label>
                        <input class="form-control" type="password" id="pass" required="" name="password" >
                    </div>

                    <div class="mb-3">
                        <label for="exampleFormControlSelect1" class="form-label">Domaine</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="categorie" required>
                            <option>choisir</option>
                            @foreach ($categories as $categorie)
                            <option value="{{ $categorie->id }}">{{ $categorie->libelle }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="sousCategorie" class="form-label">Compétences</label>
                        <select class="form-control" id="sousCategorie" name="competence[]" multiple  required>
                            <option value="">choisir</option>
                        </select>
                    </div>

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#exampleFormControlSelect1').on('change', function() { // Mettre à jour l'ID ici
                                var categorieId = $(this).val();
                                console.log("ID ::::::::::", categorieId);

                                if (categorieId) {
                                    $.ajax({
                                        url: '{{ route("sous-categories", ":id") }}'.replace(':id', categorieId)
                                        , type: 'GET'
                                        , dataType: 'json'
                                        , success: function(data) {
                                            $('#sousCategorie').empty();
                                            $('#sousCategorie').append('<option value="">choisir</option>');
                                            $.each(data, function(key, value) {
                                                $('#sousCategorie').append('<option value="' + value.id + '">' + value.libelle + '</option>');
                                            });
                                        }
                                        , error: function(xhr, status, error) {
                                            console.error("Erreur AJAX:", status, error);
                                            console.error("Détails:", xhr.responseText);
                                        }
                                    });

                                } else {
                                    $('#sousCategorie').empty();
                                    $('#sousCategorie').append('<option value="">choisir</option>');
                                }
                            });
                        });

                    </script>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Niveau</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="niveau" placeholder="Civilite">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Telephone</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" required name="telephone" placeholder="Telephone">
                    </div>
                    <div class="mb-3">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">CV</h5>
                                <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews">
                                    <div class="fallback">
                                        <input name="files[]" type="file" multiple />
                                    </div>
                                    <div class="dz-message needsclick">
                                        <i class="h1 text-muted dripicons-cloud-upload"></i>
                                        <h3>Déposez le CV ici ou cliquez pour télécharger.</h3>
                                    </div>
                                </div>
                                <div class="dropzone-previews mt-3" id="file-previews"></div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3 text-center">
                        <button class="btn btn-primary" type="submit">Inscrivez-vous</button>
                    </div>

                     </div>

                   
                </form>

                            <div class="clear"></div>
                            <div id="ajaxsuccess">Successfully sent!!</div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
@endsection

