@extends('layouts.template')

@section('title')
    prova
@endsection

@section('content')
    <main class="container">

        <h3 class="pt-4 pb-1">{{ $rows_number }} righe selezionate su {{ $total_number }}</h3>

        <table class="table table-dark table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Azienda</th>
                    <th scope="col">Stazione di Partenza</th>
                    <th scope="col">Stazione di Arrivo</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Codice Treno</th>
                    <th scope="col">N° Carrozze</th>
                    <th scope="col">Puntuale</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ $train['azienda'] }}</td>
                        <td>{{ $train['stazione_partenza'] }}</td>
                        <td>{{ $train['stazione_arrivo'] }}</td>
                        <td>{{ $train['orario_partenza'] }}</td>
                        <td>{{ $train['orario_arrivo'] }}</td>
                        <td>{{ $train['codice_treno'] }}</td>
                        <td>{{ $train['numero_carrozze'] }}</td>
                        <td>
                            @php
                                if ($train['puntuale']) {
                                    echo 'SI';
                                } else {
                                    echo 'NO';
                                }
                            @endphp
                        </td>
                        <td>
                            @php
                                if ($train['cancellato']) {
                                    echo 'SI';
                                } else {
                                    echo 'NO';
                                }
                            @endphp
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
