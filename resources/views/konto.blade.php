@extends('layouts.apps')

@section('title', 'Moje konto')

@section('styles')
<link rel="stylesheet" href="{{ asset('CSS/style2.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('CSS/style4.css') }}" type="text/css">
@endsection

@section('content')
<div class="test">
    <div class="tresc">
        <h3>Moje konto</h3>
        
        <!-- Tabela z danymi użytkownika (początkowo widoczna) -->
        <div id="user-data-table">
            <table>
                <tbody>
                <tr>
                    <td><strong>Imię</strong></td>
                    <td>{{ Auth::user()->name }}</td>
                </tr>
                <tr>
                    <td><strong>Nazwisko</strong></td>
                    <td>{{ Auth::user()->surname }}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ Auth::user()->email }}</td>
                </tr>
                <tr>
                    <td><strong>Telefon</strong></td>
                    <td>{{ Auth::user()->phone }}</td>
                </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Formularz edycji danych (początkowo ukryty) -->
        <div id="edit-data-form" style="display: none;">
            <form action="{{ route('konto.edit') }}" method="POST">
                @csrf
                @method('PUT')

                <table>
                    <tbody>
                    <tr>
                        <td><strong>Imię</strong></td>
                        <td><input type="text" name="name" value="{{ Auth::user()->name }}" required></td>
                    </tr>
                    <tr>
                        <td><strong>Nazwisko</strong></td>
                        <td><input type="text" name="surname" value="{{ Auth::user()->surname }}" required></td>
                    </tr>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td><input type="email" name="email" value="{{ Auth::user()->email }}" required></td>
                    </tr>
                    <tr>
                        <td><strong>Telefon</strong></td>
                        <td><input type="text" name="phone" value="{{ Auth::user()->phone }}" required></td>
                    </tr>
                    </tbody>
                </table>

                <div class="przyciski">
                    <button type="submit" class="button_small">Zaktualizuj dane</button>
                </div>
            </form>
        </div>

        <!-- Przycisk do edytowania danych -->
        <div class="przyciski">
            <button type="button" class="button_small" id="edit-data-btn">Edytuj dane</button>
            <button type="button" class="button_small" id="change-password-btn">Zmień hasło</button>
            <form action="{{ route('destroy') }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć swoje konto? Ta operacja jest nieodwracalna.');">
                @csrf
                @method('DELETE')
                <button type="submit" class="button_small">Usuń konto</button>
            </form>
        </div>

        <div class="alerty">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>

        <!-- Formularz zmiany hasła (niezmieniony) -->
        <form id="change-password-form" action="{{ route('password.change') }}" method="POST" style="display: none; margin-top: 20px;">
            @csrf
            <table><tbody>
                <tr>
                    <td><div class="row mb-3">
                        <label for="current_password">Obecne hasło:</label></td>
                        <td><div class="col-md-6">
                            <input type="password" id="current_password" name="current_password" required>
                        </div>
                    </div></td>
                </tr>
                <tr>
                    <td><div class="row mb-3">
                        <label for="new_password">Nowe hasło:</label></td>
                        <td><div class="col-md-6">
                            <input type="password" id="new_password" name="new_password" required>
                        </div>
                    </div></td>
                </tr>
                <tr>
                    <td><div class="row mb-3">
                        <label for="new_password_confirmation">Powtórz nowe hasło:</label></td>
                        <td><div class="col-md-6">
                            <input type="password" id="new_password_confirmation" name="new_password_confirmation" required>
                        </div>
                    </div></td>
                </tr>
                <tr>
                    <td></td><td><div class="row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="button_small">Zmień hasło</button>
                        </div>
                    </div></td>
                </tr>
            </tbody></table>
        </form>
    </div>
</div> 

<script src="{{ asset('JS/script6.js') }}"></script>
<script>
    // Skrypt JavaScript do obsługi przycisku "Edytuj dane"
    document.getElementById('edit-data-btn').addEventListener('click', function() {
        // Ukryj tabelę z danymi użytkownika
        document.getElementById('user-data-table').style.display = 'none';

        // Ukryj przycisk "Edytuj dane"
        this.style.display = 'none';

        // Pokaż formularz edycji danych
        document.getElementById('edit-data-form').style.display = 'block';
    });
</script>
@endsection
