<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="sa_site" content="1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Editor Counter - WordCounter.net</title>
    <meta name="description"
        content="Edit Counter is a free online calculator that shows the increase or decrease in words and characters when editing." />
    <meta name="keywords" content="edit counter, editing calculator, editing tool" />
    <meta property="og:image" content="https://wordcounter.net/images/edit-counter.jpg" />
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
    <link href="/min/2f967b4c3161059a509ec54e41901a3c4f9a3ded.css" rel="stylesheet">
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
                                            value="LXNxSUpFZUZOJiMbcigRP3oQOnh9DBM3QgM4KB5wNXREBAR6HnE6AQ==">
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
                                        name="_csrf" value="LXNxSUpFZUZOJiMbcigRP3oQOnh9DBM3QgM4KB5wNXREBAR6HnE6AQ==">
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
            <h1 class="teeshirt-page-title text-uppercase"> Edited Words and Edited Characters </h1>
            <h3 style="position: relative;"><span class="label label-primary words">0</span> words <span
                    class="label label-primary edited_words" style="display: none;">+0</span> <span class="edited"
                    style="display: none;">edited</span> &nbsp;&nbsp;&nbsp;
                <span class="label label-primary characters">0</span> characters <span
                    class="label label-primary edited_characters" style="display: none;">+0</span> <span class="edited"
                    style="display: none;">edited</span><button type="button" class="btn btn-default"
                    id="start_over">Start Over</button></h3><textarea id="edit-counter-box"
                style="width:100%; height: 400px;"></textarea>
            <div style="clear:both"></div>
            <div class="well" style="margin-top:20px">
                <p>Many people assume good writing is found when you write. The truth is for most writers, good writing
                    appears when you edit. You know you have become serious about your writing when you're proud of the
                    number of words you're able to reduce from your rough drafts when editing. To help you see how well
                    you've been editing, we wanted to create a counter which encourages writers to reduce their word
                    count through editing, and the result is the Edit Counter.</p>
                <p>This is a bit different than <a href="https://wordcounter.net/">Word Counter</a> in that in addition
                    to telling you the word count of your writing, it'll keep track of how many words you have managed
                    to add or remove from your writing. Word Counter tells you how many words you have written. Edit
                    Counter allows you to put in a finished first draft and see whether you increase or decrease your
                    word count while editing.</p>
                <p>The tool is easy to use. Simply paste your writing into the text area, and then hit the "Start Over"
                    button on the top right of the tool. This will still show you the number of words written, but it
                    will reset the "edit" word and character counters to +0. When you begin editing your writing, the
                    Edit Counter will show how many words your writing had decreased or increased through your editing.
                </p>
                <p>Editing is an important part of the writing process, and it usually doesn't get the respect it
                    deserves. If you're able to get your point across more succinctly, that's good writing. While many
                    writers strive to up their word count as much as possible, it's essential to remember that word
                    count is only important if the words written actually count. Getting rid of those filler words and
                    tightening up your writing should be a celebrated and encouraged exercise, not something to be
                    dreaded.</p>
                <p>For those who are writing essays for a class which has a word count minimum or maximum, you likely
                    fall into one of two types when trying to meet the writing parameters. You either have trouble
                    reaching the word count needed, or you write far more than you're allowed to write. For those who
                    never seem to be able to write enough, there are some simple ways to <a
                        href="https://wordcounter.net/blog/2015/12/11/101016_how-to-increase-essay-word-count.html">increase
                        your essay word count</a>. For those who seem to write too much, there are some steps that can
                    be taken while editing to help <a
                        href="https://wordcounter.net/blog/2016/01/25/101025_how-to-reduce-essay-word-count.html">reduce
                        the number of words in the essay</a> without removing vital information. Often the writing is
                    improved in the process.</p>
                <p>Using Edit Counter is also a great way to see the effect editing has on your writing, especially over
                    time. When using the tool on a regular basis, you may begin to see a trend that your editing
                    decreases or increases your word count a certain percentage for every 1000 words written. If you
                    become attuned to this trend, you will know how much you need to write in your first drafts to meet
                    the required word count once you have finished editing.</p>
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
    <script src="/min/9eb2e76ec9e05765cf687e96f02b04d55854e042.js"></script>
    <script type="text/javascript">jQuery(document).ready(function () {
            var cookieObject = {
                "start_word_count": '0',
                "start_character_count": '0'
            };
            var flag = false;
            var text = '';
            box = $('#edit-counter-box');
            if ($.cookie('text_for_edit_counter')) {
                box.text($.cookie('text_for_edit_counter'));
            }
            if (!$.cookie('start_counts')) {
                box.keypress(countCharsAndWordsCounts)
                    .blur(countCharsAndWordsCounts)
                    .focus(countCharsAndWordsCounts)
                    .change(countCharsAndWordsCounts)
                    .keyup(countCharsAndWordsCounts)
                    .keydown(countCharsAndWordsCounts)
                    .load(countCharsAndWordsCounts);
                box.focus();
            }
            else {
                box.keypress(countEditedCharsAndWordsCounts)
                    .blur(countEditedCharsAndWordsCounts)
                    .focus(countEditedCharsAndWordsCounts)
                    .change(countEditedCharsAndWordsCounts)
                    .keyup(countEditedCharsAndWordsCounts)
                    .keydown(countEditedCharsAndWordsCounts)
                    .load(countEditedCharsAndWordsCounts);
                box.focus();
            }
          
            function charsAndWords(text) {
                var chars = text.match(/(?:[^\r\n]|\r(?!\n))/g);
                var words = text.replace(/[,;.!:—\/]/g, ' ').replace(/[^a-zA-Z\d\s&:]/g, '').match(/\S+/g); //be smarter for latin languages
                return { chars: chars, words: words };
            }
         
            function countCharsAndWordsCounts() {
                if (flag) {
                    countEditedCharsAndWordsCounts();
                }
                else {
                    text = box.val();
                    $.cookie('text_for_edit_counter', text, { expires: 365 });
                    var counts = charsAndWords(text);
                    if (counts.chars != undefined && counts.words != null) {
                        $('.characters').text(counts.chars.length);
                        $('.words').text(counts.words.length);
                        cookieObject.start_character_count = counts.chars.length;
                        cookieObject.start_word_count = counts.words.length;
                    }
                    else {
                        $('.characters').text(0);
                        $('.words').text(0);
                        cookieObject.start_character_count = 0;
                        cookieObject.start_word_count = 0;
                    }
                    $.cookie('start_counts', JSON.stringify(cookieObject), { expires: 365 });
                }
            }
           
            function countEditedCharsAndWordsCounts() {
                text = box.val();
                $.cookie('text_for_edit_counter', text, { expires: 365 });
                cookieObject = JSON.parse($.cookie('start_counts'));
                var counts = charsAndWords(text);
                $('.edited, .edited_words, .edited_characters').show();
                if (counts.chars != undefined && counts.words != null) {
                    var chars_count = counts.chars.length - cookieObject.start_character_count;
                    var words_count = counts.words.length - cookieObject.start_word_count;
                    $('.characters').text(counts.chars.length);
                    $('.words').text(counts.words.length);
                    if (chars_count >= 0) {
                        chars_count = '+' + chars_count;
                        $('.edited_characters').text(chars_count);
                    }
                    else {
                        $('.edited_characters').text(chars_count);
                    }
                    if (words_count >= 0) {
                        words_count = '+' + words_count;
                        $('.edited_words').text(words_count);
                    }
                    else {
                        $('.edited_words').text(words_count);
                    }
                }
                else {
                    $('.characters').text(0);
                    $('.words').text(0);
                    if (cookieObject.start_character_count == 0)
                        $('.edited_characters').text('+0');
                    else
                        $('.edited_characters').text(0 - cookieObject.start_character_count);
                    if (cookieObject.start_word_count == 0)
                        $('.edited_words').text('+0');
                    else
                        $('.edited_words').text(0 - cookieObject.start_word_count);
                }
            }
            $('#start_over').click(function () {
                flag = true;
                text = box.val();
                var counts = charsAndWords(text);
                $('.edited, .edited_words, .edited_characters').show();
                if (counts.chars != undefined && counts.words != null) {
                    cookieObject.start_character_count = counts.chars.length;
                    cookieObject.start_word_count = counts.words.length;
                }
                else {
                    cookieObject.start_character_count = 0;
                    cookieObject.start_word_count = 0;
                }
                $('.edited_characters').text('+0');
                $('.edited_words').text('+0');
                $.cookie('start_counts', JSON.stringify(cookieObject), { expires: 365 });
                box.focus();
            });
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