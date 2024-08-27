<template>
    <div class="mt-5">
    <footer class="footer mt-auto py-3" style="background-color:#b531bb">
        <div class="container text-center">
            <div class="row mb-3">
                <div class="col-md-3">
                    <h5>Recipe Categories</h5>
                    <ul class="list-unstyled">
                        <li class="d-flex align-items-center text-decoration-none text-white">
                                <i class="bi bi-union fs-4 me-2"></i>
                                Appetizers 
                        </li>
                        <li class="d-flex align-items-center text-decoration-none text-white">
                                <i class="bi bi-caret-down-fill fs-4 me-2"></i>
                                Main Courses 
                        </li>
                        <li class="d-flex align-items-center text-decoration-none text-white">
                                <i class="bi bi-flower3 fs-4 me-2"></i>
                                Desserts
                        </li>
                        <li class="d-flex align-items-center text-decoration-none text-white">
                            
                                <i class="bi bi-cup-straw fs-4 me-2"></i>
                                Drinks
                          
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><router-link to="/"   class="text-decoration-none text-white">Home</router-link></li>
                        <li><router-link to="/about" class="text-decoration-none text-white">About</router-link></li>
                        <li><router-link to="/review" class="text-decoration-none text-white">Comments</router-link></li>
                        <li><a href="#" class="text-decoration-none text-white"> || Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <h5>Follow Us</h5>
                    <div class="d-flex justify-content-center mb-3 text-white">
                            <i class="bi bi-facebook fs-4"></i>&nbsp;&nbsp;
                            <i class="bi bi-twitter fs-4"></i>&nbsp;&nbsp;
                            <i class="bi bi-instagram fs-4"></i>&nbsp;&nbsp;
                            <i class="bi bi-linkedin fs-4"></i>&nbsp;
                    </div>
                </div>
            </div>
            <p class="mt-2 mb-0 fw-bold text-white">&copy; Manikandan || All Rights Reserved</p>
        </div>
    </footer></div>
</template>

<style scoped>
.footer-icon {
    font-size: 1.5rem; /* Adjust icon size */
    transition: color 0.3s;
}

.footer-icon:hover {
    color: #007bff; /* Bootstrap's primary color */
}

.text-dark {
    color: #343a40 !important; /* Bootstrap's dark color for icons */
}

.list-unstyled a {
    display: flex;
    align-items: center;
    color: #343a40; /* Dark color for links */
    transition: color 0.3s;
}

.list-unstyled a:hover {
    color: #007bff; /* Bootstrap's primary color on hover */
}
</style>

