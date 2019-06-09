@extends('layouts.admin')
@section('content')

    <div class="col-md-6">
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Редактировать задачу</h3>
        </div>
        <form action="{{route('admin.task.update', ['task'=>$task])}}" method="post" role="form" novalidate="novalidate">
            <input type="text" name="_method" value="put" hidden="hidden">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{$task->name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Описание</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{!! $task->description !!}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Статус</label>
                    <select class=" form-control-label" name="status_id" id="status_id">
                        @foreach($statuses as $status)
                            <option value="{{$status->id}}"
                                    {{--@if($status->id == $task->status->id) selected @endif--}}>
                                {{$status->name}}
                            </option>
                        @endforeach
                    </select>
                </div>

            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Сохранить</button>
                <button type="button" class="btn btn-danger"><a href="{{route('admin.task.index')}}">Отмена</a></button>
            </div>
        </form>
    </div>
    </div>

@endsection