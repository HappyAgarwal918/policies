$(function() {
  // page 1
    $("input[name='platforms']").click(function() {
      ($("#platforms1").is(":checked")) ? $(".platforms1-1").removeClass("hidden"): $(".platforms1-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms2-1").removeClass("hidden"): $(".platforms2-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms3").is(":checked")) ? $(".platforms3-1").removeClass("hidden"): $(".platforms3-1").addClass("hidden")
    });
    $("input[name='platforms_other']").click(function() {
      ($("#platforms_other1").is(":checked")) ? $(".platforms_other1-1").removeClass("hidden"): $(".platforms_other1-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms_other1-1").addClass("hidden") : $("").show()
    });
    $("input[name='platforms_other']").click(function() {
      ($("#platforms_other2").is(":checked")) ? $(".platforms_other2-1").removeClass("hidden"): $(".platforms_other2-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms_other2-1").addClass("hidden") : $("").show()
    });
    $("input[name='platforms_other']").click(function() {
      ($("#platforms_other3").is(":checked")) ? $(".platforms_other3-1").removeClass("hidden"): $(".platforms_other3-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms_other3-1").addClass("hidden") : $("").show()
    });
    $("input[name='platforms_other']").click(function() {
      ($("#platforms_other4").is(":checked")) ? $(".platforms_other4-1").removeClass("hidden"): $(".platforms_other4-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms_other4-1").addClass("hidden") : $("").show()
    });
    $("input[name='platforms_other']").click(function() {
      ($("#platforms_other5").is(":checked")) ? $(".platforms_other5-1").removeClass("hidden"): $(".platforms_other5-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms_other5-1").addClass("hidden") : $("").show()
    });

    $("input[name='premium']").click(function() {
      ($("#premium1").is(":checked")) ? $(".premium").removeClass("hidden"): $(".premium").addClass("hidden")
    });
    $("input[name='premium']").click(function() {
      ($("#premium2").is(":checked")) ? $(".basic").removeClass("hidden"): $(".basic").addClass("hidden")
    });
  // page 2
    $("input[name='company']").click(function() {
      ($("#company1").is(":checked")) ? $(".company1-1").removeClass("hidden"): $(".company1-1").addClass("hidden")
    });
  // page 5
    $("input[name='accept']").click(function() {
      ($("#accept1").is(":checked")) ? $(".accept1-1").removeClass("hidden"): $(".accept1-1").addClass("hidden")
    });
  // page 6
    $("input[name='publish']").click(function() {
      ($("#publish1").is(":checked")) ? $(".publish1-1").removeClass("hidden"): $(".publish1-1").addClass("hidden")
    });
  // page 7
    $("input[name='testimonials']").click(function() {
      ($("#testimonials1").is(":checked")) ? $(".testimonials1-1").removeClass("hidden"): $(".testimonials1-1").addClass("hidden")
    });
  // page 8
    $("input[name='affiliate_links']").click(function() {
      ($("#affiliate_links1").is(":checked")) ? $(".affiliate_links1-1").removeClass("hidden"): $(".affiliate_links1-1").addClass("hidden")
    });
  // page 9
    $("input[id='contacts_form']").click(function() {
      ($("#contacts_form").is(":checked")) ? $(".contacts_form-1").removeClass("hidden"): $(".contacts_form-1").addClass("hidden")
    });
    $("input[id='contacts_email']").click(function() {
      ($("#contacts_email").is(":checked")) ? $(".contacts_email-1").removeClass("hidden"): $(".contacts_email-1").addClass("hidden")
    });
    $("input[id='contacts_address']").click(function() {
      ($("#contacts_address").is(":checked")) ? $(".contacts_address-1").removeClass("hidden"): $(".contacts_address-1").addClass("hidden")
    });
});