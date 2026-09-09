
<?php
session_start();

// Check if a user is logged in (this relies on login.php setting
// $_SESSION['username'] after a successful login against the users table)
$is_logged_in = isset($_SESSION['username']);
$current_user = $is_logged_in ? $_SESSION['username'] : null;

// About page content driven from PHP arrays (real logic, not just static HTML)
$stats = [
    ['value' => '5+', 'label' => 'Years of Experience'],
    ['value' => '10K+', 'label' => 'Happy Customers'],
    ['value' => '50+', 'label' => 'Menu Items'],
    ['value' => '15+', 'label' => 'Expert Chefs'],
];

$values = [
    ['icon' => 'fa-leaf', 'title' => 'Fresh Ingredients', 'text' => 'We use only fresh, carefully selected ingredients in every dish we prepare.'],
    ['icon' => 'fa-clock', 'title' => 'Fast Delivery', 'text' => 'Your food arrives hot and on time, wherever you are.'],
    ['icon' => 'fa-heart', 'title' => 'Made with Love', 'text' => 'Every meal is prepared with genuine care and passion for great food.'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Foodora</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    <div class="navbar">
        <div class="leftnavbar">
            <h2>Food
                <span class="ora">ORA</span>
            </h2>
        </div>
        <div class="rightnavbar">
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="register">
            <?php if ($is_logged_in): ?>
                <span style="color: white; margin-left: 10px;">Hi, <?php echo htmlspecialchars($current_user); ?></span>
                <a href="logout.php" style="background-color: orange; color: black; padding: 7px 15px; text-decoration: none; border-radius: 4px; display: inline-block; margin-left: 10px;">Logout</a>
            <?php else: ?>
                <a href="login.php" style="background-color: orange; color: black; padding: 7px 15px; text-decoration: none; border-radius: 4px; display: inline-block; margin-left: 10px;">Login</a>
                <a href="register.php" style="background-color: orange; color: black; padding: 7px 15px; text-decoration: none; border-radius: 4px; display: inline-block; margin-left: 10px;">register</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="abouthero">
        <h1>About Us</h1>
        <p>Great taste meets quality and passion</p>
    </div>

    <div class="aboutstory">
        <img src="images/seconddiv.jpg" alt="Foodora Restaurant">
        <div class="storytext">
            <h2>Our <span>Story</span></h2>
            <p>Foodora started with one simple idea: everyone deserves a great meal made with fresh, high-quality ingredients. What began as a small kitchen with a big passion for food has grown into a modern restaurant serving thousands of happy customers.</p>
            <p>We carefully select every ingredient and prepare every dish with attention to detail, because we believe good food is more than just eating, it's an experience worth remembering.</p>
            <p>Today, Foodora continues to grow while staying true to its roots: real flavor, real quality, and real care for every customer who orders from us.</p>
        </div>
    </div>

    <div class="aboutstats">
        <?php foreach ($stats as $stat): ?>
            <div class="statbox">
                <h3><?php echo htmlspecialchars($stat['value']); ?></h3>
                <p><?php echo htmlspecialchars($stat['label']); ?></p>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="aboutvalues">
        <h2>Why Choose Us</h2>
        <div class="valuesrow">
            <?php foreach ($values as $value): ?>
                <div class="valuebox">
                    <i class="fa-solid <?php echo htmlspecialchars($value['icon']); ?>"></i>
                    <h4><?php echo htmlspecialchars($value['title']); ?></h4>
                    <p><?php echo htmlspecialchars($value['text']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="sixdiv">
        <p>follow us on another websites</p>
        <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </div>
</body>
</html>