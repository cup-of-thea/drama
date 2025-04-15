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

            <button type="button"
                    class="uppercase inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <x-ri-bluesky-fill class="-ml-0.5 size-5"/>
                BlueSky
            </button>

            <button type="button"
                    class="uppercase inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                <x-ri-instagram-line class="-ml-0.5 size-5"/>
                Instagram
            </button>

        </div>
    </div>
    <div class="flow-root bg-white pb-24 sm:pb-32">
        <div class="-mt-80">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto grid max-w-md grid-cols-1 gap-8 lg:max-w-4xl lg:grid-cols-2">
                    <div class="flex flex-col justify-between rounded-3xl bg-white p-8 shadow-xl ring-1 ring-gray-900/10 sm:p-10">
                        <div class="bg-white py-4">
                            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                                <h3 class="uppercase max-w-2xl text-center text-balance text-3xl font-semibold tracking-tight text-gray-900">
                                    Newsletter
                                </h3>
                                <p class="mt-6 text-center text-base/7 text-gray-600">
                                    Explicabo quo fugit vel facere ullam corrupti non dolores. Expedita eius sit sequi.
                                </p>
                                <form class="mt-10 max-w-md">
                                    <div class="flex gap-x-4">
                                        <label for="email-address" class="sr-only">Email address</label>
                                        <input id="email-address" name="email" type="email" autocomplete="email"
                                               required
                                               class="min-w-0 flex-auto rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                                               placeholder="Enter your email">
                                        <button type="submit"
                                                class="flex-none rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                            Subscribe
                                        </button>
                                    </div>
                                    <p class="mt-10 text-center text-xs text-gray-600">
                                        En validant ce formulaire, je consens à l'utilisation de mes données personnelles
                                        pour être tenu·e au courant des actualités de Drama Queerz. Plus d'infos sur
                                        <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">
                                            Politique&nbsp;de&nbsp;confidentialité
                                        </a>
                                    </p>
                                </form>
                            </div>
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
                                    <button type="button"
                                            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        Répondre au formulaire
                                    </button>
                                </div>
                                <div class="flex gap-x-4 mt-6 justify-center">
                                    <button type="button"
                                            class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <x-ri-bluesky-fill class="-ml-0.5 size-5"/>
                                    </button>
                                    <button type="button"
                                            class="inline-flex items-center gap-x-2 rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <x-ri-instagram-line class="-ml-0.5 size-5"/>
                                    </button>
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
