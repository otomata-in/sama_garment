@extends('layouts.app')

@section('content')
<br>
<br>
<br>

<aside id="colorlib-hero">
    <div class="flexslider">
        <ul class="slides">
            <li style="background-image: url(assets/images/main-slider/img3.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row slider-row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Style is a way to say who you are </h1>
                                <h2>Make It True</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(assets/images/main-slider/img1.jpg);">
                <div class="overlay"></div>
                <div class="container-fluid">
                    <div class="row slider-row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Dressing is an Art</h1>
                                <h2>Your Style Your Identity</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(assets/images/main-slider/img10.jpg);">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row slider-row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Clothing is the first step to building a character</h1>
                                <h2>Be Happy</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li style="background-image: url(assets/images/main-slider/img2.jpg);">
                <div class="overlay"></div>
                <div class="container-fluids">
                    <div class="row slider-row">
                        <div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
                            <div class="slider-text-inner text-center">
                                <h1>Fashion is the armor to survive the reality of everyday life</h1>
                                <h2>We Provide Proper Designs</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>

<div id="colorlib-services">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2><b>WELCOME TO SAMA GARMENTS</b></h2>
                <p>We are the best uniform makers in the UAE, offering custom and ready-made uniforms. We also do design, embroidery, and printing for all your uniform needs.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services ">
                    {{-- <img src="{{ asset('assets/images/about/3.jpg') }}" alt="First Logo"> --}}
                    <div class="desc">
                        <h3>Competitive Pricing
                        </h3>
                        <p>Complete in-house designing, production and logistics allows us to provide the best pricing</p>
                    </div>
                    <!-- Updated hover layer content for Electrical Low Voltage Work -->
                    <div class="hover-layer">
                        <p>Complete in-house designing, production and logistics allows us to provide the best pricing</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    {{-- <span class="icon">
              <i class="flaticon-engineering"></i>
            </span>  --}}
                    <div class="desc">
                        <h3>Custom Designs
                        </h3>
                        <p>We work closely with you to create designs aligned with your branding requirements.
                        </p>
                    </div>
                    <!-- Updated hover layer content for Electrical Designing -->
                    <div class="hover-layer">
                        <p>We work closely with you to create designs aligned with your branding requirements.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    {{-- <span class="icon">
              <i class="flaticon-skyline"></i>
            </span>  --}}
                    <div class="desc">
                        <h3>Large Production Capacity</h3>
                        <p>We having the most advanced machinery capable of producing over 2000 units daily.</p>
                    </div>
                    <!-- Updated hover layer content for Civil Construction -->
                    <div class="hover-layer">
                        <p>We having the most advanced machinery capable of producing over 2000 units daily.</p>
                    </div>
                </div>
            </div>

            <!-- Continue updating the hover-layer content for the remaining services -->

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    {{-- <span class="icon">
              <i class="flaticon-crane"></i>
            </span>  --}}
                    <div class="desc">
                        <h3>Quality Service
                        </h3>
                        <p>Our dedicated support team is with you every step aiming to build long-lasting partnerships</p>
                    </div>
                    <!-- Updated hover layer content for Building Automation -->
                    <div class="hover-layer">
                        <p>Our dedicated support team is with you every step aiming to build long-lasting partnerships</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    {{-- <span class="icon">
              <i class="flaticon-sketch"></i>
            </span>  --}}
                    <div class="desc">
                        <h3>Sustainability</h3>
                        <p> We are aiming to strike a balance between meeting current consumer demands and ensuring a healthy and viable future for generations to come.</p>
                    </div>
                    <!-- Updated hover layer content for CCTV Networking -->
                    <div class="hover-layer">
                        <p> We are aiming to strike a balance between meeting current consumer demands and ensuring a healthy and viable future for generations to come.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    {{-- <span class="icon">
              <i class="flaticon-conveyor"></i>
            </span>  --}}
                    <div class="desc">
                        <h3>Cutting and Sewing</h3>
                        <p> Our finished and quality product influences the final appearance, fit, and durability. </p>
                    </div>
                    <!-- Updated hover layer content for Fire Alarm -->
                    <div class="hover-layer">
                        <p>Our finished and quality product influences the final appearance, fit, and durability.</p>
                    </div>
                </div>
            </div>

            <!-- Continue updating the hover-layer content for the remaining services -->





        </div>
    </div>
