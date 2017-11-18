// JavaScript Document

$(document).ready(function () {

    $("#hp-slider").bxSlider({ auto: true });

    $("#awards-list > li > a").click(function (e) {
        e.preventDefault();

        $(".award-desc").animate({ height: 0 }, 500);

        $("#awards-list li").animate({ height: 100 }, 500);

        var element = $(this).next(".award-desc");

        var height = $(".award-desc-inner", element).height();

        $(this).next(".award-desc").animate({ height: height + 30 }, 500);

        height = height + 130;

        $(this).parent("li").animate({ height: height }, 500);
    });

    ////////////////////////////////////////////////////////////////////////////////////

    $("#menu-switch").click(function (e) {
        e.preventDefault();

        $("#mobile-main-menu").css("display", "block");
    });

    ////////////////////////////////////////////////////////////////////////////////////	

    $("#close-switch").click(function (e) {
        e.preventDefault();

        $("#mobile-main-menu").css("display", "none");
    });

    ////////////////////////////////////////////////////////////////////////////////////

    $("#page h1").click(function () {
        if ($("#mobile-header").is(":visible")) { // only apply for mobile view
            if ($("#left-side-menu").is(":visible")) {
                $("#left-side-menu").css("display", "none");
            } else {
                $("#left-side-menu").css("display", "block");
            }
        }
    });


    ////////////////////////////////////////////////////////////////////////////////////

    $(".close-award").click(function (e) {
        e.preventDefault();

        $(this).parents(".award-desc").animate({ height: 0 }, 500);

        $(this).parents("li").animate({ height: 100 }, 500);
    });

    ////////////////////////////////////////////////////////////////////////////////////

    $(".job-vacancy-block h2 a").click(function (e) {
        e.preventDefault();

        $(".job-vacancy-block").removeClass("expand");

        $(this).parents(".job-vacancy-block").addClass("expand");

    });

    ////////////////////////////////////////////////////////////////////////////////////

    $(".close-vacancy").click(function (e) {
        e.preventDefault();

        $(this).parents(".job-vacancy-block").removeClass("expand");

    });

    ////////////////////////////////////////////////////////////////////////////////////

    $(".ctrl").click(function () {

        var name = ($(this).attr('name'));
        $('[name=' + name + ']').removeClass("selected");

        $(this).addClass("selected");

    });

    ////////////////////////////////////////////////////////////////////////////////////




    $(".profile-img a").click(function (e) {
        e.preventDefault();

        $this_element = $(this);

        var count = $('#profile-list').attr('rel');
        if ($(".profile-content.open").length > 0) {
            $(".profile-content.open").animate({ height: 0 }, 500, function () {

                $(".profile-content.open").remove();

                var index = $this_element.index(".profile-img a");
                var arrow_class = "";
                var last_index = index;

                if ($(window).innerWidth() > 768) {

                    last_index = index + 1;

                    var added_val = 0;

                    if (last_index % 3 != 0) {
                        added_val = 3 - (last_index % 3);
                    }

                    last_index = last_index + added_val - 1;
                    arrow_class = last_index - index;

                    if (count - (index + 1) < 2)
                        last_index = count - 1;
                }

                var element = $(".profile-content").eq(index).clone(true, true).insertAfter($(".profile-block").eq(last_index));
                var height = $(".inner", element).height();

                $(element).addClass("open arrow-" + arrow_class);
                $(element).animate({ height: height + 80, paddingTop: "14px", paddingBottom: "30px" }, 500);
            });

        } else {

            var index = $this_element.index(".profile-img a");

            var last_index = index;

            var arrow_class = "";



            if ($(window).innerWidth() > 768) {

                last_index = index + 1;

                var added_val = 0;

                if (last_index % 3 != 0) {
                    added_val = 3 - (last_index % 3);
                }



                last_index = last_index + added_val - 1;

                arrow_class = last_index - index;

                if (count - (index + 1) < 2)
                    last_index = count - 1;
            }

            var element = $(".profile-content").eq(index).clone(true, true).insertAfter($(".profile-block").eq(last_index));

            var height = $(".inner", element).height();

            $(element).addClass("open arrow-" + arrow_class);

            $(element).animate({ height: height + 80, paddingTop: "14px", paddingBottom: "30px" }, 500);

        }

    });

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    $(".close-profile").on("click", function (e) {
        e.preventDefault();

        $(this).parents(".profile-content").animate({ height: 0, paddingTop: 0, paddingBottom: 0 }, 500, function () { $(this).remove(); });

    });

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    $("#project-gallery").bxSlider({ nextText: "", prevText: "" });

    

    



});
