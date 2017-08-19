<div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}dfsd
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-error">
            {{ session('error') }}sdfsd
        </div>
    @endif
</div>