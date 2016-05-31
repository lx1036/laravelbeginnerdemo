@extends('layouts.app)

@section('content')
    <div class="panel-body">
        @include('common.errors')
        <form action="/task" method="post" class="form-horizontal">
            {{csrf_field()}}

            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>��������
                    </button>
                </div>
            </div>
        </form>
    </div>

    @if(count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">

            </div>
            <div class="panel-body">
                <table class="tabel tabel-striped task-tabel">
                    <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td class="table-text">
                                <div>{{$task->name}}</div>
                            </td>
                            <td>
                                {{--delete button--}}
                                <form action="/task/{{$task->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button>ɾ������</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

@endsection