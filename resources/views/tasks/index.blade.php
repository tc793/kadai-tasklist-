@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
@if (count($tasks) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    {!! link_to_route('tasks.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}
@endsection