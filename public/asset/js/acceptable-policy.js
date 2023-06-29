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
  // page 3
    $("input[name='register']").click(function() {
      ($("#register1").is(":checked")) ? $(".register1-1").removeClass("hidden"): $(".register1-1").addClass("hidden")
    });
  // page 4
    $("input[name='publish']").click(function() {
      ($("#publish1").is(":checked")) ? $(".publish1-1").removeClass("hidden"): $(".publish1-1").addClass("hidden")
    });
    $("input[name='objectionable']").click(function() {
      ($("#objectionable1").is(":checked")) ? $(".objectionable1-1").removeClass("hidden"): $(".objectionable1-1").addClass("hidden")
    });
    $("input[name='publish']").click(function() {
      ($("#publish2").is(":checked")) ? $(".objectionable1-1").addClass("hidden") : $("").show()
    });
  // page 5
    $("input[name='sell']").click(function() {
      ($("#sell1").is(":checked")) ? $(".sell1-1").removeClass("hidden"): $(".sell1-1").addClass("hidden")
    });
  // page 6
    $("input[name='upload']").click(function() {
      ($("#upload1").is(":checked")) ? $(".upload1-1").removeClass("hidden"): $(".upload1-1").addClass("hidden")
    });
  // page 7
    $("input[name='send']").click(function() {
      ($("#send1").is(":checked")) ? $(".send1-1").removeClass("hidden"): $(".send1-1").addClass("hidden")
    });
    $("input[name='bulk']").click(function() {
      ($("#bulk1").is(":checked")) ? $(".bulk1-1").removeClass("hidden"): $(".bulk1-1").addClass("hidden")
    });
    $("input[name='send']").click(function() {
      ($("#send2").is(":checked")) ? $(".bulk1-1").addClass("hidden") : $("").show()
    });
  // page 8
    $("input[name='action']").click(function() {
      ($("#action1").is(":checked")) ? $(".action1-1").removeClass("hidden"): $(".action1-1").addClass("hidden")
    });
  // page 9
    $("input[name='suspendd']").click(function() {
      ($("#suspendd1").is(":checked")) ? $(".suspendd1-1").removeClass("hidden"): $(".suspendd1-1").addClass("hidden")
    });
    $("input[name='backup']").click(function() {
      ($("#backup1").is(":checked")) ? $(".backup1-1").removeClass("hidden"): $(".backup1-1").addClass("hidden")
    });
    $("input[name='suspendd']").click(function() {
      ($("#suspendd2").is(":checked")) ? $(".backup1-1").addClass("hidden") : $("").show()
    });
  // page 10
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