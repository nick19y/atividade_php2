<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    display: flex;
    justify-content: center;
    align-items: center;
}
form{
    margin-top: 10rem;
    outline: 1px solid black;
    padding: 10px 0px 0px 8px;
}
fieldset{
    margin: 10px 10px 15px 2px;
}
.form_item{
    margin-bottom: 15px;
}
.buttons{
    margin-bottom: 15px;
}
</style>
<body>
    <form action="detalhes.php" method="POST"> Formulário
            <fieldset>
                <legend>Dados Pessoais</legend>
                <div class="form_item">
                    <label for="nome">Nome:</label>
                    <input name="nome" id="nome" type="text" required>
                </div>
                <div class="form_item">
                    <label for="endereco1">Endereço:</label>
                    <input name="endereco" type="text" required>
                </div>
                
                <div class="form_item">
                    <label for="cidade">Cidade:</label>
                    <input name="cidade" type="text" required>
                </div>
                
                <label for="estado">Estado:</label>
                <select name="estado" id="estado">
                    <option value="AC">Acre </option>
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
            </fieldset>
            <fieldset>
                <legend>Dados profissionais</legend>
                    <div class="cargo">
                        <label for="natureza_cargo">Natureza do Cargo:</label>
                            <div class="form_item">

                            
                            <input type="radio" name="natureza_cargo" value="Gerência" required>
                            <label for="gerencia">Gerência</label>
                            
                            <input type="radio" name="natureza_cargo" value="Financeiro" required>
                            <label for="financeiro">Financeiro</label>
                            
                            <input type="radio" name="natureza_cargo" value="Recepção" required>
                            <label for="recepcao">Recepção</label>
                            
                            <input type="radio" name="natureza_cargo" value="Administrativo" required>
                            <label for="administrativo">Administrativo</label>
                            
                            <input type="radio" name="natureza_cargo" value="Jurídico" required>
                            <label for="juridico">Jurídico</label>
                        </div>
                    </div>
                    <div class="area_interesse">
                        <label for="area_interesse">Área de interesse:</label>
                            <div class="form_item">
                            
                            <input type="checkbox" name="area_interesse[]" value="Computação">
                            <label for="">Computação</label>
                            
                            <input type="checkbox" name="area_interesse[]" value="Biologia">
                            <label for="">Biologia</label>
                            
                            <input type="checkbox" name="area_interesse[]" value="Meio Ambiente">
                            <label for="">Meio Ambiente</label>
                            
                            <input type="checkbox" name="area_interesse[]" value="Engenharia">
                            <label for="">Engenharia</label>
                            
                            <input type="checkbox" name="area_interesse[]" value="História">
                            <label for="">História</label>
                        </div>
                    </div>
                    <div class="tempo_servico">
                        <div class="form_item">
                            <label for="tempo_servico">Tempo de Serviço (em anos):</label>
                            <input name="tempo_servico" type="text" required>
                        </div>
                    </div>
                    <div class="mini-curriculo">
                        <label for="curriculo">Mini-currículo:</label>
                        <textarea name="curriculo" id="curriculo" cols="40" rows="5"></textarea>
                    </div>
            </fieldset>
        <div class="buttons">
            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>
        </div>
    </form>
</body>
</html>