$(function() {
  // page 1
    $("input[name='platforms']").click(function() {
      ($("#platforms1").is(":checked")) ? $(".platforms1-1").removeClass("hidden"): $(".platforms1-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms1-2").removeClass("hidden"): $(".platforms1-2").addClass("hidden")
    });

    $("input[name='premium']").click(function() {
      ($("#premium1").is(":checked")) ? $(".premium").removeClass("hidden"): $(".premium").addClass("hidden")
    });
    $("input[name='premium']").click(function() {
      ($("#premium2").is(":checked")) ? $(".basic").removeClass("hidden"): $(".basic").addClass("hidden")
    });
  // page 4
    $("input[name='trials']").click(function() {
      ($("#trials1").is(":checked")) ? $(".trials1-1").removeClass("hidden"): $(".trials1-1").addClass("hidden")
    });
  // page 5
    $("input[name='accept']").click(function() {
      ($("#accept1").is(":checked")) ? $(".accept1-1").removeClass("hidden"): $(".accept1-1").addClass("hidden")
    });
    $("input[name='money_back']").click(function() {
      ($("#money_back2").is(":checked")) ? $(".money_back2-1").removeClass("hidden"): $(".money_back2-1").addClass("hidden")
    });
    $("input[name='accept']").click(function() {
      ($("#accept2").is(":checked")) ? $(".money_back2-1").addClass("hidden") : $("").show()
    });
  // page 6
    $("input[name='offer']").click(function() {
      ($("#offer1").is(":checked")) ? $(".offer1-1").removeClass("hidden"): $(".offer1-1").addClass("hidden")
    });
  // page 7
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