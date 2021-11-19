<!-- Includes Popper + BootstrapJS -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- Cookie consent code -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<!-- <script src="https://kit.fontawesome.com/62cb8cc953.js"></script> -->
<!-- Automatically add 'Active' class to Navbar -->
<script>
    // get current URL path and assign 'active' class
    $(document).ready(function() {
        // get current URL path and assign 'active' class
        var pathname = window.location.pathname;
        $('nav li > a[href="'+pathname+'"]').parent().addClass('active');
    })
    //Language location changer
    "use strict";
    const validLangs = new Set(["nl", "fr", "en"]);

    function tabToLang(lang) {
        if (!validLangs.has(lang)) return false;
        const path = location.pathname;
        const re = new RegExp([...validLangs].map(x => `/${x}/`).join("|"), "");
        location.pathname = path.replace(re, `/${lang}/`);
        return true;
    }

    function clickHandler(e) {
        e.preventDefault();
        tabToLang(e.target.getAttribute("href"));
    }
    for (const anchor of document.getElementsByClassName("select-lang")) {
        anchor.addEventListener("click", clickHandler, false);
    }
</script>
<!-- Mailchimp Javascript -->
<script id="mcjs">
    ! function(c, h, i, m, p) {
        m = c.createElement(h), p = c.getElementsByTagName(h)[0], m.async = 1, m.src = i, p.parentNode.insertBefore(m, p)
    }(document, "script", "https://chimpstatic.com/mcjs-connected/js/users/81c9b73355e0e402d5618756c/4bc3b38f98e566d382695610d.js");
</script>