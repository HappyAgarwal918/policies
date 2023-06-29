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
  // page 2
    $("input[name='company']").click(function() {
      ($("#company1").is(":checked")) ? $(".company1-1").removeClass("hidden"): $(".company1-1").addClass("hidden")
    });
  // page 4
    $("input[name='formatting']").click(function() {
      ($("#formatting1").is(":checked")) ? $(".formatting1-1").removeClass("hidden"): $(".formatting1-1").addClass("hidden")
    });
  // page 5
    $("input[name='counterr']").click(function() {
      ($("#counterr1").is(":checked")) ? $(".counterr1-1").removeClass("hidden"): $(".counterr1-1").addClass("hidden")
    });
    $("input[name='formattingg']").click(function() {
      ($("#formattingg1").is(":checked")) ? $(".formattingg1-1").removeClass("hidden"): $(".formattingg1-1").addClass("hidden")
    });
    $("input[name='counterr']").click(function() {
      ($("#counterr2").is(":checked")) ? $(".formattingg1-1").addClass("hidden") : $("").show()
    });
  // page 6
    $("input[name='terminate']").click(function() {
      ($("#terminate1").is(":checked")) ? $(".terminate1-1").removeClass("hidden"): $(".terminate1-1").addClass("hidden")
    });
    $("input[name='backup']").click(function() {
      ($("#backup1").is(":checked")) ? $(".backup1-1").removeClass("hidden"): $(".backup1-1").addClass("hidden")
    });
    $("input[name='terminate']").click(function() {
      ($("#terminate2").is(":checked")) ? $(".backup1-1").addClass("hidden") : $("").show()
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