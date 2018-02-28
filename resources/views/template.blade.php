<!DOCTYPE html>
<html>
<head>

    <base href="{{ asset('assets') }}">
@include('partials.headImports')

@yield('css')
@yield('js')
</head>

<body>
    <div id="page-container" class="sidebar-l sidebar-mini sidebar-o side-scroll header-navbar-fixed header-navbar-transparent">
        @include('partials.sidebar')
        @include('partials.header')
        @include('partials.mensajes')
        <main id="main-container">
            <div class="content">
                <div class="row">
            @yield('main')
                </div>
            </div>
        </main>

        <footer id="page-footer" class="bg-white">
            <div class="content content-boxed">
                <!-- Copyright Info -->
                <div class="font-s12 push-20 clearfix">
                    <hr class="remove-margin-t">
                    <div class="pull-right">
                        &copy; Copyright.
                    </div>
                    <div class="pull-left">
                        Tom&aacutes Mateo.
                    </div>
                </div>
                <!-- END Copyright Info -->
            </div>
        </footer>
    </div>
</body>
<script>
    jQuery(function () {
        // Init page helpers (Appear plugin)
        App.initHelpers('appear');
    });
</script>
</html>
