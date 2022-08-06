<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Admin | Portal Srigonco</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('img/icon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('img/icon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/icon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('img/icon/site.webmanifest') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
        rel="stylesheet" />

    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/simple-datatables/style.css') }}">
    <link href="{{asset('css/app.css') }}" rel="stylesheet" />
</head>

<body class="toggle-sidebar">
    @auth
    @include('components.header')
    @include('components.sidebar')
    @endauth @yield('main')
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>

    @if ( isset($route ) && $route === 'berita')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script>
        let quill = new Quill("#editor", {
            theme: "snow",
            modules: {
                toolbar: [
                    [{
                        size: ["small", false, "large", "huge"]
                    }], // custom dropdown
                    ["bold", "italic", "underline", "strike"], // toggled buttons
                    ["blockquote"],
                    [{
                        list: "ordered"
                    }, {
                        list: "bullet"
                    }],
                    [{
                        indent: "-1"
                    }, {
                        indent: "+1"
                    }], // outdent/indent
                    [{
                        align: []
                    }],
                    ["clean"],
                ],
            },
        });
        quill.on("text-change", function (delta, oldDelta, source) {



            document.querySelector("input[name='isi']").value = quill.root.innerHTML;
        });
    </script>
    @if(isset($edit) && !empty($berita))
    <script>
        quill.root.innerHTML = '{!! $berita->isi_berita !!}';
    </script>
    @endif
    @endif

    <!-- Template Main JS File -->
    <script src="{{ asset('js/main.js') }}"></script>
    @include('sweetalert::alert')
</body>

</html>