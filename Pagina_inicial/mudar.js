// Fazer esta função 2ª (Troca a imagem do sorvete grande)
function imgSlider(anything) {
    document.querySelector('.ListenMusic').src = anything;
}

// Fazer esta função 3ª (Troca a cor do círculo)
function changeCircleColor(color) {
    const circulo = document.querySelector('.circulo');
    circulo.style.background = color;
}

// Fazer esta função 1ª (Altera o estado Ativo/Desativo)
function toggleMenu() {
    var menuToggle = document.querySelector('.toggle'); // Cria uma variável para selecionar a classe (.toggle)
    var links = document.querySelector('.links'); // Cria uma variável para selecionar a classe (.links)
    menuToggle.classList.toggle('active'); // troca o estado da classe (.toggle) para ativo
}