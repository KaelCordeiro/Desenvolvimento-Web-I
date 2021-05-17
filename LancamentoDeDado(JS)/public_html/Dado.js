var usuario = "Usuario";
var CPU = "Computador";
var dado1Usuario = Math.floor(Math.random() * 6 + 1);
var dado2Usuario = Math.floor(Math.random() * 6 + 1);
var dado1CPU = Math.floor(Math.random() * 6 + 1);
var dado2CPU = Math.floor(Math.random() * 6 + 1);

function iniciarLancamento(){
    mostrar(usuario, dado1Usuario, dado2Usuario);
    mostrarTela(usuario, dado1Usuario, dado2Usuario, resultadoUsuario);
    mostrarTela(CPU, dado1CPU, dado2CPU, resultadoComp);
    resultado(resultadoUsuario, resultadoComp);
}

function mostrar(nome, dado1, dado2){
    alert(nome);
    alert(dado1);
    alert(dado2);
}

function soma(d1,d2){
    return d1 + d2;
}

var resultadoUsuario = soma(dado1Usuario, dado2Usuario);
var resultadoComp = soma(dado1CPU, dado2CPU);

function imagensDados(d){
    switch(d){
        case 1 : document.write("<img src= 1.PNG>"); break;
        case 2 : document.write("<img src= 2.PNG>"); break;
        case 3 : document.write("<img src= 3.PNG>"); break;
        case 4 : document.write("<img src= 4.PNG>"); break;
        case 5 : document.write("<img src= 5.PNG>"); break;
        case 6 : document.write("<img src= 6.PNG>"); break;
    }
}
function mostrarTela(n, dado1, dado2, resultado){
    document.write('<body style= "background-color: yellow">');
    document.write('<br>');
    document.write('<br>');
    document.write('<hr>');
    document.write(n + " seus dados são:");
    document.write('<br>');
    document.write('<br>');
    document.write(imagensDados(dado1));
    document.write('<br>');
    document.write(imagensDados(dado2));
    document.write('<br>');
    document.write('<br>');
    document.write("Total da soma dos dados= " + resultado);
    document.write('<br>');
    document.write('<br>');
    document.write('<hr>');
    document.write('<br>');
    document.write('</body>');
}
function resultado(tH,tC){
    if (tH > tC) 
        document.write("Usuário Ganhou") ;
    else if (tH < tC) 
        document.write("Computador Ganhou");
    else
        document.write("Houve um Empate");   
}


