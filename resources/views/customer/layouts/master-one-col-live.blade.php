<!DOCTYPE html>
<html lang="en">

<head>
    @include('customer.layouts.head-tag')
    @yield('head-tag')
    <livewire:styles />
</head>

<body>

    @include('customer.layouts.header')

    <main id="main-body-one-col" class="main-body">
        <div id="showFollower" class="">
            @guest

            <p class="mb-9">Your following = 0 & followers = 0(guest)</p>

            @endguest

            @auth
            @if(auth()->user()->id)
            <h6 class="mx-5">Name: {{ auth()->user()->name }} following  {{ auth()->user()->following()->count() }}  follower {{ auth()->user()->followers()->count() }}</h6>

            @endif
            @endauth

        </div>
        <livewire:customer.home.about-me />
        <livewire:customer.home.description />
        <livewire:customer.last-user />
        <livewire:customer.home.faq />

        <livewire:customer.ad-show />





    </main>


    @include('customer.layouts.footer')



    @include('customer.layouts.script')

    @yield('script')
    <livewire:scripts />
</body>

</html>