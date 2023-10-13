$(function () {
  // ----------------------------------------------------------------block
  $("#organisation").on("keypress", function (e) {
    if (/^[a-zA-Zა-ჰ0-9\ .\b]+$/.test(String.fromCharCode(e.keyCode))) {
      return;
    } else {
      e.preventDefault();
    }
  });

  $("textarea").on("keypress", function (e) {
    if (
      /^[a-zA-Zა-ჰ0-9\ .,";:?/><=+-_)(*&^%$#@!`~\b]+$/.test(
        String.fromCharCode(e.keyCode)
      )
    ) {
      return;
    } else {
      e.preventDefault();
    }
  });

  // -----------------------5
  $(".information_published").change(function () {
    if (
      $(this).is(":checked") &&
      $(this).attr("id") == "information_published-1"
    ) {
      $("#bot").prop("disabled", true);

      $("#shws").show();
      $("#information").hide();
      $("#q4_1_sxva").hide();
      $(".submit-form").hide();
    } else {
      $("#bot").prop("disabled", false);

      $("#information").show();
      $("#shws").hide();
      $(".submit-form").show();
    }

    // $("#information_published-1").prop("disabled", true);
    // $("#information_published-2").prop("disabled", true);
  });

  // -----------------------16
  $("#tabl11").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "tabl11-1") {
      $("#bot").prop("disabled", true);

      $("#comment12").show();
      // $("#gender_statistics_show").show();
      $(".submit-form").hide();
    } else {
      $("#bot").prop("disabled", false);

      // $("#gender_statistics_show").hide();
      $("#comment").hide();
      $(".submit-form").show();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // ------------------------9
  $("#activities tr:last input").change(function () {
    if ($(this).is(":checked")) {
      $("#activities input").prop("checked", false).prop("disabled", true);
      $(this).prop("checked", true).prop("disabled", false);
    } else {
      $("#activities input").prop("disabled", false);
    }
  });

  //other ------------------------9
  $("#nin12 input:checkbox").change(function () {
    $("#coment10").toggle();
    $(".text10").val("");
  });

  //other ------------------------5.1
  $(".other6_1 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "5") {
      $("#q4_1_sxva").show();
    } else {
      // pass
      $(".text6_1").val("");
      $("#q4_1_sxva").hide();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // other------------------------17
  $("#seven10 input:checkbox").change(function () {
    $("#coment16_1").toggle();
  });

  // comments ------------8
  $("#website select").change(function () {
    $("#website select").removeClass("is-invalid");
    $('#website [data-toggle="tooltip"]').tooltip("disable").tooltip("dispose");

    if ($(this).children("option:last:checked").length) {
      $("#activities").show();
      $("#visit").hide();
    } else {
      // $("#activities").hide();
      $("#visit").hide();
    }
  });

  // comments ------------23
  $("#during select").change(function () {
    $(".submit-form").show();

    $("#during select").removeClass("is-invalid");
    $('#during [data-toggle="tooltip"]').tooltip("disable").tooltip("dispose");
    $("#bot").prop("disabled", false);

    if ($(this).children("option:last:checked").length) {
      $("#comment12").show();
      $("#comment11_1").show();
      // $(".text21_1").val("");
    } else {
      $("#comment12").show();
      $("#comment11_1").hide();
      $(".text22").val("");
    }
  });

  // table -----------------10
  $(".table11 input:radio").change(function () {
    if (
      $("input[id='a1']:checked").val() ||
      $("input[id='a2']:checked").val()
    ) {
      $("#comment11_1").show();
    } else {
      $(".text11_1").val("");
      $("#comment11_1").hide();
      $("#tabl11").show();
    }
  });

  // table -----------------11
  $(".table12 input:radio").change(function () {
    if (
      $("input[id='b1']:checked").val() ||
      $("input[id='b2']:checked").val()
    ) {
      $("#comment12_1").show();
    } else {
      // pass
      $(".text12_1").val("");
      $("#comment12_1").hide();
      $("#tabl12").show();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });
  // table -----------------12
  $(".table13 input:radio").change(function () {
    if (
      $("input[id='c1']:checked").val() ||
      $("input[id='c2']:checked").val()
    ) {
      $("#comment13_1").hide();
    } else {
      // pass
      $(".text13_1").val("");
      $("#comment13_1").hide();
      $("#tabl13").hide();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // table -----------------13
  $(".table14 input:radio").change(function () {
    if (
      $("input[id='d1']:checked").val() ||
      $("input[id='d2']:checked").val()
    ) {
      $("#comment14_1").show();
    } else {
      // pass
      $(".text14_1").val("");
      $("#comment14_1").hide();
      $("#tabl14").show();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // table -----------------14
  $(".table15 input:radio").change(function () {
    if (
      ($(this).is(":checked") && $(this).attr("id") == "1") ||
      $(this).attr("id") == "2"
    ) {
      $("#comment15_1").show();
    } else {
      // pass
      $(".text15_1").val("");
      $("#comment15_1").hide();
      // $("#gender_statistics").show();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // table -----------------19
  $("#ge6 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") != "6") {
      // $("#votegeostat18_1").show();
      $("#coment19").show();
    } else {
      // pass
      // $(".text18_2").val("");
      // $("#votegeostat18_1").hide();
      // $("#comment18_2").hide();

      $(".text19").val("");
      $("#coment19").hide();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // table -----------------19.1
  $(".table18_1 input:radio").change(function () {
    if (
      $("input[id='e1']:checked").val() ||
      $("input[id='e2']:checked").val()
    ) {
      $("#comment18_2").show();
    } else {
      // pass
      $(".text18_2").val("");
      $("#comment18_2").hide();
      $("#tabl20").show();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // table -----------------20
  $(".table19 input:radio").change(function () {
    $(this).is(":checked");
    $("#votegeostat19_1").show();
  });

  // $(".table19 input:radio").change(function () {
  //   if ($(this).is(":checked") && $(this).attr("id") == "6") {
  //     $("#votegeostat19_1").show();
  //   } else {
  //     // pass
  //     // $(".text19_2").val("");
  //     // $("#votegeostat19_1").hide();
  //     // $("#comment19_2").hide();
  //   }
  // });

  // table -----------------20.1
  $(".table19_1 input:radio").change(function () {
    if (
      $("input[id='f1']:checked").val() ||
      $("input[id='f2']:checked").val()
    ) {
      $("#comment19_2").show();
    } else {
      // pass
      $(".text19_2").val("");
      $("#comment19_2").hide();
      $("#tabl21").show();
    }
  });

  // table -----------------21
  $(".table20 input:radio").change(function () {
    if (
      $("input[id='g1']:checked").val() ||
      $("input[id='g2']:checked").val()
    ) {
      $("#comment20_1").show();
    } else {
      // pass
      $(".text20_1").val("");
      $("#comment20_1").hide();
      $("#tabl22").show();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // table -----------------22
  $(".table22 input:radio").change(function () {
    if (
      $("input[id='h1']:checked").val() ||
      $("input[id='h2']:checked").val()
    ) {
      $("#comment22_1").show();
    } else {
      // pass
      $(".text22_1").val("");
      $("#comment22_1").hide();
    }

    // $("#provided_by-1").prop("disabled", true);
    // $("#provided_by-2").prop("disabled", true);
  });

  // --------------------------------------------------------19(cheing)
  // table -----------------19(1)
  $("#ge1 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ni1").hide();
    } else {
      $("#ni1").show();
      $("#votegeostat18_1").show();
    }
  });

  // table -----------------19(2)
  $("#ge2 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ni2").hide();
    } else {
      $("#ni2").show();
      $("#votegeostat18_1").show();
    }
  });

  // table -----------------19(4)
  $("#ge4 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ni3").hide();
    } else {
      $("#ni3").show();
      $("#votegeostat18_1").show();
    }
  });

  // --------------------------------------------------------20(cheing)
  // table -----------------20(1)
  $("#go1 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri1").hide();
    } else {
      $("#ri1").show();
    }
  });

  // table -----------------20(2)
  $("#go2 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri2").hide();
    } else {
      $("#ri2").show();
    }
  });

  // table -----------------20(3)
  $("#go3 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri3").hide();
    } else {
      $("#ri3").show();
    }
  });

  // table -----------------20(4)
  $("#go4 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri4").hide();
    } else {
      $("#ri4").show();
    }
  });

  // table -----------------20(5)
  $("#go5 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri5").hide();
    } else {
      $("#ri5").show();
    }
  });

  // table -----------------20(6)
  $("#go6 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri6").hide();
    } else {
      $("#ri6").show();
    }
  });

  // table -----------------20(7)
  $("#go7 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri7").hide();
    } else {
      $("#ri7").show();
    }
  });

  // table -----------------20(8)
  $("#go8 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri8").hide();
    } else {
      $("#ri8").show();
    }
  });

  // table -----------------20(9)
  $("#go9 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri9").hide();
    } else {
      $("#ri9").show();
    }
  });

  // table -----------------20(10)
  $("#go10 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri10").hide();
    } else {
      $("#ri10").show();
    }
  });

  // table -----------------20(11)
  $("#go11 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri11").hide();
    } else {
      $("#ri11").show();
    }
  });

  // table -----------------20(12)
  $("#go12 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri12").hide();
    } else {
      $("#ri12").show();
    }
  });

  // table -----------------20(13)
  $("#go13 input:radio").change(function () {
    if ($(this).is(":checked") && $(this).attr("id") == "6") {
      $("#ri13").hide();
    } else {
      $("#ri13").show();
    }
  });

  // ------------------------------------// shezgudva

  $('[data-toggle="tooltip"]').tooltip("disable");
});
