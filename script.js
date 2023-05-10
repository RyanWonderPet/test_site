const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathname = window.location.pathname;

navLinkEls.forEach(navLinkEL => {
    if (navLinkEl.href.includes(windowPathname)) {
        navLinkEl.classlist.add('active');
    }
});