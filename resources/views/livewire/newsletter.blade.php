<?php

use App\Models\NewsletterFollower;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;


new class extends Component {

    #[Validate('required', message: 'Il faut un email')]
    #[Validate('email', message: 'L\'email n\'est pas valide')]
    #[Validate('unique:newsletter_followers,email', message: 'Cet email est bien inscrit')]
    public string $email = '';

    public string $successMessage = '';

    public function subscribe(): void
    {
        $validated = $this->validate();

        NewsletterFollower::create($validated);

        $this->successMessage = 'Merci pour votre inscription !';

        $this->email = '';
    }
};

?>

<div class="mx-auto max-w-7xl px-6 lg:px-8">
    <h3 class="font-etude uppercase max-w-2xl text-center text-balance text-2xl font-semibold tracking-tight text-off-white">
        Newsletter
    </h3>
    <p class="mt-6 text-center text-xs text-off-white/90">
        Vous voulez en savoir plus sur le collectif Drama Queers et être parmi les premièr·es à recevoir l'actualité des
        différents projets qu'on vous concocte en secret ? Inscrivez-vous à notre newsletter avec votre mail !
    </p>
    <form class="mt-10 max-w-md" wire:submit.prevent="subscribe">
        <div class="flex gap-x-4">
            <label for="email-address" class="sr-only">Email address</label>
            <input wire:model="email" id="email-address" name="email" type="email" autocomplete="email"
                   required
                   class="min-w-0 flex-auto rounded-md bg-neutral-500 px-6 py-4 text-base text-gray-900 placeholder:text-gray-200 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                   placeholder="11th@doctor.who">
            <button type="submit"
                    class="app-callbutton">
                OK
            </button>
        </div>
        @error('email')
        <p class="mt-2 text-sm text-red-600" id="email-error">{{ $message }}</p>
        @enderror
        @if($successMessage)
            <p class="mt-10 text-center text-xs text-gray-600">
                {{ $successMessage }}
            </p>
        @endif
        <p class="mt-10 text-center italic text-xs text-off-white/50">
            En validant ce formulaire, je consens à l'utilisation de mes données personnelles
            pour être tenu·e au courant des actualités de Drama Queerz. Plus d'infos sur
            <a href="#" class="underline not-italic text-off-white">
                Politique&nbsp;de&nbsp;confidentialité
            </a>
        </p>
    </form>
</div>
