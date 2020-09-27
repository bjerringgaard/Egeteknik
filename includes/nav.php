<div id="navigation-container">
    <div id="navigation">
        <div id="logo">
            <a href="/"><img src="/assets/logowhite.svg" alt=""></a>
        </div>
            <nav>
                <ul>
                    <!-- <li><a href="index">FORSIDE</a></li> -->
                    <li><a href="/produkt">PRODUKTER</a></li>
                    <li><a href="/nyheder">NYHEDER</a></li>
                    <li><a href="/omos">OM OS</a></li>
                    <li><a href="/kontakt">KONTAKT</a></li>
                    <li class="last"><a href="/demo">BESTIL DEMO</a></li>
                </ul>
                <div id="mobilecontainer">
                    <a href="javascript:void(0);" class="menu-trigger" onclick="burger()"><i class="fa fa-bars fa-2x" aria-hidden="true"></i></a>
                    <div id="mobileNav">
                        <a href="/" class="first">FORSIDE</a>
                        <a href="/produkt">PRODUKTER</a>
                        <a href="/nyheder">NYHEDER</a>
                        <a href="/omos">OM OS</a>
                        <a href="/kontakt">KONTAKT</a>
                    </div>
                </div>
            </nav>
    </div>
</div>

<script>
    // Mobile menu
    function burger() {
        var x = document.getElementById("mobileNav");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
</script>