<!-- Navbar -->
@section("bottom_navbar")
<div data-am-widget="navbar" class="am-navbar am-cf am-navbar-default "
     id="">
    <ul class="am-navbar-nav am-cf am-avg-sm-4">
        {{--<li>--}}
            {{--<a href="tel:123456789">--}}
                {{--<span class="am-icon-phone"></span>--}}
                {{--<span class="am-navbar-label">呼叫</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        <li data-am-navbar-share>
            <a href="###">
                <span class="am-icon-share-square-o"></span>
                <span class="am-navbar-label">分享</span>
            </a>
        </li>
        <li data-am-navbar-qrcode>
            <a href="###">
                <span class="am-icon-qrcode"></span>
                <span class="am-navbar-label">二维码</span>
            </a>
        </li>
        {{--<li>--}}
            {{--<a href="http://amazeui.org/getting-started">--}}
                {{--<span class="am-icon-download"></span>--}}
                {{--<span class="am-navbar-label">下载使用</span>--}}
            {{--</a>--}}
        {{--</li>--}}
        {{--<li>--}}
            {{--<a href="https://github.com/allmobilize/amazeui/issues">--}}
                {{--<span class="am-icon-location-arrow"></span>--}}
                {{--<span class="am-navbar-label">Bug 反馈</span>--}}
            {{--</a>--}}
        {{--</li>--}}
    </ul>
</div>
@endsection