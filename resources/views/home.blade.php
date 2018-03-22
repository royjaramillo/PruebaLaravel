@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <div class="">
                <div class="">Registro de Personas</div>

                <div class="panel-body">

                    <table id="tablitau" align="center" class="grilla table table-responsive-sm table-sm table-hover" cellspacing="0" border="2">
                        
                        <thead class="thead bg-primary" align="center">
                            
                            <tr>
                                <th>Codigo</th>
                                <th>DNI</th>
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Fecha de nacimiento</th>
                                <th>Sexo</th>
                                <th>Acci&oacute;n</th>
                                <th>Acci&oacute;n</th>
                            </tr>

                        </thead>

                        <tbody>
                            
                            @foreach($personas as $items)
                            <tr>
                                
                                <td>{{ $items->codigo }}</td>
                                <td>{{ $items->dni }}</td>
                                <td>{{ $items->nombre }}</td>
                                <td>{{ $items->apll_paterno }}</td>
                                <td>{{ $items->apll_materno }}</td>
                                <td>{{ \Carbon\Carbon::parse($items->f_nacimiento)->format('d/m/Y') }}</td>
                                <td>{{ ($items->sexo=='F')?'Femenino':'Masculino' }}</td>

                            </tr>
                            @endforeach

                        </tbody>

                    </table>

                    <p>
                        
                        {{ $personas->total() }} registros |
                        página {{ $personas->currentPage() }}
                        de {{ $personas->lastPage() }}

                    </p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
