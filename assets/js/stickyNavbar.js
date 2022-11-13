onload = () => {
    const body = document.body

    if (window.pageYOffset > 260 && window.innerWidth > 950) body.classList.add('fixed-navbar')

    document.addEventListener('scroll', () => {
        if(window.pageYOffset > 260 && window.innerWidth > 950) {
            body.classList.add('fixed-navbar')
        } else if (body.classList.contains('fixed-navbar')) {
            body.classList.remove('fixed-navbar')
        }
    })
}