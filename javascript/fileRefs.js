let domain = 'https://lunarflamestudios.com';
console.log(domain);

function setLinkstoRoot() {
    const elements = [...document.querySelectorAll('[href]'), ...document.querySelectorAll('[src]')];

    elements.forEach(el => {
        let attribute = el.hasAttribute('href') ? 'href' : 'src';
        let originalValue = el.getAttribute(attribute);

        let anchor = document.createElement('a');
        anchor.href = originalValue;

        const newLink = `${domain}${anchor.pathname}`;
        el.setAttribute(attribute, newLink);
    });
}

//setLinkstoRoot();