<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Button Widget</title>

    <meta name="robots" content="none"/>

    <link type="text/css" rel="stylesheet" href="//static.whatshelp.io/widget-send-button/css/style.css?v=1557233707">
    <link type="text/css" rel="stylesheet" href="//static.whatshelp.io/css/whatshelp-font.css?v=1557233706" media="none" onload="if(media!='all')media='all'">

    <script type="text/javascript">
        whWidgetInit = function() {
            WidgetInitializer.widgetInitialize(
                "desktop",
                {"wrapperId":"wh-widget-send-button-wrapper","host":"widget.whatshelp.io","proto":"https:","clientHostname":"thejaykay.tech","showHelloPopup":0,"parentWrapperId":"wh-widget-send-button","isMobile":0,"widgetType":"desktop"},
                {"position":"right","button_color":"#ff6550","order":null,"facebook":null,"whatsapp":"+917021106326","viber":null,"snapchat":null,"line":null,"telegram":null,"vkontakte":null,"email":null,"sms":null,"call":null,"company_logo_url":null,"greeting_message":null,"call_to_action":"Message us","ga":false,"branding":true,"mobile":true,"desktop":true,"shift_vertical":0,"shift_horizontal":0,"domain":null,"key":null});
            if (window.parent) {
                window.parent.postMessage(JSON.stringify({'name' : 'wh-widget-loaded'}), '*');
            }
        };
    </script>
    <script async src="//static.whatshelp.io/widget-send-button/js/widget/desktop.js?v=1559304459" onload="whWidgetInit();"></script>
</head>
<body class="wh-widget-send-button-desktop">
    <div id="wh-widget-send-button-wrapper"
         class="wh-widget-send-button-wrapper wh-widget-right" >

        <div class="wh-widget-hello-popup-wrapper wh-popup-right wh-hide popup-slide popup-slide-in" id="wh-popup-hello">
            <div class="wh-widget-hello-popup">
                <div class="wh-widget-hello-popup-close" wh-click="closeHelloPopup">
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </div>
                <div class="wh-widget-hello-popup-content">
                    <div class="wh-widget-hello-popup-content-logo">
                        <img wh-src="logoUrl" alt=""/>
                    </div>
                    <div class="wh-widget-hello-popup-content-text" wh-click="showMessengers">
                        <a wh-href="href" wh-target="target">
                            <div wh-html-br="text"></div>
                        </a>
                    </div>
                    <div class="wh-clear"></div>
                </div>

                <div class="wh-messengers wh-hide" wh-multi-class="{'wh-hide': '!showMessengersIcons'}"><ul wh-html-element="buttons"></ul></div>
            </div>
        </div>

        <div id="popup-placement" class="popup-slide"></div>
        <div id="wh-call-to-action" class="wh-hide" wh-click="clickOnCallToAction">
            <a wh-href="href" wh-target="target">
                <div class="wh-call-to-action-content" wh-html-unsafe="text"></div>
            </a>
        </div>
    </div>

    <!-- MessengerPopup template -->
    <div id="template-popup-messenger" class="wh-widget-hello-popup-wrapper wh-popup wh-popup-right">
        <div class="wh-popup-title-bar" wh-class="bgColorMessenger">
            <div class="title-bar-icon-close" wh-click="closePopup">
                <svg fill="#FFFFFF" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                    <path d="M0 0h24v24H0z" fill="none"/>
                </svg>
            </div>
            <div class="title-bar-icon-messenger" wh-html="icon">
            </div>
            <div class="title-bar-text" wh-html-unsafe="title"></div>
            <div class="wh-clear"></div>
        </div>
        <div class="wh-popup-content">
        </div>
        <div class="wh-clear"></div>

        <div class="wh-widget-hello-popup-powered" wh-class="pwdByClass">
            <a href="//whatshelp.io/widget/?utm_campaign=multy_widget&utm_medium=widget&utm_source=ausoutlet.io" target="_blank">
                Powered by&nbsp;<span>WhatsHelp</span>
            </a>
        </div>
        <div class="wh-clear"></div>
    </div>

    <div id="template-popup-content-facebook" class="content-facebook">
        <iframe wh-src="fbIframeURL" width="302" height="300" style="border:none; border-radius: 0 0 16px 16px; overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
    <div id="template-popup-content-snapchat">
        <div class="content-snapchat-qrcode" wh-html="snapchatQRCode"></div>
        <div class="content-snapchat-name" wh-html-unsafe="snapchatUser"></div>
    </div>
    <div id="template-popup-content-line" class="content-line">
        <iframe wh-src="lineIframeURL" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
    <div id="template-popup-content-call">
        <div class="content-call-number" wh-html-unsafe="callPhone"></div>
    </div>
    <!-- /MessengerPopup template -->
</body>
</html>
