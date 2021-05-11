const defaultTheme = 'dark';
let isDark = getThemeMode() === 'dark';
const themeSwitcher = document.querySelector('#theme-switcher');
themeSwitcher.addEventListener('click', (event) => {
    toggleDarkMode();
});

applyTheme();

/**
 * Provoque la modification du thème.
 */
function toggleDarkMode() {
    isDark = !isDark;

    saveThemeMode();
    applyTheme();
}

/**
 * Récupère le thème dans le localStorage ou retourne le thème par défaut.
 *
 * @returns {any|string}
 */
function getThemeMode() {
    return localStorage.theme ?? defaultTheme;
}

/**
 * Inscrit dans le localStorage le thème défini par l'utilisateur.
 */
function saveThemeMode() {
    let theme = 'light';

    if (isDark) {
        theme = 'dark';
    }

    localStorage.theme = theme;
}

/**
 * Ajoute ou retire la classe CSS qui applique le thème sombre.
 */
function applyTheme() {
    if (isDark) {
        document.documentElement.classList.add('dark');
        themeSwitcher.innerHTML = "☀️";
    } else {
        document.documentElement.classList.remove('dark')
        themeSwitcher.innerHTML = "🌙";
    }
}

if( getThemeMode() === 'dark') {
    themeSwitcher.checked = true;
}

// Toggle the menu for small screens
document.getElementById('nav-toggle').onclick = function() {
    document.getElementById("nav-content").classList.toggle("hidden");
}
