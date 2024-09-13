<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <div class="sb-sidenav-menu-heading">Halaman Utama</div>
            <a class="nav-link {{($title === "Dashboard") ? 'active' : ''}}" href="/dashboard">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading ">Manage</div>
            <a class="nav-link {{($title > 0) ? 'colapsed' : ''}}" href="" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Katalog
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="{{($title > 0) ? '' : 'colapsed'}}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link {{($title === "Katalog Travel") ? 'active' : ''}}" href="/travel">Travel</a>
                    <a class="nav-link {{($title === "Katalog Mobil") ? 'active' : ''}}" href="/mobil">Rental Mobil</a>
                    <a class="nav-link {{($title === "Katalog Wisata") ? 'active' : ''}}" href="/wisata">Paket Wisata</a>
                </nav>
            </div>
            <a class="nav-link colapsed" href="" data-bs-toggle="collapse" data-bs-target="#collapsePesanan" aria-expanded="false" aria-controls="collapsePesanan">
                <div class="sb-nav-link-icon"><i class="fa-solid fa-wallet"></i></div>
                Pesanan
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="{{($title > 0) ? '' : 'colapsed'}}" id="collapsePesanan" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link  {{($title === "Log Pesanan") ? 'active' : ''}}" href="/log">Log Pesanan</a>
                </nav>
            </div>
            <a class="nav-link {{($title >0) ? 'colapsed' : ''}}" href="" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                Kustomisasi
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="{{($title > 0) ? '' : 'collapse show'}}" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link {{($title > 0) ? 'colapsed' : ''}}" href="" data-bs-toggle="collapse" data-bs-target="#pagesCollapseManageWebPage" aria-expanded="false" aria-controls="pagesCollapseManageWebPage">
                        Website Page
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="{{($title > 0) ? '' : 'collapse show'}}" id="pagesCollapseManageWebPage" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{($title === "Edit Info Layanan") ? 'active' : ''}}" href="/layanan">Layanan</a>
                            <a class="nav-link {{($title === "Edit Info Kontak") ? 'active' : ''}}" href="/kontak">Kontak</a>
                            <a class="nav-link {{($title === "Edit Info Tentang") ? 'active' : ''}}" href="/tentang">Tentang Kami</a>
                        </nav>
                    </div>
                </nav>
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    <a class="nav-link {{($title > 0) ? '' : 'colapsed'}}" href="" data-bs-toggle="collapse" data-bs-target="#pagesCollapseManageAccount" aria-expanded="false" aria-controls="pagesCollapseManageAccount">
                        Account
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="{{($title > 0) ? 'colapse' : ''}}" id="pagesCollapseManageAccount" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{($title === "Tambah Admin") ? 'active' : ''}}" href="/add">Tambah Admin</a>
                        </nav>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</nav>