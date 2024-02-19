<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>IKONIC Task - Feedback Tool</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            .nested-reply{}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .feedbackSection {
                border-bottom: 1px solid #e1e1e1;
                padding-bottom: 15px;
            }
            .formTextarea {
                width: 100%;
                border: 1px solid gray;
                border-radius: 5px;
                padding: 15px;
            }
            .replies-section {
                /* margin-top: 15px;
                margin-bottom: 15px; */
            }
            .repliesDiv {
                border-bottom: 1px solid #e1e1e1;
                padding: 5px 24px 10px 24px;
            }
            .submitBtn{
                background: gray;
                color: white;
                font-weight: 600;
                border-radius: 5px;
                padding: 5px 15px;
                cursor: pointer;
            }
            .cancleBtn{
                background: rgb(231, 231, 231);
                color:black;
                font-weight: 600;
                border-radius: 5px;
                padding: 5px 15px;
                cursor: pointer;
            }
            .flex .justify-between .flex-1 {
              display: flex;
              align-items: center;
              justify-content: center;
              padding: 20px 0px;
              column-gap: 20px;
              width: 100%;
            }
            .flex .justify-between .flex-1 :nth-child(1){
                background-color: rgb(208, 208, 208) !important;
                padding: 5px 10px !important;
                border-radius: 5px;
                color: black;

            }
            .flex .justify-between .flex-1 :nth-child(2){
                background-color: rgb(163, 163, 163) !important;
                padding: 5px 10px !important;
                border-radius: 5px;
                color: white;
            }
            .userNameTag{
                color: rgb(30, 165, 219);
                font-weight: 700;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-start justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/feedback') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-15">
                    Feedback's
                </div>

                @foreach ($feedbacks as $feedback)
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-1">
                        <div style="padding: 30px;" class="p-5">
                            {{-- feedback display --}}
                            <div class="feedbackSection">
                                <div class="flex items-center">
                                    <div class="text-lg leading-7 font-semibold"><p class="underline text-gray-900 dark:text-white">{{ $feedback->title }}</p></div>
                                </div>

                                <div class="mt-2 text-gray-800 dark:text-gray-400 text-sm">
                                    {{ $feedback->description }}
                                </div>

                                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                                    <div class="text-center text-sm text-gray-700 sm:text-left">
                                        <div class="flex items-center">
                                            <div class="">
                                                <span class="font-semibold">
                                                    Category
                                                </span>
                                                <span  class="ml-1 rounded-lg px-2 text-gray-500 ">
                                                    {{ $feedback->category }}
                                                </span>
                                            </div>
                                            <div class="ml-12">
                                                <span class="font-semibold">
                                                    Created by:
                                                </span>
                                                <span  class="ml-1 text-gray-500 rounded-lg px-2">
                                                    {{ $feedback->user->name }}
                                                </span>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            @auth
                                                <button class="cancleBtn" onclick="openReplyForm({{ $feedback->id }})" class="text-gray-700 font-semibold underline">Reply</button>
                                            @else
                                                <a href="{{ route('login') }}" class="text-gray-700 font-semibold underline">Reply</a>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- replies disply section --}}
                            <div id="replies-section-{{ $feedback->id }}">
                                @foreach ($feedback->replies as $reply)
                                    <div id="reply-div{{ $reply->id }}" class=" {{ $reply->parent_reply_id ? 'nested-reply' : '' }} repliesDiv">
                                        <div class="mt-2 text-gray-800 dark:text-gray-400 text-sm">
                                            <span class="userNameTag"></span>
                                            {{ $reply->response }}
                                            - <span class="ml-1 text-gray-500 rounded-lg px-2">{{ $reply->user->name }}</span>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            {{-- reply form --}}
                            <div class="bg-white border-b border-gray-200 replyForm" id="reply-form-{{ $feedback->id }}" data-replyId="" style="display: none;margin-top: 15px;">
                                <div class="overflow-x-auto">
                                    <div class="userList" id="user-list-{{ $feedback->id }}"></div>
                                    <form>
                                        <input type="hidden" id="parent-reply-id-{{ $feedback->id }}">
                                        <textarea id="response-text-{{ $feedback->id }}" data-id="{{ $feedback->id }}" rows="4" cols="50" placeholder="Enter your response" class="formTextarea"></textarea>
                                        <button class="submitBtn" type="button" onclick="submitReply({{ $feedback->id }})">Submit</button>
                                        <button class="cancleBtn" type="button" onclick="closeReplyForm({{ $feedback->id }})">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <div>
                    {{ $feedbacks->links() }}
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        <p><span class="text-red-400">IKONIC TASK</span> (Web-based Feedback Tool that allows users to submit and view feedback)</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>
            function openReplyForm(feedbackId, parentReplyId = '') {
                clearInput();

                $('.replyForm').fadeOut();

                if (parentReplyId != '') {
                    $('#parent-reply-id-' + feedbackId).val(parentReplyId);
                }

                $('#reply-form-' + feedbackId).fadeIn();
            }
            function closeReplyForm(feedbackId) {
                clearInput();
                $('#reply-form-' + feedbackId).fadeOut();
            }
            function clearInput() {
                $('textarea').val('');
                $('input[type=hidden]').val('');
            }
        </script>
        <script>
            function submitReply(feedbackId) {
                $('span.error-alert').remove();

                if ($('#response-text-' + feedbackId).val() == '') {
                    $('#response-text-' + feedbackId).after('<span class="error-alert text-red">Please insert value!</span>');
                    return false;
                }

                $.ajax({
                    headers: {'X-CSRF-TOKEN': '{!! csrf_token() !!}'},
                    url: "{!! route('feedback.store.response') !!}",
                    type: 'POST',
                    data: {
                        feedbackId: feedbackId,
                        parentReplyId: $('#parent-reply-id-' + feedbackId).val(),
                        responseText: $('#response-text-' + feedbackId).val()
                    },
                    success: function(res) {
                        console.log(res);

                        html = '';
                        if (res.success) {
                            html += '<div class="reply-div' + res.response.id + '" class="'+ ( res.response.parent_reply_id ? 'nested-reply' : '' ) +' repliesDiv" style="border-bottom: 1px solid #e1e1e1;padding: 5px 24px 10px 24px;">';
                            html += '   <div class="mt-2 text-gray-800 dark:text-gray-400 text-sm">';
                            html += '       <span class="userNameTag"></span> ' + res.response.response;
                            html += '       - <span class="ml-1 text-gray-500 rounded-lg px-2">' + res.userName + '</span>';
                            html += '   </div>';
                            html += '</div>';
                        }

                        $('#replies-section-' + feedbackId).append(html);

                        clearInput();
                    },
                    error: function(xhr, status, error) {
                        console.error('Error submitting response:', error);
                    }
                });
            }
        </script>
        <script>
            $(document).ready(function() {
                $('textarea.formTextarea').on('input', function() {
                    var text = $(this).val();
                    var feedbackId = $(this).data('id');
                    var lastAt = text.lastIndexOf('@');

                    if (lastAt !== -1) {
                        var searchQuery = text.substring(lastAt + 1);

                        if (searchQuery.length > 0) {

                            // Simulate user search based on searchQuery
                            var users = {!! $users->toJson() !!};
                            var matchedUsers = users.filter(function(user) {
                                return user.toLowerCase().startsWith(searchQuery.toLowerCase());
                            });

                            // Display search results
                            $('#user-list-'+ feedbackId).empty();
                            matchedUsers.forEach(function(user) {
                                $('#user-list-'+ feedbackId).append('<div id="'+feedbackId+'" style="padding: 5px 2px;cursor: pointer;">' + user + '</div>');
                            });

                            $('#user-list-'+ feedbackId).fadeIn();
                        } else {
                            $('#user-list-'+ feedbackId).hide();
                        }
                    } else {
                        $('#user-list-'+ feedbackId).hide();
                    }
                });

                $('.userList').on('click', 'div', function() {
                    var feedbackId = $(this).attr("id");
                    var username = $(this).text();
                    var currentText = $('#response-text-' + feedbackId).val();
                    var lastAt = currentText.lastIndexOf('@');
                    var newText = currentText.substring(0, lastAt + 1) + username + ' ';

                    $('#response-text-' + feedbackId).val(newText);
                    $('#response-text-' + feedbackId).focus();
                    $('.userList').hide();
                });
            });
        </script>
    </body>
</html>
