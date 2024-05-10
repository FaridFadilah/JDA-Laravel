@extends("layouts.app")

@section("title")
    User Detail
@endsection

@section("content")
    <h1>Ini halaman detail users</h1>
    <ul>
        {{-- <h1>{{ $isTrue == "true" ? $pengguna["nama"] : "kamu tidak memiliki akses!" }}</h1> --}}

                @include("component.detailUser", [
                    "user" => $user
                ])

        {{-- @php
            $i = 0;
        @endphp
        @while($i < count($users))

            <h1>{{ $users[$i]["nama"] }}</h1>
            <h1>{{ $users[$i]["pekerjaan"] }}</h1>
            {{ $i++ }}
        @endwhile --}}

        {{-- @dd(count($users)) --}}
        {{-- @for($i = 0; $i < count($users); $i++)
            <h1>{{ $users[$i]["nama"] }}</h1>
            <h1>{{ $users[$i]["pekerjaan"] }}</h1>
        @endfor --}}

        {{-- @if($isTrue != "false")
        
        <li>{{ $pengguna["nama"] }}</li>    
        <li>{{ $pengguna["pekerjaan"] }}</li>

        @elseif($isTrue == "tidak") --}}
        {{-- <li>Kamu Tidak Memiliki Akses.</li>
        @endif --}}
    </ul>

@endsection