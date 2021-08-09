var getParam = function(key){
    var _parammap = {};
    document.location.search.replace(/\??(?:([^=]+)=([^&]*)&?)/g, function () {
        function decode(s) {
            return decodeURIComponent(s.split("+").join(" "));
        }

        _parammap[decode(arguments[1])] = decode(arguments[2]);
    });
 
    return _parammap[key];
};
var canvas;

function input_product(){
    var product_name = getParam('phone');
    product_name = product_name.split('/');

    document.getElementById('product').innerHTML = 'Product : ' + product_name[1];
}


function init_canavs(){
    canvas = new fabric.Canvas('canvas');
    var url = './case/' + getParam('phone') + '.png';

    canvas.setOverlayImage(url, canvas.renderAll.bind(canvas), {
        backgroundImageOpacity: 0.5,
        backgroundImageStretch: false
    });
    
    change_color('white');
}

function change_color(value){
    var url = './case/' + getParam('phone') + '.png';
    canvas.setBackgroundImage(url, canvas.renderAll.bind(canvas), {
        backgroundImageOpacity: 0.5,
        backgroundImageStretch: false,
        backgroundColor: value
    });
}