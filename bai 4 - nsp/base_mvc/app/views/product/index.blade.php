@extends('layout.main')
@section('content')
 
    <button ><a href="{{ route('add-product') }}">Thêm sản phẩm</a> </button>
    <table border="1" >
        <tr>
            <td>id</td>
            <td>ten</td>
            <td>gia</td>
            <td>Tác Vụ</td>
        </tr>
        @foreach ($products as $td)
        <tr>
            <td>{{$td->id}}</td>
            <td>{{$td->ten_sp}}</td>
            <td>{{$td->gia}}</td>
            <td>
                <a href="{{ route('edit-product/'.$td->id) }}">Sửa</a>
                <a href="{{ route('delete-product/'.$td->id) }}">Xóa</a>
            </td>
                
        </tr>
        
        @endforeach
     </table>

@endsection

