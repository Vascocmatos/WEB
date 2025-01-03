$(document).ready(function(){
    $("#dropdown-btn").click(function(){
        $("#dropdown-menu").slideToggle("fast");
    });
});

function openPopup(imageUrl) {
var width = 800; 
var height = 600; 
var leftPosition = (window.innerWidth - width) / 2;
var topPosition = (window.innerHeight - height) / 2; 
var popup = window.open('', '_blank', 'width=' + width + ',height=' + height + ',left=' + leftPosition + ',top=' + topPosition);

if (popup) {
    popup.document.write('<img src="' + imageUrl + '" style="width:100%;height:auto;">');
    popup.document.close();
}
}

const imagens = [
    '/tecnologias_web/trabalho_pratico_tp2/imagens/1200px-Logotyp_OLX_.png',
    '/tecnologias_web/trabalho_pratico_tp2/imagens/naom_58b3eeda9fbbc.jpg',
    '/tecnologias_web/trabalho_pratico_tp2/imagens/w980-p16x9-LAMBORGHINI_Genebra.jpg',
    '/tecnologias_web/trabalho_pratico_tp2/imagens/kit-de-transmissao-para-mota.jpg'
];

let indice = 0;

function trocarImagem() {
    document.getElementById('imagem').src = imagens[indice];
    indice++;
    if (indice === imagens.length) {
        indice = 0;
    }
}
setInterval(trocarImagem, 3000);


const imagens2 = [
    '/tecnologias_web/trabalho_pratico_tp2/imagens/images.png',
    '/tecnologias_web/trabalho_pratico_tp2/imagens/kit-de-transmissao-para-mota.jpg',
    '/tecnologias_web/trabalho_pratico_tp2/imagens/Whatsapp-logo-pc.png',
    '/tecnologias_web/trabalho_pratico_tp2/imagens/store_home_share.jpg'
];

let indice2 = 0;

function trocarImagem() {
    document.getElementById('imagem2').src = imagens2[indice2];
    indice2++;
    if (indice2 === imagens2.length) {
        indice2 = 0;
    }
}
setInterval(trocarImagem, 3000);

$(document).ready(function(){
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    $("#set-cookie1").click(function(){
        setCookie("username", "Utilizador1", 30);
    });

    $("#set-cookie2").click(function(){
        setCookie("username", "Utilizador2", 30);
    });

    $("#get-cookie").click(function(){
        var username = getCookie("username"); 
        alert("Username: " + username);
    });
});



