<?php
/*
Template Name: FAQ page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

    <div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/faq-header-girl.jpg" class="img-responsive faq-header">
    </div>
    <div>
    <span class="txt-lg-overlay-faq">Frequently Asked Questions</span>
    <span class="txt-overlay-faq">Do you have any questions? Browse the answers to commonly asked questions below, or send us your specific question.</span>
</div>
<br>
<h2 class="Title">Frequently Asked Questions</h2>
<br>
<div class="faqcontainer">
<button class="accordion">Where do I sign up?</button>
<div class="panel">
  <p><br>Please go to our <a href="http://wuk.yew.mybluehost.me/join/">JOIN</a> page to apply for membership in the Women in Dentistry Society (WA). Please note that eligibility criteria apply.</p>
</div>

<button class="accordion">How much is the membership?</button>
<div class="panel">
  <p><br>Currently membership is free. Women in Dentistry Society (WA) reserve the right to raise an annual subscription or administration fee in the future.</p>
</div>

<button class="accordion">How do I become a mentor?</button>
<div class="panel">
  <p><br>Please fill in the Cup of Coffee Registration form on our <a href="http://wuk.yew.mybluehost.me/cup-of-coffee-program/">Cup of Coffee Page</a> if you're interested in mentoring.</p>
</div>
    
<button class="accordion">Can my children or partner attend?</button>
<div class="panel">
  <p><br>Infants under the age of 12 months can attend with their parent, subject to occupational health and safety concerns of the venue. Unfortunately, children over the age of 1 year are not able to attend our events. 

      If your partner is a dentist, dental specialist or dental student, we would love for them to attend – please see our <a href="http://wuk.yew.mybluehost.me/events/">EVENT</a> page for ticket details. 
</p>
</div>
<button class="accordion">Can males attend the events?</button>
<div class="panel">
  <p>Male dentists, dental specialists and dental students are very welcome to attend our events.</p>
</div>
<button class="accordion">Can I join or attend events if I am not a dentist?</button>
<div class="panel">
  <p>Membership and events are open to dentists, dental specialists and dental students in Western Australia. From time to time, our events also include invitations to others in the dental industry.</p>
</div>
<button class="accordion">How do I become a Council Member?</button>
<div class="panel">
  <p>You will need to be a Full Member prior to the Annual General Meeting and be nominated for the position. Please use the Ask us a Question box below to request further information.</p>
</div>
<button class="accordion">How often do you hold events and meetings?</button>
<div class="panel">
  <p>We organise two events per year, usually in March-April and October. We aim to hold an Annual General Meeting to coincide with the October event wherever possible. </p>
</div>
<button class="accordion">I am keen to give back to the community. Do you provide any volunteering opportunities?</button>
<div class="panel">
  <p>Healing Smiles is a clinical volunteering program in which Women in Dentistry Society (WA) members can nominate to be part of a clinical team that provides pro-bono dental care and rehabilitation to survivors of domestic violence. Please see the <a href="http://wuk.yew.mybluehost.me/healing-smiles-program/">Healing Smiles Sign Up Page</a> page to link to more information about this valuable and unique initiative.</p>
</div>
</div>
<div class="container">
     <p class="email-header-2">Don't see your questions?</p><br>
    <h2 class="email-header-3">Ask us one!</h2><br>
      <?php wpforms_display( 291, false, false ); ?>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<?php get_footer();
/* Tells WordPress to include footer.php */ ?>