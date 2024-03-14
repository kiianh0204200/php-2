@extends('layout.main')
@section('content')
    @if(isset($_SESSION['errors']) && isset($_GET['msg']))
        <ul>
            @foreach($_SESSION['errors'] as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    @if(isset($_SESSION['success']) && isset($_GET['msg']))
        <span style="color: green">{{ $_SESSION['success'] }}</span>
    @endif
    <form action="{{ route('update-customer/'.$customers->id) }}" method="POST">
        Tên sp <input type="text" name="ten_sp" value="{{ $customers->ten_sp }}">
        Gia <input type="text" name="gia" value="{{ $customers->gia }}">
        <input type="submit" name="edit" value="Sửa">
    </form>
@endsection