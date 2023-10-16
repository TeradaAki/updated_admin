<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout</title>
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
</head>
<body>
    <header>
        <div class="header-profile">
            <div class="profile-icon" onmouseover="showLogoutDropdown()" onmouseout="hideLogoutDropdown()">
                <svg class="profile-icon">
                    <use xlink:href="#bi bi-person-circle"></use>
                </svg>
                <div class="logout-dropdown" id="logout-dropdown">
                    <a href="logout">Logout</a>
                </div>
            </div>
            <div class="profile-name">
                @yield('account_name')
            </div>
        </div>
    </header>

    <div class="sidenav">
        <div class="img">
            <img src="images/onway_logo.png" alt="Onway Logo">
        </div>
        <br>
        <hr>
        <div class="row">

            <div class="dropdown">
                <div class="item">
                    <div class="icon_item">
                        <svg class="icon">
                            <use xlink:href="#bi bi-speedometer"></use>
                        </svg>
                    </div>  
                    <a class="name" href="/dashboard">Dashboard</a>
                </div>
            </div>

            <div class="dropdown">
                <div class="item" onclick="toggleDropdown('dropdown-content-1')">
                    <div class="icon_item">
                        <svg class="icon">
                            <use xlink:href="#bi bi-kanban"></use>
                        </svg>
                    </div>  
                    <a class="name">Manage</a>
                </div>
                <div class="dropdown-content" id="dropdown-content-1">
                    <a class="name-1" href="/customer">Customer</a>
                    <a class="name-1" href="#">Delivery Driver</a>
                    <a class="name-1" href="#">Restaurant/Store</a>
                    <a class="name-1" href="#">Menu and Item</a>
                    <a class="name-1" href="#">Feedback and Rating</a>
                    <a class="name-1" href="#">Orders</a>
                </div>
            </div>
            
            <div class="dropdown">
                <div class="item" onclick="toggleDropdown('dropdown-content-2')">
                    <div class="icon_item">
                        <svg class="icon">
                            <use xlink:href="#bi bi-gear"></use>
                        </svg>
                    </div>  
                    <a class="name">Settings</a>
                </div>
                <div class="dropdown-content" id="dropdown-content-2">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>

            <div class="dropdown">
                <div class="item" onclick="toggleDropdown('dropdown-content-3')">
                    <div class="icon_item">
                        <svg class="icon">
                            <use xlink:href="#bi bi-speedometer"></use>
                        </svg>
                    </div>  
                    <a class="name">test</a>
                </div>
                <div class="dropdown-content" id="dropdown-content-2">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>

        </div>
   </div>

   <div class="content">
    {{-- Content here --}}
    @yield('content')
   </div>

   <script>
        function toggleDropdown(dropdownId) {
            var dropdownContent = document.getElementById(dropdownId);
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        }

        // Close the dropdowns when clicking outside of them
        document.addEventListener("click", function(event) {
            var dropdowns = document.querySelectorAll(".dropdown");
            dropdowns.forEach(function(dropdown) {
                var dropdownContent = dropdown.querySelector(".dropdown-content");
                if (!dropdown.contains(event.target)) {
                    dropdownContent.style.display = "none";
                }
            });
        });

        // Close the dropdowns when moving the cursor out
        document.querySelectorAll(".dropdown-content").forEach(function(dropdownContent) {
            dropdownContent.addEventListener("mouseleave", function() {
                dropdownContent.style.display = "none";
            });
        });

        function showLogoutDropdown() {
            var logoutDropdown = document.getElementById("logout-dropdown");
            logoutDropdown.style.display = "block";
        }

        function hideLogoutDropdown() {
            var logoutDropdown = document.getElementById("logout-dropdown");
            logoutDropdown.style.display = "none";
        }
    </script>

    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
        <!-- DASHBOARD ICON  -->
        <symbol id="bi bi-speedometer" viewBox="0 0 16 16">
            <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
            <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
        </symbol>
        <!-- MANAGE ICON  -->
        <symbol id="bi bi-kanban" viewBox="0 0 16 16">
            <path d="M13.5 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-11a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h11zm-11-1a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2h-11z"/>
            <path d="M6.5 3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm-4 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3zm8 0a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3z"/>
        </symbol>
        <!-- SETTINGS ICON  -->
        <symbol id="bi bi-gear" viewBox="0 0 16 16">
            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
        </symbol>
    </svg>
    <svg xmlns="http://www.w3.org/2000/svg" class="profile-icon">
        <!-- PROFILE ICON  -->
        <symbol id="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </symbol>
    </svg>

  

</body>
</html>