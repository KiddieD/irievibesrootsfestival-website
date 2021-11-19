<!-- Includes Popper + BootstrapJS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Cookie consent code -->
<script src="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.js"></script>
<!-- <script src="https://kit.fontawesome.com/62cb8cc953.js"></script> -->
<!-- Automatically add 'Active' class to Navbar -->
<script>
    // get current URL path and assign 'active' class
    document.addEventListener('DOMContentLoaded', function() {
        var pathname = window.location.pathname;
        $('nav li > a[href="' + pathname + '"]').parent().addClass('active');
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