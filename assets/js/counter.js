$(document).ready(function() {
    function isElementInViewport($el) {
        if (!$el.is(':visible')) return false;
        
        var $window = $(window);
        var viewportTop = $window.scrollTop();
        var viewportBottom = viewportTop + $window.height();
        
        var offset = $el.offset();
        if (!offset) return false;
        
        var elTop = offset.top;
        var elBottom = elTop + $el.outerHeight();
        
        return (elBottom >= viewportTop && elTop <= viewportBottom);
    }

    function checkAndAnimateCounters() {
        $('.count-digit').each(function () {
            var $this = $(this);
            
            // If already loaded or not visible, skip
            if ($this.hasClass('counter-loaded') || !isElementInViewport($this)) {
                return;
            }
            
            $this.addClass('counter-loaded');
            
            var originalText = $this.text().trim();
            var numericString = originalText.replace(/,/g, '');
            var targetValue = parseFloat(numericString);
            
            if (isNaN(targetValue)) {
                return; // Not a valid number to animate
            }
            
            var hasCommas = originalText.indexOf(',') !== -1;
            var decimalMatches = numericString.match(/\.(\d+)/);
            var decimalPlaces = decimalMatches ? decimalMatches[1].length : 0;
            
            jQuery({ Counter: 0 }).animate({ Counter: targetValue }, {
                duration: 3000,
                easing: 'swing',
                step: function () {
                    var formattedVal = this.Counter.toFixed(decimalPlaces);
                    if (hasCommas) {
                        var parts = formattedVal.split('.');
                        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        formattedVal = parts.join('.');
                    }
                    $this.text(formattedVal);
                },
                complete: function() {
                    // Ensure it ends up exactly at the target value
                    var formattedVal = targetValue.toFixed(decimalPlaces);
                    if (hasCommas) {
                        var parts = formattedVal.split('.');
                        parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        formattedVal = parts.join('.');
                    }
                    $this.text(formattedVal);
                }
            });
        });
    }

    // Run on scroll and resize
    $(window).on('scroll resize', checkAndAnimateCounters);
    
    // Initial check on load/ready
    checkAndAnimateCounters();
});