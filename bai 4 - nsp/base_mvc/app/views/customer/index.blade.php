@extends('layout.main')
@section('content')
 
    <button ><a href="{{ route('add-customer') }}">Thêm sản phẩm</a> </button>
    <table border="1" >
        <tr>
            <td>id</td>
            <td>ten</td>
            <td>gia</td>
        </tr>
        @foreach ($customers as $td)
        <tr>
            <td>{{$td->id}}</td>
            <td>{{$td->ten_sp}}</td>
            <td>{{$td->gia}}</td>
            <td>
                <a href="{{ route('edit-customer/'.$td->id) }}">Sửa</a>
                <a href="{{ route('delete-customer/'.$td->id) }}">Xóa</a>
            </td>
        </tr>
        
        @endforeach
     </table>

@endsection
