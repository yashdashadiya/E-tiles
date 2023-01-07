<section class="contact_us_get_in_touch" click="increase_count_of_ordered()">
            <div class="contact_us_get_in_touch_container">
                <div  class="contact_us_get_in_touch_contact index_contact_img_container">
                    <img src="photos\contact_us_form_img.jpg" alt="">
                    <div class="index_contact_img_message">
                            <h1 id="receivedOrder">0</h1>
                            <p>received order</p>
                    </div>
                </div>
                <div class="contact_us_get_in_touch_send_message backgroundMap">
                    <h2 class="contact_us_get_in_touch_header">Send a message</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Ut blandit arcu in pretium.</p>
                    <form class="contact_us_get_in_touch_form" method="POST" action="https://formsubmit.co/etilesexport@gmail.com">
                        <!-- <input type="email" name="email" placeholder="Email Address" required> -->
                        <input type="hidden" name="_subject" value="Some One send you message">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_next" value="http://etilesexport.com">
                        <input type="text" name="First Name" placeholder="First Name">
                        <input type="text" name="Last Name" placeholder="Last Name">
                        <input type="email" name="Email" placeholder="Email">
                        <input type="number" name="Phone-number" placeholder="Number">
                        <textarea id="" cols="30" rows="10" name="Message" placeholder="Your Message Here"></textarea>
                        <br>
                        <button>Send Message</button>
                    </form>
                </div>
            </div>
        </section>
        