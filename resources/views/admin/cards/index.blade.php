@extends("layouts.app")

@section("content")
    <h1 class="text-center">
        Cards
    </h1>
    <div class="container">
        <section class="row justify-content-evenly">
            @foreach ($magicCards as $singleCard)
                <div class="card mb-4" style="width: 18rem;">
                    <img src="{{ $singleCard->art_url }}" class="card-img-top" alt="{{ $singleCard->name }} . 'image'">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $singleCard->name }}
                        </h5>
                        <p class="card-text">
                            {{ $singleCard->description }}
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            {{ $singleCard->type }}
                        </li>
                        <li class="list-group-item">
                            {{ $singleCard->artist }}
                        </li>
                    </ul>
                    <div class="card-body">
                        @if ($singleCard->cardColors->count() > 0)
                            <p class="card-text"><b>Colors:</b></p>
                            <ul class="list-group list-group-flush">
                                @foreach ($singleCard->cardColors as $cardColor)
                                    <li class="list-group-item">{{ $cardColor->name ?? $cardColor->color }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p class="card-text">No colors defined.</p>
                        @endif
                    </div>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
@endsection
