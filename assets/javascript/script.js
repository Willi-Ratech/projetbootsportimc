// Exemple de boucle JavaScript
const elements = document.querySelectorAll('.element');
elements.forEach(element => {
    element.addEventListener('click', () => {
        console.log('Vous avez cliqué sur un élément');
    });
});