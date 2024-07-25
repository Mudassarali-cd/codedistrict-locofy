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

    <!-- Header Start -->

    <nav class="top-0 text-white z-50 site-header-wrapper" id="site-header">
        <div class="mq1425:gap-4 gap-6 site-header thm-container">
            <!-- Logo -->
            <a href="#" class="!p-0">
                <img src="assets/images/cd-logo-white.svg" alt="logo" class="logo-white" />
                <img src="assets/images/cd-logo-black.svg" alt="logo" class="logo-black" />
            </a>

            <!-- Primary Navigation -->
            <div class="mq1025:hidden navigation-menu">
                <div class="mobile-nav-header mq1025:flex hidden">
                    <img src="assets/images/cd-logo-black.svg" alt="logo" />
                    <i class="icon-close  cursor-pointer"> </i>
                </div>
                <!-- Dropdown Menu -->

                <div class="flex mq1025:flex-col items-center justify-start mq1025:gap-0 mq1425:gap-8 gap-12 menu-wrapper">
                    <div class="dropdown-toggle">
                        <a class="flex items-center gap-2 leading-none">
                            Services
                            <i class="icon-arrow-down text-[7px] mt-1"></i>
                        </a>
                        <div class="sub-menu-wrapper dropdown-menu">
                            <div class="grid mq1025:grid-cols-1 mq1025:gap-0 grid-cols-3 gap-4 mq1025:w-full thm-container">
                                <div class="grid mq1025:grid-cols-1 mq1025:col-span-1 grid-cols-3 mq1025:gap-6 col-span-2 mq1025:px-0 mq1025:py-0 gap-4 py-[3.5rem]">
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
                                    <div class="mq1025:mt-0 mt-8">
                                        <h4>Artificial Intelligence</h4>
                                        <a href="#">Quality Assurance & Testing</a>
                                        <a href="#">Software Audit</a>
                                        <a href="#">Support & Maintenance</a>
                                    </div>
                                    <div class="mq1025:mt-0 mt-8">
                                        <h4>Solutions</h4>
                                        <a href="#">Salesforce</a>
                                        <a href="#">Services for startups</a>
                                        <a href="#">Support & Maintenance</a>
                                    </div>
                                    <div class="mq1025:mt-0 mt-8">
                                        <h4>Optimization</h4>
                                        <a href="#">Quality Assurance & Testing</a>
                                    </div>
                                </div>
                                <div class="sub-menu-links-right-col">
                                    <h4 class="mq1025:!mt-8">Partnership Models</h4>
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
            </div>
            <div class="menu-right-wrapper">
                <!-- <a href="#" class="btn-for-startups">For Startups</a> -->
                <Button href="#" class="btn-contactus">CONTACT US</Button>

                <!-- Mobile Menu Button -->
                <button class="mobile-menu-button cursor-pointer" id="mobileMenu">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <div class="mob-nav-bg mq1025:block hidden"></div>
    </nav>

    <!-- Header End -->

    <!--  Section Hero Start -->

    <section class="outter hero-video">
        <div class="tabs-content">
            <div class="video-container active" id="tabs-1">
                <video poster="assets/images/hero/nielson.jpg" src="assets/videos/hero/nielson.mp4" autoplay loop playsinline muted></video>
                <div class="video-content-wrapper w-[62.125rem] flex flex-col items-start justify-start gap-[3.75rem] max-w-full mq1000:gap-[1.875rem]">
                    <h1 class="m-0 tracking-[-2.2px] leading-[5rem] font-semibold font-mona-sans z-[3] mq450:text-[2.688rem] mq450:leading-[3rem] mq975:text-[3.625rem] mq975:leading-[4rem] text-[4.5rem]">
                        Building software products beyond expectations
                    </h1>
                    <a class="cursor-pointer py-[1.125rem] px-[2.5rem] bg-mediumaquamarine shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] rounded-lg flex items-start justify-start gap-[1.5rem] z-[3] mq725:py-[1rem] mq725:px-[1rem] tracking-[-0.15px] uppercase font-semibold text-black text-[1rem] font-mona-sans">
                        Lets Discuss your Project
                        <i class="icon-external-link"></i>
                    </a>
                </div>
            </div>
            <div class="video-container hidden" id="tabs-2">
                <video poster="assets/images/hero/astra-zenecca.jpg" src="assets/videos/hero/astra-zenecca.mp4" autoplay loop playsinline muted></video>
                <div class="video-content-wrapper w-[62.125rem] flex flex-col items-start justify-start gap-[3.75rem] max-w-full mq1000:gap-[1.875rem]">
                    <h1 class="m-0 tracking-[-2.2px] leading-[5rem] font-semibold font-mona-sans z-[3] mq450:text-[2.688rem] mq450:leading-[3rem] mq975:text-[3.625rem] mq975:leading-[4rem] text-[4.5rem]">
                        Building software products beyond expectations
                    </h1>
                    <a class="cursor-pointer py-[1.125rem] px-[2.5rem] bg-mediumaquamarine shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] rounded-lg flex items-start justify-start gap-[1.5rem] z-[3] mq725:py-[1rem] mq725:px-[1rem] tracking-[-0.15px] uppercase font-semibold text-black text-[1rem] font-mona-sans">
                        Lets Discuss your Project
                        <i class="icon-external-link"></i>
                    </a>
                </div>
            </div>
            <div class="video-container hidden" id="tabs-3">
                <video poster="assets/images/hero/carribean-airlines.jpg" src="assets/videos/hero/carribean-airlines.mp4" autoplay loop playsinline muted></video>
                <div class="video-content-wrapper w-[62.125rem] flex flex-col items-start justify-start gap-[3.75rem] max-w-full mq1000:gap-[1.875rem]">
                    <h1 class="m-0 tracking-[-2.2px] leading-[5rem] font-semibold font-mona-sans z-[3] mq450:text-[2.688rem] mq450:leading-[3rem] mq975:text-[3.625rem] mq975:leading-[4rem] text-[4.5rem]">
                        Building software products beyond expectations
                    </h1>
                    <a class="cursor-pointer py-[1.125rem] px-[2.5rem] bg-mediumaquamarine shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] rounded-lg flex items-start justify-start gap-[1.5rem] z-[3] mq725:py-[1rem] mq725:px-[1rem] tracking-[-0.15px] uppercase font-semibold text-black text-[1rem] font-mona-sans">
                        Lets Discuss your Project
                        <i class="icon-external-link"></i>
                    </a>
                </div>
            </div>
            <div class="video-container hidden" id="tabs-4">
                <video poster="assets/images/hero/swatfame.jpg" src="assets/videos/hero/swatFame.mp4" autoplay loop playsinline muted></video>
                <div class="video-content-wrapper w-[62.125rem] flex flex-col items-start justify-start gap-[3.75rem] max-w-full mq1000:gap-[1.875rem]">
                    <h1 class="m-0 tracking-[-2.2px] leading-[5rem] font-semibold font-mona-sans z-[3] mq450:text-[2.688rem] mq450:leading-[3rem] mq975:text-[3.625rem] mq975:leading-[4rem] text-[4.5rem]">
                        Building software products beyond expectations
                    </h1>
                    <a class="cursor-pointer py-[1.125rem] px-[2.5rem] bg-mediumaquamarine shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] rounded-lg flex items-start justify-start gap-[1.5rem] z-[3] mq725:py-[1rem] mq725:px-[1rem] tracking-[-0.15px] uppercase font-semibold text-black text-[1rem] font-mona-sans">
                        Lets Discuss your Project
                        <i class="icon-external-link"></i>
                    </a>
                </div>
            </div>
            <div class="video-container hidden" id="tabs-5">
                <video poster="assets/images/hero/limbik.jpg" src="assets/videos/hero/limbik.mp4" autoplay loop playsinline muted></video>
                <div class="video-content-wrapper w-[62.125rem] flex flex-col items-start justify-start gap-[3.75rem] max-w-full mq1000:gap-[1.875rem]">
                    <h1 class="m-0 tracking-[-2.2px] leading-[5rem] font-semibold font-mona-sans z-[3] mq450:text-[2.688rem] mq450:leading-[3rem] mq975:text-[3.625rem] mq975:leading-[4rem] text-[4.5rem]">
                        Building software products beyond expectations
                    </h1>
                    <a class="cursor-pointer py-[1.125rem] px-[2.5rem] bg-mediumaquamarine shadow-[0px_4px_4px_rgba(0,_0,_0,_0.25)] rounded-lg flex items-start justify-start gap-[1.5rem] z-[3] mq725:py-[1rem] mq725:px-[1rem] tracking-[-0.15px] uppercase font-semibold text-black text-[1rem] font-mona-sans">
                        Lets Discuss your Project
                        <i class="icon-external-link"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="tabs-items-wrapper grid grid-cols-5 mq725:grid-cols-1 gap-4 absolute z-10 bottom-0">
            <div class="tabs-item" data-target="#tabs-1">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <img class="max-w-full" loading="lazy" alt="" src="assets/images/hero/nielsen-logo.svg" />
            </div>
            <div class="tabs-item" data-target="#tabs-2">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <img class="max-w-full" loading="lazy" alt="" src="assets/images/hero/astra-zeneca-logo.svg" />
            </div>
            <div class="tabs-item" data-target="#tabs-3">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <img class="max-w-full" alt="" src="assets/images/hero/caribbean-airlines-logo.svg" />
            </div>
            <div class="tabs-item" data-target="#tabs-4">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <img class="max-w-full" alt="" src="assets/images/hero/swatfame-logo.svg" />
            </div>
            <div class="tabs-item" data-target="#tabs-5">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>
                <img class="max-w-full" alt="" src="assets/images/hero/limbik.svg" />
            </div>
        </div>
    </section>

    <!--  Section Hero End -->


    <!-- Section Services Cards Start -->
    <section class="page-section relative overflow-hidden bg-white pb-14 pe-0 pt-[42px] font-mona-sans">
        <div class="thm-container">
            <h2>How we impact your business?</h2>
            <div class="flex max-w-full flex-row items-start justify-start gap-[24px] overflow-x-auto font-mona-sans text-9xl text-black">
                <div class="w-[483px] max-w-full shrink-0 rounded-xl border-[1px] border-solid border-gainsboro p-[30px]">
                    <div class="mb-12 flex flex-row items-start justify-between gap-[20px] self-stretch">
                        <img class="relative h-[111px] shrink-0 overflow-hidden object-cover" loading="lazy" alt="" src="assets/images/engineering.svg" />
                        <img class="relative h-[15.8px] w-[15.8px]" loading="lazy" alt="" src="assets/images/vector.svg" />
                    </div>
                    <h3 class="mb-3 mt-0 text-inherit font-medium">Engineering</h3>
                    <p class="my-0 text-xl font-light leading-[28px]">
                        Accelerate efficiency and business growth. Our agile software
                        development approach empowers you to achieve your goals seamlessly
                        and effectively.
                    </p>
                </div>
                <div class="w-[483px] max-w-full shrink-0 rounded-xl border-[1px] border-solid border-gainsboro p-[30px] mq450:box-border mq450:pb-5 mq450:pt-5">
                    <div class="mb-12 flex flex-row items-start justify-between gap-[20px] self-stretch mq450:mb-[24px]">
                        <img class="relative h-[111px] shrink-0 overflow-hidden object-cover" loading="lazy" alt="" src="assets/images/digital-consulting.svg" />

                        <img class="relative h-[15.8px] w-[15.8px]" loading="lazy" alt="" src="assets/images/vector.svg" />
                    </div>
                    <h3 class="mb-4 mt-0 text-inherit font-medium">
                        Digital Consulting & Advisory
                    </h3>
                    <p class="my-0 text-xl font-light leading-[28px]">
                        Accelerate efficiency and business growth. Our agile software
                        development approach empowers you to achieve your goals seamlessly
                        and effectively.
                    </p>
                </div>
                <div class="w-[483px] max-w-full shrink-0 rounded-xl border-[1px] border-solid border-gainsboro p-[30px] mq450:box-border mq450:pb-5 mq450:pt-5">
                    <div class="mb-12 flex flex-row items-start justify-between gap-[20px] self-stretch mq450:mb-[24px]">
                        <img class="relative h-[111px] shrink-0 overflow-hidden object-cover" loading="lazy" alt="" src="assets/images/ai-data.svg" />

                        <img class="relative" loading="lazy" alt="" src="assets/images/vector.svg" />
                    </div>
                    <h3 class="mb-4 mt-0 text-inherit font-medium">AI & Data</h3>
                    <p class="my-0 text-xl font-light leading-[28px]">
                        Accelerate efficiency and business growth. Our agile software
                        development approach empowers you to achieve your goals seamlessly
                        and effectively.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Section Services Cards End -->

    <!-- Section Case Studies Start -->
    <section class="page-section case-study-section flex w-full gap-[48px] overflow-hidden bg-black font-mona-sans text-21xl text-white mq700:box-border mq700:gap-[24px]">
        <div class="thm-container">
            <h2>Case studies</h2>
            <div class="grid grid-cols-2 gap-[32.2px] gap-y-[48px] self-stretch text-left text-xl mq1325:grid-cols-1 mq700:gap-[16px] mq700:gap-y-[16px]">
                <div class="relative overflow-hidden rounded-[8.37px] bg-[url('../images/case-studies/lsu.jpg')] bg-cover bg-[top] bg-no-repeat mq950:min-w-full">
                    <div class="apect-ratio-thumb">
                        <img class="case-study-thumb w-[837px] self-stretch object-cover" alt="" src="assets/images/case-studies/lsu.jpg" />
                    </div>
                    <div class="absolute bottom-0 z-[1] box-border flex w-full max-w-full flex-1 shrink-0 flex-col items-start justify-end gap-[16.7px] overflow-hidden pb-[27.7px] pe-5 ps-8 [background:linear-gradient(-0.46deg,_#000,_rgba(102,_102,_102,_0))] mq1325:pe-3 mq1325:ps-3 mq700:box-border">
                        <img class="relative z-[2] h-[23px] object-contain" loading="lazy" alt="" src="assets/images/case-studies/lsu-logo.svg" />
                        <p class="z-[2] m-0 inline-block min-h-[85px] w-[40rem] max-w-full font-medium leading-[28px] mq450:text-base mq450:leading-[22px]">
                            HIPAA-compliant survey application to gather reliable health
                            data from individuals with speech disorders.
                        </p>
                    </div>
                </div>
                <div class="relative flex max-w-full flex-1 flex-row items-start justify-start overflow-hidden rounded-[8.37px] bg-[url('../images/case-studies/stc-pay.jpg')] bg-cover bg-[top] bg-no-repeat mq950:min-w-full">
                    <div class="apect-ratio-thumb">
                        <img class="case-study-thumb self-stretch object-cover" alt="" src="assets/images/case-studies/stc-pay.jpg" />
                    </div>
                    <div class="absolute bottom-0 left-0 z-[1] box-border flex max-w-full flex-1 shrink-0 flex-col items-start justify-end gap-[16.7px] overflow-hidden pb-[27.7px] pe-5 ps-8 [background:linear-gradient(-0.46deg,_#000,_rgba(102,_102,_102,_0))] mq1325:pe-3 mq1325:ps-3 mq700:box-border mq700:pb-3">
                        <img class="relative z-[2] h-[23px] object-contain" loading="lazy" alt="" src="assets/images/case-studies/stc-pay-logo.svg" />
                        <p class="z-[2] m-0 inline-block min-h-[85px] w-[40rem] max-w-full font-medium leading-[28px] mq450:text-base mq450:leading-[22px]">
                            Designed and integrated a remittance module to increase the Bank
                            of Bahrain.
                        </p>
                    </div>
                </div>
                <div class="relative flex max-w-full flex-1 flex-row items-start justify-start overflow-hidden rounded-[8.37px] bg-[url('../images/case-studies/family-dollar.jpg')] bg-cover bg-[top] bg-no-repeat mq950:min-w-full">
                    <div class="apect-ratio-thumb">
                        <img class="case-study-thumb self-stretch object-cover" alt="" src="assets/images/case-studies/family-dollar.jpg" />
                    </div>
                    <div class="absolute bottom-0 left-0 z-[1] box-border flex w-full max-w-full flex-1 shrink-0 flex-col items-start justify-end gap-[16.7px] overflow-hidden pb-[27.7px] pe-5 ps-8 [background:linear-gradient(-0.46deg,_#000,_rgba(102,_102,_102,_0))] mq1325:pe-3 mq1325:ps-3 mq700:box-border mq700:pb-3">
                        <img class="relative z-[2] h-[23px] object-contain" loading="lazy" alt="" src="assets/images/case-studies/family-dollar-logo.svg" />
                        <p class="z-[2] m-0 inline-block min-h-[85px] w-[40rem] max-w-full font-medium leading-[28px] mq450:text-base mq450:leading-[22px]">
                            Increased overall sales by automating field audits via a custom
                            mobile app.
                        </p>
                    </div>
                </div>
                <div class="relative flex max-w-full flex-1 flex-row items-start justify-start overflow-hidden rounded-[8.37px] bg-[url('../images/case-studies/caribbean-airlines.jpg')] bg-cover bg-[top] bg-no-repeat mq950:min-w-full">
                    <div class="apect-ratio-thumb">
                        <img class="case-study-thumb self-stretch object-cover" alt="" src="assets/images/case-studies/caribbean-airlines.jpg" />
                    </div>
                    <div class="absolute bottom-0 left-0 z-[1] box-border flex w-full max-w-full flex-1 shrink-0 flex-col items-start justify-end gap-[14px] overflow-hidden pb-[27.7px] pe-5 ps-8 [background:linear-gradient(-0.46deg,_#000,_rgba(102,_102,_102,_0))] mq1325:pe-3 mq1325:ps-3 mq700:box-border mq700:pb-3">
                        <img class="relative z-[2] object-contain" loading="lazy" alt="" src="assets/images/case-studies/caribbean-airlines-logo.svg" />
                        <p class="z-[2] m-0 inline-block min-h-[85px] w-[40rem] max-w-full font-medium leading-[28px] mq450:text-base mq450:leading-[22px]">
                            Enhanced the app performance with SIP integration and increased
                            transparency with an automated client-facing refund web portal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flex flex-row items-start justify-center self-stretch pe-px ps-0 pt-[40px]">
                <button class="font-inter flex min-w-[81px] cursor-pointer flex-row items-start justify-start gap-[22.6px] overflow-hidden rounded-lg bg-mediumaquamarine px-10 pb-[16.8px] pt-[18.2px] text-left text-[15px] font-semibold uppercase leading-[21px] tracking-[-0.15px] text-black [border:none]">
                    All cases
                    <img class="relative h-4 w-4" alt="" src="assets/images/svg.svg" />
                </button>
            </div>
        </div>
    </section>

    <!-- Section Case Studies End -->

    <!-- Section Testimonials Start -->

    <section class="page-section overflow-hidden font-mona-sans text-21xl text-black">
        <div class="thm-container">
            <h2>What our clients say</h2>
            <div class="rounded-3xl border-[1px] border-solid border-gainsboro bg-whitesmoke p-[4.375rem] font-mona-sans text-13xl text-black mq1350:pe-6 mq1350:ps-6 mq925:pb-7 mq925:pt-7">
                <div class="flex flex-row items-start justify-between gap-[20px] pe-1 ps-0 mq1325:flex-wrap">
                    <div class="flex w-[808px] max-w-full flex-col mq1325:min-w-full mq1325:flex-1">
                        <img class="mb-[9px] w-[57px]" loading="lazy" alt="" src="assets/images/vector1.svg" />
                        <h5 class="my-0 mb-14 text-[2rem] font-semibold tracking-[-0.02em] mq450:text-lgi">
                            Great people to work with and we will continue to work with
                            them. The whole interaction with code district was very
                            collaborative.
                        </h5>
                        <h6 class="my-0 text-5xl font-semibold leading-[19.96px] tracking-[-0.01em] mq450:text-lgi mq450:leading-[16px]">
                            Christian Yavorsky
                        </h6>
                        <p class="font-inter mb-0 mt-[11px] text-[17.2px] font-medium leading-[20px] tracking-[-0.01em] text-gray-100">
                            CO-FOUNDER & CHEIF SCIENTIFIC OFFICER
                        </p>

                        <div class="mt-[61px] flex flex-row items-center justify-start">
                            <img class="h-[36.5px] w-[36.5px]" loading="lazy" alt="" src="assets/images/arrow@2x.png" />

                            <img class="h-[36.5px] w-[36.5px]" loading="lazy" alt="" src="assets/images/arrow-1@2x.png" />
                        </div>
                    </div>
                    <div class="client-img">
                        <img class="flex max-h-full max-w-full justify-start overflow-hidden rounded-xl object-cover mq1325:min-w-full mq1325:flex-1" loading="lazy" alt="" src="assets/images/testimonials/testimonials-overly.jpg" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Testimonials End -->

    <!-- Section Stats CTA Start -->

    <section class="w-full overflow-hidden bg-gray-300 pb-[197px] pt-[198px]">
        <div class="thm-container">
            <div class="box-border flex flex-row items-start justify-between gap-[40px] font-mona-sans text-53xl text-lightslategray mq1700:box-border mq1325:flex-wrap">
                <div class="max-w-[50.438rem] self-stretch mq1650:max-w-full mq1325:min-w-full mq1325:flex-1">
                    <h3 class="mb-8 mt-0 !bg-clip-text font-semibold leading-[76px] tracking-[-2.2px] text-transparent [-webkit-background-clip:text] [-webkit-text-fill-color:transparent] [background:linear-gradient(91.61deg,_#b5ffec,_#fff)] mq1650:max-w-full mq900:text-39xl mq900:leading-[61px] mq450:mb-[16px] mq450:text-24xl mq450:leading-[46px]">
                        We are growing fast so should you
                    </h3>
                    <p class="my-0 mb-[60px] text-5xl font-medium leading-[32px] mq900:mb-[30px] mq450:text-lgi mq450:leading-[1.625rem]">
                        <span>You know your business can benefit from </span>
                        <span class="text-white">technology upgrades.</span>
                        <span class="text-lightslategray"> But from </span>
                        <span class="text-white">where to begin?</span>
                        <span class="text-lightslategray"> That's where our </span>
                        <span class="text-white">consulting team</span>
                        <span class="text-lightslategray"> comes in. </span>
                    </p>
                    <a class="flex max-w-[244px] flex-row items-start justify-start gap-[24px] overflow-hidden rounded-lg bg-mediumaquamarine pb-[17px] pe-[43px] ps-11 pt-[18px] text-base font-semibold uppercase leading-[21px] text-black [text-decoration:none] mq450:pe-5 mq450:ps-5">
                        Let’s Create Together
                        <img class="mt-[3px] h-4 w-4" alt="" src="assets/images/svg1.svg" />
                    </a>
                </div>
                <div class="flex w-[738px] max-w-full flex-row items-start justify-start gap-[100px] text-white mq1325:min-w-full mq1325:flex-1 mq900:flex-wrap mq900:gap-[50px] mq450:gap-[25px]">
                    <div class="flex min-w-[250px] flex-1 flex-col items-start justify-start gap-[74px] mq450:gap-[37px]">
                        <div class="flex flex-col items-start justify-start gap-[19.5px] self-stretch">
                            <div class="relative box-border h-px self-stretch border-t-[1px] border-solid border-mediumaquamarine"></div>
                            <div class="mt-[6px] flex flex-row items-start justify-between gap-[20px] self-stretch">
                                <h4 class="my-0 font-medium leading-[57px] tracking-[-4.14px] mq900:text-39xl mq900:leading-[55px] mq450:text-24xl mq450:leading-[41px]">
                                    35%
                                </h4>
                                <img class="mt-[14px] h-7 w-7" alt="" src="assets/images/svg2.svg" />
                            </div>
                            <p class="font-inter mb-0 mt-[6px] text-base font-medium leading-[24px]">
                                Year on Year Growth
                            </p>
                        </div>
                        <div class="flex flex-col items-start justify-start gap-[19.5px] self-stretch">
                            <div class="relative box-border h-px self-stretch border-t-[1px] border-solid border-mediumaquamarine"></div>
                            <div class="mt-[6px] flex flex-row items-start justify-between gap-[20px] self-stretch">
                                <h4 class="my-0 font-medium leading-[57px] tracking-[-4.14px] mq900:text-39xl mq900:leading-[55px] mq450:text-24xl mq450:leading-[41px]">
                                    500+
                                </h4>
                                <img class="mt-[14px] h-7 w-7" alt="" src="assets/images/svg2.svg" />
                            </div>
                            <p class="font-inter mb-0 mt-[6px] text-base font-medium leading-[24px]">
                                Projects finished with at least an x2 average annual revenue
                                boost.
                            </p>
                        </div>
                    </div>
                    <div class="flex min-w-[250px] flex-1 flex-col items-start justify-start gap-[50px] mq1325:gap-[74px] mq1025:gap-[50px] mq450:gap-[37px]">
                        <div class="flex flex-col items-start justify-start gap-[19.5px] self-stretch">
                            <div class="relative box-border h-px self-stretch border-t-[1px] border-solid border-mediumaquamarine"></div>
                            <div class="mt-[6px] flex flex-row items-start justify-between gap-[20px] self-stretch">
                                <h4 class="my-0 font-medium leading-[57px] tracking-[-4.14px] mq900:text-39xl mq900:leading-[55px] mq450:text-24xl mq450:leading-[41px]">
                                    15+
                                </h4>
                                <img class="mt-[14px] h-7 w-7" alt="" src="assets/images/svg2.svg" />
                            </div>
                            <p class="font-inter mb-0 mt-[6px] text-base font-medium leading-[24px]">
                                Satisfied clients with at least a 3-year collaboration record.
                            </p>
                        </div>
                        <div class="flex flex-col items-start justify-start gap-[19.5px] self-stretch">
                            <div class="relative box-border h-px self-stretch border-t-[1px] border-solid border-mediumaquamarine"></div>
                            <div class="mt-[6px] flex flex-row items-start justify-between gap-[20px] self-stretch">
                                <h4 class="my-0 font-medium leading-[57px] tracking-[-4.14px] mq900:text-39xl mq900:leading-[55px] mq450:text-24xl mq450:leading-[41px]">
                                    100+
                                </h4>
                                <img class="mt-[14px] h-7 w-7" alt="" src="assets/images/svg2.svg" />
                            </div>
                            <p class="font-inter mb-0 mt-[6px] text-base font-medium leading-[24px]">
                                Certified full-time pros with field experience on board.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Stats CTA End -->

    <!-- Section Blog Start -->

    <section class="page-section w-full gap-[48px] overflow-hidden bg-white pb-[53.2px] pe-0 pt-14 font-mona-sans text-21xl text-black mq975:box-border mq700:box-border mq700:gap-[24px]">
        <div class="thm-container">
            <h2>Insights</h2>

            <div class="flex max-w-full flex-row items-start justify-start gap-[24px] overflow-x-auto text-smi text-white">
                <div class="box-border flex w-[400px] max-w-full shrink-0 flex-col items-start justify-start gap-[18.9px] pb-[0.5px]">
                    <img src="assets/images/blog/blog-1.jpg" alt="blog-placeholder" class="w-full" />
                    <div class="flex max-w-full shrink-0 flex-col items-start justify-start gap-[15.8px] self-stretch">
                        <h4 class="m-0 max-w-full flex-1 pb-[38px] pe-1.5 text-5xl font-bold leading-[38.4px] tracking-[-0.64px] text-black mq450:text-base mq450:leading-[31px]">
                            CD Shines at the Trident Club's Monthly Showcase Meetup
                        </h4>
                        <div class="flex flex-row items-center gap-[7.6px] pe-5 ps-0 text-gray-400">
                            <span class="inline-block min-w-[53px] leading-[19px]">
                                By Helen</span>
                            <span class="h-1.5 w-1.5 rounded-10xs bg-gray-400"></span>
                            <span class="inline-block min-w-[32.3px] leading-[18.2px]">
                                5 min
                            </span>
                        </div>
                    </div>
                </div>
                <div class="box-border flex w-[400px] max-w-full shrink-0 flex-col items-start justify-start gap-[18.9px] pb-[0.5px]">
                    <img class="w-full" src="assets/images/blog/blog-2.jpg" alt="blog-placeholder" />
                    <div class="flex max-w-full shrink-0 flex-col items-start justify-start gap-[15.8px] self-stretch">
                        <h4 class="m-0 max-w-full flex-1 pb-[38px] pe-1.5 text-5xl font-bold leading-[38.4px] tracking-[-0.64px] text-black mq450:text-base mq450:leading-[31px]">
                            CD Shines at the Trident Club's Monthly Showcase Meetup
                        </h4>
                        <div class="flex flex-row items-center gap-[7.6px] pe-5 ps-0 text-gray-400">
                            <span class="inline-block min-w-[53px] leading-[19px]">
                                By Helen</span>
                            <span class="h-1.5 w-1.5 rounded-10xs bg-gray-400"></span>
                            <span class="inline-block min-w-[32.3px] leading-[18.2px]">
                                5 min
                            </span>
                        </div>
                    </div>
                </div>
                <div class="box-border flex w-[400px] max-w-full shrink-0 flex-col items-start justify-start gap-[18.9px] pb-[0.5px]">
                    <img class="w-full" src="assets/images/blog/blog-3.jpg" alt="blog-placeholder" />
                    <div class="flex max-w-full shrink-0 flex-col items-start justify-start gap-[15.8px] self-stretch">
                        <h4 class="m-0 max-w-full flex-1 pb-[38px] pe-1.5 text-5xl font-bold leading-[38.4px] tracking-[-0.64px] text-black mq450:text-base mq450:leading-[31px]">
                            CD Shines at the Trident Club's Monthly Showcase Meetup
                        </h4>
                        <div class="flex flex-row items-center gap-[7.6px] pe-5 ps-0 text-gray-400">
                            <span class="inline-block min-w-[53px] leading-[19px]">
                                By Helen</span>
                            <span class="h-1.5 w-1.5 rounded-10xs bg-gray-400"></span>
                            <span class="inline-block min-w-[32.3px] leading-[18.2px]">
                                5 min
                            </span>
                        </div>
                    </div>
                </div>
                <div class="box-border flex w-[400px] max-w-full shrink-0 flex-col items-start justify-start gap-[18.9px] pb-[0.5px]">
                    <img class="w-full" src="assets/images/blog/blog-4.jpg" alt="blog-placeholder" />
                    <div class="flex max-w-full shrink-0 flex-col items-start justify-start gap-[15.8px] self-stretch">
                        <h4 class="m-0 max-w-full flex-1 pb-[38px] pe-1.5 text-5xl font-bold leading-[38.4px] tracking-[-0.64px] text-black mq450:text-base mq450:leading-[31px]">
                            CD Shines at the Trident Club's Monthly Showcase Meetup
                        </h4>
                        <div class="flex flex-row items-center gap-[7.6px] pe-5 ps-0 text-gray-400">
                            <span class="inline-block min-w-[53px] leading-[19px]">
                                By Helen</span>
                            <span class="h-1.5 w-1.5 rounded-10xs bg-gray-400"></span>
                            <span class="inline-block min-w-[32.3px] leading-[18.2px]">
                                5 min
                            </span>
                        </div>
                    </div>
                </div>
                <!-- <div
            class="box-border flex w-[400px] max-w-full shrink-0 flex-col items-start justify-start gap-[18.9px] pb-[0.5px]">
            <img src="assets/images/blog/blog-1.jpg" alt="blog-placeholder" />
            <div
              class="flex max-w-full shrink-0 flex-col items-start justify-start gap-[15.8px] self-stretch">
              <div class="flex flex-row items-center gap-[8px]">
                <span
                  class="flex flex-row items-center justify-start whitespace-nowrap rounded-21xl bg-gray-400 py-[6px] pe-[11px] ps-3 font-semibold uppercase leading-[16px] tracking-[-0.13px]">
                  News & Articles
                </span>
                <span
                  class="inline-block min-w-[67.1px] leading-[18.2px] text-gray-400">
                  23.05.2024
                </span>
              </div>
              <h4
                class="m-0 max-w-full flex-1 pb-[38px] pe-1.5 text-5xl font-bold leading-[38.4px] tracking-[-0.64px] text-black mq450:text-base mq450:leading-[31px]">
                CD Shines at the Trident Club's Monthly Showcase Meetup
              </h4>
              <div
                class="flex flex-row items-center gap-[7.6px] pe-5 ps-0 text-gray-400">
                <span class="inline-block min-w-[53px] leading-[19px]">
                  By Helen</span
                >
                <span class="h-1.5 w-1.5 rounded-10xs bg-gray-400"></span>
                <span class="inline-block min-w-[32.3px] leading-[18.2px]">
                  5 min
                </span>
              </div>
            </div>
          </div> -->
            </div>
        </div>
    </section>

    <!-- Section Blog End -->

    <!-- Section Awards Start -->

    <section class="page-section flex w-full flex-col items-center justify-start bg-generic-white">
        <div class="thm-container">
            <h2>You don’t get too many of these for nothing</h2>
            <div class="box-border max-w-full self-stretch overflow-hidden rounded-xl border-[1px] border-solid border-lightgray pb-[1.625rem] pe-[3.375rem] ps-[3.312rem] pt-[1.562rem] [background:linear-gradient(90deg,_#fff,_rgba(239,_239,_239,_0)_50.5%,_#fff)] mq1425:box-border mq1425:pe-[1.688rem] mq1425:ps-[1.625rem] mq825:gap-[2rem] mq450:gap-[1rem]">
                <div class="flex flex-row items-center justify-center gap-[.7rem] mq1425:flex-wrap">
                    <img class="h-[7.806rem] max-w-full px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/clutch-web-developers.png" />
                    <img class="h-[6.269rem] max-w-full px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/superbcompanies.png" />
                    <img class="h-[7.75rem] w-[7.144rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/clutch-modernization-service.png" />
                    <img class="h-[7.144rem] max-w-full px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/business-firms.png" />
                    <img class="h-[7.725rem] w-[7.144rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/clutch-artificial-intelligence-company.png" />
                    <img class="h-[7.144rem] w-[7.144rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/featured-on-upcity.png" />

                    <img class="h-[7.725rem] w-[7.144rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/clutch-iot-company.png" />
                    <img class="h-[7.144rem] max-w-full px-[0.937rem] pb-[0.262rem]" alt="" src="assets/images/awards/techroviewer.png" />

                    <img class="h-[7.694rem] w-[7.144rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/clutch-machine-learning-company.png" />

                    <img class="h-[7.088rem] w-[7.863rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/appfutura.png" />

                    <img class="h-[7.725rem] w-[7.144rem] px-[0.937rem] pb-[0.262rem]" loading="lazy" alt="" src="assets/images/awards/clutch-machine-learning-company.png" />
                </div>
            </div>
        </div>
    </section>

    <!-- Section Awards End -->

    <!-- Section CTA Start -->
    <section class="bg-black py-[7rem] font-mona-sans text-[1.5rem] text-generic-white mq1325:flex-wrap">
        <div class="thm-container">
            <div class="flex justify-between gap-5 mq1325:flex-col">
                <div class="flex w-[43.313rem] max-w-full flex-col items-start justify-start mq1725:flex-1 mq1325:min-w-full">
                    <img class="relative mb-[0.312rem] h-[1.081rem] w-[1.581rem]" loading="lazy" alt="" src="assets/images/main-cta/quote.svg" />

                    <p class="mb-4 mt-0 inline-block shrink-0 leading-[2rem] tracking-[-0.01em] mq700:h-auto mq450:text-[1.188rem] mq450:leading-[1.625rem]">
                        We were live and our platform was having difficulty supporting a
                        simultaneous number of users. They saved the day with their solid
                        grip on architecture level solutions.
                    </p>
                    <div class="mt-[1.3rem] flex flex-row items-center justify-start gap-[1.5rem] text-gray-1000">
                        <img class="h-[4.5rem] min-h-[4.5rem] w-[4.5rem] object-cover" loading="lazy" alt="" src="assets/images/main-cta/cta-avtar.png" />
                        <div class="flex flex-col items-start justify-start">
                            <h6 class="m-0 mb-3 text-[1.5rem] font-semibold tracking-[-0.01em] mq450:text-[1.188rem] mq450:leading-[2.188rem]">
                                Reva McPollom
                            </h6>
                            <p class="my-0 text-[1.25rem] font-medium tracking-[-0.01em] mq450:text-[1rem] mq450:leading-[2.188rem]">
                                Lessonbee Founder
                            </p>
                        </div>
                    </div>
                    <div class="mt-[2.2rem] flex flex-row items-start justify-start gap-[0.668rem] mq900:mt-[1.875rem]">
                        <span class="h-[0.375rem] w-[2rem] rounded-[18.67px] bg-mediumaquamarine"></span>
                        <span class="h-[0.375rem] w-[2rem] rounded-[18.67px] bg-gray-700"></span>
                        <span class="h-[0.375rem] w-[2rem] rounded-[18.67px] bg-gray-700"></span>
                        <span class="h-[0.375rem] w-[2rem] rounded-[18.67px] bg-gray-700"></span>
                    </div>

                    <div class="mt-[3.75rem] box-border flex h-[3.438rem] max-w-full flex-row items-center justify-start gap-[1.562rem] pe-[1.5rem] font-mona-sans text-[0.75rem] mq900:mt-[1.875rem] mq700:h-auto mq700:min-w-full mq700:flex-wrap mq700:items-start">
                        <img class="relative h-[2.956rem] w-[16.469rem] object-contain" loading="lazy" alt="" src="assets/images/main-cta/goodfirms.png" />
                        <div class="box-border flex w-[5.794rem] flex-col items-center justify-start">
                            <p class="m-0 h-[1.613rem] self-stretch font-medium capitalize leading-[180%]">
                                Reviewed on
                            </p>
                            <img class="mt-[-0.063rem] h-[1.613rem] w-[5.669rem]" loading="lazy" alt="" src="assets/images/main-cta/clutch.png" />
                        </div>
                        <div class="flex w-[7.669rem] flex-col items-center justify-end overflow-hidden pt-[0.312rem] text-[1.181rem]">
                            <img class="h-[1.325rem] w-[7.156rem]" loading="lazy" alt="" src="assets/images/main-cta/reviews-40.svg" />

                            <p class="m-0 mt-[0.562rem] whitespace-nowrap pb-[0.012rem] font-medium capitalize">
                                40 Reviews
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flex w-[48.125rem] max-w-full flex-col items-start justify-start gap-[3rem] font-mona-sans text-[4.5rem] mq1725:flex-1 mq1325:min-w-full mq450:gap-[1.5rem]">
                    <h3 class="font-inherit m-0 inline-block w-[38.188rem] max-w-full !bg-clip-text text-inherit font-semibold leading-[4.75rem] tracking-[-2.2px] text-transparent [-webkit-background-clip:text] [-webkit-text-fill-color:transparent] [background:linear-gradient(91.61deg,_#b5ffec,_#fff)] mq900:text-[3.625rem] mq900:leading-[3.813rem] mq450:text-[2.688rem] mq450:leading-[2.875rem]">
                        Start growing your business with us
                    </h3>
                    <form class="m-0 box-border flex max-w-full flex-1 flex-col items-start justify-start gap-[1.5rem] self-stretch">
                        <div class="flex max-w-full flex-row items-start justify-start gap-[1.5rem] self-stretch mq700:flex-wrap">
                            <div class="box-border flex max-w-full flex-1 flex-row items-center justify-start rounded-[5.33px] border-b-[1.3px] border-solid border-gray-100 bg-gray-500 px-[1.312rem] pb-[1.187rem] pt-[1.312rem] mq700:min-w-full mq700:px-[1rem] mq700:pb-[1rem] mq700:pt-[1rem]">
                                <input class="relative inline-block h-[1.125rem] w-full max-w-full flex-1 bg-[transparent] p-0 text-left font-mona-sans text-[1.169rem] font-light text-gray-100 [border:none] [outline:none]" placeholder="Full name*" type="text" />
                            </div>
                            <div class="box-border flex w-full max-w-full flex-1 flex-row items-center justify-start rounded-[5.33px] border-b-[1.3px] border-solid border-gray-100 bg-gray-500 px-[1.312rem] pb-[1.187rem] pt-[1.312rem] mq700:min-w-full mq700:px-[1rem] mq700:pb-[1rem] mq700:pt-[1rem]">
                                <input class="relative inline-block h-[1.125rem] w-full bg-[transparent] p-0 text-left font-mona-sans text-[1.169rem] font-light text-gray-100 [border:none] [outline:none]" placeholder="Email*" type="email" />
                            </div>
                        </div>
                        <div class="flex max-w-full flex-row items-start justify-start gap-[1.5rem] self-stretch mq700:flex-wrap">
                            <div class="box-border flex w-full max-w-full flex-1 flex-row items-center justify-start rounded-[5.33px] border-b-[1.3px] border-solid border-gray-100 bg-gray-500 px-[1.312rem] pb-[1.187rem] pt-[1.312rem] mq700:min-w-full mq700:px-[1rem] mq700:pb-[1rem] mq700:pt-[1rem]">
                                <input class="relative inline-block h-[1.125rem] w-full bg-[transparent] p-0 text-left font-mona-sans text-[1.169rem] font-light text-gray-100 [border:none] [outline:none]" placeholder="Full name*" type="text" />
                            </div>
                            <div class="box-border flex w-full max-w-full flex-1 flex-row items-center justify-start rounded-[5.33px] border-b-[1.3px] border-solid border-gray-100 bg-gray-500 px-[1.312rem] pb-[1.187rem] pt-[1.312rem] mq700:min-w-full mq700:px-[1rem] mq700:pb-[1rem] mq700:pt-[1rem]">
                                <input class="relative inline-block h-[1.125rem] w-full bg-[transparent] p-0 text-left font-mona-sans text-[1.169rem] font-light text-gray-100 [border:none] [outline:none]" placeholder="Company" type="text" />
                            </div>
                        </div>
                        <div class="box-border flex w-full max-w-full flex-1 flex-row items-center justify-start rounded-[5.33px] border-b-[1.3px] border-solid border-gray-100 bg-gray-500 px-[1.312rem] pb-[1.187rem] pt-[1.312rem] mq700:px-[1rem] mq700:pb-[1rem] mq700:pt-[1rem]">
                            <textarea class="w-full bg-[transparent] p-0 text-left font-mona-sans text-[1.169rem] font-light text-gray-100 [border:none] [outline:none]" placeholder="Message" type="text"></textarea>
                        </div>

                        <div class="flex max-w-full flex-row items-center justify-start gap-[1rem] overflow-hidden mq450:gap-2">
                            <input id="default-checkbox" type="checkbox" value="" class="custom-checkbox h-6 w-6 cursor-pointer rounded border-2 border-white bg-transparent text-transparent" />
                            <label for="default-checkbox" class="w-[calc(100%-24px)] font-mona-sans text-[1.125rem] font-light text-gray-1100">
                                Subscribe here to check updates from us
                            </label>
                        </div>
                        <button class="ml-auto box-border flex w-[12.125rem] cursor-pointer flex-row items-center justify-center gap-[1.25rem] overflow-hidden rounded-lg bg-mediumaquamarine px-[2.75rem] pb-[1.062rem] pt-[1.125rem] font-mona-sans text-[15px] font-semibold uppercase leading-[1.313rem] text-black [border:none]">
                            Submit
                            <img class="h-[1rem] w-[1rem] pt-[0.156rem]" alt="" src="assets/images/main-cta/arrow-up-black.svg" />
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Section CTA End -->

    <!-- Section Footer Start -->

    <footer class="page-section w-full bg-gray-300">
        <div class="thm-container">
            <div class="flex w-[106.25rem] max-w-full shrink-0 flex-row items-start justify-start gap-[7rem] text-left font-mona-sans text-[2rem] text-generic-white mq1325:w-full mq1325:flex-col mq1325:gap-[2rem] mq450:gap-[1.75rem]">
                <div class="flex w-[26.438rem] min-w-[20rem] max-w-full flex-col items-start justify-start gap-[4.5rem] mq1650:flex-1 mq1325:min-w-full mq900:min-w-full mq450:gap-[2.25rem]">
                    <div class="flex max-w-full flex-col items-start justify-start gap-[2rem] self-stretch mq450:gap-[1rem]">
                        <div class="flex flex-col items-start justify-start self-stretch">
                            <div class="flex flex-col items-start justify-start gap-[0.5rem] self-stretch">
                                <h3 class="font-inherit relative m-0 text-inherit font-semibold leading-[3.188rem] mq900:text-[1.625rem] mq900:leading-[2.563rem] mq450:text-[1.188rem] mq450:leading-[1.875rem]">
                                    <span>What’s new at </span>
                                    <span class="text-mediumaquamarine">Code District</span>
                                </h3>
                                <div class="text-[1.25rem] font-medium leading-[1.75rem] text-gray-1000">
                                    Get the latest news about software development and Family
                                    Guy.
                                </div>
                            </div>
                        </div>
                        <div class="box-border flex max-w-[30rem] flex-row items-center justify-start self-stretch py-[0rem] pe-[0.5rem] ps-[0rem] mq700:max-w-full">
                            <input class="font-paragraph-medium-medium relative h-[1.625rem] w-full rounded-[4.32px] border-[1px] border-solid border-darkslategray-100 bg-[transparent] px-[1.687rem] py-[0.875rem] pe-20 text-[1.081rem] leading-[1.619rem] tracking-[-0.01em] text-gray-1000 [outline:none]" placeholder="Email" type="text" />

                            <img class="relative z-[1] ml-[-4.25rem] h-[3.5rem] min-h-[3.5rem] w-[3.75rem] shrink-0 overflow-hidden" alt="" src="assets/images/footer/arrow-right.svg" />
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-start gap-[0.893rem]">
                        <a href="#">
                            <img class="relative h-[2.675rem] min-h-[2.688rem] w-[2.675rem] shrink-0 overflow-hidden" loading="lazy" alt="" src="assets/images/footer/linkedin.svg" />
                        </a>
                        <a href="#">
                            <img class="relative h-[2.675rem] min-h-[2.688rem] w-[2.675rem] shrink-0 overflow-hidden" loading="lazy" alt="" src="assets/images/footer/instagram.svg" />
                        </a>
                        <a href="#">
                            <img class="relative h-[2.675rem] min-h-[2.688rem] w-[2.675rem] shrink-0 overflow-hidden" loading="lazy" alt="" src="assets/images/footer/github.svg" />
                        </a>
                        <a href="#">
                            <img class="relative h-[2.563rem] w-[2.563rem] shrink-0 overflow-hidden" loading="lazy" alt="" src="assets/images/footer/twitter.svg" />
                        </a>
                    </div>
                </div>
                <div class="box-border flex max-w-full flex-col items-start justify-start gap-[3rem] text-[1.25rem] mq1300:min-w-full mq900:gap-[1.5rem]">
                    <div class="box-border grid max-w-full grid-cols-5 items-start justify-between gap-[3rem] mq1650:grid-cols-3 mq900:gap-[1.5rem] mq700:grid-cols-2 mq450:grid-cols-1">
                        <div class="box-border flex min-w-[7.456rem] shrink-0 flex-col items-start justify-start gap-[0.5rem] px-[0rem] py-[0rem]">
                            <h6 class="relative my-0 self-stretch text-xl font-medium leading-[3.188rem] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                Company
                            </h6>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                About us
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Services
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Work
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Blogs/insights
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Careers
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Contact us
                            </a>
                        </div>
                        <div class="flex min-w-[14.419rem] shrink-0 flex-col items-start justify-start gap-[0.5rem]">
                            <h6 class="relative my-0 self-stretch text-xl font-medium leading-[3.188rem] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                Software Development
                            </h6>

                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Application Development
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Application Modernization
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Software Development
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Cloud Engineering
                            </a>
                        </div>
                        <div class="flex min-w-[16.25rem] shrink-0 flex-col items-start justify-start gap-[0.5rem]">
                            <h6 class="relative my-0 self-stretch text-xl font-medium leading-[3.188rem] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                Expertise
                            </h6>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Enterprise Mobility
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Business Process Automation
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Salesforce
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Microsoft SharePoint
                            </a>
                        </div>
                        <div class="flex min-w-[9.625rem] flex-col items-start justify-start gap-[0.5rem]">
                            <h6 class="relative my-0 self-stretch text-xl font-medium leading-[3.188rem] text-[inherit] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                Data & AI
                            </h6>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Internet of Things
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                AR/VR
                            </a>
                            <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                Data Science & AI
                            </a>
                        </div>
                        <div class="flex min-w-[9.688rem] flex-col items-start justify-center gap-[2rem]">
                            <div class="flex flex-col items-start justify-start gap-[0.5rem] self-stretch">
                                <h6 class="relative my-0 self-stretch text-xl font-medium leading-[3.188rem] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                    Optimization
                                </h6>
                                <a class="relative inline-block w-[12.688rem] text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                    Quality Assurance & Testing
                                </a>
                            </div>
                            <div class="flex w-[6.688rem] flex-col items-start justify-start gap-[0.5rem] text-[1.5rem]">
                                <h6 class="m-0 inline-block min-w-[6.688rem] text-5xl font-medium leading-[3.188rem] mq450:text-[1.188rem] mq450:leading-[2.563rem]">
                                    Solutions
                                </h6>
                                <a class="relative self-stretch text-[1.125rem] font-medium leading-[2rem] text-aliceblue no-underline" href="/">
                                    Salesforce
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="box-border flex w-full max-w-full shrink-0 flex-row items-start justify-start border-t-[1px] border-solid border-darkslategray-200 px-[0rem] pb-[1.5rem] pt-[1.375rem] mq900:gap-[1.5rem]">
                        <div class="flex max-w-full flex-row items-start justify-start gap-[2rem] mq900:flex-wrap mq900:gap-[1rem]">
                            <div class="flex h-[7.25rem] w-[13.313rem] flex-col items-start justify-start gap-[0.581rem]">
                                <div class="font-medium leading-[3.188rem] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                    Headquarters
                                </div>
                                <div class="flex w-[16.188rem] flex-col items-start justify-start text-[1.125rem] text-gray-1000">
                                    <div class="self-stretch font-medium leading-[2rem]">
                                        <p class="m-0">1300 I St NW, Suite 400E,</p>
                                        <p class="m-0">Washington, DC</p>
                                    </div>
                                </div>
                            </div>
                            <div class="flex w-[12rem] flex-col items-start justify-start gap-[0.581rem]">
                                <div class="min-w-[6.563rem] font-medium leading-[3.188rem] mq450:text-[1rem] mq450:leading-[2.563rem]">
                                    Contact us
                                </div>
                                <div class="flex flex-col items-start justify-start gap-[0.5rem] self-stretch px-[0rem] py-[0rem] text-[1.125rem] text-gray-1000">
                                    <p class="m-0 whitespace-nowrap font-medium leading-[2rem]">
                                        info@codedistrict.com
                                    </p>
                                    <p class="m-0 w-[18.581rem] font-medium leading-[2rem]">
                                        +1 (703) 782-3019
                                    </p>
                                </div>
                            </div>
                            <div class="flex max-w-full flex-col items-start justify-start gap-[0.581rem] text-[1.125rem] text-gray-1000">
                                <div class="min-w-[7.875rem] text-[1.25rem] font-medium leading-[3.188rem] text-generic-white mq450:text-[1rem] mq450:leading-[2.563rem]">
                                    Other Offices
                                </div>
                                <div class="flex min-w-full flex-row flex-wrap items-start justify-start gap-[1rem]">
                                    <span class="inline-block min-w-[6.5rem] font-medium leading-[2rem]">
                                        Manchester
                                    </span>
                                    <span class="inline-block min-w-[4.625rem] font-medium leading-[2rem]">
                                        Houston
                                    </span>
                                    <span class="inline-block min-w-[6.688rem] font-medium leading-[2rem]">
                                        Netherlands</span>
                                    <span class="inline-block min-w-[4.375rem] font-medium leading-[2rem]">
                                        Canada
                                    </span>
                                    <span class="inline-block min-w-[3.75rem] font-medium leading-[2rem]">
                                        Lahore
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="border-t-[0.7px] border-solid border-darkslategray-100 pt-[2.812rem] text-center text-[1.331rem] tracking-[normal] text-gray-800 mq450:text-[1.063rem]">
                All Rights Reserved. Code District.
            </p>
        </div>
    </footer>

    <!-- Section Footer End -->

    <script src="assets/js/scripts.js"></script>

</body>

</html>