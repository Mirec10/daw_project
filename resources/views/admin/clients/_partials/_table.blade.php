<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
    <tr>
        <th>#</th>
        <th>Názov SK</th>
        <th>Vytvorené dňa</th>
        <th>Akcie</th>
    </tr>
    </thead>


    <tbody>
    @foreach($clients as $client)
        <tr>
            <td>{{ $client->id }}</td>
            <td>{{ $client->name_sk }}</td>
            <td>{{ $client->formatted_created_at }}</td>
            <td>
                <div class="btn-group text-right" role="group">
                    <button id="row-actions-{{ $client->id }}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Možnosti
                    </button>
                    <div class="dropdown-menu" aria-labelledby="row-actions-{{ $client->id }}">
                        <a class="dropdown-item" href="{{ route('clients.edit', $client->id) }}">
                            Editovať
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('clients.delete', $client->id) }}" method="post" style="display: inline-block; width: 100%;">
                            @csrf
                            <button data-entity="{{ 'Klient - ' . $client->name_sk }}" class="delete-button dropdown-item pointer" type="button">
                                Vymazať
                            </button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>