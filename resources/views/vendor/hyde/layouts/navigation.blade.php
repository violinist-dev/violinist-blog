@php
    $navigation = \Hyde\Framework\Features\Navigation\NavigationMenu::create();
@endphp

<nav aria-label="Main navigation" id="main-navigation" class="flex flex-wrap items-center justify-between p-4 shadow-lg sm:shadow-xl md:shadow-none dark:bg-gray-800">
    <div class="flex flex-grow items-center flex-shrink-0 mx-auto max-w-4xl text-gray-700 dark:text-gray-200">
        <div class="w-8 h-8 bg-[#2d2640] flex items-end justify-center">
            <img src="../_media/logo.png" />
        </div>
        @include('hyde::components.navigation.navigation-brand')
    </div>

</nav>