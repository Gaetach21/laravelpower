@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }} style="width: 440px;">
        <div class="text-danger fw-bold">
            {{ __('Attention! Des erreurs sont survenues.') }}
        </div>

        <ul class="mt-3 text-sm text-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
