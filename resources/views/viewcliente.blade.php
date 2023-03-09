<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro de clientes</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <br>
        <br>
    </div>
    <div class="container">
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="card-body" id="novo-cliente">
                        Cadastro de novo cliente:
                        <br>
                        <br>
                        <form name="novocliente" id="form-novo-cliente" method="post" action="{{url('cadastracliente')}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
                                <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder= 'XXX.XXX.XXX-XX' id="cpf" maxlength="15" name="cpf">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Nome completo</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="name" name="nome">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="dt-nasc" class="col-sm-2 col-form-label">Data de nascimento</label>
                                <div class="col-sm-2">
                                <input type="date" class="form-control" id="dt-nasc" name="dt_nasc">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                                <div class="col-sm-2">
                                <input type="text" pattern="\d*" maxlength="8" class="form-control" id="cep" placeholder="00000000" name="cep">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                                    <input type="text" class="form-control" placeholder="Cidade" aria-label="Cidade" id="cidade" name="cidade">
                                </div>
                                <div class="col-sm-6">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                    <input type="text" class="form-control" placeholder="Estado" aria-label="Estado" id="estado" name="estado">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="endereco" class="col-sm-2 col-form-label">Endereco</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="endereco" name="endereco">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="radioMasc" value="M">
                                        <label class="form-check-label" for="radioMasc">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="radioFem" value="F">
                                        <label class="form-check-label" for="radioFem">
                                            Feminino
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-primary" id="cadastrar">Cadastrar</button>
                        </form>
                    </div>
                    <div class="card-body" id="editar-cliente" style="display:none;">
                        Editar cliente:
                        <br>
                        <br>
                        <form name="editarcliente" id="form-editar-cliente" method="post" action="{{url('editarcliente')}}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-sm-2" hidden>
                                <input type="number" class="form-control" id="editar-id" name="id">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cpf" class="col-sm-2 col-form-label">CPF</label>
                                <div class="col-sm-2">
                                <input type="text" class="form-control" placeholder= 'XXX.XXX.XXX-XX' id="editar-cpf" maxlength="15" name="cpf">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label">Nome completo</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="editar-name" name="nome">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="dt-nasc" class="col-sm-2 col-form-label">Data de nascimento</label>
                                <div class="col-sm-2">
                                <input type="date" class="form-control" id="editar-dt-nasc" name="dt_nasc">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="cep" class="col-sm-2 col-form-label">CEP</label>
                                <div class="col-sm-2">
                                <input type="text" pattern="\d*" maxlength="8" class="form-control" id="editar-cep" placeholder="00000000" name="cep">
                                </div>
                            </div>
                            
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <label for="cidade" class="col-sm-2 col-form-label">Cidade</label>
                                    <input type="text" class="form-control" placeholder="Cidade" aria-label="Cidade" id="editar-cidade" name="cidade">
                                </div>
                                <div class="col-sm-6">
                                    <label for="estado" class="col-sm-2 col-form-label">Estado</label>
                                    <input type="text" class="form-control" placeholder="Estado" aria-label="Estado" id="editar-estado" name="estado">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="endereco" class="col-sm-2 col-form-label">Endereco</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" id="editar-endereco" name="endereco">
                                </div>
                            </div>
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="radioMasc" value="m">
                                        <label class="form-check-label" for="radioMasc">
                                            Masculino
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="sexo" id="radioFem" value="f">
                                        <label class="form-check-label" for="radioFem">
                                            Feminino
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <button class="btn btn-primary" id="editarCliente">Editar Cliente</button>
                        </form>
                        <br>
                        <br>
                        <button class="btn btn-primary" id="voltar" style="display=none;">Voltar</button>
                    </div>
                </li>
                <li class="list-group-item">
                    <br>
                    Clientes já cadastrados
                    <br>
                    <br>
                    <div class="card">
                        
                        <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Data de Nascimento</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">CEP</th>
                            <th scope="col">Sexo</th>
                            <th scope="col">Opções</th>
                            </tr>
                        </thead>
                        @foreach( $arrayClientes as $clientes)
                        <tbody>
                            <tr>
                            <td scope="row" id="clienteExistenteId{{$clientes['id']}}">{{$clientes['id']}}</td>
                            <td id="clienteExistenteNome{{$clientes['id']}}">{{$clientes['nome']}}</td>
                            <td id="clienteExistenteCpf{{$clientes['id']}}">{{$clientes['cpf']}}</td>
                            <td id="clienteExistenteDtNasc{{$clientes['id']}}">{{$clientes['dt_nasc']}}</td>
                            <td id="clienteExistenteEstado{{$clientes['id']}}">{{$clientes['estado']}}</td>
                            <td id="clienteExistenteCidade{{$clientes['id']}}">{{$clientes['cidade']}}</td>
                            <td id="clienteExistenteEndereco{{$clientes['id']}}">{{$clientes['endereco']}}</td>
                            <td id="clienteExistenteCep{{$clientes['id']}}">{{$clientes['cep']}}</td>
                            <td id="clienteExistenteSexo{{$clientes['id']}}">{{$clientes['sexo']}}</td>
                            <td><button class="btn btn-success editarcliente" id="editarUsuario" name="editCliente" value="{{$clientes['id']}}">Editar Cliente</button> <button class="btn btn-danger"><a href="{{ route('cliente.destroy', $clientes['id']) }}">Apagar Cliente</a></button></td>
                            </tr>
                        </tbody>
                        @endforeach
                        </table>
                       
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
<script
  src="https://code.jquery.com/jquery-3.6.3.js"
  integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  crossorigin="anonymous">
