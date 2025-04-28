@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center fw-bold display-5 mb-4">Criar tarefa</h1>

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrição</label>
            <textarea name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="Pendente">Pendente</option>
                <option value="Concluída">Concluída</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
@endsection
