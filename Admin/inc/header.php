<div class="bg-dark py-3 shadow d-flex align-items-center justify-content-between sticky-top">
    <h1 class="ms-3 mb-0 h-font text-light animate__animated animate__fadeInDown"><?php echo $websiteTitle; ?> Booking Website</h1> 
    <a class="btn btn-primary me-5 fs-5 my-2 px-4" href="logout.php">LogOut</a>  
</div>


<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu" style="z-index: 1;">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-3 text-light">ADMIN PANEL</h4>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminMenuDropdown" aria-controls="adminMenuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-3" id="adminMenuDropdown">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                        <a href="dashboard.php" class="nav-link text-white">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="rooms.php" class="nav-link text-white">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a href="features.php" class="nav-link text-white">Feactures</a>
                    </li>
                    <li class="nav-item">
                        <a href="facilities.php" class="nav-link text-white">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a href="users_query.php" class="nav-link text-white">Users Queries</a>
                    </li>
                    <li class="nav-item">
                        <a href="booked_room.php" class="nav-link text-white">Booked Room</a>
                    </li>
                    <li class="nav-item">
                        <a href="user.php" class="nav-link text-white">User Detail</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

