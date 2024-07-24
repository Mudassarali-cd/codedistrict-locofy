<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />

    <link rel="stylesheet" href="assets/scss/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap" />
</head>

<body>


    <nav class="sticky top-0 bg-gray-800 text-white z-50 bg-[#000] site-header-wrapper">
        <div class="gap-6 site-header">
            <!-- Logo -->
            <a href="#" class="!p-0">
                <img src="assets/images/cd-logo-white.svg" alt="logo" class="" />
            </a>

            <!-- Primary Navigation -->
            <div class="mq1025:hidden flex items-center justify-start gap-12 navigation-menu navigation-menu">
                <!-- Dropdown Menu -->
                <div class="dropdown-toggle">
                    <a class="flex items-center gap-2">
                        Services
                        <i class="icon-arrow-down text-[7px] mt-1"></i>
                    </a>
                    <div class="sub-menu-wrapper dropdown-menu">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="grid grid-cols-3 gap-4 col-span-2 px-[85px] py-[84px]">
                                <div class="">
                                    <h4>Consulting</h4>
                                    <a href="#">Digital Transformation</a>
                                    <a href="#">Discovery Workshop</a>
                                    <a href="#">Technical Feasibility</a>
                                    <a href="#">User Experience & Design</a>
                                </div>
                                <div class="">
                                    <h4>Engineering</h4>
                                    <a href="#">PoC Development</a>
                                    <a href="#">Application Development</a>
                                    <a href="#">Product Development</a>
                                    <a href="#">Application Modernization</a>
                                    <a href="#">Software Development</a>
                                    <a href="#">Cloud Migration</a>
                                    <a href="#">Cloud Engineering</a>
                                </div>
                                <div class="">
                                    <h4>Expertise</h4>
                                    <a href="#">UX Design</a>
                                    <a href="#">Internet of Things</a>
                                    <a href="#">DevOps</a>
                                    <a href="#">Business Process Automation</a>
                                    <a href="#">System Integrators</a>
                                </div>
                                <div class="mt-8">
                                    <h4>Artificial Intelligence</h4>
                                    <a href="#">Quality Assurance & Testing</a>
                                    <a href="#">Software Audit</a>
                                    <a href="#">Support & Maintenance</a>
                                </div>
                                <div class="mt-8">
                                    <h4>Solutions</h4>
                                    <a href="#">Salesforce</a>
                                    <a href="#">Services for startups</a>
                                    <a href="#">Support & Maintenance</a>
                                </div>
                                <div class="mt-8">
                                    <h4>Optimization</h4>
                                    <a href="#">Quality Assurance & Testing</a>
                                </div>
                            </div>
                            <div class="sub-menu-links-right-col">
                                <h4>Partnership Models</h4>
                                <a class="pbd-link">Project-based Delivery <i class="icon-external-link"></i></a>
                                <a class="dt-link">Dedicated Team <i class="icon-external-link"></i></a>


                                <h4 class="!mt-8">By Role</h4>
                                <a class="br-link">CEO <i class="icon-external-link"></i></a>
                                <a class="br-link">CTO <i class="icon-external-link"></i></a>
                                <a class="br-link">COO <i class="icon-external-link"></i></a>
                                <a class="br-link">Product Manager <i class="icon-external-link"></i></a>
                                <a class="br-link">CIO <i class="icon-external-link"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <a href="#" class="py-2 px-3 block">Case Studies</a>
                <a href="#" class="py-2 px-3 block">Blog</a>
                <a href="#" class="py-2 px-3 block">Careers</a>
                <a href="#" class="py-2 px-3 block">Company</a>
            </div>
            <div class="menu-right-wrapper">
                <!-- Mobile Menu Button -->
                <div class="mq1025:flex hidden items-center">
                    <button class="mobile-menu-button">
                        <img src="assets/images/hamburger.svg" alt="hamburger" />
                    </button>
                </div>
                <!-- <a href="#" class="btn-for-startups">For Startups</a> -->
                <Button href="#" class="btn-contactus">CONTACT US</Button>
            </div>
        </div>
    </nav>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    // $(document).ready(function() {
    //     // Select all dropdown toggle buttons
    //     const dropdownToggles = $(".dropdown-toggle");

    //     dropdownToggles.each(function() {
    //         $(this).on("click", function() {
    //             // Find the next sibling element which is the dropdown menu
    //             const dropdownMenu = $(this).next(".dropdown-menu");

    //             // Toggle the 'hidden' class to show or hide the dropdown menu
    //             if (dropdownMenu.hasClass("hidden")) {
    //                 // Hide any open dropdown menus before showing the new one
    //                 $(".dropdown-menu").each(function() {
    //                     $(this).addClass("hidden");
    //                 });

    //                 dropdownMenu.removeClass("hidden");
    //             } else {
    //                 dropdownMenu.addClass("hidden");
    //             }
    //         });
    //     });

    //     // Optional: Clicking outside of an open dropdown menu closes it
    //     $(window).on("click", function(event) {
    //         if (!$(event.target).closest(".dropdown-toggle").length) {
    //             $(".dropdown-menu").each(function() {
    //                 if (!$(this).is(event.target) && $(this).has(event.target).length === 0) {
    //                     $(this).addClass("hidden");
    //                 }
    //             });
    //         }
    //     });
    // });
    // Mobile menu toggle
    const mobileMenuButton = $(".mobile-menu-button");
    const mobileMenu = $(".navigation-menu");

    mobileMenuButton.on("click", function() {
        mobileMenu.toggleClass("hidden");
    });
</script>

</html>