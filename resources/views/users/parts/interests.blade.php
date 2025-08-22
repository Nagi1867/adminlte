<div class="card">
    <form action="{{ route('users.interests', $user->id) }}" method="post">
        @csrf
        @method('put')
        <div class="card-header">
            Interesses
        </div>

        <div class="card-body">
            @foreach (['Futebol', 'Formula 1'] as $item)
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{ $item }}" name="interests[][name]">
                    <label class="form-check-label" for="checkChecked">
                        {{ $item }}
                    </label>
                </div>
            @endforeach
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
    </form>
</div>
