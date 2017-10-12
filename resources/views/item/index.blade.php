@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Liste des produits</h1></div>

                    <div class="panel-body">
                        <ul>
                            @foreach ($items as $item)
                                <li>
                                    <img src="{{ $item->Image }}" alt="" width="100px">
                                    {{ $item->Nom }}, {{ $item->Description }},
                                    {{ $item->Prix }} euros
                                </li>
                                <button>Add</button>
                            @endforeach
                        </ul>

                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Liste des produits sélectionnés</h1></div>

                    <div class="panel-body">
                        <p>{{ $selections[0] }}</p>
                        <p>{{ $selections[1] }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection