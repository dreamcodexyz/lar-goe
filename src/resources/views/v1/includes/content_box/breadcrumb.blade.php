<div class="container-fluid container-fixed-lg">
    <ul class="breadcrumb">
        <li>
            <p>home</p>
        </li>

        @if( ! empty($page_title))
        <li>
            <a href="#" class="active">{{ $page_title }}</a>
        </li>
        @endif
    </ul>
</div>