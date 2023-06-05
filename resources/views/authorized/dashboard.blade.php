@extends('.layouts/layout')

@section('navbar')
    <div class="bg-dark p-2">
        <a class="d-flex text-decoration-none mt-3 align-items-center text-white">
            <div>
                <a class="text-decoration-none text-white" href="{{ route('dashboard_authorized') }}">
                    <span class="fs-3 d-none d-sm-inline">aWMSome</span>
                </a>
            </div>
        </a>
        <ul class="nav nav-pills flex-column mt-5 pt-5">
            <li class="nav-item py-2 py-sm-0">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-stack"></i><span class="fs-5 ms-2 d-none d-sm-inline">Articles</span>
                </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
                <a href="#" class="nav-link text-white">
                    <i class="fs-5 bi bi-file-text-fill"></i><span class="fs-5 ms-2 d-none d-sm-inline">Documents</span>
                </a>
            </li>
            <li class="nav-item py-2 py-sm-0">
                <a href="#" class="nav-link text-white">
                    <i class="fs-5 bi bi-box2-fill"></i><span
                        class="fs-5 ms-2 d-none d-sm-inline">Stocks</span>
                </a>
            </li>
            <li class="nav-item py-2 py-sm-0 dropdown">
                <a class="nav-link text-white dropdown-toggle fs-5" href="#" role="button"
                   data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-geo-alt-fill"></i><span
                        class="fs-5 ms-2 d-none d-sm-inline">Warehouse</span>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Type</a></li>
                    <li><a class="dropdown-item" href="#">Localization</a></li>
                </ul>
            </li>
        </ul>
    </div>
@stop