</script>
<script type="text/javascript">
$(document).ready(function() {

    $("#cpf").blur(function() {
        let validarCpf = checkCpf($("#cpf").val());
        if (!validarCpf)
            alert("Formato de CPF inválido, por favor, corrija seu texto.");
        
    });

    $("button[name=editCliente]").click(function() {
        let value = $(this).attr("value");
        alterarClienteEditando(value);
    })

    function alterarClienteEditando(id){
        $("#novo-cliente").hide();
        $("#editar-cliente").show();
        $("#voltar").show();

        $("#editar-id").val($("#clienteExistenteId"+id).html())
        $("#editar-cpf").val($("#clienteExistenteCpf"+id).html())
        $("#editar-name").val($("#clienteExistenteNome"+id).html())
        $("#editar-dt-nasc").val($("#clienteExistenteDtNasc"+id).html())
        $("#editar-cep").val($("#clienteExistenteCep"+id).html())
        $("#editar-cidade").val($("#clienteExistenteCidade"+id).html())
        $("#editar-estado").val($("#clienteExistenteEstado"+id).html())
        $("#editar-endereco").val($("#clienteExistenteEndereco"+id).html())
        let RadioValue = $("#clienteExistenteSexo"+id).html()
        $("input[name=sexo][value=" + RadioValue + "]").prop('checked', true);

    }

    $("#voltar").click(function() {

        $("#novo-cliente").show();
        $("#editar-cliente").hide();

        $("#editar-cpf").val('');
        $("#editar-name").val('');
        $("#editar-dt-nasc").val('');
        $("#editar-cep").val('');
        $("#editar-cidade").val('');
        $("#editar-estado").val('');
        $("#editar-endereco").val('');
        $("input[name=editar-sexo]").prop('checked', false);
        $("#voltar").hide();

    });
    
    $("#cep").blur(function(){
        var primeirosNumeros = $("#cep").val().substr(0,5);
        var ultimosNumeros = $("#cep").val().substr(5,3);
        $.ajax({
            type: "GET",
            url: "https://cdn.apicep.com/file/apicep/"+ primeirosNumeros+'-'+ultimosNumeros +".json",
            success: function(data) {
                $("#cidade").val(data.city);
                $("#estado").val(data.state);
            },
            error: function(data){
                alert("Cep não encontrado, favor digitar outro CEP!");
            }      
        })

    });

    function checkCpf(cpf)
    {
        //regex para cpf
        let pattern = /([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})/;
    
        if(pattern.test(cpf)){
            return true;
        } else {
            return false;
        }
    } 
});
</script>

</html>


