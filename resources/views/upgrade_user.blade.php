@extends('layouts.app')

@section('content')
<div class="body2">
    <a class="title2">Promover Usuário</a>
    <div class="viewUpgradeUsers">
        <div class="blurred-box-upgrade">
            <form method="POST" action="{{ route('user.upgrade') }}">
                <label for="user_id">Usuário:</label>
                <select required name="user_id" id="user_id">
                    <option value="" requi selected disabled>Selecione um usuário...</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            <br>
                <label for="type">Selecione o cargo do usuário:</label>
                <select required name="type" id="type">
                    <option value="volvo">Usuário comum</option>
                    <option value="saab">Administrador</option>
                </select>

        </div>
    </div>
        <input type="submit" class="btn-input" name="submit" value="Confirmar">
    </form>
</div>
@endsection