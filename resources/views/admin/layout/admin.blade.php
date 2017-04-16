<!DOCTYPE html>
<html>
<head>
    <title>Admin Area</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <link rel="stylesheet" href="{{asset('jqueryui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('jqueryui/jquery-ui.theme.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
     <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
     <link href="{{asset('admin/css/custom.css')}}" rel="stylesheet">
</head>
<body>
@include('admin.layout.includes.header')
<div class="page-content">
        @if(Session::has('message'))
            <div class="alert alert-info">
                <p align="right">{{ Session::get('message') }}</p>
            </div>
        @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <div class="row">
        @include('admin.layout.includes.sidenav')
        <div class="col-md-10 display-area">
            <div class="row text-center">
                <div class="col-md-10 col-md-offset-1">
                    <div class="content-box-large">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div><!--/Display area after sidenav-->
    </div>

</div><!--/Page Content-->

<script src="https://code.jquery.com/jquery.js"></script>
<script src="{{asset('js/parsley.min.js')}}"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>
<script src="{{asset('jqueryui/jquery-ui.min.js')}}"></script>
<script src="{{asset('admin/js/jasny-bootstrap.min.js')}}"></script>
<script>
    $(function() {
        $("#term").autocomplete({
          source: "{{ route('article.autocomplete') }}",
          minLength: 3,
          select: function(event, ui) {
            $("#term").val(ui.item.value);
          }
        });
      });
</script>
</body>
</html>