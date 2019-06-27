
/* function que chama a janela ao clicar no botão "enviar" */
function enviar()
  {

    var nome = document.getElementById("nomeid");
    console.log(nome);
    if(nome.value !="")
    {

      alert('Obrigada '+ nome.value + ', mensagem enviada com sucesso!');

      }

  }
