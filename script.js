
const formulario = document.getElementById('formulario');
const mensagem = document.getElementById('mensagem');

formulario.addEventListener('submit', function(event) {
    event.preventDefault();

    window.open(
        'https://media1.tenor.com/m/E7dGWU_1pFUAAAAC/clapping-cat-cat-handshake.gif'
    );

    mensagem.textContent = 'Mensagem enviada com sucesso!';

    formulario.reset();
});
