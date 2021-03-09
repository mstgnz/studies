<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="sa_site" content="1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Random Word Generator - WordCounter.net</title>
    <meta name="description"
        content="The free online random word generator tool allows you to create any number of random words you need for your project. Choose the number of random words you want to generate and click the button to display them." />
    <meta name="keywords"
        content="word count, word counter, writing, keyword frequency, character count, spell check, thesaurus" />
    <meta property="og:image" content="https://wordcounter.net/images/random-word-generator.jpg" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png" />
    <meta name="msapplication-TileColor" content="#202020" />
    <meta name="msapplication-TileImage" content="/images/icon-144.png" />
    <style>
        .login-form .auth-clients .auth-client {
            margin: 0 0 11px 0;
        }

        .login-form .auth-clients .auth-client {
            margin-right: 2px;
        }

        .login-form .auth-clients .auth-client:last-child {
            margin-right: 0;
        }

        .signup-form .form-control,
        .login-form .form-control {
            height: 45px;
            border-radius: 2px;
        }

        .signup-form .btn-login,
        .login-form .btn-login {
            width: 100%;
            height: 44px;
            border-radius: 1px;
        }

        .signup-form .error-summary ul,
        .login-form .error-summary ul {
            list-style-type: none;
        }

        .or-separator {
            text-align: center;
            margin: 18px 0;
            font-size: 12px;
            color: #c7c6c6;
        }

        .or-separator:before,
        .or-separator:after {
            content: '';
            border-bottom: 1px solid #e8e8e8;
            width: 40%;
            display: inline-block;
            margin: 2px;
        }
    </style>
    <script type="text/javascript">var google_client_id = '234686063024-80f92i78hjn6iv4acdf5qi11r3ra6puc.apps.googleusercontent.com';
        var facebook_client_id = '1625082561068162';</script>
</head>

