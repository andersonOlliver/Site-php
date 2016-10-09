function salvar() {
    document.getElementById("msg-erro").style.display = "none";
    document.getElementById("form").style.display = "none";
    var msgFinal = document.getElementById("msg");
    var campos = [];
    campos[0] = document.getElementById('funcionario').value,
            campos[1] = document.getElementById('codigoFuncionario').value,
            campos[2] = document.getElementById('cargo').value,
            campos[3] = document.getElementById('telefone').value;

    var validado = validarCampos(campos);
    if (validado) {
        var cadastroObj = {
            "funcionario": document.getElementById('funcionario').value,
            "codigoFuncionario": document.getElementById('codigoFuncionario').value,
            "cargo": document.getElementById('cargo').value,
            "telefone": document.getElementById('telefone').value};
        var busca = JSON.parse(localStorage.getItem(cadastroObj.codigoFuncionario))

        if (busca === null) {
            localStorage.setItem(cadastroObj.codigoFuncionario, JSON.stringify(cadastroObj));
            msgFinal.innerHTML = "Tudo certo! Dados cadastrados com sucesso!";
        } else if (busca.funcionario !== cadastroObj.funcionario) {
            localStorage.setItem(cadastroObj.codigoFuncionario, JSON.stringify(cadastroObj));
            msgFinal.innerHTML = "Tudo certo! Dados cadastrados com sucesso!";
        } else {
            msgFinal.innerHTML = "Elemento já cadastrado!";
        }

    } else {
        msgFinal.innerHTML = "Oops! Algo errado não está certo!" + msgFinal.innerHTML;
        document.getElementById("voltar").style.display = "block";
    }
    msgFinal.style.display = "block";
    document.getElementById("msg") = msgFinal;
    // document.getElementById("msg").style.display = "block";
}

function voltarFormulario(){
  document.getElementById("msg").style.display = "none";
  document.getElementById("form").style.display = "block";
}

function validarCampos(campos) {
    return campos[0].length > 0 && campos[1].length > 0 &&
            campos[2].length > 0 && campos[3].length > 0;
}

function validarTexto(idElemento) {
    var valor = document.getElementById(idElemento).value;
    if (valor.length < 3 && valor >= 0) {
        document.getElementById(idElemento).style.border = 1.3 + "px solid #e74c3c";
    } else if (valor.length >= 3) {
        document.getElementById(idElemento).style.border = 1 + "px solid #057A0F";
    }
}
