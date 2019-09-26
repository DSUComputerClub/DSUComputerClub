<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DSUComputerClub</title>
    <link rel="stylesheet" href="styles/slicknav.css">
    <link rel="stylesheet" href="styles/main.css">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#nav_menu').slicknav({prependTo:"#mobilemenu"});
        });
    </script>
    <script>
        /* When the user clicks on the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</head>

<header>
    <div class="dropdown">
        <button onclick="myFunction()" class="dropbtn">Computer Club</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <button onclick="myFunction()" class="dropbtn">DefSec</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <button onclick="myFunction()" class="dropbtn">OffSec</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
        <button onclick="myFunction()" class="dropbtn">Prog Club</button>
        <div id="myDropdown" class="dropdown-content">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#contact">Contact</a>
        </div>
    </div>
</header>

<nav id="mobilemenu"></nav>
<nav id="nav_menu">

</nav>

<body>
<h1><u><b>DSU Computer Club</b></u></h1>
<h5> --- All meetings at 5:30PM --- </h5>
<br>
<br>
<h6># Week of 09/23 #</h6>
<main>
    <h3>Computer Club</h3>
    <ul>
        <li>This week we'll have a couple of Sanford employees join us to discuss Sanford's first ever Tech Summit on Saturday, October 5th and Sunday, October 6th in Sioux Falls. </li>
        <br>
        <li>The Summit (styled much like a hackathon) focuses on building innovative solutions to common healthcare challenges in a competitive, time-limited environment. </li>
        <br>
        <li>To engage the best students, $25,000 in prizes to be distributed across 3 winning teams. We really believe it will be a great opportunity for students to collaborate on real problems with industry professionals.</li>
    </ul>
    <p id="register">--- <a href="https://www.sanfordhealth.org/classes-and-events/sanford-health-tech-summit">Registration</a> ---</p>
    <br>
    <h3>Defensive Security Club</h3>
    <ul>
        <li>We'll be going over host-based firewalls on both Windows and Linux systems this week.</li>
        <br>
        <li>At many competitions, our teams' usages of host-based firewalls are mentioned by the attacking teams as being one of the most effective countermeasures that they had to circumvent.</li>
    </ul>
    <br>
    <h3>Offensive Security Club</h3>
    <ul>
        <li>When you begin red teaming, one of the first things you do is reconnaissance.</li>
        <br>
        <li>The officers and Lucas Miller will be talking about some methods for gathering information!</li>
    </ul>
    <br>
    <h3>Programming Club</h3>
    <ul>
        <li>We will be going through an introduction to Github, one of most useful tools out there for programming, and a programming trivia game! </li>
    </ul>
</main>
</body>
<br>
<br>
<footer><a href="https://kernelpoppers.slack.com/messages/CNP3XUP2T">PRAISE BE OUR LORD AND SAVIOR</a></footer>
</html>
