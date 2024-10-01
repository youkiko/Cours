const searchContainer = document.querySelector('.search-container');
const loupe = document.querySelector('.loupe');
const loupeWrapper = document.querySelector('#loupe-wrapper');
const inputSearch = document.querySelector('.search-container input');
const nav = document.querySelector('.navbar > ul');
const form = document.querySelector('.search-container > form');

// mofiff sur la taille et l'affichage du form
loupeWrapper.addEventListener('click', (event) => {
    searchContainer.style.zIndex = '20';
    const links = document.querySelectorAll('.navbar > ul > li');
    let ulWidth = 0;
    const loupeWidth = loupe.offsetWidth;
    for (const link of links) {
        // console.log(link.offsetWidth);
        ulWidth += link.offsetWidth;
    }
    // console.log(ulWidth);
    inputSearch.style.width = `${ulWidth + 10}px`;
    inputSearch.style.transform = `translateX(-${loupeWidth / 2 + 3}px)`;
});

addEventListener('resize', () => {
    const links = document.querySelectorAll('.navbar > ul > li');
    let ulWidth = 0;
    const loupeWidth = loupe.offsetWidth;
    for (const link of links) {
        // console.log(link.offsetWidth);
        ulWidth += link.offsetWidth;
    }
    // console.log(ulWidth);
    inputSearch.style.width = `${ulWidth + 10}px`;
    inputSearch.style.transform = `translateX(-${loupeWidth / 2 + 3}px)`;
});

document.addEventListener('click', (e) => {
    if (
        !searchContainer.contains(e.target) &&
        !loupeWrapper.contains(e.target) &&
        searchContainer.style.zIndex == '20'
    ) {
        searchContainer.style.zIndex = '0';
    }
});

window.addEventListener('scroll', (event) => {
    // console.log('ok');
    scrollFunction();
});

function scrollFunction() {
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
}

// Remonter en haut de la page quand on clique sur le bouton
document
    .getElementById('scrollToTopBtn')
    .addEventListener('click', function () {
        document.body.scrollTop = 0; // Pour Safari
        document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE et Opera
    });

// calcule pour centré un élément
document.addEventListener('DOMContentLoaded', function () {
    var container = document.querySelector('.main-header');
    var centeredElement = document.querySelector('#titre');

    function centerElement(container, element) {
        var containerRect = container.getBoundingClientRect();
        var elementRect = element.getBoundingClientRect();

        var centerX =
            containerRect.left +
            containerRect.width / 2 -
            elementRect.width / 2;
        var centerY =
            containerRect.top +
            containerRect.height / 2 -
            elementRect.height / 2;

        element.style.left = centerX + 'px';
        element.style.top = centerY + 'px';
    }

    // Centrer l'élément au chargement de la page
    centerElement(container, centeredElement);

    // Recentrer l'élément lors du redimensionnement de la fenêtre
    window.addEventListener('resize', function () {
        centerElement(container, centeredElement);
    });const h1 = document.querySelector('#tendances');
    console.log(h1)    
h1.addEventListener('mouseover', () => {
	console.log(h1)
	h1.style.color = 'red'; 
	h1.style.fontSize = "3rem";
});

h1.addEventListener('mouseleave', () => {
	h1.style.color = 'White'; 
	h1.style.fontSize = '1.5rem'
});
});

