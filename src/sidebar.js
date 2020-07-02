let index = 100;

$(document).ready(() => {
    let sidebar = $("<div/>").prop("id", "sidebar");
    sidebar.append(
        $("<div/>").addClass("handle").append(
            $("<img/>").attr("src", "/mathetrainer/arrow.webp")
        )
    );

    addSidebarStuff(sidebar, "Startseite", "/mathetrainer/index.html");
	addSidebarStuff(sidebar, "Ableitung und Integral", "/mathetrainer/Ableitung-Integral/index.html");
    addSidebarStuff(sidebar, "Binomialverteilung", "/mathetrainer/Binomialverteilung/index.php");
	addSidebarStuff(sidebar, "Bruchgleichungen", "/mathetrainer/Bruchgleichungen/index.php");
	addSidebarStuff(sidebar, "Hypothesentests", "/mathetrainer/Hypothesentests/index.html");
	addSidebarStuff(sidebar, "Wurzelrechner", "/mathetrainer/Wurzeln/index.html");
	addSidebarStuff(sidebar, "Impressum", "/mathetrainer/impressum.html");

    sidebar.append($("<div/>").addClass("filler"));

    sidebar.appendTo($("body"));

    sidebar.mouseenter((event) => sidebar.toggleClass("open", true));
    sidebar.mouseleave((event) => sidebar.toggleClass("open", false));
});

function addSidebarStuff(sidebar, name, link) {
    sidebar.append(
        $("<a/>").prop("href", link).prop("style", "z-index: " + index--).append(
            $("<h3/>").text(name)
        )
    );
}