<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="sa_site" content="1" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Word</title>
    <meta name="description" content="word editor" />
    <meta name="keywords" content="word" />
    <meta name="msapplication-TileColor" content="#202020" />
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <link href="./min/5e8bd1680f2e63f4656d7a369465d56fc8144876.css" rel="stylesheet" />
    <script type="text/javascript">
        if ('undefined' !== 'undefined') {
            var user_id_for_goal = 'undefined';
        }
        var variable_for_index_page = true;
        var images_abs_path = 'http://localhost/counter/images';
        var abs_path = 'http://localhost/counter/';
        var share_path = 'http://localhost/counter/';
    </script>
</head>
<body>
    <div id="globalPreloader" style="display:none;position:fixed;top:51px;left:0px;right:0px;height:3px;z-index:9999;">
        <div style="width:30%;height:100%;background-color:#0066ff">&nbsp;</div>
    </div>
    <script type="text/javascript">
        document.getElementById('globalPreloader').style.display = 'block';
    </script>
    
    <div id="fb-root"></div>
    <div id="data-block" data-log-url="/site/log" data-spell-check-url="/site/proxy?url=" data-css-path="/css/"></div>

<?php include('./navbar.php'); ?>
     
<div class="container">
    <div class="row">
        <div class="col-md-9" id="editor_container">
            <div class="message_output"></div>
            <div style="position: relative;">
                <div id="replace_container">
                    <p></p>
                    <button type="button" class="btn btn-success" onclick="editor.replaceOneByOne();" data-tr-detail="yes">Yes</button>
                    <button type="button" class="btn btn-default" onclick="editor.cancelOne();" data-tr-detail="skip_this_one">Skip this one</button>
                    <button type="button" class="btn btn-default" onclick="editor.cancelAll();" data-tr-detail="skip_all">Skip All</button>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="top_counter">
                        <div class="pull-left">
                            <h1 style="margin:0"><span class="counted" data-tr-detail="words_characters">&nbsp;</span></h1>
                        </div>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button class="btn btn-default" style="line-height:.9" data-type="basic" id="version-btn"><i class="fa fa-external-link" style="line-height:1.1"></i>
                                    <br /><span style="font-size:60%;"><span data-tr-detail="go_basic" id="version-btn-label">GO BASIC</span></span>
                                </button>
                                <button type="button" style="line-height:.9" class="btn btn-default" data-toggle="modal" data-target="#options-modal" id="options-btn"><i class="fa fa-wrench" style="line-height:1.1"></i>
                                    <br /><span data-tr-detail="options" style="font-size:60%;">OPTIONS</span></button>
                            </div>
                        </div>
                        <div style="clear:both"></div>
                        <br />
                        <div class="row">
                            <div class="col-md-12" style="text-align:center;">
                                <div class="grammarly_warning"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top-btns-panel panel panel-default" style="margin-bottom:0">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="btn-group" role="group" aria-label="...">
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9;" class="btn btn-default _btncheck" id="spell-btn" data-target="_blank"><i class="fa fa-check" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="spell">GRAMMAR & SPELL CHECK</span><span id="grammarlyOFF" style="background-color:#c9302c; color:white;padding: 0 2px;margin-left:2px;font-size: 60%;display:none;" data-tr-detail="off">OFF</span><span id="grammarlyON" style="background-color:#009933; color:white;padding: 0 2px;margin-left:2px;font-size: 60%;display:none;" data-tr-detail="on">ON</span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9;" class="btn btn-default dropdown-toggle" disabled="disabled" data-toggle="dropdown" aria-expanded="false" id="thesaurus-btn" onclick="editor.thesaurus(event);"><i class="fa fa-book" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="thesaurus">THESAURUS</span></button>
                                    <ul class="dropdown-menu" role="menu" id="thesaurus_synonyms"></ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="case-btn" onclick=" ga('send', 'event', 'case', 'click button', 'button');"><i class="fa fa-text-height" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="case">CASE</span><span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" id="sentence-case-link" onclick="editor.changeCase(event, 'sentence'); ga('send', 'event', 'case', 'click option', 'Sentence Case')" data-tr-detail="sentence_case">Sentence case</a></li>
                                        <li><a href="#" id="title-case-link" onclick="editor.changeCase(event, 'title'); ga('send', 'event', 'case', 'click option', 'Title Case')" data-tr-detail="title_case">Title Case</a></li>
                                        <li><a href="#" id="upper-case-link" onclick="editor.changeCase(event, 'upper'); ga('send', 'event', 'case', 'click option', 'Uppercase')" data-tr-detail="uppercase">UPPERCASE</a></li>
                                        <li><a href="#" id="lower-case-link" onclick="editor.changeCase(event, 'lower'); ga('send', 'event', 'case', 'click option', 'lowercase')" data-tr-detail="lowercase">lowercase</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" style="line-height:.9" id="activity-btn" data-toggle="modal" data-target="#social-login-modal"><span class="glyphicon glyphicon-stats" style="line-height: 1.1"></span>
                                        <br /><span style="font-size:60%;" data-tr-detail="activity">ACTIVITY</span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" style="line-height:.9" id="save-btn" data-toggle="modal" data-target="#social-login-modal"><span class="glyphicon glyphicon-save-file" style="line-height: 1.1"></span>
                                        <br /><span style="font-size:60%;" data-tr-detail="save">SAVE</span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" style="line-height:.9; display:none;" id="text-to-speech-btn" onclick="editor.showOrHideReadBox(this);"><i class="fa fa-play" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="proof_read">PROOF READ</span> <span class="caret"></span></button>
                                </div>
                                <div class="button-more-box" id="text-to-speech-controls" style="display:none;"><span title="Disable Read Box" id="close-read" class="glyphicon glyphicon-remove" onclick="editor.showOrHideReadBox('#text-to-speech-btn', 'close')"></span><span class="text-to-speech-buttons"><a href="#" class="btn btn-primary btn-sm" id="r-play-link" onclick="editor.startReading(event, this);"><span class="glyphicon glyphicon-play"></span></a>
                                    <a href="#" class="btn btn-primary btn-sm" id="r-pause-link" style="display:none; margin-left: 0" onclick="editor.pauseReading(event, this);"><span class="glyphicon glyphicon-pause"></span></a><a href="#" class="btn btn-primary btn-sm" id="r-stop-link" style="margin-left: 2px;" onclick="editor.stopReading(event, this);"><span class="glyphicon glyphicon-stop"></span></a></span>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default record" style="line-height:.9; display:none;" id="speech-btn" onclick="editor.speech(this);"><i class="fa fa-microphone" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="talk_to_type">TALK TO TYPE</span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9" class="btn btn-default" data-toggle="modal" data-target="#social-login-modal" id="goal-btn" onclick="localStorage.setItem('goal_submit', true);"><i class="fa fa-trophy" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="goal">GOAL</span><span class="caret"></span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default" id="speed-btn" onclick="editor.showOrHideSpeedBox(this);"><i class="fa fa-clock-o" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="speed">SPEED</span><span class="caret"></span></button>
                                </div>
                                <div id="copy" class="button-more-box" style="display:none;">
                                    <div style="float:left"><span class="time-block"><span id="sw_h" class="digits">00</span>:
                                        <span id="sw_m" class="digits">00</span>:
                                        <span id="sw_s" class="digits">00</span>:
                                        <span id="sw_ms" class="digits">00</span></span><span title="Disable Speed Box" id="close-typing-speed" class="glyphicon glyphicon-remove" onclick="editor.showOrHideSpeedBox('#speed-btn', 'close');"></span><span class="speed-block"><span data-tr-detail="speed-blog">Speed</span>:
                                        <span id="wpm">0</span> <span data-tr-detail="wpm">WPM</span></span>
                                    </div>
                                    <div style="float:left; position: relative; width: 80px" class=""><a href="#" class="btn btn-primary btn-sm" id="sw-start-link" style="margin-left:6px" onclick="editor.startTimer(event);"><span class="glyphicon glyphicon-play"></span></a><a href="#" class="btn btn-primary btn-sm" id="sw-pause-link" style="display:none; margin-left:6px" onclick="editor.pauseTimer(event);"><span class="glyphicon glyphicon-pause"></span></a><a href="#" class="btn btn-primary btn-sm" id="sw-reset-link" style="margin-left:2px" onclick="editor.resetTimer(event);"><span class="glyphicon glyphicon-stop"></span></a>
                                        <a href="#" data-tr-detail="share_this" title="Share this!" class="share_this_link" id="share-item-speed-link" data-toggle="modal" data-target="#share-modal" onclick="share.setSpeedBadge(); share.createDownloadLink('download-link', 'speed1');"><i class="fa fa-share-alt-square" style="line-height:1.1; font-size: 70%"></i> </a>
                                    </div>
                                    <div style="clear:both"></div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default" id="print-btn" onclick="editor.printTextOfEditor();"><i class="fa fa-print" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="print">PRINT</span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default" id="upload-btn" data-toggle="modal" data-target="#upload-file-modal"><i class="fa fa-cloud-upload" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="upload">UPLOAD</span></button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" id="download-btn"><i class="fa fa-cloud-download" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="download">DOWNLOAD</span><span class="caret"></span></button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#" id="download-text-as-pdf-link" onclick="editor.downloadText(event, 'pdf');" data-tr-detail="text_as_pdf">Text as .pdf</a></li>
                                        <li><a href="#" id="download-text-as-txt-link" onclick="editor.downloadText(event, 'txt');" data-tr-detail="text_as_txt">Text as .txt</a></li>
                                        <li><a href="#" id="download-text-as-doc-link" onclick="editor.downloadText(event, 'doc');" data-tr-detail="text_as_doc">Text as .doc</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default" id="clean-text-btn" data-toggle="modal" data-target="#clean-text-modal"><i class="fa fa-eraser" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="clean_text">CLEAN TEXT</span></button>
                                </div>
                                <button type="button" style="line-height:.9; display:none" class="btn btn-default" id="save-to-drive-btn" data-toggle="modal" data-target="#save-to-drive-modal"><i class="fa fa-google" style="line-height:1.1"></i>
                                    <br /><span style="font-size:60%;" data-tr-detail="save_to_drive">SAVE TO DRIVE</span></button>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default dropdown-toggle" aria-expanded="false" id="revisions-btn" data-toggle="modal" data-target="#social-login-modal"><i class="fa fa-floppy-o" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="auto_save">AUTO-SAVE</span><span style="background-color:#c9302c; color:white;padding: 0 2px;margin-left:2px;font-size: 60%;" data-tr-detail="off">OFF</span></button>
                                    <ul class="dropdown-menu table-data" role="menu" id="revisions_ul"></ul>
                                </div>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9; display:none" class="btn btn-default" data-toggle="modal" data-target="#find-and-replace-modal" id="find-and-replace-btn"><i class="fa fa-search" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;" data-tr-detail="find_and_replace">FIND AND REPLACE</span></button>
                                </div>
                                <button type="button" style="line-height:.9; display:none" class="btn btn-default" onclick="editor.editorClear();" id="clear-btn"><i class="fa fa-trash-o" style="line-height:1.1"></i>
                                    <br /><span style="font-size:60%;" data-tr-detail="clear">CLEAR</span></button>
                                <button type="button" style="line-height:.9; display:none" class="btn btn-default" onclick="editor.editorUndo();" id="undo-btn"><i class="fa fa-arrow-left" style="line-height:1.1"></i>
                                    <br /><span style="font-size:60%;" data-tr-detail="undo">UNDO</span></button>
                                <button type="button" style="line-height:.9; display:none" class="btn btn-default" onclick="editor.editorRedo();" id="redo-btn"><i class="fa fa-arrow-right" style="line-height:1.1"></i>
                                    <br /><span style="font-size:60%;" data-tr-detail="redo">REDO</span></button>
                                <div class="btn-group">
                                    <button type="button" style="line-height:.9;" id="more-btn" class="btn btn-default openOptionTab" data-tab="buttons" data-toggle="modal" data-target="#options-modal" onclick="editor.openOptionsTab(this);"><i class="fa fa-th" style="line-height:1.1"></i>
                                        <br /><span style="font-size:60%;"><span data-tr-detail="more-btn">MORE</span> (<span id="no_switch_buttons">0</span>)</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <form id="form">
                <div style="position: relative;" class="keywordsBox speechOutput">
                    <textarea placeholder="Start typing, or copy and paste your document here..." data-tr-detail="start_typing_or_copy_and_paste_your_document_here" class="form-control table-data finalResult textarea_revision" style="resize:none; overflow: auto;" rows=12 id="box"></textarea>
                </div>
                <div id="editor"></div>
            </form>
            <div class="keywordsBox">
                <div id="box-readonly" class="table-data" onclick="editor.unHighlightWord(event);"></div>
            </div>
            <div class="panel panel-default" style="padding:0; margin:0">
                <div class="panel-footer">
                    <div style="display:inline-block">
                        <h4 style="display:inline-block; margin:0"><span data-tr-detail="words_characters" class="counted">&nbsp;</span> </h4>
                    </div>
                    <div style="display:inline-block;float:right">
                        <div class="grammarly_warning"></div>
                    </div>
                    <div class="btn-group pull-right"></div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <textarea class="form-control table-data finalResult" id="for_counting_lines" rows="1" style="visibility: hidden; height: 1px; padding:3px"></textarea>
            <textarea class="form-control table-data finalResult" id="for_keyword_density" rows="1" style="visibility: hidden; height: 1px; padding:3px"></textarea>
            <div style="margin-top:0;">
                <div class="row" id="description">
                    <div class="col-md-12">
                        <div class="well" style="margin-top:10px">
                            <h3 style="margin-top:0">What is WordCounter?</h3>
                            <p>Apart from counting words and characters, our online editor can help you to improve word choice and writing style, and, optionally, help you to detect grammar mistakes and plagiarism. To check word count, simply place your cursor into the text box above and start typing. You'll see the number of characters and words increase or decrease as you type, delete, and edit them. You can also copy and paste text from another program over into the online editor above. The Auto-Save feature will make sure you won't lose any changes while editing, even if you leave the site and come back later. <strong>Tip: Bookmark this page now.</strong></p>
                            <p>Knowing the word count of a text can be important. For example, if an author has to write a minimum or maximum amount of words for an article, essay, report, story, book, paper, you name it. WordCounter will help to make sure its word count reaches a specific requirement or stays within a certain limit.</p>
                            <p>In addition, WordCounter shows you the top 10 keywords and keyword density of the article you're writing. This allows you to know which keywords you use how often and at what percentages. This can prevent you from over-using certain words or word combinations and check for best distribution of keywords in your writing.
                            </p>
                            <p>In the Details overview you can see the average speaking and reading time for your text, while Reading Level is an indicator of the education level a person would need in order to understand the words you’re using.</p>
                            <p style="margin-bottom:0">Disclaimer: We strive to make our tools as accurate as possible but we cannot guarantee it will always be so.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="glyup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-body">
                        <a rel="nofollow" href="javascript:;" data-target="_blank" class="_btncheck"><img class="lazy" data-src="images/glyup.png" style="width:100%;" alt="." /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3" id="glya" style="text-align:center;padding-right: 2px!important;padding-left: 2px!important;display:none;">
            <a rel="nofollow" class="_btncheck" href="javascript:;" data-target="_blank"><img class="lazy" data-src="images/wc-gly-instant.png" alt="" style="width:100%;" /></a>
            <div style="width:100%;margin-top:5px;"><a rel="nofollow" href="#" data-toggle="modal" data-target="#glyup">How it works &#187;</a></div>
        </div>
        <div class="col-md-3" id="glyb" style="text-align:center;padding-right: 2px!important;padding-left: 2px!important;display:none;">
            <a rel="nofollow" href="track/subbanner" data-target="_blank"><img class="lazy" data-src="images/wc-gly-upgrade.gif" alt="" style="width:100%;" /></a>
        </div>
        <div class="col-md-3" id="details_container"><i class="fa fa-caret-left" style="display: none;"></i> <i class="fa fa-caret-right"></i>
            <div class="panel-group" id="accordion">
                <div class="panel panel-default" id="details_panel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="openOptionTab fa fa-wrench" style="line-height:1.1" data-tab="details" data-toggle="modal" data-target="#options-modal" onclick="editor.openOptionsTab(this);"></i> <a class="accordion-toggle" data-tr-detail="details"
                                        data-toggle="collapse" data-target="#details-accordion" href="#" onclick="event.preventDefault(); setTimeout(function(){editor.changeOption({detailsPanelAccordion: $('#details-accordion').hasClass('in')});}, 500); editor.checkAccordion();">Details</a></h3>
                    </div>
                    <ul id="details-accordion" class="list-group panel-collapse collapse">
                        <li class="list-group-item" data-title="Words"><span class="badge" id="word_count">0</span><span data-tr-detail="words_label">Words</span></li>
                        <li class="list-group-item" data-title="Unique Words"><span class="badge" id="unique_word_count">0</span><span data-tr-detail="unique_words">Unique Words</span></li>
                        <li class="list-group-item" data-title="Characters"><span class="badge" id="character_count">0</span><span data-tr-detail="characters_label">Characters</span></li>
                        <li class="list-group-item" data-title="Characters (no spaces)"><span class="badge" id="character_count_no_spaces">0</span><span data-tr-detail="characters_no_spaces">Characters (no spaces)</span></li>
                        <li class="list-group-item" data-title="Sentences"><span class="badge" id="sentence_count">0</span><span data-tr-detail="sentences">Sentences</span></li>
                        <li class="list-group-item" data-title="Longest Sentence (words)"><span class="badge" id="longest_sentence_words">0</span><span data-tr-detail="longest_sentence_words">Longest Sentence (words)</span></li>
                        <li class="list-group-item" data-title="Shortest Sentence (words)"><span class="badge" id="shortest_sentence_words">0</span><span data-tr-detail="shortest_sentence_words">Shortest Sentence (words)</span></li>
                        <li class="list-group-item" data-title="Avg. Sentence (words)"><span class="badge" id="avg_sentence_words">0</span><span data-tr-detail="avg_sentence_words">Avg. Sentence (words)</span></li>
                        <li class="list-group-item" data-title="Avg. Sentence (chars)"><span class="badge" id="avg_sentence_chars">0</span><span data-tr-detail="avg_sentence_chars">Avg. Sentence (chars)</span></li>
                        <li class="list-group-item" data-title="Avg. Word Length"><span class="badge" id="avg_word_length">0</span><span data-tr-detail="avg_word_length">Avg. Word Length</span></li>
                        <li class="list-group-item" data-title="Paragraphs"><span class="badge" id="paragraph_count">0</span><span data-tr-detail="paragraphs">Paragraphs</span></li>
                        <li class="list-group-item" data-title="Pages"><span class="badge" id="avg_page_by_word">0</span><span data-tr-detail="pages">Pages</span></li>
                        <li class="list-group-item" data-title="Syllables"><span class="badge" id="count_words_syllables">0</span><span data-tr-detail="syllables">Syllables</span></li>
                        <li class="list-group-item" data-title="Lines"><span class="badge" id="lines_count">0</span><span data-tr-detail="lines">Lines</span></li>
                        <li class="list-group-item" data-title="Words (Publisher)"><span class="badge" id="words_manuscript">0</span><span data-tr-detail="words_publisher">Words (Publisher)</span> <a id="words_manuscript_tooltip" href="https://wordcounter.net/blog/2016/01/27/101200_publisher-word-count.html" target="_blank"><span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-tr-detail="read_about_what_this_means" data-placement="bottom" title="Read about what this means..."></span></a></li>
                        <li class="list-group-item" data-title="Reading Level"><span class="badge" id="reading_level">N/A</span><span data-tr-detail="reading_level">Reading Level</span>&nbsp;<a href="https://wordcounter.net/blog/2015/11/05/10805_writing-reading-level-tool.html" id="reading-level-link" target="_blank"><span class="glyphicon glyphicon-question-sign" data-tr-detail="read_about_what_this_means" data-toggle="tooltip" data-placement="bottom" title="Read about what this means..."></span></a>
                            <div style="clear:both"></div>
                        </li>
                        <li class="list-group-item" data-title="Reading Time"><span class="badge" id="reading_time">N/A</span><span data-tr-detail="reading_time">Reading Time</span>&nbsp;<span class="glyphicon glyphicon-question-sign" id="reading_time_tooltip" data-toggle="tooltip" data-placement="bottom" title="Based on an average reading speed of 275 words per minute"></span></li>
                        <li class="list-group-item" data-title="Speaking Time"><span class="badge" id="speaking_time">N/A</span><span data-tr-detail="speaking_time">Speaking Time</span>&nbsp;<span class="glyphicon glyphicon-question-sign" id="speaking_time_tooltip" data-toggle="tooltip" data-placement="bottom" title="Based on an average speaking speed of 150 words per minute"></span></li>
                        <li class="list-group-item" data-title="Hand Writing Time"><span class="badge" id="hand_writing_time">N/A</span><span data-tr-detail="hand_writing_time">Hand Writing Time</span>&nbsp;<span class="glyphicon glyphicon-question-sign" id="hand_writing_time_tooltip" data-toggle="tooltip" data-placement="bottom" title="Based on an average hand writing speed of 68 letters per minute"></span></li>
                        <li class="list-group-item"><a href="#" id="more-details-link" class="openOptionTab" data-tab="details" data-toggle="modal" data-target="#options-modal" onclick="editor.openOptionsTab(this);"><i class="fa fa-toggle-on" style="line-height:1.1"></i> <span data-tr-detail="more">More</span> (<span id="no_switch_details">0</span>)</a>
                            <a href="#" id="details-share-icon-link" style="margin-left: 10px" data-tr-detail="share_this" title="Share this!" data-toggle="modal" data-target="#share-details-modal" onclick="share.checkShareComponentAtTheBeginning(); share.createDownloadLink('download-details-panel-link', 'details_panel1');"><i class="fa fa-facebook-square" style="line-height:1.1"></i> <i class="fa fa-twitter-square" style="line-height:1.1"></i> <span data-tr-detail="share">Share</span></a>
                        </li>
                    </ul>
                </div>
                <div class="panel panel-default keywordsBox" style="margin: 10px 0 0 0" id="kwd-density">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="openOptionTab fa fa-wrench" style="line-height:1.1" data-tab="keyword-density" data-toggle="modal" data-target="#options-modal" onclick="editor.openOptionsTab(this);"></i> <a class="accordion-toggle" data-tr-detail="keyword_density" data-toggle="collapse" data-target="#kwd-accordion" href="#" onclick="event.preventDefault(); setTimeout(function(){editor.changeOption({keywordDensityAccordion: $('#kwd-accordion').hasClass('in')});}, 500); editor.checkAccordion();"> Keyword Density</a><a href="#" style="margin-left: 5px" onclick="event.preventDefault(); editor.changeOption({keywordDensityConsecutive: 1});" class="keyword_density_consecutive" id="consecutive-1-link">x1</a>&nbsp;<a href="#" onclick="event.preventDefault(); editor.changeOption({keywordDensityConsecutive: 2});" class="keyword_density_consecutive" id="consecutive-2-link">x2</a>&nbsp;<a href="#" onclick="event.preventDefault(); editor.changeOption({keywordDensityConsecutive: 3});" class="keyword_density_consecutive" id="consecutive-3-link">x3</a></h3>
                    </div>
                    <div id="kwd-accordion" class="list-group panel-collapse collapse table-data" style="max-height:330px; overflow:auto" onclick="editor.highlightWord(event);">
                        <div id="kwd-accordion-data"></div>
                        <div class="list-group-item"><a href="#" id="kwd-share-icon-link" data-tr-detail="share_this" title="Share this!" data-toggle="modal" data-target="#share-keyword-density-modal" onclick="share.getKeywordDensity(); share.createDownloadLink('download-keyword-density-link', 'kwd-density1');"><i class="fa fa-facebook-square" style="line-height:1.1"></i> <i class="fa fa-twitter-square" style="line-height:1.1"></i> <span data-tr-detail="share">Share</span></a>&nbsp;
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" style="margin: 10px 0 0 0" id="activities">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="openOptionTab fa fa-wrench" style="line-height:1.1" data-tab="activity" data-toggle="modal" data-target="#options-modal" onclick="editor.openOptionsTab(this);"></i> <a class="accordion-toggle" data-tr-detail="activities" data-toggle="collapse" data-target="#activities-accordion" href="#" onclick="event.preventDefault(); setTimeout(function(){editor.changeOption({activityAccordion: $('#activities-accordion').hasClass('in')});}, 500); editor.checkAccordion();">Activities</a></h3>
                    </div>
                    <div id="activities-accordion" class="list-group panel-collapse collapse" style="max-height:300px; overflow:auto">
                        <div id="for-activity-results"></div>
                        <div id="for-empty-result" style="display: none">
                            <div class="list-group-item">
                                <p class="message_for_empty_panel">
                                    <span data-tr-detail="keep_track_of_the_number_of_words_you_write_each_day_using_the_activity_button">Keep track of the number of words you write each day using the activity button.</span>
                                    <button type="button" class="btn btn-default" style="font-style: normal; margin-top: 10px" data-toggle="modal" data-target="#social-login-modal"><span class="glyphicon glyphicon-stats" style="line-height: 1.1"></span> &nbsp;
                                        <span style="font-size:90%;" data-tr-detail="activity">ACTIVITY</span>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12"></div>
                </div>
            </div>
            <script type="text/javascript">
                document.getElementById('accordion').style.visibility = 'hidden';
                window.onload = function() {
                    setTimeout(function() {
                        document.getElementById('accordion').style.visibility = 'visible';
                    }, 500);
                };
            </script>
        </div>
    </div>
    <div class="clear:both"></div>
    <div class="modal fade keywordsBox" id="clean-text-modal" tabindex="-1" role="dialog" aria-labelledby="clean-text-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="clean-text-modal-label" data-tr-detail="clean_text_modal_label">Clean Text</h4>
                </div>
                <div class="modal-body auto_scroll_down table-data">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 15px">
                            <p data-tr-detail="clean_text_modal_text">This button helps you clean up your document by removing funky characters, unneeded new lines, etc.</p>
                            <ul class="task-list">
                                <li class="task-list-item enabled">
                                    <input type="checkbox" class="chk_clean_text" id="chk_email_fix">
                                    <label for="chk_email_fix" class="ml10" data-tr-detail="email_fix_remove_word_wrapping">Email Fix (Remove word wrapping)</label>
                                </li>
                                <li class="task-list-item enabled">
                                    <input type="checkbox" class="chk_clean_text" id="chk_mwd_fix">
                                    <label for="chk_mwd_fix" class="ml10" data-tr-detail="microsoft_word_document_fix_remove_invalid_characters">Microsoft Word Document Fix (Remove invalid characters)</label>
                                </li>
                                <li class="task-list-item enabled">
                                    <input type="checkbox" class="chk_clean_text" id="chk_multiple_new_lines_fix">
                                    <label for="chk_multiple_new_lines_fix" class="ml10" data-tr-detail="remove_multiple_new_lines">Remove multiple new lines</label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="editor.cleanText();" data-tr-detail="apply">Apply</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade keywordsBox" id="share-modal" tabindex="-1" role="dialog" aria-labelledby="share-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="share-modal-label" data-tr-detail="share">Share</h4>
                </div>
                <div class="modal-body auto_scroll_down table-data">
                    <div class="row">
                        <div class="col-md-12" style="margin-bottom: 15px">
                            <div class="col-md-12" style="margin-bottom: 15px; text-align: center;"><b data-tr-detail="preview">Preview</b></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4" id="goal1" style="height: 30px;padding-right: 0; display: none">
                                <div class="goal_button">
                                    <div class="progress" style="border: none">
                                        <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" id="goal-progress-bar1">
                                            <div style="line-height: 21px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4" id="speed1"><span class="time-block"><span id="sw_h1" class="digits">00</span>:
                                <span id="sw_m1" class="digits">00</span>:
                                <span id="sw_s1" class="digits">00</span>:
                                <span id="sw_ms1" class="digits">00</span></span><span class="speed-block"><span data-tr-detail="speed-blog">Speed</span>: <span id="wpm1">0</span> <span data-tr-detail="wpm">WPM</span></span>
                            </div>
                            <div class="col-md-4"></div>
                            <div class="col-md-12" style="text-align: center"><a id="download-link" style="margin-top: 5px; display: block" data-tr-detail="download_as_image">Download as image</a><a id="download-as-pdf-link" href="#" style="margin-top: 5px; display: block" onclick="share.createDownloadAsPDFLink(this, event);" data-tr-detail="download_as_PDF">Download as PDF</a></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin: 15px 0; text-align: center;"><b data-tr-detail="step1">Step 1.</b> <span data-tr-detail="what_do_you_want_to_say">What do you want to say?</span></div>
                        <div class="col-md-12" style="margin-bottom: 15px;">
                            <textarea class="form-control" id="sharing_text" rows="3" maxlength="116"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12" style="margin: 15px 0; text-align: center;"><b data-tr-detail="step2">Step 2.</b> <span data-tr-detail="where_do_you_want_to_share_it">Where do you want to share it?</span></div>
                        <div class="col-xs-6 col-md-6 share_component" id="share_to_facebook"><a href="#" style="float: right"><i class="icons_for_share_fb fa fa-facebook-square"></i> </a></div>
                        <div class="col-xs-6 col-md-6 share_component" id="share_to_twitter"><a href="#" style="float: left"><i class="icons_for_share_tw fa fa-twitter-square"></i> </a></div>
                    </div>
                    <div class="success_for_facebook_share" style="display: none;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="done">Done</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade keywordsBox" id="share-details-modal" tabindex="-1" role="dialog" aria-labelledby="share-details-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="share-details-modal-label" data-tr-detail="share">Share</h4>
                </div>
                <div class="modal-body table-data auto_scroll_down">
                    <div class="col-md-6">
                        <p class="share_modal_header"><b data-tr-detail="preview">Preview</b></p>
                        <div id="details_panel1">
                            <div class="panel panel-default" style="margin-bottom: 0">
                                <div class="panel-heading">
                                    <h3 class="panel-title" data-tr-detail="my_writing_details">My Writing Details</h3>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="badge" id="word_count1">0</span><span data-tr-detail="words_label">Words</span></li>
                                    <li class="list-group-item"><span class="badge" id="unique_word_count1">0</span><span data-tr-detail="unique_words">Unique Words</span></li>
                                    <li class="list-group-item"><span class="badge" id="character_count1">0</span><span data-tr-detail="characters_label">Characters</span></li>
                                    <li class="list-group-item"><span class="badge" id="character_count_no_spaces1">0</span><span data-tr-detail="characters_no_spaces">Characters (no spaces)</span></li>
                                    <li class="list-group-item"><span class="badge" id="sentence_count1">0</span><span data-tr-detail="sentences">Sentences</span></li>
                                    <li class="list-group-item"><span class="badge" id="longest_sentence_words1">0</span><span data-tr-detail="longest_sentence_words">Longest Sentence (words)</span></li>
                                    <li class="list-group-item"><span class="badge" id="shortest_sentence_words1">0</span><span data-tr-detail="shortest_sentence_words">Shortest Sentence (words)</span></li>
                                    <li class="list-group-item"><span class="badge" id="avg_sentence_words1">0</span><span data-tr-detail="avg_sentence_words">Avg. Sentence (words)</span></li>
                                    <li class="list-group-item"><span class="badge" id="avg_sentence_chars1">0</span><span data-tr-detail="avg_sentence_chars">Avg. Sentence (chars)</span></li>
                                    <li class="list-group-item"><span class="badge" id="avg_word_length1">0</span><span data-tr-detail="avg_word_length">Avg. Word Length</span></li>
                                    <li class="list-group-item"><span class="badge" id="paragraph_count1">0</span><span data-tr-detail="paragraphs">Paragraphs</span></li>
                                    <li class="list-group-item"><span class="badge" id="avg_page_by_word1">0</span><span data-tr-detail="pages">Pages</span></li>
                                    <li class="list-group-item"><span class="badge" id="count_words_syllables1">0</span><span data-tr-detail="syllables">Syllables</span></li>
                                    <li class="list-group-item"><span class="badge" id="lines_count1">0</span><span data-tr-detail="lines">Lines</span></li>
                                    <li class="list-group-item"><span class="badge" id="words_manuscript1">0</span><span data-tr-detail="words_publisher">Words (Publisher)</span></li>
                                    <li class="list-group-item"><span class="badge" id="reading_level1">N/A</span><span data-tr-detail="reading_level">Reading Level</span></li>
                                    <li class="list-group-item"><span class="badge" id="reading_time1">N/A</span><span data-tr-detail="reading_time">Reading Time</span></li>
                                    <li class="list-group-item"><span class="badge" id="speaking_time1">N/A</span><span data-tr-detail="speaking_time">Speaking Time</span></li>
                                    <li class="list-group-item"><span class="badge" id="hand_writing_time1">N/A</span><span data-tr-detail="hand_writing_time">Hand Writing Time</span></li>
                                </ul>
                            </div>
                        </div>
                        <div style="text-align: center"><a id="download-details-panel-link" style="margin-top: 5px; display: block" data-tr-detail="download_as_image">Download as image</a><a id="download-details-panel-as-pdf-link" href="#" style="margin-top: 5px; display: block" onclick="share.createDownloadAsPDFLink(this, event, 'details_panel1');" data-tr-detail="download_as_PDF">Download as PDF</a></div>
                    </div>
                    <div class="col-md-6">
                        <p class="share_modal_header" style="margin: 0"><b data-tr-detail="step1">Step 1.</b> <span data-tr-detail="what_do_you_want_to_share">What do you want to share?</span></p>
                        <ul class="task-list">
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_words_share" data-detail="word_count1" onclick="share.checkShareComponent(this);">
                                <label for="chk_words_share" class="ml10" data-tr-detail="words_label">Words</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_unique_words_share" data-detail="unique_word_count1" onclick="share.checkShareComponent(this);">
                                <label for="chk_unique_words_share" class="ml10" data-tr-detail="unique_words"> Unique Words</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_characters_share" data-detail="character_count1" onclick="share.checkShareComponent(this);">
                                <label for="chk_characters_share" class="ml10" data-tr-detail="characters_label">Characters</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_character_count_no_spaces_share" data-detail="character_count_no_spaces1" onclick="share.checkShareComponent(this);">
                                <label for="chk_character_count_no_spaces_share" class="ml10" data-tr-detail="characters_no_spaces"> Characters (no spaces)</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_sentences_share" data-detail="sentence_count1" onclick="share.checkShareComponent(this);">
                                <label for="chk_sentences_share" class="ml10" data-tr-detail="sentences">Sentences</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_longest_sentence_words_share" data-detail="longest_sentence_words1" onclick="share.checkShareComponent(this);">
                                <label for="chk_longest_sentence_words_share" class="ml10" data-tr-detail="longest_sentence_words"> Longest Sentence (words)</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_shortest_sentence_words_share" data-detail="shortest_sentence_words1" onclick="share.checkShareComponent(this);">
                                <label for="chk_shortest_sentence_words_share" class="ml10" data-tr-detail="shortest_sentence_words"> Shortest Sentence (words)</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_avg_sentence_words_share" data-detail="avg_sentence_words1" onclick="share.checkShareComponent(this);">
                                <label for="chk_avg_sentence_words_share" class="ml10" data-tr-detail="avg_sentence_words"> Avg. Sentence (words)</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_avg_sentence_chars_share" data-detail="avg_sentence_chars1" onclick="share.checkShareComponent(this);">
                                <label for="chk_avg_sentence_chars_share" class="ml10" data-tr-detail="avg_sentence_chars"> Avg. Sentence (chars)</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_avg_word_length_share" data-detail="avg_word_length1" onclick="share.checkShareComponent(this);">
                                <label for="chk_avg_word_length_share" class="ml10" data-tr-detail="avg_word_length"> Avg. Word Length</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_paragraphs_share" data-detail="paragraph_count1" onclick="share.checkShareComponent(this);">
                                <label for="chk_paragraphs_share" class="ml10" data-tr-detail="paragraphs">Paragraphs</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_pages_share" data-detail="avg_page_by_word1" onclick="share.checkShareComponent(this);">
                                <label for="chk_pages_share" class="ml10" data-tr-detail="pages">Pages</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_syllables_share" data-detail="count_words_syllables1" onclick="share.checkShareComponent(this);">
                                <label for="chk_syllables_share" class="ml10" data-tr-detail="syllables"> Syllables</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_lines_share" data-detail="lines_count1" onclick="share.checkShareComponent(this);">
                                <label for="chk_lines_share" class="ml10" data-tr-detail="lines">Lines</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_words_manuscript_share" data-detail="words_manuscript1" onclick="share.checkShareComponent(this);">
                                <label for="chk_words_manuscript_share" class="ml10" data-tr-detail="words_publisher"> Words (Publisher)</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_reading-level_share" data-detail="reading_level1" onclick="share.checkShareComponent(this);">
                                <label for="chk_reading-level_share" class="ml10" data-tr-detail="reading_level">Reading Level</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_reading_time_share" data-detail="reading_time1" onclick="share.checkShareComponent(this);">
                                <label for="chk_reading_time_share" class="ml10" data-tr-detail="reading_time"> Reading Time</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_speaking_time_share" data-detail="speaking_time1" onclick="share.checkShareComponent(this);">
                                <label for="chk_speaking_time_share" class="ml10" data-tr-detail="speaking_time"> Speaking Time</label>
                            </li>
                            <li class="task-list-item enabled">
                                <input type="checkbox" class="chk_share_component" id="chk_hand_writing_time_share" data-detail="hand_writing_time1" onclick="share.checkShareComponent(this);">
                                <label for="chk_hand_writing_time_share" class="ml10" data-tr-detail="hand_writing_time">Hand Writing Time</label>
                            </li>
                        </ul>
                        <p class="share_modal_header" style="margin-top: 15px"><b data-tr-detail="step2">Step 2.</b> <span data-tr-detail="what_do_you_want_to_say">What do you want to say?</span></p>
                        <textarea class="form-control" rows="5" id="text_for_details_sharing" maxlength="116" data-tr-detail="text_for_details_sharing">My writing details at https://wordcounter.net/ #wordcount @wordcounter_net</textarea>
                        <p class="share_modal_header" style="margin: 20px 0 0 0"><b data-tr-detail="step3">Step 3.</b> <span data-tr-detail="where_do_you_want_to_share_it">Where do you want to share it?</span></p>
                        <div class="col-xs-6 col-md-6 share_component"><a href="#" style="float: right" onclick="share.shareImageToFb(event, this, 'details_panel1');"><i class="icons_for_share_fb fa fa-facebook-square"></i> </a></div>
                        <div class="col-xs-6 col-md-6 share_component"><a href="#" style="float: left" onclick="share.twitterShare(event, this, 'details_panel1');"><i class="icons_for_share_tw fa fa-twitter-square"></i> </a></div>
                    </div>
                    <div class="col-md-12 success_for_facebook_share" style="display: none;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="done">Done</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade keywordsBox" id="share-keyword-density-modal" tabindex="-1" role="dialog" aria-labelledby="share-keyword-density-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="share-keyword-density-modal-label" data-tr-detail="share">Share</h4>
                </div>
                <div class="modal-body table-data auto_scroll_down">
                    <div class="col-md-6">
                        <p class="share_modal_header"><b data-tr-detail="preview">Preview</b></p>
                        <div class="panel panel-default keywordsBox" id="kwd-density1" style="margin-bottom: 0">
                            <div class="panel-heading">
                                <h3 class="panel-title" data-tr-detail="keyword_density">
                                                Keyword Density
                                            </h3>
                            </div>
                            <div id="keywords_for_share" class="list-group table-data" style="max-height:300px; overflow:auto"></div>
                        </div>
                        <div class="col-md-12" style="text-align: center"><a id="download-keyword-density-link" style="margin-top: 5px; display: block" data-tr-detail="download_as_image">Download as image</a><a id="download-keyword-density-as-pdf-link" href="#" style="margin-top: 5px; display: block" onclick="share.createDownloadAsPDFLink(this, event, 'kwd-density1');" data-tr-detail="download_as_PDF">Download as PDF</a></div>
                    </div>
                    <div class="col-md-6">
                        <p class="share_modal_header"><b data-tr-detail="step1">Step 1.</b> <span data-tr-detail="what_do_you_want_to_say">What do you want to say?</span></p>
                        <textarea class="form-control" rows="5" id="text_for_keyword_density_sharing" maxlength="116" data-tr-detail="text_for_keyword_density_sharing">Check out my keyword density for my writing at https://wordcounter.net/ #wordcount @wordcounter_net</textarea>
                        <p class="share_modal_header" style="margin: 20px 0 0 0"><b data-tr-detail="step2">Step 2.</b> <span data-tr-detail="where_do_you_want_to_share_it">Where do you want to share it?</span></p>
                        <div class="col-xs-6 col-md-6 share_component"><a href="#" style="float: right" onclick="share.shareImageToFb(event, this, 'kwd-density1');"><i class="icons_for_share_fb fa fa-facebook-square"></i> </a></div>
                        <div class="col-xs-6 col-md-6 share_component"><a href="#" style="float: left" onclick="share.twitterShare(event, this, 'kwd-density1');"><i class="icons_for_share_tw fa fa-twitter-square"></i> </a></div>
                    </div>
                    <div class=" col-md-12 success_for_facebook_share" style="display: none;"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="done">Done</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="upload-file-modal" tabindex="-1" role="dialog" aria-labelledby="upload-file-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="upload-file-modal-label" data-tr-detail="upload_file">Upload File</h4>
                </div>
                <div class="modal-body">
                    <div class="error_for_uploading_file" style="display: none; margin-top: 15px"></div>
                    <p><span data-tr-detail="click_the_upload_button_below_to_select_a_text_document">Click the upload button below to select a text document.</span>
                        <br /> <span data-tr-detail="supported_formats_are_PDF_TXT_DOC_DOCX_ODT">Supported formats are PDF, TXT, DOC, DOCX, ODT.</span></p>
                    <div id="file-uploader"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="save-to-drive-modal" tabindex="-1" role="dialog" aria-labelledby="save-to-drive-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="save-to-drive-modal-label" data-tr-detail="save_to_drive_modal">Save To Drive</h4>
                </div>
                <div class="modal-body">
                    <p data-tr-detail="save_to_drive_text">Use this button to save your current writing to Google Drive</p>
                    <label for="file_name" data-tr-detail="file_name">File Name</label>
                    <input class="form-control" data-tr-detail="my_saved_draft" value="My Saved Draft" id="file_name">
                    <div>
                        <input type="checkbox" id="include_details" style="margin: 10px 5px 0 0">
                        <label for="include_details" data-tr-detail="include_details">Include details</label>
                    </div>
                    <div id="message_for_save_to_google_drive"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" name="save" onclick="sending();" style="margin-top: 15px; margin-bottom: 15px" data-tr-detail="save_modal_btn">Save</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="cancel">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="options-modal" tabindex="-1" role="dialog" aria-labelledby="options-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="options-modal-label" data-tr-detail="options_modal">Options</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 errorMsg"></div>
                    </div>
                    <form data-persist="garlic" id="options" class="keywordsBox">
                        <div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="active"><a href="#general" aria-controls="general" role="tab" data-toggle="tab" data-tr-detail="general">General</a></li>
                                <li><a href="#details" aria-controls="details" role="tab" data-toggle="tab" data-tr-detail="details_modal_tab"> Details</a></li>
                                <li><a href="#keyword-density" aria-controls="keyword-density" role="tab" data-toggle="tab" data-tr-detail="keyword_density_modal_tab"> Keyword Density</a></li>
                                <li><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab" data-tr-detail="activity_modal_tab"> Activity</a></li>
                                <li><a href="#buttons" aria-controls="buttons" role="tab" data-toggle="tab" data-tr-detail="buttons"> Buttons</a></li>
                            </ul>
                            <div class="tab-content option-content option-tab table-data">
                                <div role="tabpanel" class="tab-pane fade in active" id="general">
                                    <div class="dropdown">
                                        <div>
                                            <label for="theme_dropdown" data-tr-detail="theme">Theme</label>
                                        </div>
                                        <div class="col-md-12 pdl0 pdr0 select_after">
                                            <select id="theme_dropdown" class="form-control" onchange="editor.changeOption({theme: $(this).val()});">
                                                <option value="default" selected="selected" data-tr-detail="default">Default</option>
                                                <option value="dark" data-tr-detail="dark">Dark</option>
                                                <option value="blue" data-tr-detail="light_blue">Light blue</option>
                                                <option value="dark_blue" data-tr-detail="blue">Blue</option>
                                                <option value="yellow" data-tr-detail="light_yellow">Light yellow</option>
                                                <option value="green" data-tr-detail="light_green">Light green</option>
                                                <option value="dark_green" data-tr-detail="green">Green</option>
                                                <option value="pink" data-tr-detail="light_pink">Light pink</option>
                                                <option value="dark_red" data-tr-detail="red">Red</option>
                                                <option value="purple" data-tr-detail="light_purple">Light purple</option>
                                                <option value="dark_purple" data-tr-detail="purple">Purple</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="font_dropdown" data-tr-detail="font">Font</label>
                                        </div>
                                        <div class="col-md-12 pdl0 pdr0 select_after">
                                            <select id="font_dropdown" class="form-control" onchange="editor.changeOption({font: $(this).val()});">
                                                <option value="Arial" selected="selected">Arial</option>
                                                <option value="Verdana">Verdana</option>
                                                <option value="Impact">Impact</option>
                                                <option value="Trebuchet MS">Trebuchet MS</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Times New Roman">Times New Roman</option>
                                                <option value="Courier New">Courier New</option>
                                                <option value="Comic Sans MS">Comic Sans MS</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="date_format_dropdown" data-tr-detail="date_format">Date Format</label>
                                        </div>
                                        <div class="col-md-12 pdl0 pdr0 select_after">
                                            <select id="date_format_dropdown" class="form-control" onchange="editor.changeOption({dateFormat: $(this).val()});">
                                                <option value="Y-m-d" data-tr-detail="date_format1">2020-04-29</option>
                                                <option value="M d y" data-tr-detail="date_format2">Apr 29 20</option>
                                                <option value="M d Y" data-tr-detail="date_format3">Apr 29 2020</option>
                                                <option value="d-m-y" data-tr-detail="date_format4">29-04-20</option>
                                                <option value="d-m-Y" data-tr-detail="date_format5">29-04-2020</option>
                                                <option value="d/m/Y" data-tr-detail="date_format6">29/04/2020</option>
                                                <option value="d M y" data-tr-detail="date_format7">29 Apr 20</option>
                                                <option value="D j/n/Y" data-tr-detail="date_format8">Wed 29/4/2020</option>
                                                <option value="jS of F Y" data-tr-detail="date_format9">29th of April 2020</option>
                                                <option value="l jS of F" data-tr-detail="date_format10">Wednesday 29th of April</option>
                                            </select>
                                            <select id="date_format_dropdown_hidden" class="form-control">
                                                <option value="Y-m-d" data-tr-detail-hidden="date_format1">2020-04-29</option>
                                                <option value="M d y" data-tr-detail-hidden="date_format2">Apr 29 20</option>
                                                <option value="M d Y" data-tr-detail-hidden="date_format3">Apr 29 2020</option>
                                                <option value="d-m-y" data-tr-detail-hidden="date_format4">29-04-20</option>
                                                <option value="d-m-Y" data-tr-detail-hidden="date_format5">29-04-2020</option>
                                                <option value="d/m/Y" data-tr-detail-hidden="date_format6">29/04/2020</option>
                                                <option value="d M y" data-tr-detail-hidden="date_format7">29 Apr 20</option>
                                                <option value="D j/n/Y" data-tr-detail-hidden="date_format8">Wed 29/4/2020</option>
                                                <option value="jS of F Y" data-tr-detail-hidden="date_format9">29th of April 2020</option>
                                                <option value="l jS of F" data-tr-detail-hidden="date_format10">Wednesday 29th of April</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="time_format_dropdown" data-tr-detail="time_format">Time Format</label>
                                        </div>
                                        <div class="col-md-12 pdl0 pdr0 select_after">
                                            <select id="time_format_dropdown" class="form-control" onchange="editor.changeOption({timeFormat: $(this).val()});">
                                                <option value="g:i A">8:20 PM</option>
                                                <option value="h:i A" data-tr-detail="with_a_leading_zero">08:20 PM (with a leading zero)</option>
                                                <option value="G:i" data-tr-detail="24_hour">20:20 (24 hour)</option>
                                                <option value="H:i" data-tr-detail="24_hour_with_a_leading_zero">20:20 (24-hour with a leading zero)</option>
                                            </select>
                                            <select id="time_format_dropdown_hidden" class="form-control" onchange="editor.changeOption({timeFormat: $(this).val()});">
                                                <option value="g:i A">8:20 PM</option>
                                                <option value="h:i A" data-tr-detail-hidden="with_a_leading_zero">08:20 PM (with a leading zero)</option>
                                                <option value="G:i" data-tr-detail-hidden="24_hour">20:20 (24 hour)</option>
                                                <option value="H:i" data-tr-detail-hidden="24_hour_with_a_leading_zero">20:20 (24-hour with a leading zero)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="autoResizeTextArea" onchange="editor.changeOption({boxHeight:{'boxAutoSize': $(this).prop('checked')}});" checked="checked"> <span data-tr-detail="automatically_resize_the_text_box_as_I_type">Automatically resize the text box as I type</span></label>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="details">
                                    <div class="checkbox">
                                        <label style="font-weight:bold">
                                            <input type="checkbox" id="show-details" onclick="editor.changeOption({'detailsPanel': $(this).prop('checked')}); editor.checkCollapses();"> <span data-tr-detail="turn_on_details_panel">Turn on Details panel</span></label>
                                    </div>
                                    <p data-tr-detail="details_tab_text">You can turn on or off different counting options here.</p>
                                    <div class="row" id="details_buttons">
                                        <div class="col-md-6" style="padding-right: 10px">
                                            <ul class="task-list">
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_avg_sentence_chars" data-detail="avg_sentence_chars">
                                                    <label for="chk_avg_sentence_chars" class="ml10" data-tr-detail="avg_sentence_chars"> Avg. Sentence (chars)</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_avg_sentence_words" data-detail="avg_sentence_words">
                                                    <label for="chk_avg_sentence_words" class="ml10" data-tr-detail="avg_sentence_words"> Avg. Sentence (words)</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_avg_word_length" data-detail="avg_word_length">
                                                    <label for="chk_avg_word_length" class="ml10" data-tr-detail="avg_word_length"> Avg. Word Length</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_character_count" data-detail="character_count">
                                                    <label for="chk_character_count" class="ml10" data-tr-detail="characters_label"> Characters</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_character_count_no_spaces" data-detail="character_count_no_spaces">
                                                    <label for="chk_character_count_no_spaces" class="ml10" data-tr-detail="characters_no_spaces"> Characters (no spaces)</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_hand_writing_time" data-detail="hand_writing_time">
                                                    <label for="chk_hand_writing_time" class="ml10" data-tr-detail="hand_writing_time"> Hand Writing Time</label><a style="margin-left: 5px" role="button" data-toggle="collapse" href="#collapseForHandWritingTime" aria-expanded="false" aria-controls="collapseForHandWritingTime"><i class="fa fa-wrench" style="line-height:1.1"></i> </a>
                                                    <div class="collapse" id="collapseForHandWritingTime">
                                                        <div class="well">
                                                            <div>
                                                                <label for="letters_per_minute" class="mb0 label_width_for_letters_per_minute" data-tr-detail="letters_per_minute_label">Letters Per Minute </label>
                                                                <input class="form-control" id="letters_per_minute" value="68" type="number" min="10" max="400" onchange="editor.changeOption({'lettersPerMinuteForHandWriting': $(this).val()});" onkeyup="editor.changeOption({'lettersPerMinuteForHandWriting': $(this).val()});">
                                                            </div>
                                                            <div style="margin-top: 10px;">
                                                                <button type="button" class="btn btn-default" data-number="26" onclick="editor.setLPM(this);" data-tr-detail="slow">Slow</button>
                                                                <button type="button" class="btn btn-default" data-number="68" onclick="editor.setLPM(this);" data-tr-detail="normal">Normal</button>
                                                                <button type="button" class="btn btn-default" data-number="113" onclick="editor.setLPM(this);" data-tr-detail="fast">Fast</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="task-list-item enabled mb10 mt10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_lines_count" data-detail="lines_count">
                                                    <label for="chk_lines_count" class="ml10" data-tr-detail="lines"> Lines</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_longest_sentence_words" data-detail="longest_sentence_words">
                                                    <label for="chk_longest_sentence_words" class="ml10" data-tr-detail="longest_sentence_words"> Longest Sentence (words)</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_avg_page_by_word" data-detail="avg_page_by_word">
                                                    <label for="chk_avg_page_by_word" class="ml10" data-tr-detail="pages"> Pages</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_paragraph_count" data-detail="paragraph_count">
                                                    <label for="chk_paragraph_count" class="ml10" data-tr-detail="paragraphs"> Paragraphs</label>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul class="task-list">
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_reading_level" data-detail="reading_level">
                                                    <label for="chk_reading_level" class="ml10" data-tr-detail="reading_level"> Reading Level</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_reading_time" data-detail="reading_time">
                                                    <label for="chk_reading_time" class="ml10" data-tr-detail="reading_time"> Reading Time</label><a style="margin-left: 5px" role="button" data-toggle="collapse" href="#collapseForReadingTime" aria-expanded="false" aria-controls="collapseForReadingTime"><i class="fa fa-wrench" style="line-height:1.1"></i> </a>
                                                    <div class="collapse" id="collapseForReadingTime">
                                                        <div class="well">
                                                            <div>
                                                                <label for="words_per_minut_reading" class="mb0 label_width_for_words_per_minut" data-tr-detail="words_per_minute_label">Words Per Minute </label>
                                                                <input class="form-control" id="words_per_minut_reading" value="275" type="number" min="1" onchange="editor.changeOption({'wordsPerMinuteForReading': $(this).val()});" onkeyup="editor.changeOption({'wordsPerMinuteForReading': $(this).val()});">
                                                            </div>
                                                            <div style="margin-top: 10px;">
                                                                <button type="button" class="btn btn-default" data-number="200" onclick="editor.setWPM(this, 'reading');" data-tr-detail="slow">Slow</button>
                                                                <button type="button" class="btn btn-default" data-number="275" onclick="editor.setWPM(this, 'reading');" data-tr-detail="normal">Normal</button>
                                                                <button type="button" class="btn btn-default" data-number="350" onclick="editor.setWPM(this, 'reading');" data-tr-detail="fast">Fast</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_sentence_count" data-detail="sentence_count">
                                                    <label for="chk_sentence_count" class="ml10" data-tr-detail="sentences"> Sentences</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_shortest_sentence_words" data-detail="shortest_sentence_words">
                                                    <label for="chk_shortest_sentence_words" class="ml10" data-tr-detail="shortest_sentence_words"> Shortest Sentence (words)</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_speaking_time" data-detail="speaking_time">
                                                    <label for="chk_speaking_time" class="ml10" data-tr-detail="speaking_time"> Speaking Time</label>
                                                    <a style="margin-left: 5px" role="button" data-toggle="collapse" href="#collapseForSpeakingTime" aria-expanded="false" aria-controls="collapseForSpeakingTime"><i class="fa fa-wrench" style="line-height:1.1"></i> </a>
                                                    <div class="collapse" id="collapseForSpeakingTime">
                                                        <div class="well">
                                                            <div>
                                                                <label for="words_per_minut_speaking" class="mb0 label_width_for_words_per_minut" data-tr-detail="words_per_minute_label">Words Per Minute </label>
                                                                <input class="form-control" id="words_per_minut_speaking" value="150" type="number" min="1" onchange="editor.changeOption({'wordsPerMinuteForSpeaking': $(this).val()});" onkeyup="editor.changeOption({'wordsPerMinuteForSpeaking': $(this).val()});">
                                                            </div>
                                                            <div style="margin-top: 10px;">
                                                                <button type="button" class="btn btn-default" data-number="100" onclick="editor.setWPM(this, 'speaking');" data-tr-detail="slow">Slow</button>
                                                                <button type="button" class="btn btn-default" data-number="150" onclick="editor.setWPM(this, 'speaking');" data-tr-detail="normal">Normal</button>
                                                                <button type="button" class="btn btn-default" data-number="200" onclick="editor.setWPM(this, 'speaking');" data-tr-detail="fast">Fast</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_count_words_syllables" data-detail="count_words_syllables">
                                                    <label for="chk_count_words_syllables" class="ml10" data-tr-detail="syllables"> Syllables</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_unique_word_count" data-detail="unique_word_count">
                                                    <label for="chk_unique_word_count" class="ml10" data-tr-detail="unique_words"> Unique Words</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_word_count" data-detail="word_count">
                                                    <label for="chk_word_count" class="ml10" data-tr-detail="words_label"> Words</label>
                                                </li>
                                                <li class="task-list-item enabled mb10">
                                                    <input type="checkbox" data-size="small" class="task-list-item-checkbox chk-details" value="on" id="chk_words_manuscript" data-detail="words_manuscript">
                                                    <label for="chk_words_manuscript" class="ml10" data-tr-detail="words_publisher"> Words (Publisher)</label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="keyword-density">
                                    <div class="checkbox">
                                        <label style="font-weight:bold">
                                            <input type="checkbox" id="show-keyword-density" onclick="editor.changeOption({'keywordDensityPanel': $(this).prop('checked')}); editor.checkCollapses();"> <span data-tr-detail="turn_on_keyword_density_panel">Turn on Keyword Density panel</span></label>
                                    </div>
                                    <div class="textbox"><span data-tr-detail="show">Show</span>
                                        <input type="number" class="form-control input-sm" id="keywordDensityAmount" value="10" min="0" max="100" onchange="if($(this).val() >= 0 && $(this).val() <=100) editor.changeOption({'keywordDensityAmount': $(this).val()});" onkeyup="if($(this).val() >= 0 && $(this).val() <=100) editor.changeOption({'keywordDensityAmount': $(this).val()});"> <span data-tr-detail="keywords_in_the">keywords in the</span> <i data-tr-detail="keyword_density">Keyword Density</i> <span data-tr-detail="box">box</span></div>
                                    <div class="textbox" style="margin-top: 15px"><span data-tr-detail="find">Find</span>
                                        <input type="number" class="form-control input-sm" id="keywordDensityConsecutive" value="1" min="1" max="10" onchange="if($(this).val() >= 1 && $(this).val() <=10) editor.changeOption({'keywordDensityConsecutive': $(this).val()});" onkeyup="if($(this).val() >= 1 && $(this).val() <=10) editor.changeOption({'keywordDensityConsecutive': $(this).val()});"> <span data-tr-detail="consecutive_words">Consecutive Words</span></div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="stopWordsCommon" onchange="editor.changeOption({'keywordDensityWordsCommon': $(this).prop('checked')});"> <span data-tr-detail="include_common_words_in_word_density_count">Include common words in word density count</span></label>
                                    </div>
                                    <button class="btn btn-primary" id="reset_ignored_words" onclick="editor.resetIgnoredWords(event);"><span data-tr-detail="reset_ignored_words">Reset Ignored Words</span> (<span id="count_of_adding_words"></span>)</button>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="activity">
                                    <div class="checkbox">
                                        <label style="font-weight:bold">
                                            <input type="checkbox" id="show-activity" onclick="editor.changeOption({'activityPanel': $(this).prop('checked')}); editor.checkCollapses();"> <span data-tr-detail="turn_on_activity_panel">Turn on Activity panel</span></label>
                                    </div>
                                    <div class="textbox"><span data-tr-detail="show">Show</span>
                                        <input class="form-control" type="number" id="activityAmount" style="display: inline-block; width: 15%; border-top-right-radius: 0; border-bottom-right-radius: 0; border-right: none" value="5" min="0" max="25" onchange="if($(this).val() >= 0 && $(this).val() <=25) {editor.changeOption({'activityAmount': $(this).val()}); editor.showActivities();}" onkeyup="if($(this).val() >= 0 && $(this).val() <=25) { editor.changeOption({'activityAmount': $(this).val()}); editor.showActivities(); }">
                                        <span class="select_after"><select class="form-control" id="activityType" style="display: inline-block; width: 20%; border-top-left-radius: 0; border-bottom-left-radius: 0" onchange="editor.changeOption({'activityType': $(this).val()}); editor.showActivities();"><option value="daily" data-tr-detail="days">days</option><option value="weekly" data-tr-detail="weeks">weeks</option><option value="monthly" data-tr-detail="months">months</option><option value="yearly" data-tr-detail="years">years</option></select></span>
                                        <span data-tr-detail="in_the_acivity_box">in the Activity box</span>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="buttons">
                                    <p data-tr-detail="buttons_tab_text">You can turn on or off different buttons provided for different functionalities.</p>
                                    <div class="row">
                                        <ul class="task-list">
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-activity-btn" data-detail="activity-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-activity-btn" class="mb0" data-tr-detail="activity"> ACTIVITY </label><span class="help-block mt0 mb0" data-tr-detail="activity_btn_text">Keeps track of your word and character count.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-revisions-btn" data-detail="revisions-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-revisions-btn" class="mb0" data-tr-detail="auto_save"> AUTO-SAVE </label><span class="help-block mt0 mb0" data-tr-detail="auto_save_btn_text">When turned on, WordCounter will automatically save your document every 30 seconds. You can then switch back to previous versions of your document at any time.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-case-btn" data-detail="case-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-case-btn" class="mb0" data-tr-detail="case"> CASE </label><span class="help-block mt0 mb0" data-tr-detail="case_btn_text">Gives different case options. Applies to your entire document or only the text you select.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-clean-text-btn" data-detail="clean-text-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-clean-text-btn" class="mb0" data-tr-detail="clean_text"> CLEAN TEXT </label><span class="help-block mt0 mb0" data-tr-detail="clean_text_btn_text">After pasting a document into WordCounter, this will clean it up by removing invalid characters, word wrapping issues and unneeded new lines.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-clear-btn" data-detail="clear-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-clear-btn" class="mb0" data-tr-detail="clear"> CLEAR </label><span class="help-block mt0 mb0" id="clear_requires" data-tr-detail="clear_btn_text">Delete all of the text in your document.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-download-btn" data-detail="download-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-download-btn" class="mb0" data-tr-detail="download"> DOWNLOAD </label><span class="help-block mt0 mb0" data-tr-detail="download_btn_text">Download your written text (PDF, TXT, DOC) to your device.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="off" id="btn-find-and-replace-btn" data-detail="find-and-replace-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-find-and-replace-btn" class="mb0" data-tr-detail="find_and_replace"> FIND AND REPLACE </label><span class="help-block mt0 mb0" data-tr-detail="find_and_replace_btn_text">Find and replace any words or sentences you want.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="off" id="btn-goal-btn" data-detail="goal-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-goal-btn" class="mb0" data-tr-detail="goal"> GOAL </label><span class="help-block mt0 mb0" data-tr-detail="goal_btn_text">Set writing goals (such as 500 words) and WordCounter will let you know when you've reached them. You can also share and embed your goals.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-print-btn" data-detail="print-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-print-btn" class="mb0" data-tr-detail="print"> PRINT </label><span class="help-block mt0 mb0" data-tr-detail="print_btn_text">Print your document quickly and easily.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-text-to-speech-btn" data-detail="text-to-speech-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-text-to-speech-btn" class="mb0"><span data-tr-detail="proof_read">PROOF READ</span>&nbsp;
                                                        <a role="button" data-toggle="collapse" href="#collapseForRead" aria-expanded="false" aria-controls="collapseForRead"><i class="fa fa-wrench" style="line-height:1.1"></i> </a></label><span class="help-block mt0 mb0" id="proof_read_requires" data-tr-detail="proof_read_btn_text">WordCounter reads your document back to you. Make sure to turn up your volume!</span>
                                                    <div class="collapse" id="collapseForRead">
                                                        <div class="well">
                                                            <div class="mb10">
                                                                <label for="read_rate" class="mb0 mr10 label_width_for_read" data-tr-detail="rate"> Rate </label>
                                                                <input class="form-control" id="read_rate" value="1" type="number" min="0.1" max="10" step="0.1" onchange="editor.changeOption({'readRate': $(this).val()});" onkeyup="editor.changeOption({'readRate': $(this).val()});"><span class="help-block mt0 mb0 valid_values" data-tr-detail="valid_values_are_0.1_to_10">Valid values are 0.1 to 10</span></div>
                                                            <div class="mb10">
                                                                <label for="read_pitch" class="mb0 mr10 label_width_for_read" data-tr-detail="pitch"> Pitch </label>
                                                                <input class="form-control" id="read_pitch" value="1" type="number" min="0" max="2" onchange="editor.changeOption({'readPitch': $(this).val()});" onkeyup="editor.changeOption({'readPitch': $(this).val()});"><span class="help-block mt0 mb0 valid_values" data-tr-detail="valid_values_are_0_to_2">Valid values are 0 to 2</span></div>
                                                            <label for="read_voices" class="mb0 mr10 label_width_for_read" data-tr-detail="voices"> Voices </label>
                                                            <select class=" form-control" id="read_voices" onchange="editor.changeOption({'readVoices': $(this).val()});" onkeyup="editor.changeOption({'readVoices': $(this).val()});"></select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-redo-btn" data-detail="redo-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-redo-btn" class="mb0" data-tr-detail="redo"> REDO </label><span class="help-block mt0 mb0" id="redo_requires" data-tr-detail="redo_btn_text">Redo your last changes. Click multiple times to redo multiple changes.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-save-btn" data-detail="save-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-save-btn" class="mb0" data-tr-detail="save"> SAVE </label><span class="help-block mt0 mb0" data-tr-detail="save_btn_text">Saves your text for later retrieval. Be sure and click the SAVE button each time you want to save.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-save-to-drive-btn" data-detail="save-to-drive-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-save-to-drive-btn" class="mb0" data-tr-detail="save_to_drive"> SAVE TO DRIVE </label><span class="help-block mt0 mb0" data-tr-detail="save_to_drive_btn_text">Saves your document to Google Drive. Great for backup purposes.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-speed-btn" data-detail="speed-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-speed-btn" class="mb0" data-tr-detail="speed"> SPEED </label><span class="help-block mt0 mb0" data-tr-detail="speed_btn_text">Use a timer to see how fast you're typing.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-spell-btn" data-detail="spell-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-spell-btn" class="mb0" data-tr-detail="spell"> SPELL </label><span class="help-block mt0 mb0" data-tr-detail="spell_btn_text">A powerful spelling and grammar checker for your document.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-speech-btn" data-detail="speech-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-speech-btn" class="mb0"><span data-tr-detail="talk_to_type">TALK TO TYPE</span>&nbsp;
                                                        <a role="button" data-toggle="collapse" href="#collapseForSpeech" aria-expanded="false" aria-controls="collapseForSpeech"><i class="fa fa-wrench" style="line-height:1.1"></i> </a></label><span class="help-block mt0 mb0" id="talk_to_type_requires" data-tr-detail="talk_to_type_btn_text">Speak into your microphone and WordCounter will type for you.</span>
                                                    <div class="collapse" id="collapseForSpeech">
                                                        <div class="well">
                                                            <div class="mb10">
                                                                <label for="select_language" class="mb0 mr10 label_width_for_speech" data-tr-detail="language"> Language </label>
                                                                <select class="form-control" id="select_language" onchange="editor.updateCountry(); editor.changeOption({'selectLanguage': $(this).val()});"></select>
                                                            </div>
                                                            <div>
                                                                <label for="select_dialect" class="mr10 label_width_for_speech" data-tr-detail="country"> Country </label>
                                                                <select class="form-control" id="select_dialect" onchange="editor.changeOption({'selectDialect': $(this).val()});" onkeyup="editor.changeOption({'selectDialect': $(this).val()});"></select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-thesaurus-btn" data-detail="thesaurus-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-thesaurus-btn" class="mb0" data-tr-detail="thesaurus"> THESAURUS </label><span class="help-block mt0 mb0" data-tr-detail="thesaurus_btn_text">Select (with your mouse) a word in your document and click the thesaurus button to get a list of synonyms.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-undo-btn" data-detail="undo-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-undo-btn" class="mb0" data-tr-detail="undo"> UNDO </label><span class="help-block mt0 mb0" id="undo_requires" data-tr-detail="undo_btn_text">Undo your last changes. Click multiple times to undo multiple changes.</span></div>
                                            </li>
                                            <li class="task-list-item enabled mb10">
                                                <div class="col-sm-3 col-xs-12 pull-left">
                                                    <input data-size="small" type="checkbox" class="task-list-item-checkbox btn_details" value="on" id="btn-upload-btn" data-detail="upload-btn">
                                                </div>
                                                <div class="col-sm-9 col-xs-12 pull-left">
                                                    <label for="btn-upload-btn" class="mb0" data-tr-detail="upload"> UPLOAD </label><span class="help-block mt0 mb0" data-tr-detail="upload_btn_text">Upload your existing document (PDF, TXT, DOC, DOCX, ODT) into WordCounter.</span></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="done">Done</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="set-goal-modal" role="dialog" tabindex="-1" aria-labelledby="set-goal-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="set-goal-modal-label" data-tr-detail="goals">Goals</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12 errorMsgBox"></div>
                        <div class="col-xs-12" id="create_new_goal">
                            <h4 data-tr-detail="new_goal">New Goal</h4>
                            <div class="col-xs-12">
                                <p data-tr-detail="new_goal_text">Enter the number of characters, words, sentences or paragraphs you want to set for a goal.</p>
                                <form onsubmit="if(goal.checkTypeAccessibility()){editor.createGoal();} return false;">
                                    <div class="col-sm-4 col-xs-3 pr0">
                                        <input type="number" class="form-control" data-tr-detail="quantity" placeholder="Quantity" id="goalQty" min="0" max="100000" onkeydown="editor.setGoalQuantity(event, this);">
                                    </div>
                                    <div class="col-sm-3 col-xs-3 pl0 pr0 select_after">
                                        <select class="form-control" id="goalType" onchange="editor.setQuantityPlaceholder(this);">
                                            <option value="word_count" data-tr-detail="words_label" data-value="Words">Words</option>
                                            <option value="character_count" data-tr-detail="characters_label" data-value="Characters">Characters</option>
                                            <option value="sentence_count" data-tr-detail="sentences" data-value="Sentences">Sentences</option>
                                            <option value="paragraph_count" data-tr-detail="paragraphs" data-value="Paragraphs">Paragraphs</option>
                                            <option value="avg_page_by_word" data-tr-detail="pages" data-value="Pages">Pages</option>
                                            <option value="reading_time" data-tr-detail="reading_time" data-value="Reading Time">Reading Time</option>
                                            <option value="speaking_time" data-tr-detail="speaking_time" data-value="Speaking Time">Speaking Time</option>
                                            <option value="words_manuscript" data-tr-detail="publisher_words" data-value="Publisher Words">Publisher Words</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xs-3 pl0 pr0 select_after">
                                        <select class="form-control" id="goalLengthType">
                                            <option value="min" data-tr-detail="minimum">Minimum</option>
                                            <option value="max" data-tr-detail="maximum">Maximum</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-2 col-xs-3">
                                        <button type="submit" class="btn btn-info" id="set-goal-btn" data-tr-detail="create">Create</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-xs-12" style="margin-top: 15px;">
                            <h4 data-tr-detail="existing_goals">Existing Goals</h4>
                            <div class="col-xs-12">
                                <p data-tr-detail="existing_goals_text">You can set, delete and edit your goals.</p>
                                <div id="existing_goals" class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="embed-goal-modal" role="dialog" tabindex="-1" aria-labelledby="embed-goal-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="embed-goal-modal-label" data-tr-detail="embed_goal_modal_title">Embed Your Goal into your Web Page</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="mb100">
                                <div class="well" data-tr-detail="embed_goal_modal_text">
                                    Here you can build your very own goal progress bar that you can put on your website, blog or in your signature on other websites. Choose a size and color, then click Save. Finally, click the View Code button to get your code.
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-3" style="margin-left: 25%;"><span data-tr-detail="size">Size</span>
                                        <select id="size" name="font" class="form-control" onchange="setGoalButtonSize(this); showHide();">
                                            <option value="small" data-tr-detail="small">Small</option>
                                            <option value="middle" data-tr-detail="medium">Medium</option>
                                            <option value="large" data-tr-detail="large">Large</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="col" data-tr-detail="color">Color</label>
                                        <select id="col" name="col" class="form-control" onchange="setGoalButtonColor(this); showHide();">
                                            <option value="blue" selected data-tr-detail="blue_default">Blue (default)</option>
                                            <option value="red" data-tr-detail="red">Red</option>
                                            <option value="green" data-tr-detail="green">Green</option>
                                            <option value="yellow" data-tr-detail="yellow">Yellow</option>
                                            <option value="pink" data-tr-detail="pink">Pink</option>
                                            <option value="cyan" data-tr-detail="cyan">Cyan</option>
                                            <option value="brown" data-tr-detail="brown">Brown</option>
                                            <option value="purple" data-tr-detail="purple">Purple</option>
                                            <option value="orange" data-tr-detail="orange">Orange</option>
                                        </select>
                                    </div>
                                </div>
                                <div style="padding-right: 15px; padding-left: 15px">
                                    <div class="row goal_button">
                                        <div class="col-xs-12" id="embed_goal_button_area">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" id="goal-progress-bar">
                                                    <div></div>
                                                </div>
                                                <div id="percent_text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 save_changes" style="text-align: center;">
                                        <div class="copy_and_save">
                                            <button id="embed-goal-btn" class="btn btn-success" data-tr-detail="save_and_get_code">Save and Get Code</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="embed_code_txt">
                                    <div contenteditable="true" id="embed_input"></div>
                                    <br />
                                    <button class="btn btn-default" id="copy-text-btn"><span class="glyphicon glyphicon-copy"></span><span data-tr-detail="copy">Copy</span></button>&nbsp;
                                    <button id="embed-goal-code-hide-btn" class="btn btn-info" data-tr-detail="hide_code">Hide Code</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="activity-modal" tabindex="-1" role="dialog" aria-labelledby="activity-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="activity-modal-label" data-tr-detail="activities">Activity</h4>
                </div>
                <div class="modal-body">
                    <div class="error_for_save_word_count" style="display: none; margin-top: 15px"></div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-top: 15px;">
                            <p data-tr-detail="activity_modal_text">Record your count of words and characters.</p>
                            <h4 data-tr-detail="new_activity">New Activity</h4>
                            <div class="col-xs-12">
                                <div class="col-xs-5">
                                    <label for="words_record_input" data-tr-detail="words_label">Words</label>
                                    <input id="words_record_input" type="number" min="0" value="0" class="form-control input-sm">
                                </div>
                                <div class="col-xs-5">
                                    <label for="characters_record_input" data-tr-detail="characters_label">Characters</label>
                                    <input id="characters_record_input" type="number" min="0" value="0" class="form-control input-sm">
                                </div>
                                <div class="col-xs-12" style="margin-bottom: 5px"></div>
                                <div class="col-xs-10">
                                    <label for="notes" data-tr-detail="notes">Notes</label>
                                    <input id="notes" type="text" maxlength="255" data-tr-detail="leave_your_notes" value="" placeholder="Leave your notes" class="form-control input-sm">
                                </div>
                                <div class="col-xs-2">
                                    <button style="position: absolute; top: -6px;" class="btn btn-success" onclick="editor.saveRecord();" data-tr-detail="save_modal_btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-top: 15px;">
                            <h4 data-tr-detail="previous_activities">Previous Activities</h4>
                            <div class="col-xs-12">
                                <p data-tr-detail="you_can_edit_and_delete_your_records">You can edit and delete your records.</p>
                                <div id="existing_records" class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="save-modal" tabindex="-1" role="dialog" aria-labelledby="save-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="save-modal-label" data-tr-detail="document">Document</h4>
                </div>
                <div class="modal-body">
                    <div class="error_for_save_document" style="display: none; margin-top: 15px"></div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-top: 15px;">
                            <h4 data-tr-detail="new_document">New Document</h4>
                            <div class="col-xs-12">
                                <div class="col-xs-12">
                                    <label for="document_name" data-tr-detail="document_name">Document Name</label>
                                </div>
                                <div class="col-xs-9 col-sm-10">
                                    <input id="document_name" type="text" class="form-control input-sm">
                                </div>
                                <div class="col-xs-3 col-sm-2">
                                    <button style="float: right" class="btn btn-success" onclick="editor.saveDocument();" data-tr-detail="save_modal_btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12" style="margin-top: 15px;">
                            <h4 data-tr-detail="previous_documents">Previous Documents</h4>
                            <div class="col-xs-12">
                                <p data-tr-detail="you_can_load_edit_and_delete_your_documents">You can load, edit and delete your documents.</p>
                                <div id="existing_documents" class="col-xs-12"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" data-tr-detail="close">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="find-and-replace-modal" tabindex="-1" role="dialog" aria-labelledby="find-and-replace-modal-label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="find-and-replace-modal-label" data-tr-detail="find_and_replace_modal_label">Find and Replace</h4>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="searched_text" data-tr-detail="searched_text">Searched text</label>
                            <input id="searched_text" type="text" class="form-control input-sm">
                        </div>
                        <div class="col-xs-12 mt10">
                            <label for="replacement_text" data-tr-detail="replacement_text">Replacement text</label>
                            <input id="replacement_text" type="text" class="form-control input-sm">
                        </div>
                    </div>
                    <div class="row mt10">
                        <div class="col-xs-12">
                            <input id="whole_words" type="checkbox" style="margin-right: 5px">
                            <label for="whole_words" data-tr-detail="whole_words_only">Whole words only</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <input id="replace_all" type="checkbox" style="margin-right: 5px">
                            <label for="replace_all" data-tr-detail="replace_all_at_once">Replace all at once</label>
                        </div>
                    </div>
                    <div class="message_for_find_and_replace" style="display: none; margin-top: 15px"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" onclick="editor.findAndReplace();" data-tr-detail="find_and_replace_modal_label">Find and Replace</button>
                </div>
            </div>
        </div>
    </div>
    <div contenteditable="true" style="visibility: hidden;" id="for_counting_characters">
        <span>a</span><span>b</span><span>c</span><span>d</span><span>e</span><span>f</span><span>g</span>
        <span>h</span><span>i</span><span>j</span><span>k</span><span>l</span><span>m</span><span>n</span>
        <span>o</span><span>p</span><span>q</span><span>r</span><span>s</span><span>t</span><span>u</span>
        <span>v</span><span>w</span><span>x</span><span>y</span><span>z</span><span> </span>
    </div>
</div>

     
    <?php include('./footer.php');?>
    <script src="./min/387fb6497685181f351932331b0413b976a92761.js"></script>
    <script src="./js/footer.js"></script>
    
</body>
</html>