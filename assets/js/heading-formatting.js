document.querySelectorAll('.heading, .main-heading').forEach(el => {
    el.innerHTML = el.textContent.replaceAll(/\|([^|]+)\|/g, '<strong>$1</strong>').replaceAll(/>>/g, '<br />');
});
