<!DOCTYPE html>
<html lang="en">
    @include('admin.partials.header')
    <body class="sb-nav-fixed">
        @include('admin.partials.navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                @include('admin.partials.sidenav')
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $title;?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?= $desc?></li>
                        </ol>
                        <div class="row">
                            @yield('container')
                        </div>
                    </div>
                </main>
            </div>
        </div>
        @include('admin.partials.footer')
    </body>
</html>