</div>




{{--  <br>
<br>
<br>  --}}
<div id="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box">
                <div class="project-entry">
                    <div class="visit-card text-center">
                    <div class="col-md-8">
                    <h2>Personalized Products For any Event</h2>
                        <!-- <p>Discover our premium selection of customized products for your special occasions.</p> -->
                    </div>
                    <div class="col-md-4">
                    <button  class="btn btn-primary">Visit Our Shop</button>
                    </div>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tabulation animate-box">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#plan"><i class="flaticon-sketch"></i> Quality Fabrics</a></li>
                    <li><a data-toggle="tab" href="#general"><i class="flaticon-architect-with-helmet"></i> Bespoke Tailoring</a></li>
                    <li><a data-toggle="tab" href="#manage"><i class="flaticon-engineer"></i> Logo Branding</a></li>
                    <li><a data-toggle="tab" href="#modeling"><i class="flaticon-skyline"></i> Custom designs</a></li>
                </ul>
                <div class="tab-content">
                    <div id="plan" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-img" style="background-image: url(assets/images/about/fabrics.png);"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-desc">
                                    <p>
                                        Our extensive fabric selection caters to a broad spectrum of design needs. Our team of skilled designers is dedicated to turning concepts into visually stunning and functional designs. Equipped with cutting-edge tools and software, we continually push boundaries and embrace innovation. Staying current with design trends while preserving timeless principles ensures the longevity of our creations.
                                    </p>
                                    <p>
                                        Our diverse portfolio reflects our adaptability, having successfully delivered projects spanning various industries and sectors. With our design expertise, we aspire to surpass expectations, kindle creativity, and produce designs that leave a lasting impression.
                                    </p>
                                    {{-- <p>Our designing works encompass a wide range of creative disciplines and expertise. We are a team of skilled designers who are passionate about transforming ideas into visually appealing and functional designs.Our design team is equipped with the latest tools and software, enabling us to push boundaries and explore new possibilities. We stay up-to-date with current design trends and techniques while also maintaining a timeless approach to ensure that our designs stand the test of time.Our portfolio showcases our versatility, as we have successfully completed projects across various industries and sectors.With our designing works, we aim to exceed expectations, inspire creativity, and deliver designs that make a lasting impact.</p>  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="general" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-img" style="background-image: url(assets/images/about/tailoring.jpeg);"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-desc">
                                    <p>
                                        Precision is our hallmark, as we meticulously take measurements and craft garments tailored to your exact preferences. Our dedicated team of talented staff, complemented by our professional and highly skilled tailors, collaborates seamlessly with our top-tier business partners to ensure the finest materials are always at your disposal.
                                    </p>
                                    <p>
                                        This synergy enables us to consistently deliver exceptional, high-quality products that align perfectly with your unique requirements. Your satisfaction is our ultimate goal, and we take pride in providing you with clothing that meets the highest standards of craftsmanship.
                                    </p>
                                    {{-- <p>Planning is an essential process that involves establishing objectives, defining strategies, and outlining the steps necessary to achieve desired outcomes. It is a systematic approach that helps individuals, teams, and organizations set a clear direction, allocate resources effectively, and maximize efficiency.Effective planning begins with setting clear and realistic goals. These goals should be specific, measurable, achievable, relevant, and time-bound (SMART). planning is a fundamental process that enables individuals, teams, and organizations to achieve their goals effectively. It provides a roadmap, aligns efforts, optimizes resources, and fosters a proactive and organized approach to work. By investing time and effort into planning, individuals and organizations can enhance productivity, improve decision-making, and increase the likelihood of successful outcomes.</p>  --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="manage" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-img" style="background-image: url(assets/images/about/LogoBranding.jpeg);"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-desc">
                                    <p>
                                        In addition to being a prominent supplier of custom work uniforms in UAE and through out the Middle East we offer a unique opportunity for our customers to personalize their workwear designs with their company logos. Through embroidery and printing, we transform your workwear into distinctive branding statements.
                                    </p>
                                    <p>
                                        Our expert team is here to assist you in selecting the optimal branding option that aligns seamlessly with your brand's identity. Your company's logo will not only adorn your work attire but also serve as a powerful symbol of professionalism and cohesion.
                                    </p>
                                    {{-- <p>Maintenance works are an essential aspect of ensuring the optimal functioning, longevity, and safety of various systems, equipment, and infrastructure. Our company specializes in providing comprehensive maintenance services to meet the needs of our clients. Our team of skilled technicians and professionals is proficient in performing preventive, corrective, and predictive maintenance across a wide range of industries. We have expertise in maintaining mechanical, electrical, electronic, and structural systems, among others. By partnering with us for maintenance works, our clients can benefit from improved equipment performance, reduced downtime, increased lifespan of assets, enhanced safety, and optimized operational efficiency.</p>  --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="modeling" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="services-img" style="background-image: url(assets/images/about/1.jpg);"></div>
                            </div>
                            <div class="col-md-6">
                                <div class="services-desc">
                                    <p>
                                        Our custom design services are at the heart of what we do. We specialize in translating your unique ideas and visions into tailor-made solutions that stand out. Our team of creative professionals is dedicated to crafting designs that reflect your distinct identity and needs.
                                    </p>
                                    <p>
                                        With an array of design options at your fingertips, we ensure that every detail is carefully considered. From concept to completion, we work closely with you to guarantee that your custom design not only meets but exceeds your expectations. Your vision is our inspiration, and we take pride in delivering designs that leave a lasting impression.
                                    </p>
                                    {{-- <p>In the field of construction, we are a reputable and experienced company known for our expertise in delivering high-quality construction projects. With a strong focus on professionalism, safety, and client satisfaction, we have established ourselves as a trusted partner in the construction industry. Our team of skilled architects, engineers, project managers, and construction workers are committed to excellence in every aspect of our work. From the initial planning and design phase to the final execution and completion of the project, we ensure attention to detail, precision, and adherence to industry standards. Our commitment to sustainability and environmental responsibility is embedded in our construction practices. We incorporate eco-friendly materials, energy-efficient solutions, and green building techniques whenever possible, aiming to minimize our impact on the environment and contribute to a more sustainable future.</p>  --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







<div id="colorlib-about">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h2><b>Our Clients</b></h2>
                <p>Our Clients encompass a diverse array of top-level organizations and businesses.</p>
            </div>
        </div>

        <div class="row">
            <div class="slider-container">

                <div class="col-md-3 animate-box">
                    <!-- Content for the second slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/naffco.png);">
                        <div class="desc-staff">
                            <h3>NAFFCO</h3>
                            <span>Passion to Protect</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box">
                    <!-- Content for the first slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/1.png);">
                        <div class="desc-staff">
                            <h3>Champion Speed</h3>
                            <span>AUTO WORKSHOP</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box">
                    <!-- Content for the second slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/2.png);">
                        <div class="desc-staff">
                            <h3>FAITH</h3>
                            <span>Healthcare Group</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box">
                    <!-- Content for the second slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/3.png);">
                        <div class="desc-staff">
                            <h3>FGT</h3>
                            <span>General Trading Enterprises</span>
                        </div>
                    </a>
                </div>

                <div class="col-md-3 animate-box">
                    <!-- Content for the second slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/falconcity.png);">
                        <div class="desc-staff">
                            <h3>FALCONCITY</h3>
                            <span>The World In A City</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box">
                    <!-- Content for the second slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/5.png);">
                        <div class="desc-staff">
                            <h3>TG</h3>
                            <span>Techno Gulf</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 animate-box">
                    <!-- Content for the second slide -->
                    <a href="#" class="staff-img staff-img2" style="background-image: url(assets/images/adv/6.png);">
                        <div class="desc-staff">
                            <h3>WORLD STAR</h3>
                            <span>GROUP</span>
                        </div>
                    </a>
                </div>


                <!-- ... Repeat for other slides ... -->
            </div>
        </div>

        <!-- Add left and right arrow buttons -->
        <!-- <div id="left-button" class="slider-button">←</div>
        <div id="right-button" class="slider-button">→</div> -->

    </div>
</div>



<div id="colorlib-services">
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h1><b>MAJOR AREAS</b></h1>
                <p>WE’RE EXPERTS IN DELIVERING QUALITY CUSTOMIZED CLOTHING</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 text-center animate-box">
                <div class="services ">
                    <a href="/Special">
                        <span class="icon">
                            <i class="flaticon-engineer"></i>
                           </span>
                    {{-- <img src="{{ asset('assets/images/about/3.jpg') }}" alt="First Logo"> --}}
                    <div class="desc">
                        <h3><b>Special Garments </b></h3>
                        {{--  <p>Complete in-house designing, production and logistics allows us to provide the best pricing</p>  --}}
                    </div>
                    <!-- Updated hover layer content for Electrical Low Voltage Work -->
                    <div class="hover-layer">
                        <p><br>Go to Special Garments</p>
                    </div>
                </a>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <a href="/Uniforms">
                        <span class="icon">
                            <i class="flaticon-engineer"></i>
                           </span>
                    <div class="desc">
                        <h3><b>Uniforms</b></h3>
                        {{--  <p>We work closely with you to create designs aligned with your branding requirements.
                        </p>  --}}
                    </div>
                    <!-- Updated hover layer content for Electrical Designing -->
                    <div class="hover-layer">
                        <p><br>Go to Uniforms
                        </p>
                    </div>
                </a>
                </div>
            </div>

            <div class="col-md-4 text-center animate-box">
                <div class="services">
                    <a href="/Uplus">
                        <span class="icon">
                            <i class="flaticon-engineer"></i>
                           </span>
                    <div class="desc">
                        <h3><b>Uplus Uniform</b></h3>
                        {{--  <p>We having the most advanced machinery capable of producing over 2000 units daily.</p>  --}}
                    </div>
                    <!-- Updated hover layer content for Civil Construction -->
                    <div class="hover-layer">
                        <p><br>Go to Uplus Uniforms</p>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
</div>


{{--  

<div id="colorlib-blog">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h1><b>MAJOR AREAS</b></h1>
                <p>WE’RE EXPERTS IN DELIVERING QUALITY CUSTOMIZED CLOTHING</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <article class="animate-box">
                    <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/school.jpeg);">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>

                    </a>
                    <div class="entry">
                        <h2><a href="#">School</a></h2>
                        <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                        <p>Shirts, Pants, Skirts,
                            Varsity Jackets, T Shirts, Polo Shirts,
                            Hoodies, etc…</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="animate-box">
                    <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Construction.jpeg);">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>

                    </a>
                    <div class="entry">
                        <h2><a href="#">Construction</a></h2>
                        <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                        <p>Coveralls, 2-pc Overall, Jackets,
                            Visibility Wear, Suits, Cargo Trousers & Shorts…</p>
                    </div>
                </article>
            </div>
            <div class="col-md-4">
                <article class="animate-box">
                    <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Security.png);">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>

                    </a>
                    <div class="entry">
                        <h2><a href="#">Security</a></h2>
                        <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                        <p>Epaulette Shirts,
                            Trousers, Caps, Shoes,
                            Belt, Wistle, etc…</p>
                    </div>
                </article>
            </div>
        </div>

        <div class="col-md-4">
            <article class="animate-box">
                <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Hospital.png);">
                    <span class="icon"><i class="fas fa-plus-circle"></i></span>

                </a>
                <div class="entry">
                    <h2><a href="#">Hospital</a></h2>
                    <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                    <p>Doctor Lab-coat, Nurse Scrubs,
                        Lab Gown, Patient’s Gown, Shoes
                        ….</p>
                </div>
            </article>
        </div>
        <div class="col-md-4">
            <article class="animate-box">
                <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Restaurant.jpeg);">
                    <span class="icon"><i class="fas fa-plus-circle"></i></span>

                </a>
                <div class="entry">
                    <h2><a href="#">Restaurant</a></h2>
                    <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                    <p>Shirt, Jacket, Polo, T Shirts,
                        Trouser, Apron, Cap/Hat,
                        Name Badge, Shoes…</p>
                </div>
            </article>
        </div>
        <div class="col-md-4">
            <article class="animate-box">
                <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/sports.jpeg);">
                    <span class="icon"><i class="fas fa-plus-circle"></i></span>

                </a>
                <div class="entry">
                    <h2><a href="#">Sport & Fitness
                        </a></h2>
                    <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                    <p>Coveralls, Jackets,
                        Hi Visibility Wear, Suits, Cargo Trousers & Shorts…
                    </p>
                </div>
            </article>
        </div>
        <div class="col-md-4">
            <article class="animate-box">
                <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Corporate.jpeg);">
                    <span class="icon"><i class="fas fa-plus-circle"></i></span>

                </a>
                <div class="entry">
                    <h2><a href="#">Corporate
                        </a></h2>
                    <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                    <p>Jacket/Suit, Shirt, Trousers,
                        Dress, Skirt, Neck Tie, Scarf,
                        Belt, Shoes…
                    </p>
                </div>
            </article>
        </div>
        <div class="col-md-4">
            <article class="animate-box">
                <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Salon.png);">
                    <span class="icon"><i class="fas fa-plus-circle"></i></span>

                </a>
                <div class="entry">
                    <h2><a href="#">Salon & Spa

                        </a></h2>
                    <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                    <p>Srubsuit, Tunic Dress,
                        Shirts, Dress, Trouser, Skirts,
                        Name Badges, etc..
                    </p>
                </div>
            </article>
        </div>
        <div class="col-md-4">
            <article class="animate-box">
                <a href="#" class="blog-img text-center" style="background-image: url(assets/images/our-services/Restaurant.jpeg);">
                    <span class="icon"><i class="fas fa-plus-circle"></i></span>

                </a>
                <div class="entry">
                    <h2><a href="#">Hospital</a></h2>
                    <!-- <p class="meta-2"><span><i class="icon-calendar2"></i> March 1, 2017</span><span><i class="icon-user"></i> Admin</span> <span><i class="icon-dropbox"></i> Articles</span></p> -->
                    <p>Doctor Lab-coat, Nurse Scrubs,
                        Lab Gown, Patient’s Gown, Shoes
                        ….</p>
                </div>
            </article>
        </div>


    </div>
