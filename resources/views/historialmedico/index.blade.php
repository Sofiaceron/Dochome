   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr class="table-info">
                    <th>Id</th>
                    <th>Nombre y Apellidos</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Motivo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($historialmedicos as $historialmedico)
                    <tr>
                        <th scope="row">{{ $historialmedico->id }}</th>
                        <td>{{ $historialmedico->idnombre }}</td>
                        <td>{{ $historialmedico->fecha }}</td>
                        <td>{{ $historialmedico->hora }}</td>
                        <td>{{ $historialmedico->motivo }}</td>
                        <td>
                            <form action="{{ route('historialmedico.destroy', $historialmedico->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

