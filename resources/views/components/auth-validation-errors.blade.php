@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }} style="width: 440px;">
        <div class="alert alert-danger">
            {{ __('Un ou plusieurs champs contiennent une erreur. Veuillez vérifier et essayer de nouveau.') }}
        </div>

        
    </div>
@endif
