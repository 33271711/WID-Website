<?php
/*
Template Name: FAQ page
*/
?>
<?php get_header(); /* Tells WordPress to include header.php */ ?>

    <div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/faq-header-girl.jpeg" class="img-responsive faq-header">
    </div>
    <div>
    <span class="txt-lg-overlay-faq">Support</span>
    <span class="txt-overlay-faq">Do you have any questions? Browse the answers to commonly asked questions below, or send us your specific question.</span>
</div>
<br>
<h2 class="Title">Frequently Asked Questions</h2>
<br>
<div class="faqcontainer">
<button class="accordion">Where do I sign up?</button>
<div class="panel">
  <p><br>Please go to our <a href="contact_page.php">JOIN</a> page to apply for membership in the Women in Dentistry Society (WA). Please note that eligibility criteria apply.</p>
</div>

<button class="accordion">How much is the membership?</button>
<div class="panel">
  <p><br>Currently membership is free. Women in Dentistry Society (WA) reserve the right to raise an annual subscription or administration fee in the future.</p>
</div>

<button class="accordion">How do I become a mentor?</button>
<div class="panel">
  <p><br>Please fill in the Cup of Coffee Registration form on our <a href="url">JOIN</a> page if you'r interested in mentoring.</p>
</div>
    
<button class="accordion">Can my children or partner attend?</button>
<div class="panel">
  <p><br>Infants under the age of 12 months can attend with their parent, subject to occupational health and safety concerns of the venue. Unfortunately, children over the age of 1 year are not able to attend our events. 

      If your partner is a dentist, dental specialist or dental student, we would love for them to attend – please see our <a href="url">EVENT</a> page for ticket details. 
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
  <p>Healing Smiles is a clinical volunteering program in which Women in Dentistry Society (WA) members can nominate to be part of a clinical team that provides pro-bono dental care and rehabilitation to survivors of domestic violence. Please see the CONTACT (can we link this to the relevant section of the CONTACT page) page to link to more information about this valuable and unique initiative.</p>
</div>
</div>

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