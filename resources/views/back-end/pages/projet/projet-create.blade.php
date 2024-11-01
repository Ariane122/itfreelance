@extends('back-end.layouts.app')
@section('backContent')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                        <li class="breadcrumb-item active">Create Project</li>
                    </ol>
                </div>
                <h4 class="page-title">Create Project</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <form method="POST" action="{{ route('admin.projet.addProjet') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="mb-3">
                                    <label for="exampleFormControlSelect1">Entreprise</label>
                                    <select class="form-control" data-toggle="select2" data-width="100%" name="entreprise_id" required>
                                        <option>choisir</option>
                                        @foreach ($entreprises as $entreprise)
                                            <option value="{{ $entreprise->id }}">{{ $entreprise->nom_entreprise }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="projectname" class="form-label">Project Name</label>
                                    <input type="text" id="projectname" class="form-control" name="titre" placeholder="Enter project name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="project-overview" class="form-label">Project Overview</label>
                                    <textarea class="form-control" name="description" id="project-overview" rows="5" placeholder="Enter some brief about project.." required></textarea>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Date début</label>
                                            <input type="text" id="basic-datepicker" name="debut" class="form-control" placeholder="Basic datepicker" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label"> Date fin</label>
                                            <input type="text" id="basic-datepicker" class="form-control" name="fin" placeholder="Basic datepicker" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="project-budget" class="form-label">Budget</label>
                                    <input type="text" id="project-budget" name="budget" class="form-control" placeholder="Enter project budget" required>
                                </div>
                                <div class="mb-3">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="text-uppercase mt-0 mb-3 bg-light p-2">Cahier de charge</h5>
                                            <div class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews">
                                                <div class="fallback">
                                                    <input name="files[]" type="file" multiple />
                                                </div>
                                                <div class="dz-message needsclick">
                                                    <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                    <h3>Déposez les fichiers ici ou cliquez pour télécharger.</h3>
                                                </div>
                                            </div>
                                            <div class="dropzone-previews mt-3" id="file-previews"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle me-1"></i> Ajouter</button>
                                <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x me-1"></i> Cancel</button>
                            </div>
                        </div>
                    </form>

                </div> <!-- end card-body -->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
    <!-- end row-->

</div>
@endsection
