<?php get_header(); ?>
<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/style.css">


<div class="header_appointment">
    <div class="appontment">
        <a href="#"><p>Appointment</p></a>
    </div>
    <div class="logo_left">
        <img src="http://ohana-clinic.test/wp-content/uploads/2025/12/ChatGPT_Image_Dec_25__2025__10_17_21_AM-removebg-preview.png" alt="logo">
    </div>
</div>  
<hr class="line">

<!-- form_contact_section -->
<div class="container_form_contact">
    <div class="form_contact">
        <p class="description">
        Request an Appointment <br>
        PLease complete the form below to request an appointment. Our team will review your information and reach out to comfirm the date and time. If you need immediate <br>
        assistance or have aan urgent matter, please call us directly using the contact information provided.
        </p>

        <div class="contact_form">
            <form action="action_page.php">
                <select name="doctor" id="doctor">
                        <option value="Dr.Al-Samusa">Dr.Al-Samusa</option>
                </select> <br>


                <label for="fname">Doctors</label><br>
                <input type="text" placeholder="Choose the doctor from the list"><br>


                <label for="fname">First name</label><br>
                <input type="text" placeholder="Enter your first name"><br>


                <label for="lname">Last name</label><br>
                <input type="text" placeholder="Enter your last name"><br>


                <label for="lname">Sex</label><br>
                <input type="text" placeholder="Select your sex">


                <label for="lname">Date of birth</label><br>
                <input type="text" placeholder="DD/MM/YY">


                <label for="lname">Phone Number</label><br>
                <input type="text" placeholder="+855(KH)">


                <label for="lname">Email Address</label><br>
                <input type="text" placeholder="Enter you email">

                
                <label for="reason">Reason for appointment</label>
                <input type="text" placeholder="Describtion...">
                <button class="submit">Submit</button>

                
                
            </form> 
        </div>

       





    </div>

    
</div>

<?php get_footer(); ?>
