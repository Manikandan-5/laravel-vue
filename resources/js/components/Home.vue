<template>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img heigh="100px"
                width="100px"
                    src="https://static.vecteezy.com/system/resources/previews/007/559/224/non_2x/recipe-food-logo-design-template-free-vector.jpg"
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
                <span class="navbar-toggler-icon" style="color:#b531bb"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link to="/"  class="nav-link" style="color:#b531bb">Home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link to="/about" class="nav-link" style="color:#b531bb">About</router-link>

                    </li>

                    <li class="nav-item">
                        <router-link to="/feedback" class="nav-link" style="color:#b531bb">Review</router-link>
                    </li>
                </ul>
                <div class="me-2">
                    <i class="bi bi-facebook" style="color:#b531bb"></i>&nbsp;
                    <i class="bi bi-instagram" style="color:#b531bb"></i>&nbsp;
                    <i class="bi bi-twitter" style="color:#b531bb"></i>&nbsp;
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
