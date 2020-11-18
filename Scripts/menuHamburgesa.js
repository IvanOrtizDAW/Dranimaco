$(document).ready(function () {
  $(".hamburgesa").click(function () {
    $(".menu").toggleClass("show");
    $("ul li").toggleClass("hide");
  });
});
