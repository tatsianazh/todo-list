@extends('layouts.admin')
@section('content')

    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Добавить категорию</h3>
        </div>
        <form action="{{route('admin.task.store')}}" method="post" role="form" novalidate="novalidate">
            @csrf
            <div class="box-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Название</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Описание</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Статус</label>
                    <select class=" form-control-label" name="status_id" id="status_id">
                        @foreach($statuses as $status)
                            <option value="{{$status->id}}">{{$status->name}}</option>
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

@endsection