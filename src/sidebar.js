$(document).ready(() => {
    let sidebar = $("#sidebar");
    $(document).mousemove((event) => {
        sidebar.toggleClass("open", event.pageX <= 200);
    })
});