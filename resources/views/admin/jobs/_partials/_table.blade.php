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
    @foreach($jobs as $job)
        <tr>
            <td>{{ $job->id }}</td>
            <td>{{ $job->name_sk }}</td>
            <td>{{ $job->formatted_created_at }}</td>
            <td>
                <div class="btn-group text-right" role="group">
                    <button id="row-actions-{{ $job->id }}" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Možnosti
                    </button>
                    <div class="dropdown-menu" aria-labelledby="row-actions-{{ $job->id }}">
                        <a class="dropdown-item" href="{{ route('jobs.edit', $job->id) }}">
                            Editovať
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('jobs.delete', $job->id) }}" method="post" style="display: inline-block; width: 100%;">
                            @csrf
                            <button data-entity="{{ 'Klient - ' . $job->name_sk }}" class="delete-button dropdown-item pointer" type="button">
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