@if ($errors->any())
    <div class="alert alert-danger">
            {{ $errors->all()[0] }}
    </div>
@elseif(session('error'))
    <div class="alert alert-danger">
        <span class="alert-text">
            {{ session('error') }}
        </span>
    </div>
@elseif (session('success'))
    <div class="alert alert-success">
        <span class="alert-text">
            {{ session('success') }}
        </span>
    </div>
@endif