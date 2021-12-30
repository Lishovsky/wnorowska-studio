const toggler = document.querySelector('#nav_toggler');
const togglerSpans = Array.from(document.querySelectorAll('#nav_toggler span'));
const nav = document.querySelector('#menu-menu-glowne');

function togglerAnimation() {
    if (nav.classList.contains('active')) {
        togglerSpans[0].style.transform = "rotate(-45deg) translateY(14.5px)";
        togglerSpans[1].style.opacity = "0";
        togglerSpans[2].style.transform = "rotate(45deg) translateY(-14.5px)";
    }
    else {
        togglerSpans[0].style.transform = "rotate(0)";
        togglerSpans[1].style.opacity = "1";
        togglerSpans[2].style.transform = "rotate(0)";
    }
}

toggler.addEventListener('click', () => {
    nav.classList.toggle('active')
    togglerAnimation()
})
