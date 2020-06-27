@extends('layouts.app')

@section('content')
<div class="body2">
    <a class="title2">Promover Usuário</a>
    <div class="viewUpgradeUsers">
        <div class="blurred-box-upgrade">
            <form action="/action_page.php">
                <label for="cars">Choose a car:</label>
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
            <br>
            <form action="/action_page.php">
                <label for="cars">Choose a car:</label>
                <select name="cars" id="cars">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </form>
        </div>
    </div>
    <form id="upgrade-user" action="" method="POST">
        <input type="submit" class="btn-input" name="submit" value="Confirmar">
    </form>
</div>
@endsection