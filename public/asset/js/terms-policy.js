$(function() {
  // page 1
    $("input[name='platforms']").click(function() {
      ($("#platforms1").is(":checked")) ? $(".platforms1-1").removeClass("hidden"): $(".platforms1-1").addClass("hidden")
    });
    $("input[name='platforms']").click(function() {
      ($("#platforms2").is(":checked")) ? $(".platforms2-1").removeClass("hidden"): $(".platforms2-1").addClass("hidden")
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
  // page 3
    $("input[name='register']").click(function() {
      ($("#register1").is(":checked")) ? $(".register1-1").removeClass("hidden"): $(".register1-1").addClass("hidden")
    });
  // page 4
    $("input[name='adult']").click(function() {
      ($("#adult1").is(":checked")) ? $(".adult1-1").removeClass("hidden"): $(".adult1-1").addClass("hidden")
    });
  // page 5
    $("input[name='publish']").click(function() {
      ($("#publish1").is(":checked")) ? $(".publish1-1").removeClass("hidden"): $(".publish1-1").addClass("hidden")
    });
    $("input[name='backup']").click(function() {
      ($("#backup1").is(":checked")) ? $(".backup1-1").removeClass("hidden"): $(".backup1-1").addClass("hidden")
    });
    $("input[name='publish']").click(function() {
      ($("#publish2").is(":checked")) ? $(".backup1-1").addClass("hidden") : $("").show()
    });
  // page 6
    $("input[name='sell']").click(function() {
      ($("#sell1").is(":checked")) ? $(".sell1-1").removeClass("hidden"): $(".sell1-1").addClass("hidden")
    });
    $("input[id='types2']").click(function() {
      ($("#types2").is(":checked")) ? $(".types2-1").removeClass("hidden"): $(".types2-1").addClass("hidden")
    });
    $("input[id='types3']").click(function() {
      ($("#types3").is(":checked")) ? $(".types3-1").removeClass("hidden"): $(".types3-1").addClass("hidden")
    });
    $("input[name='recurring']").click(function() {
      ($("#recurring1").is(":checked")) ? $(".recurring1-1").removeClass("hidden"): $(".recurring1-1").addClass("hidden")
    });
    $("input[name='uptime_guarantee']").click(function() {
      ($("#uptime_guarantee1").is(":checked")) ? $(".uptime_guarantee1-1").removeClass("hidden"): $(".uptime_guarantee1-1").addClass("hidden")
    });
    $("input[id='payments_method2']").click(function() {
      ($("#payments_method2").is(":checked")) ? $(".payments_method2-1").removeClass("hidden"): $(".payments_method2-1").addClass("hidden")
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".types2-1").addClass("hidden") : $("").show()
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".types3-1").addClass("hidden") : $("").show()
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".recurring1-1").addClass("hidden") : $("").show()
    });
    $("input[name='recurring']").click(function() {
      ($("#recurring2").is(":checked")) ? $(".recurring1-1").addClass("hidden") : $("").show()
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".uptime_guarantee1-1").addClass("hidden") : $("").show()
    });
    $("input[name='uptime_guarantee']").click(function() {
      ($("#uptime_guarantee2").is(":checked")) ? $(".uptime_guarantee1-1").addClass("hidden") : $("").show()
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".payments_method2-1").addClass("hidden") : $("").show()
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