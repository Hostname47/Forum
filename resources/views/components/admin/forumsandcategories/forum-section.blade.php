<div class="section-style forum-section mr8">
    @php
        $status = $forum->status;
    @endphp
    <input type="hidden" class="selected-forum-id" autocomplete="off" value="{{ $forum->id }}">
    <div class="flex align-center space-between">
        <div class="flex">
            <svg class="size24 mr8" style="margin-top: 2px; min-width: 24px" fill="#202020" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                {!! $forum->icon !!}
            </svg>
            <h2 class="forum-color fs26 no-margin">{{ $forum->forum }} Forum</h2>
        </div>
        <div class="relative">
            <svg class="size18 button-with-suboptions pointer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><g><path class="line line-1" d="M5 13h90v14H5z"/><path class="line line-2" d="M5 43h90v14H5z"/><path class="line line-3" d="M5 73h90v14H5z"/></g></svg>
            <div class="suboptions-container suboptions-container-right-style">
                <a href="{{ route('admin.forum.manage') . '?forumid=' . $forum->id }}" class="no-underline simple-suboption flex align-center">
                    <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M254.7,64.53c-1.76.88-1.41,2.76-1.8,4.19a50.69,50.69,0,0,1-62,35.8c-3.39-.9-5.59-.54-7.89,2.2-2.8,3.34-6.16,6.19-9.17,9.36-1.52,1.6-2.5,2.34-4.5.28-8.79-9-17.75-17.94-26.75-26.79-1.61-1.59-1.87-2.49-.07-4.16,4-3.74,8.77-7.18,11.45-11.78,2.79-4.79-1.22-10.29-1.41-15.62C151.74,33.52,167,12.55,190.72,5.92c1.25-.35,3,0,3.71-1.69H211c.23,1.11,1.13.87,1.89,1,3.79.48,7.43,1.2,8.93,5.45s-1.06,7-3.79,9.69c-6.34,6.26-12.56,12.65-19,18.86-1.77,1.72-2,2.75,0,4.57,5.52,5.25,10.94,10.61,16.15,16.16,2.1,2.24,3.18,1.5,4.92-.28q9.83-10.1,19.9-20c5.46-5.32,11.43-3.47,13.47,3.91.4,1.47-.4,3.32,1.27,4.41Zm0,179-25.45-43.8-28.1,28.13c13.34,7.65,26.9,15.46,40.49,23.21,6.14,3.51,8.73,2.94,13.06-2.67ZM28.2,4.23C20.7,9.09,15,15.89,8.93,22.27,4.42,27,4.73,33.56,9.28,38.48c4.18,4.51,8.7,8.69,13,13.13,1.46,1.53,2.4,1.52,3.88,0Q39.58,38,53.19,24.49c1.12-1.12,2-2,.34-3.51C47.35,15.41,42.43,8.44,35,4.23ZM217.42,185.05Q152.85,120.42,88.29,55.76c-1.7-1.7-2.63-2-4.49-.11-8.7,8.93-17.55,17.72-26.43,26.48-1.63,1.61-2.15,2.52-.19,4.48Q122,151.31,186.71,216.18c1.68,1.68,2.61,2,4.46.1,8.82-9.05,17.81-17.92,26.74-26.86.57-.58,1.12-1.17,1.78-1.88C218.92,186.68,218.21,185.83,217.42,185.05ZM6.94,212.72c.63,3.43,1.75,6.58,5.69,7.69,3.68,1,6.16-.77,8.54-3.18,6.27-6.32,12.76-12.45,18.81-19,2.61-2.82,4-2.38,6.35.16,4.72,5.11,9.65,10.06,14.76,14.77,2.45,2.26,2.1,3.51-.11,5.64C54.2,225.32,47.57,232,41,238.73c-4.92,5.08-3.25,11.1,3.57,12.9a45,45,0,0,0,9.56,1.48c35.08,1.51,60.76-30.41,51.76-64.43-.79-3-.29-4.69,1.89-6.65,3.49-3.13,6.62-6.66,10-9.88,1.57-1.48,2-2.38.19-4.17q-13.72-13.42-27.14-27.14c-1.56-1.59-2.42-1.38-3.81.11-3.11,3.3-6.56,6.28-9.53,9.7-2.28,2.61-4.37,3.25-7.87,2.31C37.45,144.33,5.87,168.73,5.85,202.7,5.6,205.71,6.3,209.22,6.94,212.72ZM47.57,71.28c6.77-6.71,13.5-13.47,20.24-20.21,8.32-8.33,8.25-8.25-.35-16.25-1.82-1.69-2.69-1.42-4.24.14-8.85,9-17.8,17.85-26.69,26.79-.64.65-1.64,2.06-1.48,2.24,3,3.38,6.07,6.63,8.87,9.62C46.08,73.44,46.7,72.14,47.57,71.28Z"/></svg>
                    <div class="black">{{ __('Manage forum') }}</div>
                </a>
                @if($status->slug == 'archived')
                <a href="{{ route('admin.forum.restore') . '?forumid=' . $forum->id }}" class="no-underline simple-suboption flex align-center">
                    <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M3.53,137.79a8.46,8.46,0,0,1,8.7-4c2.1.23,4.28-.18,6.37.09,3.6.47,4.61-.68,4.57-4.46-.28-24.91,7.59-47.12,23-66.65C82.8,16.35,151.92,9.31,197.09,47.21c3,2.53,3.53,4,.63,7.08-5.71,6.06-11,12.5-16.28,19-2.13,2.63-3.37,3.21-6.4.73-42.11-34.47-103.77-13.24-116,39.81a72.6,72.6,0,0,0-1.61,17c0,2.36.76,3.09,3.09,3,4.25-.17,8.51-.19,12.75,0,5.46.25,8.39,5.55,4.94,9.66-12,14.24-24.29,28.18-36.62,42.39L4.91,143.69c-.37-.43-.5-1.24-1.38-1Z"/><path d="M216.78,81.86l35.71,41c1.93,2.21,3.13,4.58,1.66,7.58s-3.91,3.54-6.9,3.58c-3.89.06-8.91-1.65-11.33.71-2.1,2-1.29,7-1.8,10.73-6.35,45.41-45.13,83.19-90.81,88.73-28.18,3.41-53.76-3-76.88-19.47-2.81-2-3.61-3.23-.85-6.18,6-6.45,11.66-13.26,17.26-20.09,1.79-2.19,2.87-2.46,5.39-.74,42.83,29.26,99.8,6.7,111.17-43.93,2.2-9.8,2.2-9.8-7.9-9.8-1.63,0-3.27-.08-4.9,0-3.2.18-5.94-.6-7.29-3.75s.13-5.61,2.21-8c7.15-8.08,14.21-16.24,21.31-24.37C207.43,92.59,212,87.31,216.78,81.86Z"/></svg>
                    <div class="black">{{ __('Restore forum') }}</div>
                </a>
                @else
                <a href="{{ route('admin.forum.archive') . '?forumid=' . $forum->id }}" class="no-underline simple-suboption flex align-center">
                    <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M3.13,22.58c1.78.15,3.56.41,5.34.41,17.56,0,35.12.06,52.68,0,2.72,0,4.05.29,4.05,3.64Q65,130,65.19,233.42c0,3.25-1.16,3.7-4,3.7-19.36,0-38.72.1-58.08.18ZM48,74.3c0-9.5-.05-19,0-28.51,0-2.41-.49-3.52-3.24-3.45-7,.18-14.09.2-21.13,0-2.91-.08-3.54,1-3.52,3.68q.14,28.75,0,57.51c0,3,1.11,3.54,3.75,3.49,6.71-.15,13.44-.25,20.15,0,3.44.14,4.07-1.17,4-4.24C47.86,93.31,48,83.81,48,74.3ZM34.08,189.91a13.85,13.85,0,0,0-13.84,13.65,14.05,14.05,0,0,0,13.62,14,13.9,13.9,0,0,0,14-14A13.62,13.62,0,0,0,34.08,189.91ZM140.13,34.6l42.49-11.33c4.42-1.19,8.89-2.23,13.24-3.66,3.1-1,4.36-.48,5.25,2.93,6,23.28,12.36,46.49,18.59,69.73,11.43,42.67,22.79,85.37,34.39,128,1.13,4.13.34,5.37-3.75,6.4q-25.69,6.5-51.18,13.74c-3.38,1-4.14-.11-4.87-2.88q-23.65-88.69-47.4-177.37a212.52,212.52,0,0,0-6.76-21.85V43q0,94.28.11,188.56c0,4.5-1.13,5.67-5.61,5.59-17.39-.27-34.79-.2-52.18,0-3.42,0-4.4-.84-4.4-4.34q.17-102.9,0-205.79c0-3.38,1.07-4.08,4.17-4.06,17.89.12,35.77.15,53.66,0,3.45,0,4.7.91,4.3,4.36A65,65,0,0,0,140.13,34.6Zm-17,40.07c0-9.5-.13-19,.07-28.5.06-3.05-.82-3.93-3.86-3.84-6.87.22-13.75.18-20.63,0-2.56-.06-3.36.71-3.35,3.3q.13,29,0,58c0,2.53.72,3.44,3.33,3.38,6.88-.16,13.76-.2,20.64,0,3,.09,3.93-.8,3.87-3.86C123,93.68,123.14,84.17,123.14,74.67Zm81.55,27.88c-.05-.16-.11-.31-.15-.47q-7.72-28.92-15.42-57.85c-.49-1.84-1.46-2.3-3.23-1.81q-10.89,3-21.8,5.85c-1.65.44-2.47.89-1.89,3,5.2,19.09,10.26,38.23,15.35,57.36.41,1.52.73,2.61,3,2,7.37-2.16,14.83-4,22.26-6C203.79,104.32,205.26,104.36,204.69,102.55Zm-95.23,87.38a13.53,13.53,0,0,0-14,13.37,13.83,13.83,0,0,0,13.73,14.23,14.09,14.09,0,0,0,13.87-13.73A13.88,13.88,0,0,0,109.46,189.93ZM216.65,214.8a13.77,13.77,0,0,0,13.9-13.53,14.08,14.08,0,0,0-14-14.07,13.9,13.9,0,0,0-13.56,14A13.51,13.51,0,0,0,216.65,214.8Z"/></svg>
                    <div class="black">{{ __('Archive forum') }}</div>
                </a>
                @endif
                <div class="simple-line-separator my4"></div>
                <a href="{{ route('admin.forum.add') }}" class="no-underline simple-suboption flex align-center">
                    <svg class="size14 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M13.69,108.9q0-41,0-81.91c0-9.64,3.42-13.07,13-13.07q81.66,0,163.31,0c9.46,0,13.11,3.66,13.11,13.15q0,81.42,0,162.82c0,9.58-3.89,13.49-13.44,13.49q-81.41,0-162.82,0c-9.54,0-13.18-3.62-13.19-13.08Q13.66,149.6,13.69,108.9Zm168.24-.5c0-23-.09-46,.1-69.05,0-3.7-.87-4.57-4.55-4.55q-69.3.21-138.6,0c-3.43,0-4.31.78-4.3,4.27q.2,69.3,0,138.59c0,3.62.74,4.61,4.51,4.6q69.3-.24,138.59,0c3.43,0,4.37-.81,4.34-4.3C181.85,154.76,181.93,131.58,181.93,108.4Zm63.17,23.19q0-31.56,0-63.14c0-8.8-3.81-12.49-12.67-12.6-1.15,0-2.31-.07-3.46,0-5,.34-11.72-2.2-14.58,1.08-2.49,2.85-.45,9.41-.94,14.27-.48,4.7.93,6.83,5.81,5.86,4.21-.84,5,1,5,5q-.22,68.8,0,137.62c0,3.94-1.08,4.75-4.84,4.74q-68.31-.19-136.63.05c-5,0-6.82-1.21-5.92-6.09.65-3.54-.56-5.08-4.45-4.74a69.44,69.44,0,0,1-12.32,0c-3.93-.35-4.74,1.23-4.51,4.76.29,4.59,0,9.21.07,13.81.06,9.43,3.7,13.09,13.18,13.09q81.63,0,163.27,0c9.59,0,13-3.45,13-13.1q0-41,0-81.88ZM118.73,123.4c-.2-3.38.74-4.56,4.31-4.47,9.2.26,18.42-.05,27.62.16,3.3.08,4.72-.57,4.43-4.21a91.42,91.42,0,0,1,0-12.82c.19-3.14-.65-4.2-4-4.11-9.37.24-18.75-.09-28.12.17-3.58.1-4.35-1.05-4.27-4.41.24-9-.06-18.1.16-27.13.09-3.47-.5-5.15-4.48-4.79a84.27,84.27,0,0,1-12.81,0c-3.08-.19-3.91.8-3.84,3.84.19,9.53,0,19.07.14,28.61.06,2.93-.53,3.94-3.71,3.86-9.37-.24-18.75,0-28.12-.16-3.26-.07-4.77.52-4.47,4.2a89.92,89.92,0,0,1,0,12.82c-.22,3.29.89,4.19,4.14,4.11,9.37-.21,18.75.08,28.11-.15,3.32-.08,4.12.94,4,4.13-.21,9.53,0,19.08-.14,28.61,0,2.68.54,3.77,3.47,3.62,4.75-.25,9.54-.2,14.3,0,2.57.11,3.43-.66,3.33-3.29-.19-4.92-.06-9.86,0-14.79C118.8,132.6,119,128,118.73,123.4Z"/></svg>
                    <div class="black">{{ __('Create new forum') }}</div>
                </a>
            </div>
        </div>

    </div>
    <div class="mt4 fs13">
        <p class="bold my8 forum-color fs14">Description :</p>
        <div class="expand-box">
            <span class="expandable-text fs13 my4 forum-description" style="line-height: 1.4">{{ $forum->descriptionmediumslice }}</span>
            @if($forum->descriptionmediumslice != $forum->description)
            <input type="hidden" class="expand-slice-text" value="{{ $forum->descriptionmediumslice }}" autocomplete="off">
            <input type="hidden" class="expand-whole-text" value="{{ $forum->description }}" autocomplete="off">
            <input type="hidden" class="expand-text-state" value="0" autocomplete="off">
            <span class="pointer expand-button fs12 inline-block bblock bold">{{ __('see all') }}</span>
            <input type="hidden" class="expand-text" value="{{ __('see all') }}">
            <input type="hidden" class="collapse-text" value="{{ __('see less') }}">
            @endif
        </div>
    </div>
    <div class="my8 simple-line-separator"></div>
    <div>
        @php
            $class = 'green';
            if($status->slug=='closed') $class = 'red';
            if($status->slug=='under-review') $class = 'blue';
            if($status->slug=='archived') $class = 'gray';
        @endphp
        <p class="bold my8 forum-color fs14">Status : <span class="bold {{ $class }}">{{ $status->status }}</span></p>
    </div>
    <div class="my8 simple-line-separator"></div>
    <div class="my8 fs13">
        <p class="bold my8 forum-color fs15">Statistics :</p>
        <div class="ml8 flex">
            <div>
                <div class="flex align-center">
                    <svg class="size15 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260 260"><path d="M130,17.11h97.27c11.82,0,15.64,3.73,15.64,15.34q0,75.07,0,150.16c0,11.39-3.78,15.13-15.22,15.13-2.64,0-5.3.12-7.93-.06a11.11,11.11,0,0,1-10.53-9.38c-.81-5.69,2-11,7.45-12.38,3.28-.84,3.52-2.36,3.51-5.06-.07-27.15-.11-54.29,0-81.43,0-3.68-1-4.69-4.68-4.68q-85.63.16-171.29,0c-3.32,0-4.52.68-4.5,4.33q.26,41,0,81.95c0,3.72,1.3,4.53,4.56,4.25a45.59,45.59,0,0,1,7.39.06,11.06,11.06,0,0,1,10.58,11c0,5.62-4.18,10.89-9.91,11.17-8.43.4-16.92.36-25.36,0-5.16-.23-8.82-4.31-9.68-9.66a33,33,0,0,1-.24-5.27q0-75.08,0-150.16c0-11.61,3.81-15.34,15.63-15.34Zm22.49,45.22c16.56,0,33.13,0,49.7,0,5.79,0,13.59,2,16.83-.89,3.67-3.31.59-11.25,1.19-17.13.4-3.92-1.21-4.54-4.73-4.51-19.21.17-38.42.08-57.63.08-22.73,0-45.47.11-68.21-.1-4,0-5.27,1-4.92,5a75.62,75.62,0,0,1,0,12.68c-.32,3.89.78,5,4.85,5C110.54,62.21,131.51,62.33,152.49,62.33ZM62.3,51.13c0-11.26,0-11.26-11.45-11.26h-.53c-10.47,0-10.47,0-10.47,10.71,0,11.75,0,11.75,11.49,11.75C62.3,62.33,62.3,62.33,62.3,51.13ZM102,118.66c25.79.3,18.21-2.79,36.49,15.23,18.05,17.8,35.89,35.83,53.8,53.79,7.34,7.35,7.3,12.82-.13,20.26q-14.94,15-29.91,29.87c-6.86,6.81-12.62,6.78-19.5-.09-21.3-21.28-42.53-42.64-63.92-63.84a16.11,16.11,0,0,1-5.24-12.62c.23-9.86,0-19.73.09-29.59.07-8.71,4.24-12.85,13-13C91.81,118.59,96.92,118.66,102,118.66ZM96.16,151c.74,2.85-1.53,6.66,1.41,9.6,17.66,17.71,35.39,35.36,53,53.11,1.69,1.69,2.59,1.48,4.12-.12,4.12-4.34,8.24-8.72,12.73-12.67,2.95-2.59,2.36-4-.16-6.49-15.68-15.46-31.4-30.89-46.63-46.79-4.56-4.76-9.1-6.73-15.59-6.35C96.18,141.8,96.16,141.41,96.16,151Z"/></svg>
                    <p class="my8 bold">Threads</p>
                </div>
                <p class="my8">Threads today : <span class="bold today-forum-threads-count">{{ $today_threads_count }}</span></p>
                <p class="my8">Threads this week : <span class="bold this-week-forum-threads-count">{{ $thisweek_threads_count }}</span></p>
                <p class="my8">Threads this month : <span class="bold this-week-forum-threads-count">{{ $thismonth_threads_count }}</span></p>
                <p class="mt8">Total threads : <span class="bold this-week-forum-threads-count">{{ $totalthreads_count }}</span></p>
            </div>
            <div style="margin-left: 16px">
                <div class="flex align-center">
                    <svg class="size15 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M221.09,253a23,23,0,1,1-23.27,23A23.13,23.13,0,0,1,221.09,253Zm93.09,0a23,23,0,1,1-23.27,23A23.12,23.12,0,0,1,314.18,253Zm93.09,0A23,23,0,1,1,384,276,23.13,23.13,0,0,1,407.27,253Zm62.84-137.94h-51.2V42.9c0-23.62-19.38-42.76-43.29-42.76H43.29C19.38.14,0,19.28,0,42.9V302.23C0,325.85,19.38,345,43.29,345h73.07v50.58c.13,22.81,18.81,41.26,41.89,41.39H332.33l16.76,52.18a32.66,32.66,0,0,0,26.07,23H381A32.4,32.4,0,0,0,408.9,496.5L431,437h39.1c23.08-.13,41.76-18.58,41.89-41.39V156.47C511.87,133.67,493.19,115.21,470.11,115.09ZM46.55,299V46.12H372.36v69H158.25c-23.08.12-41.76,18.58-41.89,41.38V299Zm418.9,92H397.5l-15.83,46-15.82-46H162.91V161.07H465.45Z"/></svg>
                    <p class="my8 bold">Replies</p>
                </div>
                <p class="my8">Replies today : <span class="bold today-forum-posts-count">{{ $today_posts_count }}</span></p>
                <p class="my8">Replies this week : <span class="bold this-week-forum-posts-count">{{ $thisweek_posts_count }}</span></p>
                <p class="my8">Replies this month : <span class="bold this-week-forum-posts-count">{{ $thismonth_posts_count }}</span></p>
                <p class="mt8">Total replies : <span class="bold this-week-forum-posts-count">{{ $totalposts_count }}</span></p>
            </div>
            <div style="margin-left: 16px">
                <div class="flex align-center">
                    <svg class="size15 mr4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><g id="Layer_1_copy" data-name="Layer 1 copy"><path d="M287.81,219.72h-238c-21.4,0-32.1-30.07-17-47.61l119-138.2c9.4-10.91,24.6-10.91,33.9,0l119,138.2C319.91,189.65,309.21,219.72,287.81,219.72ZM224.22,292l238,.56c21.4,0,32,30.26,16.92,47.83L359.89,478.86c-9.41,10.93-24.61,10.9-33.9-.08l-118.75-139C192.07,322.15,202.82,292,224.22,292Z" style="fill:none;stroke:#000;stroke-miterlimit:10;stroke-width:49px"/></g></svg>
                    <p class="my8 bold">Votes</p>
                </div>
                <div class="fs13">
                    <p class="no-margin bold">Today votes</p>
                    <div class="flex align-center mt4 ml8">
                        <p class="no-margin">Threads : <span class="bold">{{ $todaythreads_votes_count }}</span> </p>
                        <div class="fs10 mx8">•</div>
                        <p class="no-margin">Replies : <span class="bold">{{ $todayposts_votes_count }}</span> </p>
                    </div>
                </div>
                <div class="fs13 mt8">
                    <p class="no-margin bold">This week votes</p>
                    <div class="flex align-center mt4 ml8">
                        <p class="no-margin">Threads : <span class="bold">{{ $thisweekthreads_votes_count }}</span> </p>
                        <div class="fs10 mx8">•</div>
                        <p class="no-margin">Replies : <span class="bold">{{ $thisweekposts_votes_count }}</span> </p>
                    </div>
                </div>
                <div class="fs13 mt8">
                    <p class="no-margin bold">This month votes</p>
                    <div class="flex align-center mt4 ml8">
                        <p class="no-margin">Threads : <span class="bold">{{ $thismonththreads_votes_count }}</span> </p>
                        <div class="fs10 mx8">•</div>
                        <p class="no-margin">Replies : <span class="bold">{{ $thismonthposts_votes_count }}</span> </p>
                    </div>
                </div>
                <div class="fs13 mt8">
                    <p class="no-margin bold">Total votes</p>
                    <div class="flex align-center mt4 ml8">
                        <p class="no-margin">Threads : <span class="bold">{{ $totalthreads_votes_count }}</span> </p>
                        <div class="fs10 mx8">•</div>
                        <p class="no-margin">Replies : <span class="bold">{{ $totalposts_votes_count }}</span> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>