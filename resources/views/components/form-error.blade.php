@foreach ($errors->get($key) as $error)
    <span class="invalid-feedback d-block" role="alert">
        @if (is_array($error))
            @foreach ($error as $message)
                <strong>{{ $message }}</strong>
            @endforeach
        @else
            <strong>{{ $error }}</strong>
        @endif
    </span>
@endforeach
