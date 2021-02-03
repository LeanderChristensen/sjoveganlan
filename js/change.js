button.addEventListener("click", function);

$(function() {
  $(".but").on("click",function(e) {
    e.preventDefault();
    $(".content").hide();
    $("#navn69"+this.id+"div").show();
  });
});
