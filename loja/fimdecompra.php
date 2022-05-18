<?php
    include "../modelos/conexao.php";
?>
<!DOCTYPE HTML>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Finalizando sua compra!</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- <link rel="icon" type="image/png" href="icones/fofo.png"> -->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-7">
                    <h2 class="mt-2 mb-3">Dados de entrega</h2>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" name="nome">
                        </div>
                        <div class="col mb-3">
                            <label for="telefone" class="form-label">Número de Telefone</label>
                            <input type="text" class="form-control" name="telefone">
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="cep" class="form-label">CEP</label>
                        <input type="text" class="form-control" name="cep">
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select id="estado" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value="" disabled selected></option>
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
                                <option value="EX">Estrangeiro</option>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <label for="capital" class="form-label">Capital</label>
                            <input type="text" class="form-control" name="capital">
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="bairro" class="form-label">Bairro</label>
                        <input type="text" class="form-control" name="bairro">
                    </div>
                    <div class="row">
                        <div class="col-9 mb-3">
                            <label for="endereco" class="form-label">Endereço</label>
                            <input type="text" class="form-control" name="endereco">
                        </div>
                        <div class="col-3 mb-3">
                            <label for="numcasa" class="form-label">Número</label>
                            <input type="text" class="form-control" name="numcasa">
                        </div>
                    </div>
                    <div class="col mb-3">
                        <label for="complemento" class="form-label">Complemento</label>
                        <input type="text" class="form-control" name="complemento">
                    </div>
                    <div class="row">
                        <div class="col-3 mb-2">
                            <label for="entrega" class="form-label">Salvar como:</label>
                        </div>
                        <div class="col-9 mb-2" class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Casa</label>
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">Trabalho</label>
                        </div>
	                </div>
                    <div class="col mb-2 d-grid gap-2 d-md-flex justify-content-md">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#pagar">Adicionar cartão</button>
                            </div>
                </div>
                <div class="col-5 mt-2 mb-3">
                    <h2>Compra a ser realizada</h2>
                    <card></card>
                    <a class="btn btn-success" href="pagamento.php" role="button">Fazer pedido</a>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="pagar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="color: gray;">Cartão de crédito/débito</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <p>Informações do cartão</p>
                            <div class="form-floating mt-2 mb-3">
                                <input type="text" class="form-control" id="ncartao" placeholder="number">
                                <label for="ncartao">Número do cartão</label>
                            </div>
                            <div class="form-floating mt-2 mb-3">
                                <input type="text" class="form-control" id="vencimento" placeholder="number">
                                <label for="vencimento">Data de expiração</label>
                            </div>
                            <div class="form-floating mt-2 mb-3">
                                <input type="text" class="form-control" id="cvv" placeholder="number">
                                <label for="cvv">CVV</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nomecartao" placeholder="number">
                                <label for="nomecartao">Nome no cartão</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                        <button type="button" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>

<?php
    include "../modelos/footer.php"
?>