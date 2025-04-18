<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800">
<div class="isolate overflow-hidden bg-gray-900">
    <div class="mx-auto max-w-7xl px-6 pb-96 pt-24 text-center sm:pt-32 lg:px-8">
        <div class="mx-auto max-w-4xl">
            <h2 class="mt-2 uppercase text-balance text-5xl font-semibold tracking-tight text-white sm:text-6xl">
                Drama Queerz
            </h2>
        </div>
        <div class="relative mt-6 flex items-center justify-center gap-x-6 sm:gap-x-8">

            <a type="button"
                    href="https://bsky.app/profile/dramaqueerz.bsky.social"
                    class="uppercase inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <x-ri-bluesky-fill class="-ml-0.5 size-5"/>
                BlueSky
            </a>

            <a type="button"
                    href="https://www.instagram.com/dramaqueerz"
                    class="uppercase inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <x-ri-instagram-line class="-ml-0.5 size-5"/>
                Instagram
            </a>

        </div>
    </div>
    <div class="flow-root bg-white pb-24 sm:pb-32">
        <div class="-mt-80">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-md grid-cols-1 gap-8 lg:max-w-4xl lg:grid-cols-2">
                    <div class="flex flex-col justify-between rounded-3xl bg-white p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                        <div class="bg-white py-4">
                            <livewire:newsletter />
                        </div>
                    </div>
                    <div class="flex flex-col justify-between rounded-3xl bg-white p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                        <div class="bg-white py-4">
                            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                                <h3 class="uppercase max-w-2xl text-center text-balance text-3xl font-semibold tracking-tight text-gray-900">
                                    Comment les rats sont morts
                                </h3>
                                <p class="mt-6 text-center text-base/7 text-gray-600">Explicabo quo fugit vel facere
                                    ullam corrupti non dolores. Expedita eius sit sequi.</p>
                                <div class="flex gap-x-4 mt-10 justify-center">
                                    <a type="button"
                                       href="https://docs.google.com/forms/d/e/1FAIpQLSfdAK6GbLaVMPlI2XCQQ4QQ5obAFdi-SFHXxEKbA_qST7Gf4A/viewform"
                                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Répondre au formulaire
                                    </a>
                                </div>
                                <div class="flex gap-x-4 mt-6 justify-center">
                                    <a type="button"
                                            href="https://bsky.app/profile/dramaqueerz.bsky.social"
                                            class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <x-ri-bluesky-fill class="-ml-0.5 size-5"/>
                                    </a>
                                    <a type="button"
                                            href="https://www.instagram.com/dramaqueerz"
                                            class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
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
