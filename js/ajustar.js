// JavaScript Document
 $(document).ready(function() {
        var largura = $(window).width(); /* Captura a do usuário */
        if (largura <= 921) {
        /* Se a Largura do monitor for menor ou = que 921 px */
        $("#hire").hide(); /* Esconde a bandeira azul*/
        $("#resize").hide(); /* Esconde "triangulo" resize no canto inferior direito*/
        }
        else if (tam >= 922) {
        /* Se não for a condição a cima e for marior ou = a 922 px */
        $("#hire").show(); /* Mostra a bandeira azul*/
        $("#resize").show(); /* Mostra "triangulo" resize no canto inferior direito*/
        }
});