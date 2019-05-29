<!doctype html>
<html>
<head>

    @include('frontend-templates.header.krystal.head')
</head>
<body>
<div class="wrapper">
    <form id="block-search-mobile" method="get" class="block-search-mobile">
        <div class="form-content">
            <div class="control">
                <a href="#" class="close-block-serach"><span class="icon fa fa-times"></span></a>
                <input type="text" name="search" placeholder="Search" class="input-subscribe">
                <button type="submit" class="btn search">
                    <span><i class="fa fa-search" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </form>

    @include('frontend-templates.header.krystal.krystal')

    @yield('content')
</div>


@include('frontend-templates.footer.krystal.krystal')
</body>
</html>