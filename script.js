// script.js

// Adiciona um evento de clique a cada círculo
const circles = document.querySelectorAll('.circle');
circles.forEach(circle => {
    circle.addEventListener('click', () => {
        // Adiciona a classe "active" ao círculo clicado
        circle.classList.add('active');

        // Remove a classe "active" de todos os outros círculos
        circles.forEach(otherCircle => {
            if (otherCircle !== circle) {
                otherCircle.classList.remove('active');
            }
        });
    });
});