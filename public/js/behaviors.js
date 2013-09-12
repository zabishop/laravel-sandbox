$(document).ready(function () {
        $(".day").hover(
            function () {
                day = $(this).data("date");
                for (i = 1; i <= 3; i++) {
                    id = "#" + i;
                    start = $(id).data("project-start");
                    end = $(id).data("project-end");
                    if (day >= start && day <= end) {
                        $(id).parent(".project-panel-wrapper").addClass("activeProject");
                    }
                }
            },
            function() {
                $(".project-panel-wrapper").removeClass("activeProject");
            }
        )

        $(".project-panel").hover(
            function () {
                //console.log($(this).data("project-start"));
                $(this).parent(".project-panel-wrapper").addClass("activeProject");
                start = $(this).data("project-start");
                end = $(this).data("project-end");
                startDay = $("div").find("[data-date='" + start + "']");
                endDay = $("div").find("[data-date='" + end + "']");
                startDay.addClass("start");
                endDay.addClass("end");
            },
            function () {
                startDay.removeClass("start");
                endDay.removeClass("end");
                $(".project-panel-wrapper").removeClass("activeProject");
            }
        )
    }
)