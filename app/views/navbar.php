<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5 navclass">
    <a class="navbar-brand" href="home">Gamerz</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Consoles
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/consoles">Switch</a>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="https://youtu.be/dQw4w9WgXcQ">About us</a>
            </li>

            <?php


            if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == true) {
                echo '<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Account
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="login">' . " " . $user->getUserName() . '</a>
                    <form class="dropdown-item" function="home" method="post"><button type="submit" name="logout" class="btn logout-btn">Log out</button></form>
                </div>';

                if ($user->getRole() == "admin") {
                    echo '<li class="nav-item">
                    <a class="nav-link" href="consolecrud">Console CRUD</a>
                    </li>';
                }
                else {
                    echo '</li>';
                }
            } else {
                echo '<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="login">Log in</a>
                        <a class="dropdown-item" href="Register">Register</a>
                    </div>
                    </li>';
            }
            ?>
        </ul>
    </div>
</nav>