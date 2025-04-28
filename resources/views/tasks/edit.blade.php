@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center fw-bold display-5 mb-4">Editar Tarefa</h1>

    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" value="{{ $task->title }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea name="description" class="form-control">{{ $task->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="Pendente" {{ $task->status == 'Pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="Concluída" {{ $task->status == 'Concluída' ? 'selected' : '' }}>Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
