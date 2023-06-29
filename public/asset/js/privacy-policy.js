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
    $("input[name='info_delete']").click(function() {
      ($("#info_delete1").is(":checked")) ? $(".info_delete1-1").removeClass("hidden"): $(".info_delete1-1").addClass("hidden")
    });
    $("input[name='register']").click(function() {
      ($("#register2").is(":checked")) ? $(".info_delete1-1").addClass("hidden") : $("").show()
    });
  // page 4
    $("input[name='interact']").click(function() {
      ($("#interact1").is(":checked")) ? $(".interact1-1").removeClass("hidden"): $(".interact1-1").addClass("hidden")
    });

  // page 6
    $("input[name='teens']").click(function() {
      ($("#teens1").is(":checked")) ? $(".teens1-1").removeClass("hidden"): $(".teens1-1").addClass("hidden")
    });
    $("input[name='children']").click(function() {
      ($("#children1").is(":checked")) ? $(".children1-1").removeClass("hidden"): $(".children1-1").addClass("hidden")
    });
    $("input[name='teens']").click(function() {
      ($("#teens2").is(":checked")) ? $(".children1-1").addClass("hidden") : $("").show()
    });
    $("input[name='children_info']").click(function() {
      ($("#children_info1").is(":checked")) ? $(".children_info1-1").removeClass("hidden"): $(".children_info1-1").addClass("hidden")
    });
    $("input[name='teens']").click(function() {
      ($("#teens2").is(":checked")) ? $(".children_info1-1").addClass("hidden") : $("").show()
    });
    $("input[name='children']").click(function() {
      ($("#children2").is(":checked")) ? $(".children_info1-1").addClass("hidden") : $("").show()
    });

  // page 7
    $("input[name='sell']").click(function() {
      ($("#sell1").is(":checked")) ? $(".sell1-1").removeClass("hidden"): $(".sell1-1").addClass("hidden")
    });
    $("input[name='remote_share']").click(function() {
      ($("#remote_share1").is(":checked")) ? $(".remote_share1-1").removeClass("hidden"): $(".remote_share1-1").addClass("hidden")
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".remote_share1-1").addClass("hidden") : $("").show()
    });
    $("input[id='payments_method2']").click(function() {
      ($("#payments_method2").is(":checked")) ? $(".payments_method2-1").removeClass("hidden"): $(".payments_method2-1").addClass("hidden")
    });
    $("input[name='sell']").click(function() {
      ($("#sell2").is(":checked")) ? $(".payments_method2-1").addClass("hidden") : $("").show()
    });
  // page 8
    $("input[name='cookiess']").click(function() {
      ($("#cookiess1").is(":checked")) ? $(".cookiess1-1").removeClass("hidden"): $(".cookiess1-1").addClass("hidden")
    });
  // page 9
    $("input[name='newsletters']").click(function() {
      ($("#newsletters1").is(":checked")) ? $(".newsletters1-1").removeClass("hidden"): $(".newsletters1-1").addClass("hidden")
    });
  // page 12
    $("input[name='sell_a']").click(function() {
      ($("#sell_a2").is(":checked")) ? $(".sell_a2-1").removeClass("hidden"): $(".sell_a2-1").addClass("hidden")
    });
  // page 13
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