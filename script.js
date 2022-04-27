
    $(document).ready(function () {
        $(".bx-menu").click(function () {
            $(".bx-menu").toggleClass("bx-x");
            if (!$(".menucont").hasClass("mleft")) {
                $(".search input").show(300);
                $(".spotlight").addClass("wspot");
                console.log($('body'))
                $('body').css({overflow:'hidden'});
            }
            else {
                $('body').css({overflow:'auto'});
                $(".search input").hide(300);
                $(".spotlight").removeClass("wspot");
            }
            $(".shade").toggleClass("shadeshow");
            $(".menucont").toggleClass("mleft");
        });
        $(".search").click(function () {
            $(".search input").toggle(300);
            $(".spotlight a").fadeToggle(300);
            $(".bx-menu").toggleClass("bx-x");
            $(".spotlight").toggleClass("wspot");
        });
        $(document).click(function (event) {
            if (!$(event.target).closest('header').length && !$(event.target).closest('.menucont').length) {
                $(".bx-menu").toggleClass("bx-x");
                $(".shade").removeClass("shadeshow");
                $(".menucont").removeClass("mleft");
                $(".search input").hide(300);
                $(".spotlight").removeClass("wspot");
                $(".spotlight a").fadeIn(300);
                $('body').css({overflow:'auto'});
            }
        });
    });


    $(document).ready(function () {
        $('.videoicon').click(function () {
            $('.cover').css('zIndex', '-1');
            $(this).prev().css('zIndex', '1');
            $('video source').attr('src', $(this).parent().data('src'));
            $('video')[0].load();
            $('video')[0].play();
            $('.videotitle').text($(this).parent().data('name'));
            $('.videodate').html($(this).parent().data('date-and-duration'));
            let desc = $(this).parent().data('description');
            if (desc.length >= 244) desc = desc.substring(0, 244) + '...';
            $('.rightinfo').text(desc);
        })
    });