<body>
    <div id="globalPreloader" style="display:none;position:fixed;top:51px;left:0px;right:0px;height:3px;z-index:9999;">
        <div style="width:30%;height:100%;background-color:#0066ff">&nbsp;</div>
    </div>
    <script type="text/javascript">
        document.getElementById('globalPreloader').style.display = 'block';
    </script>
    <link href="/min/ec9c3a7259ea00a375fb713a5497d5ea0342b249.css" rel="stylesheet">
    <div id="fb-root"></div>
    <div id="data-block" data-log-url="/site/log" data-spell-check-url="/site/proxy?url=" data-css-path="/css/"></div>
    <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse" aria-expanded="false" aria-controls="wc_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/word"
                    style="padding:5px 25px 5px 15px; background-repeat: no-repeat; background-position:15px;">
                    <img class="lazy" data-src="/images/wc-logo.png" style="height:100%" alt="Word Counter Logo">
                </a>
            </div>
            <div class="navbar-collapse collapse" aria-expanded="false" role="menu">
                <ul class="nav navbar-nav" id="wc_navbar">
                    <li class=""><a href="/word" data-tr-detail="home" class="active_bar">Home</a></li>
                    <li><a href="/word/our-tools" data-tr-detail="our-tools">Tools</a></li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#social-login-modal">
                            <span data-tr-detail="sign_in">Sign In</span>
                            <i class="fa fa-sign-in" aria-hidden="true" style="font-size: 16px; margin-left: 5px"></i>
                        </a>
                    </li>
                    <li style="margin-top:14px; margin-left:8px; display:none">
                        <div id="w0">
                            <ul class="auth-clients">
                                <li><a class="twitter auth-link" href="/user/security/auth?authclient=twitter"
                                        title="Twitter"><span class="auth-icon twitter"></span></a></li>
                                <li><a class="facebook auth-link" href="/user/security/auth?authclient=facebook"
                                        title="Facebook" data-popup-width="860" data-popup-height="480"><span
                                            class="auth-icon facebook"></span></a></li>
                                <li><a class="google auth-link" href="/user/security/auth?authclient=google"
                                        title="Google"><span class="auth-icon google"></span></a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul id="wc_navshare" class="nav navbar-nav navbar-right" style="margin-top:15px">
                    <li>
                        <div class="fb-like" data-href="https://wordcounter.net/alphabetize" data-layout="button_count"
                            data-action="like" data-show-faces="false" data-share="false"></div>
                    </li>
                    <li>
                        <div class="g-plusone" data-size="medium"></div>

                    </li>
                    <li>
                        <a href="https://twitter.com/share" class="twitter-share-button"
                            data-url="https://wordcounter.net/alphabetize" data-hashtags="wordcount"></a>
                    </li>
                </ul>
            </div>



        </div>
    </div>
    <div class="modal fade" id="social-login-modal" tabindex="-1" role="dialog"
        aria-labelledby="social-login-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="social-login-modal-label" data-tr-detail="sign_in">Sign In</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7"><span data-tr-detail="sign_in_modal_text1">When you sign in to WordCounter
                                you get access to some awesome features.</span><br /><br /><i class="fa fa-floppy-o"
                                style="font-size: 17px"></i>&nbsp;
                            <b data-tr-detail="auto_save_modal">Auto Save</b><br /><small style="color:gray"
                                data-tr-detail="sign_in_modal_text2">We'll save whatever you're working on automatically
                                and even store multiple versions so you can access it in case your browser crashes or
                                you accidentally close your browser.</small><br /><br /><i class="fa fa-trophy"
                                style="font-size: 17px"></i>&nbsp;
                            <b data-tr-detail="writing_goals">Writing Goals</b><br /><small style="color:gray"
                                data-tr-detail="sign_in_modal_text3">Setup writing goals you want to work toward and
                                even embed them in your blog or website.</small><br /><i class="fa fa-shopping-cart"
                                style='margin-top:20px; font-size: 18px'></i>&nbsp;
                            <b data-tr-detail="fewer_advertisements">20% OFF Grammarly Premium</b><br /><small
                                style="color:gray" data-tr-detail="sign_in_modals_text4">Enable unlimited checks for
                                plagiarism and writing issues. Connects seamlessly with your free WordCounter
                                account.</small></div>
                        <div class="col-md-5">
                            <div class="login-form ">
                                <div class="site-login-form">
                                    <p data-tr-detail="login_with_your_site_account">Login with your site account:</p>
                                    <form id="login-form" class="" action="/user/security/login" method="post"><input
                                            type="hidden" name="_csrf"
                                            value="QXExbjZoeksiJGM8DgUOMhYSel8BIQw6LgF4D2JdKnkoBkRdYlwlDA==">
                                        <div class="error-summary alert alert-danger" style="display:none">
                                            <ul></ul>
                                        </div>
                                        <div class="form-group field-loginform-email required">
                                            <div><input type="text" id="loginform-email" class="form-control"
                                                    name="LoginForm[email]" placeholder="Email" data-tr-detail="email">
                                            </div>
                                        </div>
                                        <div class="form-group field-loginform-password required">
                                            <div><input type="password" id="loginform-password" class="form-control"
                                                    name="LoginForm[password]" placeholder="Password"
                                                    data-tr-detail="password"></div>
                                        </div>
                                        <div class="form-group"><button type="submit" class="btn btn-primary btn-login"
                                                name="login-button" data-tr-detail="login">Login</button>
                                            <div class="text-center" style="margin-top: 8px; font-size: 12px;"><a
                                                    href="/user/security/request-password-reset"
                                                    data-link="signupFormLink"
                                                    style="text-decoration: underline !important;"
                                                    data-tr-detail="forgot_your_password">Forgot your password?</a>
                                            </div>
                                            <div class="text-center" style="margin-top: 8px; font-size: 12px;"><a
                                                    href="javascript:void(0);" data-link="signupFormLink"
                                                    style="text-decoration: underline !important;"
                                                    data-tr-detail="dont_have_an_account_yet_create_one_now_its_free">Don't
                                                    have an account yet? Create one now, it's FREE</a> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="signup-form hidden">
                                <p data-tr-detail="create_a_site_account">Create a site account:</p>
                                <form id="signup-form" class="" action="/site/signup" method="post"><input type="hidden"
                                        name="_csrf" value="QXExbjZoeksiJGM8DgUOMhYSel8BIQw6LgF4D2JdKnkoBkRdYlwlDA==">
                                    <div class="error-summary alert alert-danger" style="display:none">
                                        <ul></ul>
                                    </div>
                                    <div class="form-group field-signupform-email required">
                                        <div><input type="text" id="signupform-email" class="form-control"
                                                name="SignupForm[email]" placeholder="Email" data-tr-detail="email">
                                        </div>
                                    </div>
                                    <div class="form-group field-signupform-email_repeat required">
                                        <div><input type="text" id="signupform-email_repeat" class="form-control"
                                                name="SignupForm[email_repeat]" placeholder="Re-enter Email"
                                                data-tr-detail="re_enter_email"></div>
                                    </div>
                                    <div class="form-group field-signupform-password required">
                                        <div><input type="password" id="signupform-password" class="form-control"
                                                name="SignupForm[password]" placeholder="Password"
                                                data-tr-detail="password"></div>
                                    </div>
                                    <div class="form-group field-signupform-password_repeat required">
                                        <div><input type="password" id="signupform-password_repeat" class="form-control"
                                                name="SignupForm[password_repeat]" placeholder="Re-enter Password"
                                                data-tr-detail="re_enter_password"></div>
                                    </div>
                                    <div class="form-group"><button type="submit" class="btn btn-primary btn-login"
                                            name="login-button" data-tr-detail="create_account">Create Account</button>
                                        <div class="text-center" style="margin-top: 8px; font-size: 12px;"><a
                                                href="javascript:void(0);"
                                                data-tr-detail="already_have_an_account_login" data-link="loginFormLink"
                                                style="text-decoration: underline !important;">Already have an account?
                                                Login</a><br /><a href="/user/security/request-password-reset"
                                                style="text-decoration: underline !important;">Forgot your password (or
                                                want to change it)?</a></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal"
                        data-tr-detail="close">Close</button></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="mb100">
            <h1 class="teeshirt-page-title text-uppercase"> Random Word Generator </h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="well">
                        <p style="margin-bottom: 0">Click the button below to generate
                            <input type="number" min="1" value="5" class="form-control input-sm"
                                id="random_words_count">
                            random</p>
                        <div class="col-md-12" style="margin-bottom: 10px">
                            <div><input type="radio" name="word_type" checked id="all_words"><label for="all_words"
                                    style="margin-left: 5px">Words (All)</label></div>
                            <div><input type="radio" name="word_type" id="verbs"><label for="verbs"
                                    style="margin-left: 5px">Verbs only</label></div>
                            <div><input type="radio" name="word_type" id="nouns"><label for="nouns"
                                    style="margin-left: 5px">Nouns only</label></div>
                            <div><input type="radio" name="word_type" id="adjectives"><label for="adjectives"
                                    style="margin-left: 5px">Adjectives only</label></div>
                        </div><input type="button" id="random-words" name="random-words" value="Generate Random Words"
                            class="btn btn-default" onclick="randomWordGenerator();">
                        <p id="wordList"></p>
                        <div style="color:#666666;">Click on a word you like if you want to temporarily store it in the
                            box below.</div>
                    </div>
                    <div class="well">
                        <p>Your Word List</p>
                        <div id="wordPen" class="online-tools"></div><textarea id="textarea_for_coping_words" rows="5"
                            class="form-control"></textarea><input type="button" value="Clear The Words"
                            class="btn btn-default" onclick="clearDiv();" style="margin-top: 10px"><input type="button"
                            value="Copy Words" class="btn btn-default" onclick="copyWords();"
                            style="margin-top: 10px; margin-left: 5px">
                    </div>
                </div>
            </div>
            <div style="clear:both"></div>
            <div class="well" style="margin-top:20px">
                <h3>What is it?</h3>
                <p>The Random Word Generator is a tool to help you create a list of random words. There are many reasons
                    one might be interested in doing this, and you're likely here because you're interested in creating
                    a random word list. This tool can help you do exactly that.</p>
                <p>The tool is easy to use. All you need to do is choose the number of words you want to create (the
                    default is five, but you can input any number you'd like) and the type of words you want. You can
                    choose from all words, verbs only, nouns only or adjective only depending on which best meets your
                    needs. </p>
                <p>Once done, you simply press the &quot;Generate Random Words&quot; button and a list of words will
                    appear. You can use this list or you can scan them and choose the ones you want to keep by clicking
                    on them. This will place them in the &quot;Your Word List&quot; area and you can build a new list
                    that meets your needs. </p>
                <p>Below you'll find some of the common ways this tool can be used.</p>
                <p>
                    <h3>Creative Writing</h3>
                </p>
                <p>This tool can be a great way to generate creative writing ideas. For example, you could generate 20
                    random words and then incorporate all of them into a story. This will force you to think creatively
                    since you have no idea what words will appear. You can also play with this to make it more difficult
                    if you desire. For example, you could create the story using the 20 words in the exact order they
                    were randomly generated to make it more of a challenge. This is one example of how writers might use
                    the tool to push their writing.</p>
                <p>
                    <h3>Teachers &amp; Students</h3>
                </p>
                <p>Teachers can use this tool to help create vocabulary tests or challenging students to correctly use
                    words in a sentence. For students, they can use it to study for spelling bees, build their
                    vocabulary and learn new words. Both can use it to improve creativity by using it to foster creative
                    writing.</p>
                <p>
                    <h3>Games</h3>
                </p>
                <p>For those who plays games like Pictionary, this can be a great tool to use for the game. With words
                    being randomly generated, it keeps the game fair and honest. It can also be a fun way for kids to
                    fill in MadLibs to produce results that the children may not have ever considered. The tool can
                    benefit any game which may need words as part of it.</p>
                <p>
                    <h3>Creating Names</h3>
                </p>
                <p>The generator can be an excellent way to brainstorm new names. By generating random words, the tool
                    can help spark your creativity by producing words you may not have come up with on your own when
                    working on various projects. For example, the tool can help you come up with product names, naming a
                    band or group, creating an event name or any other naming process where you're looking for
                    inspiration.</p>
                <p>The above examples are just a few ways this tool can be used. If you find this tool useful, please
                    let us know. We're always interested in learning how people use our tools. We also welcome any
                    suggestions you might have to make it better.</p>
            </div>
        </div>
    </div>
    <div id="wc_footer">
        <div class="container">
            <div class="col-md-3">
                <h5><span data-tr-detail="site_map">Site Map</span></h5>
                <ul style="list-style-type: none; padding:0">
                    <li><a href="/" data-tr-detail="home">Home</a></li>
                    <li><a href="/blog/" data-tr-detail="blog">Blog</a></li>
                    <li><a href="/our-tools" data-tr-detail="more_tools">More Tools</a></li>
                    <li><a href="/help-us" data-tr-detail="help_WordCounter">Help WordCounter</a></li>
                    <li><a href="/embed" data-tr-detail="embed_WordCounter">Embed WordCounter</a></li>
                </ul>
            </div>
            <div class="col-md-5">
                <h5>&nbsp;</h5>
                <ul style="list-style-type: none; padding:0">
                    <li><a href="/blog/contact-us" data-tr-detail="report_a_bug">Report a Bug</a></li>
                    <li><a href="/blog/contact-us" data-tr-detail="contact_us">Contact Us</a></li>
                    <li><a href="/blog/privacy-policy" data-tr-detail="privacy_policy">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                <h5><span data-tr-detail="follow">Follow</span></h5>
                <ul class="sprite">
                    <li class="facebook"><a target="_blank" href="https://www.facebook.com/wordcounter.net/">Facebook
                        </a></li>
                    <li class="twitter"><a target="_blank" href="https://twitter.com/wordcounter_net">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="/min/b3e3af0a976d9c569831ddf705e97bece8383de9.js"></script>
    <script type="text/javascript">jQuery(document).ready(function () {
            $(window).bind("load", function () {
                $.getScript("/js/social.js", function () { });
            });
            $('#w0').authchoice();
            $('a[data-link="signupFormLink"]').click(function () {
                $('.login-form').addClass('hidden');
                $('.signup-form').removeClass('hidden');
            });
            $('a[data-link="loginFormLink"]').click(function () {
                $('.login-form').removeClass('hidden');
                $('.signup-form').addClass('hidden');
            });
            $('#w1').authchoice();
            jQuery('#login-form').yiiActiveForm([{ "id": "loginform-email", "name": "email", "container": ".field-loginform-email", "input": "#loginform-email", "error": ".help-block.help-block-error", "enableAjaxValidation": true, "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Email cannot be blank." }); yii.validation.email(value, messages, { "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/, "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/, "allowName": false, "message": "Email is not a valid email address.", "enableIDN": false, "skipOnEmpty": 1 }); } }, { "id": "loginform-password", "name": "password", "container": ".field-loginform-password", "input": "#loginform-password", "error": ".help-block.help-block-error", "enableAjaxValidation": true, "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Password cannot be blank." }); } }], { "errorSummary": ".error-summary.alert.alert-danger" });
            jQuery('#signup-form').yiiActiveForm([{ "id": "signupform-email", "name": "email", "container": ".field-signupform-email", "input": "#signupform-email", "error": ".help-block.help-block-error", "enableAjaxValidation": true, "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Email cannot be blank." }); yii.validation.email(value, messages, { "pattern": /^[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?$/, "fullPattern": /^[^@]*<[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-zA-Z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?\.)+[a-zA-Z0-9](?:[a-zA-Z0-9-]*[a-zA-Z0-9])?>$/, "allowName": false, "message": "Email is not a valid email address.", "enableIDN": false, "skipOnEmpty": 1 }); yii.validation.string(value, messages, { "message": "Email must be a string.", "max": 255, "tooLong": "Email should contain at most 255 characters.", "skipOnEmpty": 1 }); } }, { "id": "signupform-email_repeat", "name": "email_repeat", "container": ".field-signupform-email_repeat", "input": "#signupform-email_repeat", "error": ".help-block.help-block-error", "enableAjaxValidation": true, "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Email Repeat cannot be blank." }); } }, { "id": "signupform-password", "name": "password", "container": ".field-signupform-password", "input": "#signupform-password", "error": ".help-block.help-block-error", "enableAjaxValidation": true, "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Password cannot be blank." }); yii.validation.string(value, messages, { "message": "Password must be a string.", "min": 6, "tooShort": "Password should contain at least 6 characters.", "skipOnEmpty": 1 }); } }, { "id": "signupform-password_repeat", "name": "password_repeat", "container": ".field-signupform-password_repeat", "input": "#signupform-password_repeat", "error": ".help-block.help-block-error", "enableAjaxValidation": true, "validate": function (attribute, value, messages, deferred, $form) { yii.validation.required(value, messages, { "message": "Password Repeat cannot be blank." }); } }], { "errorSummary": ".error-summary.alert.alert-danger" });
        });</script>
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
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
        ga('require', 'eventTracker');
    </script>
    <script>
        var dataObj;
        if ($.cookie('optionsObject')) {
            dataObj = JSON.parse($.cookie('optionsObject'));
            $("#theme").attr("href", $('#data-block').data('css-path') + dataObj.theme + '.css');
        }
        else {
            $("#theme").attr("href", $('#data-block').data('css-path') + 'default.css');
        }
        var url = window.location.href;
        var root = 'https://wordcounter.net/';
        var a_href = url.replace(root, '/');
        $('#wc_navbar').find('a').each(function (key, value) {
            if ($(value).attr('href') == a_href) {
                var dropdownMenu = $('#wc-dropdown-menu');
                var activeBar = $('a.active_bar');
                $(value).addClass('active_bar');
                if (a_href == '/our-tools') {
                    activeBar.css('font-weight', 'bold');
                    dropdownMenu.css({
                        'background-color': '#F2F7FB',
                        'color': '#000000',
                        'border-top-left-radius': '3px',
                        'border-top-right-radius': '3px'
                    });
                    dropdownMenu.hover({
                        'background-color': '#F2F7FB',
                        'color': '#000000'
                    });
                }
                else if (a_href == '/help-us') {
                    activeBar.css('font-weight', 'bold');
                    dropdownMenu.css({
                        'background-color': '#FFFFFF',
                        'color': '#000000',
                        'border-top-left-radius': '3px',
                        'border-top-right-radius': '3px'
                    });
                    dropdownMenu.hover({
                        'background-color': '#FFFFFF',
                        'color': '#000000'
                    });
                }
                else {
                    activeBar.css('background-color', '#FFFFFF');
                    activeBar.hover(function () {
                        $(this).css('background-color', '#FFFFFF');
                    });
                }
            }
            else {
                $(value).removeClass('active_bar')
            }
        });
    </script>
    <script type="text/javascript">
        var SetGlobalPreloaderState = function (percentFrom, percentTo) {
            $('#globalPreloader div').css({ width: percentFrom + '%' });
            $('#globalPreloader').show();
            $('#globalPreloader div').animate({ width: percentTo + '%' }, 1000, function () {
                jQuery('#globalPreloader').hide();
            });
        };
        var InitiatializeGlobalPreloader = function () {
            window.onbeforeunload = function () { SetGlobalPreloaderState(0, 30); };
        };
        $(document).ready(function () {
            InitiatializeGlobalPreloader();
            SetGlobalPreloaderState(30, 100);
        });
    </script>
    <div class="modal fade" id="foundBugModal" tabindex="-1" role="dialog" aria-labelledby="foundBugModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header"><button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="foundBugModalLabel">Found a Bug</h4>
                </div>
                <div class="modal-body"><textarea rows="5" class="form-control" placeholder="What problem do you see?"
                        name="message" id="message"></textarea><button class="btn btn-default" name="send" id="submit"
                        onclick="editor.sendMessage();" style="margin-top: 15px; margin-bottom: 15px">Send</button>
                    <div class="alert alert-warning"
                        style="display: none; position: absolute; z-index: 9999; left: 20%; right: 20%;"><a href="#"
                            class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>No speech was
                            detected!</strong> You may need to adjust your microphone settings.</div>
                    <div class="success" style="display: none;"></div>
                </div>
                <div class="modal-footer"><button type="button" class="btn btn-default"
                        data-dismiss="modal">Done</button></div>
            </div>
        </div>
    </div>
</body>

</html>