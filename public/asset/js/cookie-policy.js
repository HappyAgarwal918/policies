$(function() {
  // page 1
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
  // page 3
    $("input[name='privacy_policy']").click(function() {
      ($("#privacy_policy1").is(":checked")) ? $(".privacy_policy1-1").removeClass("hidden"): $(".privacy_policy1-1").addClass("hidden")
    });
    $("input[name='privacy_policy']").click(function() {
      ($("#privacy_policy2").is(":checked")) ? $(".privacy_policy2-1").removeClass("hidden"): $(".privacy_policy2-1").addClass("hidden")
    });
  // page 4
    $("input[name='third_party']").click(function() {
      ($("#third_party1").is(":checked")) ? $(".third_party1-1").removeClass("hidden"): $(".third_party1-1").addClass("hidden")
    });
    $("input[name='ads']").click(function() {
      ($("#ads10").is(":checked")) ? $(".ads10-1").removeClass("hidden"): $(".ads10-1").addClass("hidden")
    });
    $("input[name='third_party']").click(function() {
      ($("#third_party2").is(":checked")) ? $(".ads10-1").addClass("hidden") : $("").show()
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