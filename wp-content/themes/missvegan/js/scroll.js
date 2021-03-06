! function(t, n) {
    "use strict";
    var i = function() {
        function t(t, n) {
            this.$el = t, this.currIndex = 0, this.animating = !1, this.init()
        }
        var i = {
            throttle: function(t, n, i) {
                var e = null,
                    o = 0;
                return function() {
                    var r = this,
                        s = arguments,
                        c = Date.now();
                    i && c - o >= i ? (o = c, t.apply(r, s)) : (e && clearTimeout(e), e = setTimeout(function() {
                        t.apply(r, s)
                    }, n))
                }
            }
        };
        return t.prototype = {
            constructor: t,
            init: function() {
                this.initHTML(), this.bindEvent()
            },
            initHTML: function() {
                this.$el.children().css({
                    height: "100vh",
                    transition: "all 0.7s",
                    "-webkit-transition": "all 0.7s"
                })
            },
            bindEvent: function() {
                var t, e, o, r, s, c, h = this;
                n(window).on("wheel DOMMouseScroll", i.throttle(function() {
                    var n = arguments[0].originalEvent;
                    c = n.wheelDelta ? n.wheelDelta : -n.detail, t = h.currIndex + (c > 0 ? -1 : 1), h.gotoTarget(t)
                }, 25)), this.$el.on("touchstart", function(t) {
                    e = t.touches[0].clientX, o = t.touches[0].clientY
                }), this.$el.on("touchmove", i.throttle(function() {
                    var n = arguments[0];
                    e && o && (r = n.touches[0].clientX - e, s = n.touches[0].clientY - o, t = h.currIndex + (s > 0 ? -1 : 1), h.gotoTarget(t))
                }, 16))
            },
            gotoTarget: function(t) {
                var i, e = this.$el.children(),
                    o = this;
                this.animating || t < 0 || t > this.$el.children().length - 1 || (i = "translateY(-" + 100 * t + "%)", this.animating = !0, n(e[0]).on("transitionend", function t() {
                    this.removeEventListener("transitionend", t), o.animating = !1
                }), e.css({
                    transform: i,
                    "-webkit-transform": i
                }), this.currIndex = t)
            }
        }, t
    }();
    n.fn.fullpage = function(t) {
        return this.each(function() {
            new i(n(this), t)
        }), this
    }
}(0, this.jQuery);