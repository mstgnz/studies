<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="sa_site" content="1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Words Per Page: convert words to pages calculator</title>
    <meta name="description"
        content="Words per Page is a free online words to pages calculator which converts the numbers of words you write into pages and allows you to change margins, font size and fonts." />
    <meta name="keywords" content="words per page" />
    <meta property="og:image" content="https://wordcounter.net/images/words-per-page.jpg" />
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
    <link href="/min/145d80644a28bd1c74cae195ac1f7e41216da16f.css" rel="stylesheet">
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
                                            value="b1A5Snl3ZjEMBWsYQRoSSDgzcntOPhBAACBwKy1CNgMGJ0x5LUM5dg==">
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
                                        name="_csrf" value="b1A5Snl3ZjEMBWsYQRoSSDgzcntOPhBAACBwKy1CNgMGJ0x5LUM5dg==">
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
            <h1 class="teeshirt-page-title text-uppercase"> Welcome to Words per Page </h1><br />
            <div class="row">
                <div class="col-md-12" style="text-align:center;"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="top-margin"></div>
                    <form name="calculator">
                        <h3 style="color: #31708f;" onclick="estimationCount();">Enter Total Number of Words</h3>
                        <div class="row">
                            <div class="form-group col-lg-4"><label for="total_words">Total words</label><input
                                    type="text" class="form-control input-sm" id="total_words" name="total_words"
                                    aria-describedby="basic-addon1" value="0" onkeyup="estimationCount();"
                                    onchange="estimationCount();"
                                    onkeydown="if (event.keyCode === 13) { return false; }"></div>
                            <div class="form-group col-sm-2"><label for="choose_font">Choose Font</label><select
                                    name="choose_font" id="choose_font" class="form-control input-sm"
                                    onchange="estimationCount();">
                                    <option selected="selected" value="1">Arial</option>
                                    <option value="0.946">Calibri</option>
                                    <option value="1.277">Comic Sans MS</option>
                                    <option value="1.243">Courier</option>
                                    <option value="1.13">Times New Roman</option>
                                    <option value="1.212">Verdana</option>
                                </select></div>
                            <div class="form-group col-sm-2"><label for="choose_size">Choose Size</label><select
                                    name="choose_size" id="choose_size" class="form-control input-sm"
                                    onchange="estimationCount();">
                                    <option value="1.522">10</option>
                                    <option value="1.206">11</option>
                                    <option selected="selected" value="1">12</option>
                                    <option value="0.859">13</option>
                                    <option value="0.789">14</option>
                                </select></div>
                            <div class="form-group col-sm-2"><label for="choose_spacing">Choose Spacing</label><select
                                    name="choose_spacing" id="choose_spacing" class="form-control input-sm"
                                    onchange="estimationCount();">
                                    <option value="1">single</option>
                                    <option value="1.267">1.5</option>
                                    <option value="1.644">double</option>
                                </select></div>
                        </div>
                        <div class="section-colored text-center alert-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <h1 id="totalCount1">Pages: 0</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-md-12 col-sm-12" style="text-align:center;"></div>
                            <div class="col-md-6 col-sm-6" style="text-align:right"></div>
                            <div class="col-md-6 col-sm-6"></div>
                        </div>
                        <hr />
                        <h3 style="color: #31708f;" onclick="estimationPageCount();">Type in your Words</h3>
                        <div class="row">
                            <div class="col-lg-6 no_padding">
                                <div class="form-group col-sm-2 pdr0">
                                    <div class="col-sm-12 no_padding">
                                        <div class="col-sm-12 no_padding"><label>Print</label></div><button
                                            type="button" title="Print" class="btn btn-default btn-md print_button"
                                            onclick="printTextArea();"><span
                                                class="glyphicon glyphicon-print"></span></button>
                                    </div>
                                </div>
                                <div class="form-group col-sm-2 pdr0 pdl0"><label for="page_format">Page
                                        Format</label><select name="page_format" id="page_format"
                                        class="form-control input-sm" onchange="estimationPageCount();">
                                        <option value="59.4 84.1" id="A1">A1</option>
                                        <option value="42.0 59.4" id="A2">A2</option>
                                        <option value="29.7 42.0" id="A3">A3</option>
                                        <option selected="selected" value="21.0 29.7" id="A4">A4</option>
                                        <option value="14.8 21.0" id="A5">A5</option>
                                        <option value="21.59 27.94" id="us_letter">U.S. Letter</option>
                                    </select></div>
                                <div class="form-group col-sm-3 pdr0"><label for="txt_font">Font</label><select
                                        name="txt_font" id="txt_font" class="form-control input-sm"
                                        onchange="estimationPageCount();">
                                        <option selected="selected" value="Arial">Arial</option>
                                        <option value="Calibri">Calibri</option>
                                        <option value="Comic Sans MS">Comic Sans MS</option>
                                        <option value="Courier">Courier</option>
                                        <option value="Times New Roman">Times New Roman</option>
                                        <option value="Verdana">Verdana</option>
                                    </select></div>
                                <div class="form-group col-sm-3 pdr0"><label for="line_spacing">Line
                                        Spacing</label><select name="line_spacing" id="line_spacing"
                                        class="form-control input-sm" onchange="estimationPageCount();">
                                        <option value="1">single</option>
                                        <option value="1.267">1.5</option>
                                        <option value="1.644">double</option>
                                    </select></div>
                                <div class="form-group col-sm-2 pdr0"><label for="page_unit">Units</label><select
                                        name="page_unit" id="page_unit" class="form-control input-sm"
                                        onchange="estimationPageCount();">
                                        <option value="in">inch</option>
                                        <option value="cm">cm</option>
                                    </select></div>
                            </div>
                            <div class="col-lg-6 no_padding">
                                <div class="form-group col-sm-2 font_size pdr0"><label for="txt_size">Font
                                        Size</label><input type="number" class="form-control input-sm" id="txt_size"
                                        name="txt_size" min="0" onchange="estimationPageCount();"
                                        onkeyup="estimationPageCount();"
                                        onkeydown="if (event.keyCode === 13) { return false; }"><span
                                        class="px">px</span></div>
                                <div class="form-group col-sm-10 page_margins pdr0">
                                    <div class="col-sm-3"><label for="top_padding" class="margin_lable">Top
                                            Margin</label><input type="number" class="form-control input-sm"
                                            id="top_padding" name="top_padding" placeholder="Top" min="0" step="0.1"
                                            onchange="estimationPageCount();" onkeyup="estimationPageCount();"
                                            onkeydown="if (event.keyCode === 13) { return false; }"><span
                                            class="inch">inch</span></div>
                                    <div class="col-sm-3"><label for="right_padding" class="right_padding">Right
                                            Margin</label><input type="number" class="form-control input-sm"
                                            id="right_padding" name="right_padding" placeholder="Right" min="0"
                                            step="0.1" onchange="estimationPageCount();"
                                            onkeyup="estimationPageCount();"
                                            onkeydown="if (event.keyCode === 13) { return false; }"><span
                                            class="inch">inch</span></div>
                                    <div class="col-sm-3"><label for="bottom_padding" class="right_padding">Bottom
                                            Margin</label><input type="number" class="form-control input-sm"
                                            id="bottom_padding" name="bottom_padding" placeholder="Bottom" min="0"
                                            step="0.1" onchange="estimationPageCount();"
                                            onkeyup="estimationPageCount();"
                                            onkeydown="if (event.keyCode === 13) { return false; }"><span
                                            class="inch">inch</span></div>
                                    <div class="col-sm-3"><label for="left_padding" class="right_padding">Left
                                            Margin</label><input type="number" class="form-control input-sm"
                                            id="left_padding" name="left_padding" placeholder="Left" min="0" step="0.1"
                                            onchange="estimationPageCount();" onkeyup="estimationPageCount();"
                                            onkeydown="if (event.keyCode === 13) { return false; }"><span
                                            class="inch">inch</span></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12 keywordsBox"><label for="txt">Start typing, or copy and
                                    paste your document here...</label><textarea id="txt" name="txt" rows="10"
                                    onkeyup="estimationPageCount();" onchange="estimationPageCount();"
                                    onfocus="estimationPageCount();" class="form-control table-data"
                                    placeholder="Start typing, or copy and paste your document here..."
                                    data-autosize-on="true"></textarea></div>
                        </div>
                        <div class="section-colored text-center alert-info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 ">
                                        <h1 id="totalCount2">Pages: 0</h1>
                                    </div>
                                </div>
                            </div>
                        </div><textarea id="hidden_txt"></textarea>
                    </form>
                </div>
            </div>
            <div class="row"><br />
                <div class="row">
                    <div class="col-md-12" style="text-align:center;"></div>
                </div>
                <div class="col-sm-6 introduction">
                    <div class="well">
                        <p>There are times when it helps to know how many words per page you're writing. While a general
                            guideline is one page is 500 words (single spaced) or 250 words (double spaced), this is a
                            ballpark figure. The truth is the number of words per page depends on a variety of factors
                            such as the type of font, the font size, spacing elements, margin spacing, and paragraph
                            length to name a few. While it's not possible to take into all these factors when estimating
                            how many words per page there will be for your writing, this calculator can give a more
                            accurate words per page conversion estimate than the typical <a
                                href="/blog/2015/09/18/10655_how-many-pages-is-2000-words.html">250/500 ballpark
                                figure</a>.</p>
                        <p>The calculator is able to provide a more accurate conversion by taking into account more
                            specific information. For example, you can choose from a different variety of common fonts
                            to generate an estimate:</p>
                        <ul>
                            <li> Arial</li>
                            <li> Calibri</li>
                            <li> Comic Sans MS</li>
                            <li> Courier</li>
                            <li> Times New Roman</li>
                            <li> Verdana</li>
                        </ul>
                        <p>You can then choose your preferred spacing from the following options:</p>
                        <ul>
                            <li> Single spaced</li>
                            <li> 1.5 spaced</li>
                            <li> Double spaced</li>
                        </ul>
                        <p>Finally, you can choose your preferred font size: 10, 11, 12, 13 or 14.</p>
                        <p>By using these three options to more accurately define your writing, the words per page
                            calculator should provide a better estimate on how many words you need to write to fill a
                            page. In the opposite direction, it can give a more accurate estimate of how many pages you
                            have created if you only know the <a href="/">word count</a>. </p>
                        <p>While we make every attempt to make our calculators as accurate as possible, the results
                            won't be perfect. This converter addresses some issues to provide a more accurate estimate,
                            but in the end, it's still an estimate. Other issues such as margin space and paragraph
                            length will likely result in some variation from the calculations given. That being said, it
                            should provide a more accurate indication of the number of pages a specific word count will
                            be and the number of words per page you type when compared to the general rule of thumb.</p>
                    </div>
                </div>
                <div class="col-sm-6 introduction">
                    <div class="well info_box">
                        <div class="info">How many pages is...?</div>
                        <p>For general information, the following are calculations using 12-point Arial font, double
                            spaced:</p>
                        <p>How many pages is 500 words? 500 words is approximately 1.8 pages.<br>
                            How many pages is 750 words? 750 words is approximately 2.7 pages.<br>
                            How many pages is 1,000 words? 1,000 words is approximately 3.7 pages.<br>
                            How many pages is 1,250 words? 1,250 words is approximately 4.6 pages.<br>
                            How many pages is 1,500 words? 1,500 words is approximately 5.5 pages.<br>
                            How many pages is 2,000 words? 2,000 words is approximately 7.3 pages.<br>
                            How many pages is 2,500 words? 2,500 words is approximately 9.1 pages.<br>
                            How many pages is 3,000 words? 3,000 words is approximately 11 pages.<br>
                            How many pages is 4,000 words? 4,000 words is approximately 14.6 pages.<br>
                            How many pages is 5,000 words? 5,000 words is approximately 18.3 pages.<br>
                            How many pages is 7,500 words? 7,500 words is approximately 27.4 pages.<br>
                            How many pages is 10,000 words? 10,000 words is approximately 36.5 pages.</p>
                    </div>
                    <div class="well info_box">
                        <div class="info">How many words are in pages?</div>
                        <p>How many words are in one page? There are approximately 450 words in one page.<br>
                            How many words are in two pages? There are approximately 900 words in two pages.<br>
                            How many words are in three pages? There are approximately 1350 words in three pages.<br>
                            How many words are in four pages? There are approximately 1800 words in four pages.<br>
                            How many words are in five pages? There are approximately 2250 words in five pages.<br>
                            How many words are in ten pages? There are approximately 4500 words in ten pages.<br>
                            How many words are in 15 pages? There are approximately 6750 words in 15 pages.<br>
                            How many words are in 25 pages? There are approximately 11250 words in 25 pages.<br>
                            How many words are in 50 pages? There are approximately 22500 words in 50 pages.<br>
                            How many words are in 100 pages? There are approximately 45000 words in 100 pages.</p>
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
                    <li class="twitter"><a target="_blank" href="https://twitter.com/wordcounter_net">Twitter</a></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="/min/9421d0c24ecaffb4402be6bd959f301bb2c52ebf.js"></script>
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