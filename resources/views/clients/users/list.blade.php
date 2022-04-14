@extends('layouts.client')
@section('title')
    {{$title}}
@endsection

@section('content')
    @if (session('msg'))
        <div class="alert alert-success">{{session('msg')}}</div>
    @endif
    <h1>{{$title}}</h1>
    <a href="{{route('users.add')}}" class="btn btn-primary">Thêm người dùng</a>

    <table class="table table-borderd">
        <thead>
            <th width="50">STT</th>
            <th>Tên</th>
            <th>Email</th>
            <th>Thời gian</th>
            <th with="10%">Sửa</th>
            <th with="10%">Xóa</th>
        </thead>
        <tbody>
            @if(!@empty($usersList))
                @foreach ($usersList as $key => $item)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$item->fullname}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->create_at}}</td>
                        <td><a href="{{route('users.edit', ['id'=>$item->id])}}" class="btn btn-warning btn-sm">Sửa</a></td>
                        <td><a href="{{route('users.delete', ['id'=>$item->id])}}" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa!')">Xóa</a></td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4">Không có người dùng</td>
                </tr>
            @endempty
        </tbody>
    </table>
@endsection
{{-- 
<td><a href="#" class="btn btn-danger btn-edit" onclick="editItem('12345')">Sửa 2</a></td>
<script>
    function editItem(id){
        console.log(111);
    }
</script> --}}