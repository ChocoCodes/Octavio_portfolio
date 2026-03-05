const showActiveNav = () => {
    const currentUrl = window.location.href;
    const navLinks = document.querySelectorAll('nav a');
    
    navLinks.forEach(link => {
        if (link.href === currentUrl) {
            link.classList.add('text-accent');
            link.classList.remove('text-muted');
        }
    })
}

document.addEventListener('DOMContentLoaded', showActiveNav);