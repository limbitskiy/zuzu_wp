setTimeout(() => {
    const menuOpen = document.querySelector('.mobile-menu-open')
    const menuClose = document.querySelector('.close-mobile-menu')

    const menu = {
        element: document.querySelector('.mobile-menu'),
        show() {
            this.element.classList.remove('hidden')
        },
        hide() {
            this.element.classList.add('hidden')
        }
    }

    const onMenuOpen = () => {
        menu.show()
    }

    const onMenuClose = () => {
        menu.hide()
    }

    menuOpen.addEventListener('click', onMenuOpen)
    menuClose.addEventListener('click', onMenuClose)
}, 200)