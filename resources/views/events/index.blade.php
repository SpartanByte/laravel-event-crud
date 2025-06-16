{{-- Get default layout --}}
@extends('layouts.default')
@section('title', 'All Events')
@section('content')

    <div class="1/2 mx-auto text-2xl text-white mt-20 pt-3 pb-3 mb-3">
        <div class="w-5/8 mx-auto">
            <h1 class="pb-3">All Events</h1>
            <p class="text-sm">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque hendrerit maximus orci in pharetra. Vestibulum ornare lacus rhoncus, facilisis quam sit amet, gravida purus. In et lectus pulvinar, malesuada odio ut, maximus magna. Nam finibus, lectus a molestie fringilla, orci mi ultrices justo, in rutrum nisi urna ut nunc. Cras elementum non nibh sit amet maximus. Proin eu mattis lacus, nec faucibus tellus. Nunc eu dolor semper, lacinia dolor vel, placerat ex. Pellentesque rhoncus condimentum augue, vel gravida lacus tempor at. Etiam efficitur feugiat tellus, nec accumsan lorem porta a. Duis eu elit aliquet, laoreet lacus ac, egestas neque. Fusce consequat quam a felis placerat iaculis. Mauris scelerisque elit ut ante lacinia, gravida interdum ex vulputate. Quisque at consectetur elit. Fusce ac felis nec purus vestibulum dapibus. Proin in semper purus, lacinia lobortis ante.
            </p>
            <table class="mx-auto text-sm mt-5 text-black">
                <thead>
                    <tr class="bg-cyan-600 border-2">
                        <th class="p-2">Event Date</th>
                        <th class="p-2">Artist</th>
                        <th class="p-2">Venue</th>
                        <th class="p-2">City/State</th>
                        <th class="p-2">Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr class="even:bg-stone-300 odd:bg-white">
                            <td class="border-2 p-2 text-auto">{{$event->event_date}}</td>
                            <td class="border-2 p-2 text-auto">{{$event->artist_name}}</td>
                            <td class="border-2 p-2 text-auto">{{$event->venue}}</td>
                            <td class="border-2 p-2 text-auto">{{$event->city_state}}</td>
                            <td class="border-2 p-2 text-auto">{{$event->description}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection