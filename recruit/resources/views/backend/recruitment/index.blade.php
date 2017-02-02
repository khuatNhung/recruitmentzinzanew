@extends('layouts.admin')
 
@section('content')
<div class="view_list">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Recruitment</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
             <a class="btn btn-success" href="{{ route('recruitment.create') }}"> Tạo mới</a>
        </div>
    </div>
    {{-- {!! Form::open(['url' => 'foo/bar']) !!} --}}
    <form>
    <div class="row search_recruitment">
        <div class="col-lg-1">
            <label for="lable_created_at">Từ ngày</label>
            {{-- {!!Form::label('lable_created_at', ' Từ ngày ')!!} --}}
        </div>
        <div class="col-lg-2">
            <input type="text" id="created_at" class="datepicker" placeholder="click choose date">
            {{-- {!!Form::text('created_at',null,array('id'=>'created_at','class'=>'datepicker','placeholder'=>'click choose date'));!!} --}}
        </div>
        <div class="col-lg-1">
            {{-- {!!Form::label('lable_deadline', ' Đến ngày')!!} --}}
            <label for="lable_deadline">Đến ngày</label>
        </div>
        <div class="col-lg-2">
            {{-- {!!Form::text('deadline',null,['id'=>'deadline','class'=>'datepicker','placeholder'=>'click choose date']);!!} --}}
            <input type="text" id="deadline" class="datepicker" placeholder="Click choose date">
        </div>
        <div class="col-lg-2">
            <a class="btn btn-default" href="{{ route('recruitment.create') }}"> Tìm kiếm</a>
        </div>
    </div>

    {{-- {!! Form::close() !!} --}}
    </form>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <tr>
            <th>STT</th>
            <th width="200px">Tiêu đề</th>
            <th>Vị trí tuyển dụng</th>
            <th width="280px"> Yêu cầu</th>
            <th>Ngày đăng</th>
            <th>Ngày kết thúc</th>
            <th></th>
        </tr>
    <?php 
        $class = array('active','success','warning','danger','info');
        $j=-1;
    ?>
    @foreach ($items as $key => $item)
    <?php 
        $created_at=date_create($item->created_at);
        $deadline=date_create($item->deadline);
        if($i%5==0) $j=-1;
    ?>
    <tr class='{{$class[++$j]}}'>
        <td>{{ ++$i }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->position }}</td>
        <td>{{ $item->requirement }}</td>
        <td>{!! date_format($created_at,"d/m/Y") !!}</td>
        <td>{!! date_format($deadline,"d/m/Y") !!}</td>
        <td>
            <a class="btn btn-info" href="{{ route('recruitment.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('recruitment.edit',$item->id) }}">Edit</a>
            {{-- {!! Form::open(['method' => 'DELETE','route' => ['recruitment.destroy', $item->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!} --}}
             <form action="RecruitmentController@destroy" method="DELETE" style='display:inline' >
            {{-- {!! Form::open(['method' => 'DELETE','route' => ['recruitment.destroy', $item->id],'style'=>'display:inline']) !!} --}}
            {{-- {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} --}}
            <input type="submit" class="btn btn-danger">
            {{-- {!! Form::close() !!} --}}
            </from>
        </td>
    </tr>
    @endforeach
    </table>

    {!! $items->render() !!}
</div>

{{-- @endsection --}}
@stop