</div>  --}}




<div id="colorlib-project">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
                <h1><b>PRODUCTS</b></h1>
                <p>WE’RE EXPERTS IN DELIVERING QUALITY CUSTOMIZED CLOTHING</p>
            </div>
        </div>
        <div class="row">
            @foreach($projects as $p)
            <div class="col-md-4 animate-box">
                <div class="project-entry">
                    <a href="#colorlib-project" class="project-img text-center" style="background-image: url(/storage/{{$p->project_image}});">
                        <span class="icon"><i class="fas fa-plus-circle"></i></span>

                    </a>
                    <div class="desc">
                        <h3 class="text-center">{{$p->project_name}}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    /* Hide the new layer by default */
    .services .hover-layer {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.9);
        /* White background with some transparency */
        color: #333;
        /* Text color */
        text-align: center;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1;
        /* Use flexbox to center the content vertically and horizontally */
        display: flex;
        align-items: center;
        justify-content: center;
        /* Add some rounded corners */
        border-radius: 5px;
    }

    /* Show the new layer on hover */
    .services:hover .hover-layer {
        opacity: 1;
        background-color: rgba(255, 255, 255, 1);
        /* Fully opaque white background on hover */
    }

    /* Add some padding and adjust font size for better visual appearance */
    .services .hover-layer p {
        padding-top: 20px;
        /* Add additional padding to the top */
        padding-bottom: 20px;
        /* Add additional padding to the bottom */
        padding: 10px;
        font-size: 16px;
        font-weight: 300;
        line-height: 1.6;
        /* Increase line height for better readability */
        max-width: 300px;
        /* Limit the width of the text content */
        text-align: justify;
        /* Justify the text */
        color: #21201f;
    }

    .services {
        position: relative;
        /* Make sure it's positioned relative for the hover layer to work */
        transition: transform 0.2s ease-in-out;
    }

    .services:hover {
        transform: scale(1.05);
        /* Scale up the element slightly on hover */
    }
</style>


@endsection