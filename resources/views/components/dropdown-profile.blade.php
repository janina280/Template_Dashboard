@props([
    'align' => 'right'
])

<div class="relative inline-flex" x-data="{ open: false }">
    <button
        class="inline-flex justify-center items-center group"
        aria-haspopup="true"
        @click.prevent="open = !open"
        :aria-expanded="open"
    >
        <img class="w-8 h-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" width="32" height="32" alt="{{ Auth::user()->name }}" />
        <div class="flex items-center truncate">
            <span class="truncate ml-2 text-sm font-medium text-gray-600 dark:text-gray-100 group-hover:text-gray-800 dark:group-hover:text-white">{{ Auth::user()->name }}</span>
            <svg class="w-3 h-3 shrink-0 ml-1 fill-current text-gray-400 dark:text-gray-500" viewBox="0 0 12 12">
                <path d="M5.9 11.4L.5 6l1.4-1.4 4 4 4-4L11.3 6z" />
            </svg>
        </div>
    </button>
    <div
        class="origin-top-right z-10 absolute top-full min-w-64 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700/60 py-1.5 rounded-lg shadow-lg overflow-hidden mt-1 {{$align === 'right' ? 'right-0' : 'left-0'}}"
        @click.outside="open = false"
        @keydown.escape.window="open = false"
        x-show="open"
        x-transition:enter="transition ease-out duration-200 transform"
        x-transition:enter-start="opacity-0 -translate-y-2"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-out duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        x-cloak
    >
    <div class="pt-0.5 pb-2 px-3 mb-1 border-b border-gray-200 dark:border-gray-700/60 flex flex-col items-center">
        <img class="w-16 h-16 rounded-full" src="{{ Auth::user()->profile_photo_url }}" width="64" height="64" alt="{{ Auth::user()->name }}" />
        <div class="font-medium text-gray-800 dark:text-gray-100 text-center">{{ Auth::user()->name }}</div>
        <div class="font-medium text-gray-800 dark:text-gray-100 text-center">{{ Auth::user()->email}}</div>
        @if (Auth::user()->role == 'admin')
        <div class="text-xs text-gray-500 dark:text-gray-400 italic text-center">Administrator</div>
        @endif

        @if (Auth::user()->role == 'user')
        <div class="text-xs text-gray-500 dark:text-gray-400 italic text-center">User</div>
        @endif
    </div>

        <ul>
            <li>
                <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3" href="{{ route('profile.show') }}" @click="open = false" @focus="open = true" @focusout="open = false">
                <svg class="w-6 h-6 mr-2 text-gray-500"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                </svg>
                    Edit Profil</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <a class="font-medium text-sm text-violet-500 hover:text-violet-600 dark:hover:text-violet-400 flex items-center py-1 px-3"
                        href="{{ route('logout') }}"
                        @click.prevent="$root.submit();"
                        @focus="open = true"
                        @focusout="open = false"
                    >
                    <svg class="w-6 h-6 mr-2 text-gray-500"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4" />  <polyline points="16 17 21 12 16 7" />  <line x1="21" y1="12" x2="9" y2="12" /></svg>
                    {{ __('Log Out') }}
                    </a>
                </form>
            </li>
        </ul>
    </div>
</div>
