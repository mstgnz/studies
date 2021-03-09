<div id="wc_footer">
    <div class="container">
        <div class="col-md-3">
            <h5><span data-tr-detail="site_map">Site Map</span></h5>
            <ul style="list-style-type: none; padding:0">
                <li><a href="/" data-tr-detail="home">Home</a></li>
                <li><a href="#" data-tr-detail="blog">Blog</a></li>
                <li><a href="/tools" data-tr-detail="more_tools">More Tools</a></li>
            </ul>
        </div>
        <div class="col-md-5">
            <h5>&nbsp;</h5>
            <ul style="list-style-type: none; padding:0">
                <li><a href="#" data-tr-detail="report_a_bug">Report a Bug</a></li>
                <li><a href="#" data-tr-detail="contact_us">Contact Us</a></li>
                <li><a href="#" data-tr-detail="privacy_policy">Privacy Policy</a></li>
            </ul>
        </div>
        <div class="col-md-2">
            <h5><span data-tr-detail="follow">Follow</span></h5>
            <ul class="sprite">
                <li class="facebook">
                    <a target="_blank" href="https://www.facebook.com/">Facebook</a>
                </li>
                <li class="twitter">
                    <a target="_blank" href="https://twitter.com/">Twitter</a>
                </li>
            </ul>
        </div>
    </div>
</div>

@yield('js')

<script type = "text/javascript">
jQuery(document).ready(function() {
    $(window).bind("load", function() {
        $.getScript("/js/social.js", function() {});
    });
    $('#w0').authchoice();
    $('#w1').authchoice();
    $('a[data-link="signupFormLink"]').click(function() {
        $('.login-form').addClass('hidden');
        $('.signup-form').removeClass('hidden');
    });
    $('a[data-link="loginFormLink"]').click(function() {
        $('.login-form').removeClass('hidden');
        $('.signup-form').addClass('hidden');
    });
    $('#w1').authchoice();
    $('#w2').authchoice();
    jQuery('#login-form').yiiActiveForm([{
        "id": "loginform-email",
        "name": "email",
        "container": ".field-loginform-email",
        "input": "#loginform-email",
        "error": ".help-block.help-block-error",
        "enableAjaxValidation": true,
        "validate": function(attribute, value, messages, deferred, $form) {
            yii.validation.required(value, messages, {
                "message": "Email cannot be blank."
            });
            yii.validation.email(value, messages, {
                "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,
                "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,
                "allowName": false,
                "message": "Email is not a valid email address.",
                "enableIDN": false,
                "skipOnEmpty": 1
            });
        }
    }, {
        "id": "loginform-password",
        "name": "password",
        "container": ".field-loginform-password",
        "input": "#loginform-password",
        "error": ".help-block.help-block-error",
        "enableAjaxValidation": true,
        "validate": function(attribute, value, messages, deferred, $form) {
            yii.validation.required(value, messages, {
                "message": "Password cannot be blank."
            });
        }
    }], {
        "errorSummary": ".error-summary.alert.alert-danger"
    });
    jQuery('#signup-form').yiiActiveForm([{
        "id": "signupform-email",
        "name": "email",
        "container": ".field-signupform-email",
        "input": "#signupform-email",
        "error": ".help-block.help-block-error",
        "enableAjaxValidation": true,
        "validate": function(attribute, value, messages, deferred, $form) {
            yii.validation.required(value, messages, {
                "message": "Email cannot be blank."
            });
            yii.validation.email(value, messages, {
                "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/,
                "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/,
                "allowName": false,
                "message": "Email is not a valid email address.",
                "enableIDN": false,
                "skipOnEmpty": 1
            });
            yii.validation.string(value, messages, {
                "message": "Email must be a string.",
                "max": 255,
                "tooLong": "Email should contain at most 255 characters.",
                "skipOnEmpty": 1
            });
        }
    }, {
        "id": "signupform-email_repeat",
        "name": "email_repeat",
        "container": ".field-signupform-email_repeat",
        "input": "#signupform-email_repeat",
        "error": ".help-block.help-block-error",
        "enableAjaxValidation": true,
        "validate": function(attribute, value, messages, deferred, $form) {
            yii.validation.required(value, messages, {
                "message": "Email Repeat cannot be blank."
            });
        }
    }, {
        "id": "signupform-password",
        "name": "password",
        "container": ".field-signupform-password",
        "input": "#signupform-password",
        "error": ".help-block.help-block-error",
        "enableAjaxValidation": true,
        "validate": function(attribute, value, messages, deferred, $form) {
            yii.validation.required(value, messages, {
                "message": "Password cannot be blank."
            });
            yii.validation.string(value, messages, {
                "message": "Password must be a string.",
                "min": 6,
                "tooShort": "Password should contain at least 6 characters.",
                "skipOnEmpty": 1
            });
        }
    }, {
        "id": "signupform-password_repeat",
        "name": "password_repeat",
        "container": ".field-signupform-password_repeat",
        "input": "#signupform-password_repeat",
        "error": ".help-block.help-block-error",
        "enableAjaxValidation": true,
        "validate": function(attribute, value, messages, deferred, $form) {
            yii.validation.required(value, messages, {
                "message": "Password Repeat cannot be blank."
            });
        }
    }], {
        "errorSummary": ".error-summary.alert.alert-danger"
    });
}); 
</script>
<script>/* 
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-145467-20', 'auto');
    ga('set', 'dimension1', 'Not Logged In');
    ga('send', 'pageview');
    ga('require', 'outboundLinkTracker');
    ga('require', 'eventTracker');*/
