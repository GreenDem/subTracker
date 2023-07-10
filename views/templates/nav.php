<nav>

    <a href="/" class="nav-icon" aria-label="homepage" aria-current="page">
        <img src="/public/assets/img/logo.png" alt="chat icon" />
        <span>SubTracker</span>
    </a>

    <div class="main-navlinks">
        <button type="button" class="hamburger" aria-label="Toggle Navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navlinks-container">
            <?php if (!empty($_SESSION['user'])) { ?>
            <a href="/index.php?action=subHome" aria-current="page">Sub Home</a>
            <a href="/index.php?action=add">Ajouter</a>
            <?php if ($_SESSION['user']->admin = 1) { ?>
                <a href="/index.php?action=dash">DashBoard</a>
                <?php }} ?>
        </div>
    </div>

    <div class="nav-authentication">
        <a href="#" class="user-toggler" aria-label="Sign in page">
            <img src="/public/assets/img/user.svg" alt="user icon" />
        </a>
        <div class="sign-btns">
        <?php if (empty($_SESSION['user'])){?>
            <button type="button" onclick="location.href='index.php?action=signIn'">Sign In</button>
            <button type="button" onclick="location.href='index.php?action=signUp'">Sign Up</button>
            <?php } else {?>
                <button type="button" onclick="location.href='index.php?action=logOut'">Deconexion</button>
                <?php } ?>
        </div>
    </div>

</nav>

</header>

<main>