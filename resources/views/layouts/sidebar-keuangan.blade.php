<!-- main-sidebar -->
<div class="sticky">
    <aside class="app-sidebar">
        <div class="main-sidebar-header active">
            <a class="header-logo active" href="">
                <img src="{{ asset('nowa_assets') }}/img/brand/logo.png" class="main-logo  desktop-logo" alt="logo">
                <img src="{{ asset('nowa_assets') }}/img/brand/logo.png" class="main-logo  desktop-dark" alt="logo">
                <img src="{{ asset('nowa_assets') }}/img/brand/favicon.png" class="main-logo  mobile-logo" alt="logo">
                <img src="{{ asset('nowa_assets') }}/img/brand/favicon.png" class="main-logo  mobile-dark" alt="logo">
            </a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
{{--dashboard--}}
<div class="main-sidemenu">
    <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"><path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"/></svg></div>
    <ul class="side-menu">
        <li class="side-item side-item-category">Main</li>
        <li class="slide{{ $titlePage == 'Dashboard keuangan' ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ $titlePage == 'Dashboard keuangan' ? ' active' : '' }}" href="{{ route('keuangan.dashboard') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"/>
                </svg>
                <span class="side-menu__label">Dashboards</span>
            </a>
        </li>
{{--Bank--}}
<li class="side-item side-item-category">Master</li>
        <li class="slide{{ ($titlePage == 'Daftar Kategori Bank'|| $titlePage == 'Edit Kategori Bank' || $titlePage == 'Tambah Kategori Bank') ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ ($titlePage == 'Daftar Kategori Bank'|| $titlePage == 'Edit Kategori Bank' || $titlePage == 'Tambah Kategori Bank') ? ' active' : '' }}" href="{{route('keuangan.bank')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M2 20h20v2H2v-2zm2-8h2v7H4v-7zm5 0h2v7H9v-7zm4 0h2v7h-2v-7zm5 0h2v7h-2v-7zM2 7l10-5 10 5v4H2V7zm2 1.236V9h16v-.764l-8-4-8 4zM12 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                </svg>
                <span class="side-menu__label">Daftar Bank</span>
            </a>
        </li>
{{--Keuangan--}}
        <li class="slide{{ ($titlePage == 'Daftar PPN'|| $titlePage == 'Edit PPN' || $titlePage == 'Tambah PPN') ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ ($titlePage == 'Daftar PPN'|| $titlePage == 'Edit PPN' || $titlePage == 'Tambah PPN') ? ' active' : '' }}" href="{{route('keuangan.ppn')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M20.04,8.71V4H15.34L12,0.69L8.71,4H4V8.71L0.69,12L4,15.34V20.04H8.71L12,23.35L15.34,20.04H20.04V15.34L23.35,12L20.04,8.71M8.83,7.05C9.81,7.05 10.6,7.84 10.6,8.83A1.77,1.77 0 0,1 8.83,10.6C7.84,10.6 7.05,9.81 7.05,8.83C7.05,7.84 7.84,7.05 8.83,7.05M15.22,17C14.24,17 13.45,16.2 13.45,15.22A1.77,1.77 0 0,1 15.22,13.45C16.2,13.45 17,14.24 17,15.22A1.78,1.78 0 0,1 15.22,17M8.5,17.03L7,15.53L15.53,7L17.03,8.5L8.5,17.03Z"/>
                </svg>
                <span class="side-menu__label">Daftar PPN</span>
            </a>
        </li>
</li>
{{--Pelanggan--}}
        <li class="slide{{ $titlePage == 'Daftar Pelanggan Aktif' ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ $titlePage == 'Daftar Pelanggan Aktif' ? ' active' : '' }}" href="{{route('keuangan.pelangganaktif')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M21.1,12.5L22.5,13.91L15.97,20.5L12.5,17L13.9,15.59L15.97,17.67L21.1,12.5M10,17L13,20H3V18C3,15.79 6.58,14 11,14L12.89,14.11L10,17M11,4A4,4 0 0,1 15,8A4,4 0 0,1 11,12A4,4 0 0,1 7,8A4,4 0 0,1 11,4Z"/>
                </svg>
                <span class="side-menu__label">Daftar Pelanggan</span>
            </a>
        </li>
{{-- pelanggan aktif --}}
        {{-- <li class="slide{{ $titlePage == 'Daftar Pelanggan Aktif' ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ $titlePage == 'Daftar Pelanggan Aktif' ? ' active' : '' }}" href="{{route('keuangan.pelangganaktif')}}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M21.1,12.5L22.5,13.91L15.97,20.5L12.5,17L13.9,15.59L15.97,17.67L21.1,12.5M10,17L13,20H3V18C3,15.79 6.58,14 11,14L12.89,14.11L10,17M11,4A4,4 0 0,1 15,8A4,4 0 0,1 11,12A4,4 0 0,1 7,8A4,4 0 0,1 11,4Z"/>
                </svg>
                <span class="side-menu__label">Daftar Pelanggan</span>
            </a>
        </li> --}}
{{--invoice--}}
        {{-- <li class="side-item side-item-category">invoice</li>
        <li class="slide{{ $titlePage == 'Daftar Invoice' ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ $titlePage == 'Daftar Invoice' ? ' active' : '' }}" href="{{ route('') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3,22L4.5,20.5L6,22L7.5,20.5L9,22L10.5,20.5L12,22L13.5,20.5L15,22L16.5,20.5L18,22L19.5,20.5L21,22V2L19.5,3.5L18,2L16.5,3.5L15,2L13.5,3.5L12,2L10.5,3.5L9,2L7.5,3.5L6,2L4.5,3.5L3,2M18,9H6V7H18M18,13H6V11H18M18,17H6V15H18V17Z"/>
                </svg>
                <span class="side-menu__label">Daftar Invoice</span>
            </a>
        </li> --}}
{{--invoice--}}
        <li class="side-item side-item-category">invoice</li>
        <li class="slide{{ $titlePage == 'Daftar Invoice' ? ' is-expanded' : '' }}">
            <a class="side-menu__item{{ $titlePage == 'Daftar Invoice' ? ' active' : '' }}" href="{{ route('keuangan.invoice') }}">
                <svg xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M3,22L4.5,20.5L6,22L7.5,20.5L9,22L10.5,20.5L12,22L13.5,20.5L15,22L16.5,20.5L18,22L19.5,20.5L21,22V2L19.5,3.5L18,2L16.5,3.5L15,2L13.5,3.5L12,2L10.5,3.5L9,2L7.5,3.5L6,2L4.5,3.5L3,2M18,9H6V7H18M18,13H6V11H18M18,17H6V15H18V17Z"/>
                </svg>
                <span class="side-menu__label">Daftar Invoice</span>
            </a>
        </li>
    </ul>
</aside>
</div>
</div>
</div>