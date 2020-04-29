/*

	THIS FILE GETS INCLUDED IN EXTERNAL WEBSITES DIRECTLY

	Watch out for GLOBAL vars/events.

*/

(function() {
    //---------------------------------------------------------------
    // X-Browser
    //---------------------------------------------------------------
    if (!window.addEventListener) {
        if (window.attachEvent)
            window.addEventListener = function(event, callback) {
                window.attachEvent('on' + event, callback);
            };
    }

    //---------------------------------------------------------------
    // $
    //---------------------------------------------------------------
    var lookrContainers = [].slice.call(
        document.getElementsByName('lkr-timelapse-player'),
    );
    var windyContainers = [].slice.call(
        document.getElementsByName('windy-webcam-timelapse-player'),
    );
    var $containers = [].concat(lookrContainers, windyContainers);
    //---------------------------------------------------------------
    // $_
    //---------------------------------------------------------------
    var $_ = {
        mobileAdHeight: 50, //px
        ratio: 16 / 9,
        root: '//webcams.windy.com',
    };

    //---------------------------------------------------------------
    // :
    var _ = {
        //---------------------------------------------------------------
        mobile: navigator.userAgent.toLowerCase().indexOf('mobile') > -1,
        portrait: screen.height > screen.width,
    };

    //---------------------------------------------------------------
    // :
    var iframeHeight = function($iframe) {
        //---------------------------------------------------------------
        if (!$iframe.offsetWidth) return;

        var height = $iframe.offsetWidth / $_.ratio;
        if (_.mobile && _.portrait) height += $_.mobileAdHeight;

        var screenHeight = Math[_.portrait ? 'max' : 'min'](
            screen.width,
            screen.height,
        );
        height = Math.min(height, screenHeight);
        return height;
    };

    //---------------------------------------------------------------
    // :
    var observe = function($container) {
        //---------------------------------------------------------------
        if (!window.MutationObserver) return;

        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        // Create
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        var observer = new MutationObserver(function(mutations) {
            if ($container.offsetWidth > 0) {
                observer.disconnect();
                delete observer;
                render();
            }
        });

        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        // Start
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        observer.observe(document, {
            attributes: true,
            characterData: false,
            childList: false,
            subtree: true,
        });
    };

    //---------------------------------------------------------------
    // :
    var render = function() {
        //---------------------------------------------------------------
        for (var c = 0; c < $containers.length; c++) {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            // $
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            var $container = $containers[c],
                $iframe = document.createElement('iframe');
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            // Not visible
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            if ($container.offsetWidth === 0) {
                observe($container);
                continue;
            }

            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            // Visible
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            var data = ['id', 'play'],
                optionalData = ['token'],
                params = {};
            //----------------------------
            // Pass Attributes to iFrame
            //---
            for (var d = 0; d < data.length; d++) {
                params[data[d]] = encodeURIComponent(
                    $container.getAttribute('data-' + data[d]),
                );

                if (!params[data[d]])
                    console.warn(
                        'Value missing for this attribute: ' + data[d],
                    );
            }

            for (var d = 0; d < optionalData.length; d++) {
                params[optionalData[d]] = encodeURIComponent(
                    $container.getAttribute('data-' + optionalData[d]),
                );
            }

            //----------------------------
            // Create iFrame
            //...

            // LIGNE A MODIFIER POUR CHANGER LA TAILLE DU LECTEUR:
            $iframe.width = '50%';
            $iframe.name = 'windy-webcam-timelapse-player-iframe';
            $iframe.frameBorder = '0';
            $iframe.setAttribute('allowFullScreen', true);
            $iframe.style.border = 'none';
            $iframe.src =
                $_.root +
                '/webcams/public/embed/player/' +
                params['id'] +
                '/' +
                params['play'] +
                '?autoresize=1&referrer=' +
                encodeURIComponent(window.top.location);

            if (params['token'].length != 0) {
                $iframe.src += '&token=' + params['token'];
            }

            //----------------------------
            // Append iFrame
            //...
            $container.parentNode.replaceChild($iframe, $container);

            //----------------------------
            // Correct iFrame height
            //...
            $iframe.height = iframeHeight($iframe);
        }
    };

    //---------------------------------------------------------------
    // :
    var updateHeight = function() {
        //---------------------------------------------------------------
        var $iframes = document.getElementsByName(
            'windy-webcam-timelapse-player-iframe',
        );
        for (var i = 0; i < $iframes.length; i++)
            $iframes[i].height = iframeHeight($iframes[i]);
    };

    //---------------------------------------------------------------
    // GLOBAL Events
    //---------------------------------------------------------------
    document
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        .addEventListener('DOMContentLoaded', function() {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            render(); //In case this script gets included before the tag (by mistake)
        });
    document
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        .addEventListener('msfullscreenchange', function() {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            updateHeight();
        });
    document
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        .addEventListener('mozfullscreenchange', function() {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            updateHeight();
        });
    document
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        .addEventListener('webkitfullscreenchange', function() {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            updateHeight();
        });
    window
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        .addEventListener('orientationchange', function() {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            window.dispatchEvent(new Event('resize'));
        });
    window
        //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
        .addEventListener('resize', function() {
            //¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬¬
            var orientation = screen.orientation
                ? screen.orientation.angle
                : window.orientation;
            switch (orientation) {
                case 90:
                case -90:
                    _.portrait = false;
                    break;

                default:
                    _.portrait = true;
            }

            updateHeight();
        });

    //---------------------------------------------------------------
    // Init
    //---------------------------------------------------------------
    render();
})();
