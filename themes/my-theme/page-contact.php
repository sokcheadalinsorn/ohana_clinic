<?php get_header(); ?>

<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<div class="where_we_are_in">
    <div class="title_we_are_in">
        <p class="home_doctors"><span>HOME</span>/CONTACT Us</p>
        <h1 class="our_doctors">CONTACT US</h1>
    </div>
</div>


<main class="container_contact">
    <div class="container_big">

       <!-- left_side -->
        <div class="container_contact_us">
            
        </div>
        
        <!-- right side -->

        <div class="form_contact">
            <h2>We want to hear from you</h2>
            <hr class="underline_form_contact"> <br>

            <p>PLease out of the form below to contact our team. We will respond as soon as possible . Alternatively, <br> phone or e-mail us using information on the left.</p>

            <form action="">
                <label for="fname">Your Name</label><br>
                <input type="text" placeholder="Enter your name"><br>

                <label for="fname">Phone Number</label><br>
                <input type="text" placeholder="Enter your phnoe numer"><br>

                 <label for="fname">Your Email</label><br>
                <input type="text" placeholder="Enter your email"><br>

                <label for="fname">Subject</label><br>
                <input type="text" id="fname" name="fname" value=""><br>

                <label for="fname">Message</label><br>
                <input type="text" placeholder="Describtion"><br>
                <button class="submit">Submit</button>

            </form>


            
            

        </div>
    </div>

</main>

<?php get_footer(); ?>
