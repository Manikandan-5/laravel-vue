<template>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img heigh="100px"
                width="100px"
                    src="https://png.pngtree.com/template/20191015/ourmid/pngtree-chef-abstract-kitchener-cooky-icon-logo-image_317353.jpg"
                    alt="Recipe-logo"
                />
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"
                            >Home</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-disabled="true">Contact</a>
                    </li>
                </ul>
                <div class="me-2">
                    <i class="bi bi-facebook"></i>&nbsp;
                    <i class="bi bi-instagram"></i>&nbsp;
                    <i class="bi bi-twitter"></i>&nbsp;
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "Home",
};
</script>
