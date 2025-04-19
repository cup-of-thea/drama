<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 text-off-white">
<div class="isolate min-h-screen overflow-hidden bg-gray-900">
    <img alt="" src="{{ Vite::asset('resources/img/desktop-background-min.jpg') }}" class="hidden lg:block absolute w-full h-full -z-1 object-cover" />
    <img alt="" src="{{ Vite::asset('resources/img/mobile-background-min.jpg') }}" class="lg:hidden block absolute w-full -z-1 object-cover" />
    <div class="mx-auto max-w-7xl px-6 pb-96 pt-48 text-center sm:pt-48 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <h2 class="font-etude mt-2 uppercase text-balance text-5xl font-semibold tracking-tight sm:text-6xl">
                Drama Queerz
            </h2>
        </div>
        <div class="relative mt-6 flex items-center justify-center gap-x-6 sm:gap-x-8">

            <a type="button"
                    href="https://bsky.app/profile/dramaqueerz.bsky.social"
                    class="app-button">
                <x-ri-bluesky-fill class="-ml-0.5 size-5"/>
                BlueSky
            </a>

            <a type="button"
                    href="https://www.instagram.com/dramaqueerz"
                    class="app-button">
                <x-ri-instagram-line class="-ml-0.5 size-5"/>
                Instagram
            </a>

        </div>
    </div>
    <div class="flow-root pb-24 sm:pb-32">
        <div class="-mt-80">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-md grid-cols-1 gap-8 lg:max-w-4xl lg:grid-cols-2">
                    <div class="app-card">
                        <div class="py-4">
                            <livewire:newsletter />
                        </div>
                    </div>
                    <div class="app-card">
                        <div class="py-4">
                            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                                <h3 class="font-etude uppercase max-w-2xl text-center text-balance text-2xl font-semibold tracking-tight text-off-white">
                                    Comment les rats sont morts
                                </h3>
                                <p class="mt-6 text-center text-xs text-off-white/90">
                                    Vous voulez voir ce film d'horreur expérimental tourné en super 16mm, auto-produit et porté par
                                    une équipe 100% queer ? <span class="font-bold">Spectateurices, associations & cinémas</span>,
                                    aidez-nous à organiser une tournée et emmener le film à la rencontre de son public !
                                </p>
                                <div class="flex gap-x-4 mt-10 justify-center">
                                    <a type="button"
                                       href="https://docs.google.com/forms/d/e/1FAIpQLSfdAK6GbLaVMPlI2XCQQ4QQ5obAFdi-SFHXxEKbA_qST7Gf4A/viewform"
                                            class="app-callbutton">
                                        Répondre au formulaire
                                    </a>
                                </div>
                                <div class="flex gap-x-4 mt-6 justify-center">
                                    <a type="button"
                                            href="https://bsky.app/profile/dramaqueerz.bsky.social"
                                            class="app-button">
                                        <x-ri-bluesky-fill class="-ml-0.5 size-5"/>
                                    </a>
                                    <a type="button"
                                            href="https://www.instagram.com/commentlesrats/"
                                            class="app-button">
                                        <x-ri-instagram-line class="-ml-0.5 size-5"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
