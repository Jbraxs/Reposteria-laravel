<h1 class="text-primary">Control de Pasteles</h1>
       
<table class="table table-bordered" id="MyTable">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th class="text-center">Nombre</th>
            <th class="text-center">Sabor</th>
            <th class="text-center">Fecha</th>
            <th class="text-center">Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pasteles as $pastel)
        <tr>
            <td class="text-center">{{ $pastel->id }}</td>
            <td class="text-center">{{ $pastel->nombre }}</td>
            <td class="text-center">{{ $pastel->sabor }}</td>
            <td class="text-center">{{ $pastel->created_at }}</td>
            
            <td class="text-center">
            {!! Form::open(['route'=> ['pasteles.destroy',$pastel->id],'method' => 'DELETE'])!!}
                <button type="submit" class="btn btn-danger btn-xs">
                Borrar
                </button>
                <a href="{{ url('/pasteles/'.$pastel->id.'/edit') }}" class="btn btn-info btn-xs">Editar 
                </a>
            </td>
            {!!Form::close()!!}
        </tr>
        @endforeach
    </tbody>
</table>