const hamburgerMenu = document.getElementById('hamburger-icon');
hamburgerMenu.addEventListener('click', () => {
    toggleHamburgerMenu();
})

// Toggle the menu for small screens
function toggleHamburgerMenu() {
    document.getElementById("mobile-menu").classList.toggle("hidden");
}
