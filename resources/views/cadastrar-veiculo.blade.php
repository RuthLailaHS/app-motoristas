@extends('template')

@section('titulo', 'Cadastrar Veículo')

@section('conteudo')

<h2 class="text-center text-white mb-4"><i class="fa-solid fa-file-pen"></i> Cadastrar Veículo</h2>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Exclusivo para moradores das proximidades das alças de pedágio da Transolímpica.">
        <meta name="author" content="Uk Design">
        <meta name="keywords" content="viario, transolímpica, formulário, cadastro, cadastramento, lindeiros, gratuidade, pedágio">
        <meta name="application-name" content="Formulário Online de Cadastramento de Lindeiros">
        <link rel="stylesheet" type="text/css" href="//viario.com.br/cadastro-online/form.css">
        <script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/gZWLhEUEJFxEhoT5hpjn2xHK/recaptcha__pt_br.js" crossorigin="anonymous" integrity="sha384-4NL1zDH0k55BBrYurM9ld/CHtYVVwKei1JQRVs6UZRzHwv6MvBM1fFMsOO/+LiRl"></script><script src="//www.google.com/recaptcha/api.js" async="" defer=""></script>
    </head>
<section>
            <form id="candidato" style="margin:0 40px 0 40px;" action="//viario.com.br/cadastro-online/processForm.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" onsubmit="return checkSubmitState();">
                <fieldset style="border: none;" class="text-white">
                    <h2>FORMULÁRIO DE CADASTRAMENTO DE VEÍCULOS
                        <span><small>Esse formulário e a documentação serão submetidos a análise para verificação e validação.</small></span></h2>
                    <span>Dados do veículo:</span>

                    <div class="linha_form">
                        <div class="mod30">
                            <label for="tipo_de_veiculo" class="text-white">Tipo de veículo:</label><br>
                            <select class="w98h30" name="tipo_de_veiculo" id="tipo_de_veiculo" style="zoom:1.1" required="required" autofocus="">
                                <option value="" disabled="disabled">
									Selecione o tipo
                                </option>
                                <option value="1" selected="selected">
                                    CARRO
                                </option>
                                <option value="2">
                                    MOTOCICLETA
                                </option>
                                <option value="3">
                                    VAN
                                </option>
                                <option value="4">
                                    CAMINHÃO
                                </option>
                                <option value="5">
                                    CARRETA
                                </option>
                            </select>
                        </div>
                    </div><!--linha_form-->

                    <div class="linha_form">
                        <div class="mod30">
                            <label for="renavam" class="text-white">RENAVAM:</label> <input class="w98h30" type="text" id="renavam" name="renavam" pattern="\d{11}" required="required" title="Dica: 11 números conforme a documentação original (completar com zeros à esquerda se necessário).">
                        </div>

                        <div class="mod30 mod30center">
                            <label for="marca" class="text-white">Marca:</label> <input class="w98h30" type="text" id="marca" name="marca" required="required" pattern=".{3,}" title="Dica: preencher como descrito no documento do veículo.">
                        </div>

                        <div class="mod30">
                            <label for="modelo" class="text-white">Modelo:</label> <input class="w98h30" type="text" id="modelo" name="modelo" required="required" pattern=".{2,}" title="Dica: preencher como descrito no documento do veículo.">
                        </div>
                    </div><!--linha_form-->

                    <div class="linha_form">
                        <div class="mod30">
                            <label for="cor" class="text-white">Cor:</label> <input class="w98h30" type="text" id="cor" name="cor" required="required" pattern=".{4,}" title="Dica: conforme descrito no documento do veículo.">
                        </div>

                        <div class="mod30 mod30center">
                            <label for="ano" class="text-white">Ano de fabricação:</label> <input class="w98h30" type="text" id="ano" name="ano" required="required" pattern="\d{4}" title="Dica: ano de fabricação do veículo, no formato AAAA. Ex:2003.">
                        </div>

                        <div class="mod30">
                            <label for="placa" class="text-white">Placa:<small> formato BRA9999 ou BRA9B99</small></label> <input class="w98h30" type="text" id="placa" name="placa" required="required" pattern="[a-z|A-Z]{3}[0-9][a-z|A-Z|0-9][0-9]{2}" title="Dica: 3 letras e 4 números (ex: LOE0011) OU placa MERCOSUL (ex: ABC0Y01).">
                        </div>
                    </div><!--linha_form-->

                    <div class="linha_form">
                        <div class="mod30">
                            <label for="tag" class="text-white">Já usa alguma TAG?</label>
                            <select class="w98h30" name="tag" id="tag" style="zoom:1.1" required="required">
                                <option selected="selected" disabled="disabled" value="">
                                    Clique aqui para escolher
                                </option>
                                <option value="0">
                                    Não possuo / Não sei informar
                                </option>
                                <option value="1">
                                    SEM PARAR (VIA FÁCIL)
                                </option>
                                <option value="2">
                                    CONECTCAR
                                </option>

                                <option value="3">
                                    PASSE EXPRESSO
                                </option>

                                <option value="4">
                                    AUTO EXPRESSO
                                </option>
                                <option value="5">
                                    MOVE MAIS
                                </option>
                                <option value="6">
                                    VELOE
                                </option>
                                
                            </select>
                        </div>

                    <div class="linha_form">
                    <div class="linha_form" style="font-size: 16px">
                        <input required="required" style="height:30px; margin:20px 0 0 0; display:block; font-size: 16px" type="file" name="upload[]" id="upload" multiple="multiple" title="Dica: precisa escolher até 5 arquivos do tipo JPG ou PDF." accept=".jpg,.jpeg,.pdf,image/jpeg,application/pdf"> 
                        <input type="hidden" name="MAX_FILE_SIZE" value="26214400">
                        <input type="hidden" name="observacoes" value="">
                        <p><br></p>
                        <div class="g-recaptcha" data-sitekey="6Lerb0AUAAAAAP4IwkSDkCbxpMbdbHsLgwK6wTn5"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6Lerb0AUAAAAAP4IwkSDkCbxpMbdbHsLgwK6wTn5&amp;co=aHR0cHM6Ly92aWFyaW8uY29tLmJyOjQ0Mw..&amp;hl=pt-BR&amp;v=gZWLhEUEJFxEhoT5hpjn2xHK&amp;size=normal&amp;cb=t4e2umjqcy0c" width="304" height="78" role="presentation" name="a-o8hrxgioh8jg" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                        <input type="hidden" value="submit" id="submit" name="submit">
                    </div>
                    <div class="linha_form">
                    </div>
                    <input style="padding:20px 30px; margin:20px 0 40px 0; background-color:#FED057; color:#fff; font-size:14px;" type="submit" name="myButton" id="myButton" value="ENVIAR DADOS">

                </fieldset>
            </form>
        </section>