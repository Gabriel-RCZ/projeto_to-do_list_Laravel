@extends('layouts.app')

@section('content')
<div class="container mt-5">

    <h1 class="text-center fw-bold display-5 mb-4">Minhas Tarefas</h1>

    <a href="{{ route('tasks.create') }}" class="btn btn-outline-success mb-3">
        <i class="bi bi-plus-circle"></i> Nova Tarefa
    </a>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Filtro de Status -->
    <div class="mb-4">
        <form action="{{ route('tasks.index') }}" method="GET" class="d-flex align-items-center gap-2">
            <label for="status" class="form-label mb-0">Filtrar por Status:</label>
            <select name="status" id="status" class="form-select w-auto">
                <option value="Todas" {{ request('status') == 'Todas' ? 'selected' : '' }}>Todas</option>
                <option value="Pendente" {{ request('status') == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="Concluída" {{ request('status') == 'Concluída' ? 'selected' : '' }}>Concluída</option>
            </select>
            <button type="submit" class="btn btn-primary btn-sm">Filtrar</button>
        </form>
    </div>

    <!-- Tabela -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center p-2">Título</th>
                    <th class="text-center p-2">Descrição</th>
                    <th class="text-center p-2">Status</th>
                    <th class="text-center p-2">Criado em</th>
                    <th class="text-center p-2">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td class="text-center p-2">{{ $task->title }}</td>
                    <td class="text-center p-2">{{ $task->description }}</td>
                    <td class="text-center p-2">{{ $task->status }}</td>
                    <td class="text-center p-2">{{ $task->created_at->format('d/m/Y') }}</td>
                    <td class="text-center p-2">
                        <a href="{{ route('tasks.edit', $task) }}" class="btn btn-sm btn-warning">Editar</a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Deseja excluir?')" class="btn btn-sm btn-danger">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Paginação -->
    <div class="d-flex justify-content-center mt-3">
        {{ $tasks->links() }}
    </div>

</div> <!-- fecha container -->
@endsection
