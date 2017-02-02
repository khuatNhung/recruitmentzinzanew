@extends('layouts.admin')
 
@section('content')
<div class="view_list">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Quản lý CV</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
             <a class="btn btn-success" href="{{ route('cv.create') }}"> Tạo mới</a>
        </div>
    </div>
    {{-- {!! Form::open(['url' => 'foo/bar']) !!} --}}
    <form>
    <div class="row search-cv">
        <div class="col-lg-2">
            <label for="display">Display</label>
            {{-- {!!Form::label('display', 'Display');!!} --}}
            {{-- {!!Form::select('display', ['1' => '10', '2' => '15']);!!} --}}
            <select name="display" id="display">
                <option value="1">10</option>
                <option value="2">20</option>
                <option value="3">30</option>
            </select>
            {{-- <input type="text"> --}}
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-2">
                    <label for="lable_created_at">From</label>
                    {{-- {!!Form::label('lable_created_at', 'From')!!} --}}
                </div>
                <div class="col-lg-4">
                    <input type="text" id="from" class="datepicker" placeholder="click choose date">
                    {{-- {!!Form::text('from',null,array('id'=>'from','class'=>'datepicker','placeholder'=>'click choose date'));!!} --}}
                </div>
                <div class="col-lg-1">
                    <label for="lable_deadline">To</label>
                    {{-- {!!Form::label('lable_deadline', 'To')!!} --}}
                </div>
                <div class="col-lg-5">
                    <input type="text" id="to" class="datepicker" placeholder="click choose date">
                    {{-- {!!Form::text('to',null,['id'=>'to','class'=>'datepicker','placeholder'=>'click choose date']);!!} --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-2">
                    Status
                </div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-5">
                            <input type="radio" name="gender" value="actived">Actived
                            {{-- {!!Form::radio('name', 'value',['id'=>'actived']);!!}
                            {{ Form::label('actived', 'actived') }} --}}
                        </div>
                        <div class="col-lg-7">
                            {{-- {!!Form::radio('name', 'value',['id'=>'notactived']);!!}
                            {{ Form::label('notactive', 'not actived') }} --}}
                            <input type="radio" name="gender" value="notactived">not actived
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <input type="radio" name="gender1" value="danhgia">assess
                            {{-- {!!Form::radio('name1', 'value',['id'=>'danhgia']);!!}
                            {{ Form::label('danhgia', 'assess') }} --}}
                        </div>
                        <div class="col-lg-7">
                            <input type="radio" name="gender1" value="chuadanhgia">not assess
                            {{-- {!!Form::radio('name1', 'value',['id'=>'chuadanhgia']);!!}
                            {{ Form::label('chuadanhgia', 'not assess') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-2">Result</div>
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-5">
                            <input type="radio" name="result" value="pass">pass
                            {{-- {!!Form::radio('result', 'value',['id'=>'pass']);!!}
                            {{ Form::label('pass', 'pass') }} --}}
                        </div>
                        <div class="col-lg-7">
                            <input type="radio" name="result" value="fail">fail
                            {{-- {!!Form::radio('result', 'value',['id'=>'fail']);!!}
                            {{ Form::label('fail', 'fail') }} --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row search-cv">
        <div class="col-lg-2">
            <div class="row">
                <div class="col-lg-2">
                    <label for="skill">Skill</label>
                    {{-- {!!Form::label('', 'Skill')!!} --}}
                </div>
                <div class="col-lg-10">
                    <select name="skill" id="skill">
                        <option value="">C#</option>
                        <option value="">C+</option>
                        <option value="">Php</option>
                    </select>
                    {{-- {!!Form::select('size', ['C' => 'C#', 'C+' => 'C+','P'=>'PHP'], null, ['placeholder' => 'Choose...']);!!} --}}
                </div>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="row">
                <div class="col-lg-5">
                    <label for="">Experience</label>
                        {{-- {!!Form::label('', 'Experience')!!} --}}
                </div>
                <div class="col-lg-7">
                    <select name="experience" id="experience" placeholder='Choose...'>
                        <option value="">1 năm</option>
                        <option value="">2 năm</option>
                        <option value="">3 năm</option>
                        <option value="">>5 năm</option>
                    </select>
                    {{-- {!!Form::select('size', ['1' => '1 năm', '2' => '2 năm','5+'=>'>5 năm'], null, ['placeholder' => 'Choose...']);!!} --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="row">
                <div class="col-lg-2">
                    <label for="lable_created_at">Name</label>
                    {{-- {!!Form::label('lable_created_at', 'Name')!!} --}}
                </div>
                <div class="col-lg-10">
                    <input type="text" id="created_at" placeholder="search name">
                    {{-- {!!Form::text('created_at',null,array('id'=>'created_at','placeholder'=>'search name'));!!} --}}
                </div>
            </div>
        </div>
        <div class="col-lg-3">
             <div class="row">
                <div class="col-lg-2">
                    <label for="lable_created_at">Email</label>
                    {{-- {!!Form::label('lable_created_at', 'Email')!!} --}}
                </div>
                <div class="col-lg-10">
                    <input type="text" id="email" placeholder="search email">
                    {{-- {!!Form::text('created_at',null,array('id'=>'created_at','placeholder'=>'search email'));!!} --}}
                </div>
            </div>
        </div>
        <div class="col-lg-1">
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
            <th>
                <input type="checkbox" name="choose" onclick="checkall()" id="checkall">
            </th>
            <th>STT</th>
            <th>Image</th>
            <th width="200px">Name</th>
            <th>Email</th>
            <th width="280px">Post date</th>
            <th>Status</th>
            <th></th>
        </tr>
    <?php 
        $class = array('active','success','warning','danger','info');
        $j=-1;
    ?>
    @foreach ($items as $key => $item)
    <?php 
        $created_at=date_create($item->created_at);
        if($i%5==0) $j=-1;
    ?>
    <tr class='{{$class[++$j]}}'>
        <td><input type="checkbox" name="choose" id="check{{$i}}"></td>
        <td>{{ ++$i }}</td>
        <td>
            <img width="100px" src="{{url('public/image/avata.png')}}" alt="">
        </td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>{!! date_format($created_at,"d/m/Y") !!}</td>
        <td>{!! $item->status !!}</td>
        <td>
            <a class="btn btn-info" href="{{ route('recruitment.show',$item->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('recruitment.edit',$item->id) }}">Edit</a>
            <form action="RecruitmentController@destroy" method="DELETE" style='display:inline'>
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
