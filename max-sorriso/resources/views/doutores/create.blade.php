<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Max Sorriso - Paciente</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="/">Max Sorriso</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="{{ route('pacientes.index') }}">Pacientes</a>
                    <a class="nav-item nav-link" href="{{ route('doutores.index') }}">Doutores</a>
                    <a class="nav-item nav-link" href="{{ route('casos.index') }}">Casos</a>
                </div>
            </div>
        </nav>
        <hr/>
        <a type="button" style="float: right;" class="btn btn-primary" href="{{ route('doutores.index') }}">Listar Doutores</a>
        <h1>Cadastrar Novo Doutor</h1>
        <hr>
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="post" action="{{ route('doutores.store') }}">

            <!-- CROSS Site Request Forgery Protection -->
            @csrf

            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="form-group">
                <label>Telefone</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>

            <div class="form-group">
                <label>Data de Nascimento</label>
                <input type="date" class="form-control" name="data_nascimento" id="data_nascimento">
            </div>

            <div class="form-group">
                <label>Estado</label>
                <select name="uf" id="uf">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                </select>
            </div>

            <div class="form-group">
                <label>CRM</label>
                <input type="text" class="form-control" name="crm" id="crm">
            </div>

            <input type="submit" name="send" value="Cadastrar" class="btn btn-success btn-block">
        </form>
    </div>
</body>

</html>