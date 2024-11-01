@extends('presta-service.layouts.app')
@section('prestaService')
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3"><strong>Calendrier des contrats</strong></h5>
    <div class="row mt-3">
        <div class="col-md-12 col-sm-12">
            <!--Full Calendar-->
            <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm lh-sm">
                {{-- <div class="email-msg">

                    @if($events->isNotEmpty())
                    <div id="calendar"></div> <!-- Affichage du calendrier si nécessaire -->

                    <!-- Boucle pour afficher chaque événement -->
                    @foreach($events as $event)
                    <p><strong>Titre : </strong> {{ $event['title'] }}</p>
                    <p><strong>Date de début : </strong> {{ $event['start'] }}</p>
                    @if(isset($event['end']))
                    <p><strong>Date de fin : </strong> {{ $event['end'] }}</p>
                    @endif
                    <hr>
                    @endforeach
                    @else
                    <p>Aucun contrat trouvé</p>
                    @endif


                </div> --}}

                {{-- <div class="email-msg">
                    @if($events->isNotEmpty())
                        <div id="calendar"></div>

                        @foreach($events as $event)
                            <p style="color: #3498db;"><strong>Titre : </strong> {{ $event['title'] }}</p>
                            <p style="color: #3498db;"><strong>Date de début : </strong> {{ $event['start'] }}</p>
                            @if(isset($event['end']))
                                <p style="color: #3498db;"><strong>Date de fin : </strong> {{ $event['end'] }}</p>
                            @endif
                            <hr>
                        @endforeach
                    @else
                        <p style="color: #3498db;">Aucun contrat trouvé</p>
                    @endif
                </div> --}}

                <div class="email-msg">
                    <div id="calendar"></div>
                    @if($events->isNotEmpty())
                        <div id="calendar"></div> <!-- Le calendrier s'affiche ici -->

                        @foreach($events as $event)
                            <p style="color: #3498db;"><strong>Titre : </strong> {{ $event['title'] }}</p>
                            <p style="color: #3498db;"><strong>Date de début : </strong> {{ $event['start'] }}</p>
                            @if(isset($event['end']))
                                <p style="color: #3498db;"><strong>Date de fin : </strong> {{ $event['end'] }}</p>
                            @endif
                            <hr>
                        @endforeach
                    @else
                        <p style="color: #3498db;">Aucun contrat trouvé</p>
                    @endif
                </div>

            </div>
            <!--/Email messages-->

        </div>
    </div>
</div>

<!--Footer-->
<div class="row mt-5 mb-4 footer">
    <div class="col-sm-8">
        <span>&copy; All rights reserved 2024 designed by <a class="text-theme" href="#">TangSoft</a></span>
    </div>
    <div class="col-sm-4 text-right">
        <a href="#" class="ml-2">Contact Us</a>
        <a href="#" class="ml-2">Support</a>
    </div>
</div>
<!--Footer-->

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid', 'interaction' ],
            initialView: 'dayGridMonth',
            events: [
                @foreach($events as $event)
                    {
                        title: '{{ $event['title'] }}',
                        start: '{{ \Carbon\Carbon::parse($event['start'])->format('Y-m-d') }}',
                        end: '{{ \Carbon\Carbon::parse($event['end'])->format('Y-m-d') }}',
                        allDay: true
                    },
                @endforeach
            ]
        });

        calendar.render();
    });
</script>
