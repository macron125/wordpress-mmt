<section class="module module-contact_us mmt-contact_us">

<?php require_once __DIR__ . '/../assets/form_process.php' ?>

  <form action="" method="post" class="mmt-contact_us-form">

    <fieldset class="mmt-contact_us-fieldset">

      <div>
        <label for="firstname">First Name (required)</label>
        <input class="mmt-field-short" type="text" name="firstname" id="firstname" placeholder="First Name" value="" required>
      </div>

      <div>
        <label for="lastname">Last Name (required)</label>
        <input class="mmt-field-short" type="text" name="lastname" id="lastname" placeholder="Last Name" value="" required>
      </div>
    
    </fieldset>

    <div>
      <label for="phone">Phone (required)</label>
      <input class="mmt-field-long" type="tel" name="phone" id="phone" placeholder="Phone (numbers only)" pattern="[0-9 ]+" title="Use spaces and numbers only" value="" required>
    </div>
    
    <div>
      <label for="email">E-mail</label>
      <input class="mmt-field-long" type="text" name="email" id="email" placeholder="E-mail" value="">
    </div>
    
    <div>
      <label for="message">Message (required)</label>
      <textarea class="mmt-field-long" name="message" id="message" cols="30" rows="10" placeholder="Message" value="" required></textarea>
    </div>

    <input type="submit" name="submit" value="Submit">

  </form>

  <div class="mmt-contact_us-info">
    <iframe 
    class="gmap"
    loading="lazy" 
    style="border: 0;" 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12610.072118972997!2d44.77192509505746!3d41.77269183336443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446d9318133e1f%3A0x21a64789cd26637a!2sMMT+Hospital!5e0!3m2!1sen!2sge!4v1524458741660" 
    width="80%" 
    height="450" 
    frameborder="0" 
    allowfullscreen="allowfullscreen" 
    data-rocket-lazyload="fitvidscompatible" 
    data-lazy-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12610.072118972997!2d44.77192509505746!3d41.77269183336443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40446d9318133e1f%3A0x21a64789cd26637a!2sMMT+Hospital!5e0!3m2!1sen!2sge!4v1524458741660" 
    data-ll-status="loaded" 
    class="entered lazyloaded">
  </iframe>
  </div>
</section>