<ul class="navbar-nav mx-auto">
    <li class="nav-item dropdown">
        <a class="nav-link" href="{{ route('/') }}">Trang chủ</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tin tức <i class="ti-angle-down ml-1"></i>
        </a>
        <div class="dropdown-menu">
            @php
                $danh_mucs = DB::table('categories')->get();
            @endphp
            @foreach ($danh_mucs as $danh_muc)
                <a class="dropdown-item" href="{{ route('danh-muc', $danh_muc->slug) }}">{{ $danh_muc->name }}</a>
            @endforeach
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('lien-he') }}">Liên hệ</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('gioi-thieu') }}">Giới thiệu</a>
    </li>
</ul>
