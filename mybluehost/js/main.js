// jQuery(document).ready(function($){

// // Typed animation
// var typed = new Typed('#typing', {
//  strings: [
//    "Phonix ppc management",
//    "Lead Generation",
//    "Local Seo",
//    "Progmmatic ADS"
//  ],
//  typeSpeed: 50,
//  backSpeed: 50,
//  loop: true
// });



// });
jQuery(document).ready(function($){

  // ===============================
  // Typed animation
  // ===============================
  var typed = new Typed('#typing', {
    strings: [
      "Phonix ppc management",
      "Lead Generation",
      "Local Seo",
      "Progmmatic ADS"
    ],
    typeSpeed: 50,
    backSpeed: 50,
    loop: true
  });

  // ===============================
  // FAQ accordion
  // ===============================
  $(".faq-question").click(function(){
    var parentItem = $(this).closest(".faq-item");

    // Close all others
    $(".faq-item").not(parentItem)
      .removeClass("active")
      .find(".faq-answer").slideUp(300);

    // Toggle clicked FAQ
    parentItem.toggleClass("active");
    parentItem.find(".faq-answer").slideToggle(300);
  });

});