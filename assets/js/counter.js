// $(document).ready(function () {
//     function isElementInViewport($el) {
//         if (!$el.is(':visible')) return false;
//         var windowTop = $(window).scrollTop();
//         var windowBottom = windowTop + $(window).height();
//         var elementTop = $el.offset().top;
//         var elementBottom = elementTop + $el.outerHeight();
//         return elementBottom >= windowTop && elementTop <= windowBottom;
//     }
//     function checkAndAnimateCounters() {
//         $('.count-digit').each(function () {

//             var $this = $(this);

//             if ($this.hasClass('counter-loaded') || !isElementInViewport($this)) {
//                 return;
//             }

//             $this.addClass('counter-loaded');

//             var originalValue = $this.text().trim().replace(/,/g, '');
//             var targetValue = parseFloat(originalValue);

//             if (isNaN(targetValue)) return;

//             var decimalPlaces = (originalValue.split('.')[1] || '').length;

//             $({ Counter: 0 }).animate(
//                 { Counter: targetValue },
//                 {
//                     duration: 2500,
//                     easing: 'swing',

//                     step: function () {
//                         var value = decimalPlaces
//                             ? this.Counter.toFixed(decimalPlaces)
//                             : Math.floor(this.Counter);

//                         $this.text(Number(value).toLocaleString('en-IN'));
//                     },

//                     complete: function () {
//                         var value = decimalPlaces
//                             ? targetValue.toFixed(decimalPlaces)
//                             : Math.round(targetValue);

//                         $this.text(Number(value).toLocaleString('en-IN'));
//                     }
//                 }
//             );
//         });
//     }
//     checkAndAnimateCounters();
//     $(window).on('scroll resize', checkAndAnimateCounters);
// });

$(function () {
  function animateCounters() {
    $(".count-digit").each(function () {
      var $this = $(this);
      if ($this.hasClass("counter-loaded")) return;
      var rect = this.getBoundingClientRect();
      if (rect.top < window.innerHeight && rect.bottom > 0) {
        $this.addClass("counter-loaded");
        var target = parseInt($this.text().replace(/,/g, ""), 10);
        $({ count: 0 }).animate(
          { count: target },
          {
            duration: 2500,
            easing: "swing",
            step: function () {
              $this.text(Math.floor(this.count).toLocaleString("en-IN"));
            },
            complete: function () {
              $this.text(target.toLocaleString("en-IN"));
            },
          },
        );
      }
    });
  }
  animateCounters();
  $(window).on("scroll resize", animateCounters);
});
