$(function () {
  function isScrolledIntoView($elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemTop = $elem.offset().top;
    var elemBottom = elemTop + $elem.height();
    return elemBottom <= docViewBottom && elemTop >= docViewTop;
  }

  function count($this) {
    var current = parseInt($this.html(), 10);
    if (isScrolledIntoView($this) && !$this.data("isCounting") && current < $this.data("count")) {
      $this.html(++current);
      $this.data("isCounting", true);
      setTimeout(function () {
        $this.data("isCounting", false);
        count($this);
      }, 5);
    }
  }

  $(".c-section4").each(function () {
    $(this).data("count", parseInt($(this).html(), 10));
    $(this).html("0");
    $(this).data("isCounting", false);
  });

  function startCount() {
    $(".c-section4").each(function () {
      count($(this));
    });
  }

  $(window).scroll(function () {
    startCount();
  });

  startCount();
});
