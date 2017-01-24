@if ($errors)
    @foreach($errors as $error)
        <div class="alert alert-danger">
            <span>{{ $error }}</span>
        </div>
        @endforeach
    @endif