</script> 
<script>
jQuery(document).ready(function() {
    var dataObj;
    if ($.cookie('optionsObject')) {
        dataObj = JSON.parse($.cookie('optionsObject'));
        $("#theme").attr("href", $('#data-block').data('css-path') + dataObj.theme + '.css');
    } else {
        $("#theme").attr("href", $('#data-block').data('css-path') + 'default.css');
    }
    var url = window.location.href;
    var root = 'https://wordcounter.net/';
    var a_href = url.replace(root, 'https://wordcounter.net/');
    $('#wc_navbar').find('a').each(function(key, value) {
        if ($(value).attr('href') == a_href) {
            var dropdownMenu = $('#wc-dropdown-menu');
            var activeBar = $('a.active_bar');
            $(value).addClass('active_bar');
            activeBar.css('background-color', '#FFFFFF');
            activeBar.hover(function() {
                $(this).css('background-color', '#FFFFFF');
            });
        } else {
            $(value).removeClass('active_bar')
        }
    });
})
</script>
<script type = "text/javascript">
jQuery(document).ready(function() {
    var SetGlobalPreloaderState = function(percentFrom, percentTo) {
        $('#globalPreloader div').css({
            width: percentFrom + '%'
        });
        $('#globalPreloader').show();
        $('#globalPreloader div').animate({
            width: percentTo + '%'
        }, 1000, function() {
            jQuery('#globalPreloader').hide();
        });
    };
    var InitiatializeGlobalPreloader = function() {
        window.onbeforeunload = function() {
            SetGlobalPreloaderState(0, 30);
        };
    };
    $(document).ready(function() {
        InitiatializeGlobalPreloader();
        SetGlobalPreloaderState(30, 100);
    });
});
</script>

<!-- foundBugModal -->
<div class="modal fade" id="foundBugModal" tabindex="-1" role="dialog" aria-labelledby="foundBugModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="foundBugModalLabel">Found a Bug</h4>
            </div>
            <div class="modal-body">
                <textarea rows="5" class="form-control" placeholder="What problem do you see?" name="message" id="message"></textarea>
                <button class="btn btn-default" name="send" id="submit" onclick="editor.sendMessage();" style="margin-top: 15px; margin-bottom: 15px">Send</button>
                <div class="alert alert-warning" style="display: none; position: absolute; z-index: 9999; left: 20%; right: 20%;">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>No speech was detected!</strong> You may need to adjust your microphone settings.
                </div>
                <div class="success" style="display: none;"></div>
            </div>
            <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">Done</button></div>
        </div>
    </div>
</div>

</body>
</html>