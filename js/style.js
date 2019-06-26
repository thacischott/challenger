

function enviar()
  {

    var nome = document.getElementById("nomeid");
    console.log(nome);
    if(nome.value !="")
    {

      alert('Obrigada '+ nome.value + ', mensagem enviada com sucesso!');

      }

  }


$('.carousel').slick({
  dots: true,
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4
});
