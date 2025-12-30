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


                <label for="fname">First name</label><br>
                <input type="text" placeholder="Enter your first name"><br>


                <label for="lname">Last name</label><br>
                <input type="text" placeholder="Enter your last name"><br>


                <label for="sex">Sex</label><br>
                <select id="sex" name="sex">
                    <option value="">Select your sex</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>



                <label for="doctor">Choose Doctor</label><br>
                <select id="doctor" name="doctor">
                    <option value="">Select Doctor</option>
                    <option value="dr_sok">Dr. Sok</option>
                    <option value="dr_dara">Dr. Dara</option>
                    <option value="dr_srey">Dr. Srey</option>
                </select>

                <br><br>

                <label for="date">Appointment Date</label><br>
                <input type="date" id="date" name="appointment_date">

                <br><br>


                <!-- nis muy dom -->
                <label for="phone">Phone Number</label><br>
                <div class="phone_number">
                    <select name="country_code" id="country_code">
                        <option value="">Select country</option>
                        <option value="+855">🇰🇭 Cambodia (+855)</option>
                        <option value="+66">🇹🇭 Thailand (+66)</option>
                        <option value="+84">🇻🇳 Vietnam (+84)</option>
                        <option value="+81">🇯🇵 Japan (+81)</option>
                        <option value="+1">🇺🇸 USA (+1)</option>
                    </select>

                    <input  type="tel" name="phone" placeholder="Enter phone number">
                </div>
                <!-- nis muy dom -->


                <label for="lname">Email Address</label><br>
                <input type="text" placeholder="e.g sokcheadalinsorn@gmail.com">

                
                <label for="reason">Reason for appointment</label>
                <input type="text" placeholder="Describtion...">
                <button class="submit">Submit</button>

                
                
            </form> 
        </div>

       





    </div>

    
</div>

<?php get_footer(); ?>
