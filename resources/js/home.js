export default class Nav {
    constructor() {
        this.nav()
        this.coockie()
    }

    nav() {
        const header = document.querySelector('header');
        const html = document.querySelector('html');

        if (window.innerWidth < 1024) {
            const nav = document.querySelector('header nav');
            const btn = document.querySelector('header .nav-toggle');

            btn.addEventListener('click', function () {
                btn.classList.toggle('active');
                nav.classList.toggle('active');

                if (nav.classList.contains('active')) {
                    html.style.overflow = 'hidden';
                } else {
                    html.style.overflow = 'initial';
                }
            })
        }
    }

    coockie() {

        if (getCookie('popupDisable') == 'true') {
            document.getElementById('shape').style.display = 'none';
        }


        if (document.getElementById('disablePopupButton')) {

            document.getElementById('disablePopupButton').addEventListener("click", function (e) {
                e.preventDefault();
                e.target.closest('.shape').classList.add("disable");

                document.cookie = 'popupDisable=true'
                console.log(document.cookie)

                console.log(getCookie('popupDisable'))
            })
        }


        function getCookie(cname) {
            let name = cname + "=";
            let ca = document.cookie.split(';');
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    }

}
