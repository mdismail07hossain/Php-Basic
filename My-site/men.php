<?php 
include('common-file/header.php');
?>
<!-- Gallery Section -->
    <section class="container my-5">
        <h1 class="text-center mb-4">Gallery</h1>
        <p class="text-center mb-5">Explore our collection of beautiful images.</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!-- Gallery Item 1 -->
            <div class="col">
                <div class="card h-100">
                    <img src="./Bata_imge/banner-1.webp" class="card-img-top" alt="Image 1" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="https://via.placeholder.com/800x500">
                    <div class="card-body">
                        <h5 class="card-title">Image 1</h5>
                        <p class="card-text">This is a description of Image 1. Click to view the full image.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 2 -->
            <div class="col">
                <div class="card h-100">
                    <img src="./Bata_imge/banner-1.webp" class="card-img-top" alt="Image 2" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="https://via.placeholder.com/800x500">
                    <div class="card-body">
                        <h5 class="card-title">Image 2</h5>
                        <p class="card-text">This is a description of Image 2. Click to view the full image.</p>
                    </div>
                </div>
            </div>

            <!-- Gallery Item 3 -->
            <div class="col">
                <div class="card h-100">
                    <img src="./Bata_imge/banner-1.webp" class="card-img-top" alt="Image 3" data-bs-toggle="modal" data-bs-target="#imageModal" data-bs-img-src="https://via.placeholder.com/800x500">
                    <div class="card-body">
                        <h5 class="card-title">Image 3</h5>
                        <p class="card-text">This is a description of Image 3. Click to view the full image.</p>
                    </div>
                </div>
            </div>

            <!-- Additional Gallery Items can be added here following the same structure -->
        </div>
    </section>

    <!-- Modal for Full Image View -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image View</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="./Bata_imge/banner-1.webp" alt="Full Image" id="modalImage" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

<?php
include('common-file/footer.php');
?>