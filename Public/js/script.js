//Função para ativar o titulo da imagem na home-page
document.addEventListener('DOMContentLoaded', function() {
    var imagem = document.getElementById('login-icone');
    var titulo = document.getElementById('titulo');

    imagem.addEventListener('click', function() {
        if (titulo.classList.contains('hidden')) {
            titulo.classList.remove('hidden');
            titulo.style.display = 'block';
        } else {
            titulo.classList.add('hidden');
            titulo.style.display = 'none';
        }
    });
});