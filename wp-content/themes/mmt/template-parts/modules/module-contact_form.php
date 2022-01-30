<section class="module module-contact_us mmt-contact_us">

  <?php require_once __DIR__ . '/../../assets/form_process.php' ?>

  <form action="" method="post" class="mmt-contact_us-form">

    <fieldset class="mmt-contact_us-fieldset">

      <div>
        <label for="firstname"><?php echo pll__('First Name') . " " . pll__('Required') ?></label>
        <input class="mmt-field-short" type="text" name="firstname" id="firstname" placeholder="<?php echo pll__('First Name') ?>" value="" required>
      </div>

      <div>
        <label for="lastname"><?php echo pll__('Last Name') . " " . pll__('Required') ?></label>
        <input class="mmt-field-short" type="text" name="lastname" id="lastname" placeholder="<?php echo pll__('Last Name') ?>" value="" required>
      </div>
    
    </fieldset>

    <div>
      <label for="phone"><?php echo pll__('Phone') . " " . pll__('Required') ?></label>
      <input class="mmt-field-long" type="tel" name="phone" id="phone" placeholder="<?php echo pll__('Phone') ?>" pattern="[0-9 ]+" title="Use spaces and numbers only" value="" required>
    </div>
    
    <div>
      <label for="email"><?php echo pll__('Email') . " " . pll__('Required') ?></label>
      <input class="mmt-field-long" type="text" name="email" id="email" placeholder="<?php echo pll__('email') ?>" value="">
    </div>
    
    <div>
      <label for="message"><?php echo pll__('Message') . " " . pll__('Required') ?></label>
      <textarea class="mmt-field-long" name="message" id="message" cols="30" rows="10" placeholder="<?php echo pll__('Message') ?>" value="" required></textarea>
    </div>

    <input type="submit" name="submit" value="<?php echo pll__('Submit'); ?>">

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