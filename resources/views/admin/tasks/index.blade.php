@extends('layouts.admin')
@section('content')

    <section class="content-header">
        <h1>TODO List</h1>
    </section>
    <button type="button" class="btn btn-success"><a href="{{route('admin.task.create')}}">Добавить задачу</a></button>
    <section>
        @foreach($tasks as $task => $items)
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">TODO</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body no-padding">
                        <table class="table table-condensed">
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Task</th>
                                <th>Action</th>
                                <th style="width: 40px">Comments</th>
                            </tr>
            @foreach($items as $key => $value)
                           <tr>
                              <td>{{$value->id}}</td>
                              <td>{{$value->name}}</td>
                              <td>
                                  <button type="button" class="btn btn-primary"><a href="{{route('admin.task.edit', ['task'=>$value->id])}}">Edit</a></button>
                              </td>
                               <td><span class="label label-success">{{$value->comments_count}}</span>
                               </td>
                           </tr>
            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        @endforeach


    </section>

@endsection
