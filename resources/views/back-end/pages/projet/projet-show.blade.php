@extends('back-end.layouts.app')
@section('backContent')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);"></a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Project Details</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-light">
                                    <i class="fe-list font-26 avatar-title text-primary"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">942</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Tasks</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-light">
                                    <i class="fe-check-square font-26 avatar-title text-success"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">328</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Tasks Completed</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-light">
                                    <i class="fe-users font-26 avatar-title text-info"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">17</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Team Size</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-light">
                                    <i class="fe-clock font-26 avatar-title text-warning"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">412</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Total Hours Spent</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>

        <div class="row">
            <div class="col-xl-8 col-lg-6">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">
                        <h3 class="mt-0 font-20">
                            {{ $projet->titre }}
                        </h3>
                        <p class="text-muted text-uppercase"><i class="mdi mdi-account-circle"></i> <small>{{ $projet->entreprise->nom_entreprise}}</small></p>
                        <div class="badge bg-soft-success text-success mb-3">{{ $projet->status }}</div>

                        <h5>Project description:</h5>

                        <p class="text-muted mb-2">
                            {{ $projet->description }}
                        </p>

                        <div class="mb-4">
                            <h5>Tags</h5>
                            <div class="text-uppercase">
                                <a href="#" class="badge badge-soft-primary me-1">Html</a>
                                <a href="#" class="badge badge-soft-primary me-1">Css</a>
                                <a href="#" class="badge badge-soft-primary me-1">Bootstrap</a>
                                <a href="#" class="badge badge-soft-primary me-1">JQuery</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Date de début</h5>
                                    <p>{{ $projet->debut }} <small class="text-muted">00:00</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Date de fin</h5>
                                    <p>{{ $projet->fin }} <small class="text-muted">00:00</small></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-4">
                                    <h5>Budget</h5>
                                    <p>{{ $projet->budget }} FCFA</p>
                                </div>
                            </div>
                        </div>

                        <div id="tooltips-container">
                            <h5>Membres de l'équipe de développement:</h5>
                            <a href="javascript:void(0);" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Mat Helme" class="d-inline-block">
                                <img src="{{ asset('back/assets/images/users/user-6.jpg') }}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>

                            <a href="javascript:void(0);" data-bs-container="#tooltips-container" data-bs-toggle="tooltip" data-bs-placement="top" title="Michael Zenaty" class="d-inline-block">
                                <img src="{{ asset('back/assets/images/users/user-7.jpg') }}" class="rounded-circle img-thumbnail avatar-sm" alt="friend">
                            </a>
                        </div>

                    </div> <!-- end card-body-->

                </div>
                <!-- end card-->
                <!-- end card-->
            </div> <!-- end col -->

            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title mb-3">Progress</h5>
                        <div class="mt-3 chartjs-chart" style="height: 320px;">
                            <canvas id="line-chart-example"></canvas>
                        </div>
                    </div>
                </div>
                <!-- end card-->
            </div>
        </div>
        <!-- end row -->

    </div>
   <a href="{{ route('admin.projet') }}" style="color:blue;font-weight: bold;">Retour</a>
    </div>
    <!-- ============================================================== -->
    <!-- footer -->
    <!-- ============================================================== -->
    @include('back-end.partials.footer')
    <!-- ============================================================== -->
    <!-- end footer -->
    <!-- ============================================================== -->
    </div>
@endsection
