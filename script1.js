// Création de la barre de navigation
const navbar = document.createElement('nav');
navbar.className = 'navbar navbar-expand-lg navbar-light';

const navbarBrand = document.createElement('a');
navbarBrand.className = 'navbar-brand';
navbarBrand.href = '#';
navbarBrand.textContent = 'PRIXY';

const navbarTogglerButton = document.createElement('button');
navbarTogglerButton.className = 'navbar-toggler';
navbarTogglerButton.type = 'button';
navbarTogglerButton.setAttribute('data-toggle', 'collapse');
navbarTogglerButton.setAttribute('data-target', '#navbarNavDropdown');
navbarTogglerButton.setAttribute('aria-controls', 'navbarNavDropdown');
navbarTogglerButton.setAttribute('aria-expanded', 'false');
navbarTogglerButton.setAttribute('aria-label', 'Toggle navigation');

const navbarTogglerIcon = document.createElement('span');
navbarTogglerIcon.className = 'navbar-toggler-icon';

const navbarCollapse = document.createElement('div');
navbarCollapse.className = 'collapse navbar-collapse';
navbarCollapse.id = 'navbarNavDropdown';

const navbarNav = document.createElement('ul');
navbarNav.className = 'navbar-nav mr-auto';

const navItemActive = document.createElement('li');
navItemActive.className = 'nav-item active';

const navLinkActive = document.createElement('a');
navLinkActive.className = 'nav-link';
navLinkActive.href = '#';
navLinkActive.textContent = 'Nos formations';


const spanSROnly = document.createElement('span');
spanSROnly.className = 'sr-only';
spanSROnly.textContent = '(current)';

const navItem1 = document.createElement('li');
navItem1.className = 'nav-item';

const navLink1 = document.createElement('a');
navLink1.className = 'nav-link';
navLink1.href = '#';
navLink1.textContent = 'Nous connaître';

const navItem2 = document.createElement('li');
navItem2.className = 'nav-item';

const navLink2 = document.createElement('a');
navLink2.className = 'nav-link';
navLink2.href = '#';
navLink2.textContent = 'Nos atouts';

const navItem3 = document.createElement('li');
navItem3.className = 'nav-item';

const navLink3 = document.createElement('a');
navLink3.className = 'nav-link';
navLink3.href = '#';
navLink3.textContent = 'Nous contacter';

const reservationButton = document.createElement('button');
reservationButton.className = 'btn btn-reservation';
reservationButton.textContent = 'Réservation';
reservationButton.addEventListener('click', function() {
    window.location.href = 'reservation.php';
});

navItemActive.appendChild(navLinkActive);
navItemActive.appendChild(spanSROnly);
navItem1.appendChild(navLink1);
navItem2.appendChild(navLink2);
navItem3.appendChild(navLink3);
navItemActive.appendChild(spanSROnly);

navbarNav.appendChild(navItemActive);
navbarNav.appendChild(navItem1);
navbarNav.appendChild(navItem2);
navbarNav.appendChild(navItem3);

navbarCollapse.appendChild(navbarNav);
navbarCollapse.appendChild(reservationButton);

navbarTogglerButton.appendChild(navbarTogglerIcon);

navbar.appendChild(navbarBrand);
navbar.appendChild(navbarTogglerButton);
navbar.appendChild(navbarCollapse);

document.body.appendChild(navbar);

const heroSection = document.createElement('div');
heroSection.className = 'hero-section';
document.body.appendChild(heroSection);

const container = document.createElement('div');
container.className = 'container';
const row = document.createElement('div');
row.className = 'row';
const col12 = document.createElement('div');
col12.className = 'col-12';
const contentSection = document.createElement('div');
contentSection.className = 'content-section';
const socialIcons = document.createElement('div');
socialIcons.className = 'social-icons';
col12.appendChild(contentSection);
col12.appendChild(socialIcons);
row.appendChild(col12);
container.appendChild(row);
document.body.appendChild(container);


