<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="sa_site" content="1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Character Counter - WordCounter.net</title>
    <meta name="description"
        content="Character Count is a free online tool that calculates the number of characters and words written in your writing." />
    <meta name="keywords" content="character counter, character count, letter count" />
    <meta property="og:image" content="https://wordcounter.net/images/character-count.jpg" />
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="social-login-modal-label" data-tr-detail="sign_in">Sign In</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">

                            <span data-tr-detail="sign_in_modal_text1">When you sign in to WordCounter you get access to
                                some awesome features.</span>
                            <br /><br />
                            <i class="fa fa-floppy-o" style="font-size: 17px"></i>&nbsp;

                            <b data-tr-detail="auto_save_modal">Auto Save</b><br /><small style="color:gray"
                                data-tr-detail="sign_in_modal_text2">We'll save whatever you're working on automatically
                                and even store multiple versions so you can access it in case your browser crashes or
                                you accidentally close your browser.</small><br /><br />
                            <i class="fa fa-trophy" style="font-size: 17px"></i>&nbsp;

                            <b data-tr-detail="writing_goals">Writing Goals</b><br /><small style="color:gray"
                                data-tr-detail="sign_in_modal_text3">Setup writing goals you want to work toward and
                                even embed them in your blog or website.</small><br />
                            <i class="fa fa-shopping-cart" style='margin-top:20px; font-size: 18px'></i>&nbsp;

                            <b data-tr-detail="fewer_advertisements">20% OFF Grammarly Premium</b><br /><small
                                style="color:gray" data-tr-detail="sign_in_modals_text4">Enable unlimited checks for
                                plagiarism and writing issues. Connects seamlessly with your free WordCounter
                                account.</small>
                        </div>
                        <div class="col-md-5">
                            <div class="login-form ">

                                <div class="site-login-form">
                                    <p data-tr-detail="login_with_your_site_account">Login with your site account:</p>
                                    <form id="login-form" class="" action="/user/security/login" method="post">
                                        <input type="hidden" name="_csrf"
                                            value="dFJ1Tk92SkcXByccdxs.PiMxPn94Pzw2GyI8LxtDGnUdJQB9G0IVAA==">
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
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-login" name="login-button"
                                                data-tr-detail="login">Login</button>
                                            <div class="text-center" style="margin-top: 8px; font-size: 12px;">
                                                <a href="/user/security/request-password-reset"
                                                    data-link="signupFormLink"
                                                    style="text-decoration: underline !important;"
                                                    data-tr-detail="forgot_your_password">Forgot your password?</a>
                                            </div>
                                            <div class="text-center" style="margin-top: 8px; font-size: 12px;">
                                                <a href="javascript:void(0);" data-link="signupFormLink"
                                                    style="text-decoration: underline !important;"
                                                    data-tr-detail="dont_have_an_account_yet_create_one_now_its_free">Don't
                                                    have an account yet? Create one now, it's FREE</a> </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="signup-form hidden">
                                <p data-tr-detail="create_a_site_account">Create a site account:</p>
                                <form id="signup-form" class="" action="/site/signup" method="post">
                                    <input type="hidden" name="_csrf"
                                        value="dFJ1Tk92SkcXByccdxs.PiMxPn94Pzw2GyI8LxtDGnUdJQB9G0IVAA==">
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
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-login" name="login-button"
                                            data-tr-detail="create_account">Create Account</button>
                                        <div class="text-center" style="margin-top: 8px; font-size: 12px;">
                                            <a href="javascript:void(0);" data-tr-detail="already_have_an_account_login"
                                                data-link="loginFormLink"
                                                style="text-decoration: underline !important;">Already have an account?
                                                Login</a><br />
                                            <a href="/user/security/request-password-reset"
                                                style="text-decoration: underline !important;">Forgot your password (or
                                                want to change it)?</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        data-tr-detail="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="container">
            <div class="mb100">
                <div class="row">
                    <h1 class="teeshirt-page-title text-uppercase"> Character Counter </h1>
                    <div class="col-md-10">
                        <h3>Characters <span class="label label-primary characters">0</span> Words <span
                                class="label label-primary words">0</span> Lines <span
                                class="label label-primary lines">0</span></h3>
                        <form data-persist="garlic" method="POST">
                            <textarea id="character-box" class="form-control"
                                style="width:100%; height: 400px;"></textarea>
                            <div style="clear:both"></div>
                            <textarea class="form-control table-data finalResult" id="for_counting_lines" rows="1"
                                style="visibility: hidden; height: 1px; padding:3px"></textarea>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default" style="margin: 55px 0 0 0" id="letter-density">
                                <div class="panel-heading">
                                    <h3 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-target="#ld-accordion"
                                            href="#" onclick="event.preventDefault();">
                                            Letter Density
                                        </a>
                                    </h3>
                                </div>
                                <div id="ld-accordion" class="list-group panel-collapse collapse">
                                </div>
                            </div>
                        </div>
                        <a href="https://wordcounter.net/"><img class="lazy"
                                data-src="https://wordcounter.net/images/check.png"
                                style="height: 100%; width: 100%; object-fit: contain" /></a>
                    </div>
                </div>
                <div class="row">
                    <div class="well" style="margin-top:20px">
                        <p>Character Counter is a 100% free online character count calculator that's simple to use.
                            Sometimes users prefer simplicity over all of the detailed writing information Word Counter
                            provides, and this is exactly what this tool offers. It displays character count and word
                            count which is often the only information a person needs to know about their writing. Best
                            of all, you receive the needed information at a lightning fast speed.</p>
                        <p>To find out the word and character count of your writing, simply copy and paste text into the
                            tool or write directly into the text area. Once done, the free online tool will display both
                            counts for the text that's been inserted. This can be useful in many instances, but it can
                            be especially helpful when you are writing for something that has a character minimum or
                            limit.</p>
                        <p>Character and word limits are quite common these days on the Internet. The one that most
                            people are likely aware of is the 140 character limit for tweets on Twitter, but character
                            limits aren't restricted to Twitter. There are limits for text messages (SMS), Yelp reviews,
                            Facebook posts, Pinterest pins, Reddit titles and comments, eBay titles and descriptions as
                            well as many others. Knowing these limits, as well as being able to see as you approach
                            them, will enable you to better express yourself within the imposed limits.</p>
                        <p>For students, there are usually limits or minimums for homework assignments. The same is
                            often true for college applications. Abiding by these can have a major impact on how this
                            writing is graded and reviewed, and it shows whether or not you're able to follow basic
                            directions. Character counter can make sure you don't accidentally go over limits or fail to
                            meet minimums that can be detrimental to these assignments.</p>
                        <p>This information can also be quite helpful for writers. Knowing the number of words and
                            characters can help writers better understand the length of their writing, and work to
                            display the pages of their writing in a specific way. For those who write for magazines and
                            newspapers where there is limited space, knowing these counts can help the writer get the
                            most information into that limited space.</p>
                        <p>For job seekers, knowing the number of characters of your resume can be essential to get all
                            the information you want onto a single page. You can fool around with different fonts, their
                            sizes and spacing to adjust the number of characters you can fit on a single page, but it's
                            important to know the number you're attempting to fit on the page.</p>
                        <p>Character Counter isn't only for English. The tool can be helpful for those writing in
                            non-English languages where character count is important. This can be the case for languages
                            Japanese, Korean, Chinese and many others where characters are the basis of the written
                            language. Even for those who aren't writing in English, knowing the character count of the
                            writing is often beneficial to the writing.</p>
                    </div>
                </div>
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
                    <li class="twitter">
                        <a target="_blank" href="https://twitter.com/wordcounter_net">Twitter</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="/min/f9012701b486228b3731ee502901ddcd22acc45c.js"></script>
    <script type="text/javascript">jQuery(document).ready(function () {

            $(document).ready(function () {
                $('#ld-accordion').collapse('show');
                setTimeout(function () {
                    $('#character-box').focus();
                }, 500);
            });
            var box = $('#character-box');
            //    box.css('resize', 'vertical');
            var box_for_counting_lines = $('#for_counting_lines');
            box_for_counting_lines.css({
                'padding': box.css('padding'),
                'padding-top': 0,
                'padding-bottom': 0,
                'overflow': 'hidden',
                'width': box.css('width'),
                'line-height': box.css('line-height')
            });
            var line_height = box.css('line-height');
            line_height = line_height.split('.')[0];
            line_height = Number(line_height.replace(/\D/g, ''));

            /**
             * Counts lines of text in textarea
             */
            function countLines() {
                var text = box.val();
                box_for_counting_lines.val(text);
                var actualHeight = box_for_counting_lines[0].scrollHeight;
                if (text != '') {
                    $('.lines').text(Math.round(actualHeight / line_height));
                }
                else {
                    $('.lines').text(0);
                }

            }

            /**
             * Counts characters and words of text in textarea
             */
            function go() {
                var text = box.val();
                var chars = text.match(/(?:[^\r\n]|\r(?!\n))/g);
                var text_without_space = text.replace(/\s+/g, '');
                var words;
                var matches = text_without_space.match(/([^\x00-\x7F\u2013\u2014])+/gi);
                var latin_only = (matches === null);
                if (latin_only == false) //non latin languages like chinese and russian - just count the spaces and be done with it
                {
                    words = text.match(/\S+/g);
                }
                else {
                    words = text.replace(/[;!:—\/]/g, ' ').replace(/\.\s+/g, ' ').replace(/[^a-zA-Z\d\s&:,]/g, '').replace(/,([^0-9])/g, ' $1').match(/\S+/g); //be smarter for latin languages
                }
                if (chars != undefined && chars != null) {
                    $('.characters').text(chars.length);
                    $('.words').text(words.length);
                }
                else {
                    $('.characters').text(0);
                    $('.words').text(0);
                }
            }

            /**
             *  Checks if the given value exists in array
             */
            Array.prototype.contains = function (v) {
                for (var i = 0; i < this.length; i++) {
                    if (this[i] === v) return true;
                }
                return false;
            };

            /**
             * Returns array with unique values
             */
            Array.prototype.unique = function () {
                var arr = [];
                for (var i = 0; i < this.length; i++) {
                    if (!arr.contains(this[i])) {
                        arr.push(this[i]);
                    }
                }
                return arr;
            };

            /**
             * Shows the letters used
             */
            function letterDensity() {
                var text = box.val().toUpperCase();
                var letters = text.match(/[^\s]/g);
                letters = letters !== null ? letters : [];
                var uniqueLetters = letters.unique();
                var lettersNumber = [];
                var uniqueLettersLength = uniqueLetters.length;
                var lettersLength = letters.length;
                var count, percentage, i, j;
                var ldAccordion = $('#ld-accordion');
                ldAccordion.empty();
                for (i = 0; i < uniqueLettersLength; i++) {
                    count = 0;
                    for (j = 0; j < lettersLength; j++) {
                        if (uniqueLetters[i] === letters[j]) {
                            count++;
                        }
                    }
                    lettersNumber.push([uniqueLetters[i], count]);
                }
                lettersNumber.sort(
                    function (a, b) {
                        return b[1] - a[1];
                    });
                var lettersNumberLength = lettersNumber.length;
                var limit = lettersNumberLength < 10 ? lettersNumberLength : 10;
                for (i = 0; i < limit; i++) {
                    percentage = (100 * (lettersNumber[i][1] / lettersLength)).toFixed(0);
                    ldAccordion.append('<span class="list-group-item" href="#"><span class="badge"> ' + lettersNumber[i][1] + ' (' + percentage + '%)</span><span class="word">' + lettersNumber[i][0] + '</span></span>');
                }
            }

            $(window).resize(function () {
                box_for_counting_lines.css('width', box.css('width'));
                countLines();
            });

            box.keypress(function () {
                go();
                countLines();
                letterDensity();
            }).blur(function () {
                go();
                countLines();
                letterDensity();
            }).focus(function () {
                go();
                countLines();
                letterDensity();
            }).change(function () {
                go();
                countLines();
                letterDensity();
            }).keyup(function () {
                go();
                countLines();
                letterDensity();
            }).keydown(function () {
                go();
                countLines();
                letterDensity();
            }).load(function () {
                go();
                countLines();
                letterDensity();
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
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="foundBugModalLabel">Found a Bug</h4>
                </div>
                <div class="modal-body">
                    <textarea rows="5" class="form-control" placeholder="What problem do you see?" name="message"
                        id="message"></textarea>
                    <button class="btn btn-default" name="send" id="submit" onclick="editor.sendMessage();"
                        style="margin-top: 15px; margin-bottom: 15px">Send</button>
                    <div class="alert alert-warning"
                        style="display: none; position: absolute; z-index: 9999; left: 20%; right: 20%;">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>No speech was detected!</strong> You may need to adjust your microphone settings.</div>
                    <div class="success" style="display: none;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Done</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>