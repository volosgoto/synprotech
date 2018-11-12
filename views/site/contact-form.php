<!-- main contact form -->

<section class="section-contact-form">
    <!-- <div class="w3-container w3-dark-gray w3-twothird w3-center"> -->
    <div class="w3-dark-gray w3-twothird w3-center">
        <div class="w3-card-4">
            <div class="w3-container w3-dark-gray ">
                <h2 class="w3-margin-top">Contact Us</h2>
            </div>
            <form id="email-form" action="" class="w3-container w3-padding-xlarge" method="">
                <label class="w3-input ">Name</label>
                <input id="name" name="name" class="w3-input" type="text">
                <div class="invalid-feedback">
                    Enter name
                </div>
                <label class="w3-input">Email</label>
                <input id="email" name="email" class="w3-input" type="text">
                <div class="invalid-feedback">
                    Enter a valid Email
                </div>
                <label class="w3-input">Phone</label>
                <input id="phone" name="phone" class="w3-input" type="text">
                <div class="invalid-feedback">
                    Enter a valid phone
                </div>
                <label class="w3-input">Message </label>
                <textarea id="message" name="message" class="w3-input" style="resize:none"></textarea>
                <div class="invalid-feedback">
                    Enter text message
                </div>
                <br>
                <button onclick="sendMail()" id="submit" type="submit" class="w3-button w3-black w3-large w3-hover-blue-gray">Submit</button>
                <br><br>
            </form>
        </div>
</section>
<!-- main contact form ENDS-->
