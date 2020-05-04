function validarNome(){
    var valor = document.forms["formCadastroProduto"]["txtNomeProduto"].value;

    if(valor == ""){
        alert("O campo nome do produto não foi preenchido");
        return false;
    }
}

function validarPreco(){
    var valor = document.forms["formCadastroProduto"]["txtPreco"].value;

    if(valor == ""){
        alert("O campo preço não foi preenchido!");
        return false;
    }else if(valor <= 0){
        alert("O preço do produto não pode ser menor ou igual a zero!");
        return false;
    }
}

function validarQtd(){
    var valor = document.forms["formCadastroProduto"]["txtQtd"].value;

    if(valor == ""){
        alert("O campo quantidade não foi preenchido!");
        return false;
    }
}

function validarDataValidade(){
    var dataUser = new Date(document.forms["formCadastroProduto"]["txtDtValidade"].value).getTime();
    var dataValidar = new Date.now();
    
    
    if(dataUser - dataValidar < 86400 * 7){
        alert("Data de validade tem menos de uma semana!");
        return false;
    }
}

function validarCategoria(){
    var valor = document.forms["formCadastroProduto"]["txtCategoria"].value;
    

    if(valor == "" || valor == "selecione"){
        alert("Você deve selecionar uma categoria!");
        return false;
    }
}

function validarFormulario(){
    var validacao = true;
    validarNome();
    validarPreco();
    validarQtd();
    validarDataValidade();
    validarCategoria();
    return validacao;
}
