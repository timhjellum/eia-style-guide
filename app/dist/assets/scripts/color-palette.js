
class colorPalette {
    constructor() {
        //console.log("color palette file is checking in")
        // first we get the background color using getComputedStyle then getPropertyValue("background-color")
        // then convert it to hex #XXXXXX
        var swatches = document.getElementsByClassName('swatch'),
            i;
        // start rgb to hex
        function componentFromStr(numStr, percent) {
            var num = Math.max(0, parseInt(numStr, 10));
            return percent ?
                Math.floor(255 * Math.min(100, num) / 100) : Math.min(255, num);
        }

        function rgbToHex(rgb) {
            var rgbRegex = /^rgb\(\s*(-?\d+)(%?)\s*,\s*(-?\d+)(%?)\s*,\s*(-?\d+)(%?)\s*\)$/;
            var result, r, g, b, hex = "";
            if ((result = rgbRegex.exec(rgb))) {
                r = componentFromStr(result[1], result[2]);
                g = componentFromStr(result[3], result[4]);
                b = componentFromStr(result[5], result[6]);

                hex = "#" + (0x1000000 + (r << 16) + (g << 8) + b).toString(16).slice(1);
            }
            return hex;
        }
        // end rgb to hex
        // start complimentary -- not used
        function hexComplimentary(hex) {
            var rgb = 'rgb(' + (hex = hex.replace('#', '')).match(new RegExp('(.{' + hex.length / 3 + '})', 'g')).map(function (l) { return parseInt(hex.length % 2 ? l + l : l, 16); }).join(',') + ')';
            // Get array of RGB values
            rgb = rgb.replace(/[^\d,]/g, '').split(',');
            var r = rgb[0] / 255.0, g = rgb[1] / 255.0, b = rgb[2] / 255.0;
            var max = Math.max(r, g, b);
            var min = Math.min(r, g, b);
            var h, s, l = (max + min) / 2.0;
            if (max == min) {
                h = s = 0;  //achromatic
            } else {
                var d = max - min;
                s = (l > 0.5 ? d / (2.0 - max - min) : d / (max + min));

                if (max == r && g >= b) {
                    h = 1.0472 * (g - b) / d;
                } else if (max == r && g < b) {
                    h = 1.0472 * (g - b) / d + 6.2832;
                } else if (max == g) {
                    h = 1.0472 * (b - r) / d + 2.0944;
                } else if (max == b) {
                    h = 1.0472 * (r - g) / d + 4.1888;
                }
            }
            h = h / 6.2832 * 360.0 + 0;
            // Shift hue to opposite side of wheel and convert to [0-1] value
            h += 180;
            if (h > 360) { h -= 360; }
            h /= 360;
            if (s === 0) {
                r = g = b = l; // achromatic
            } else {
                var hue2rgb = function hue2rgb(p, q, t) {
                    if (t < 0) t += 1;
                    if (t > 1) t -= 1;
                    if (t < 1 / 6) return p + (q - p) * 6 * t;
                    if (t < 1 / 2) return q;
                    if (t < 2 / 3) return p + (q - p) * (2 / 3 - t) * 6;
                    return p;
                };
                var q = l < 0.5 ? l * (1 + s) : l + s - l * s;
                var p = 2 * l - q;
                r = hue2rgb(p, q, h + 1 / 3);
                g = hue2rgb(p, q, h);
                b = hue2rgb(p, q, h - 1 / 3);
            }
            r = Math.round(r * 255);
            g = Math.round(g * 255);
            b = Math.round(b * 255);
            // Convert r b and g values to hex
            rgb = b | (g << 8) | (r << 16);
            return "#" + (0x1000000 | rgb).toString(16).substring(1);
        }
        // end complimentary
        // start contrast
        function getContrastYIQ(hexcolor) {
            hexcolor = hexcolor.replace("#", "");
            var r = parseInt(hexcolor.substr(0, 2), 16);
            var g = parseInt(hexcolor.substr(2, 2), 16);
            var b = parseInt(hexcolor.substr(4, 2), 16);
            var yiq = ((r * 299) + (g * 587) + (b * 114)) / 1000;
            return (yiq >= 128) ? 'black' : 'white';
        }
        // end contrast
        //swatches.forEach((swatch) => {
        //    console.log(swatch)
        //});




        for (i = 0; i < swatches.length; ++i) {
            var mycss = window.getComputedStyle(swatches[i]);
            //console.log(mycss.getPropertyValue("background-color"))
            swatches[i].innerHTML = rgbToHex(mycss.getPropertyValue("background-color"))

            // this changes the font color to a complimentary color based on the swatch -- which doesn't give the desired affect
            console.log(hexComplimentary(swatches[i].innerHTML))
            swatches[i].style.color = hexComplimentary(swatches[i].innerHTML)

            // this changes the font color to a contrasting color based on the swatch -- which does give the desired affect
            //console.log(getContrastYIQ(swatches[i].innerHTML))
            swatches[i].style.color = getContrastYIQ(swatches[i].innerHTML)

        }
    }
}
export default colorPalette

