<x-app-layout>
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
            <h1 class="font-bold text-center text-2xl mb-5">Créer votre évènement</h1>
            <form action="{{ route('events.store') }}" id="form" method="post" class="my-4">
                @csrf
                <x-events.label for="title" value="Titre" />
                <x-events.input id="title" type="text" name="title" :value="old('title')" />

                <x-events.label for="content" value="Contenu" />
                <textarea id="content" name="content" :value="old('content')"
                    class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"></textarea>

                <div class="flex items-start my-2">
                    <div class="flex items-start">
                        <div class="flex items-center h-5">
                            <input name="premium" id="premium" aria-describedby="premium" type="checkbox"class="bg-gray-50 border border-gray-300 focus:ring-3 focus:ring-blue-300 h-4 w-4 rounded dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800">
                        </div>
                        <div class="text-sm ml-3">
                            <label for="premium" class="font-medium text-gray-900 dark:text-gray-300">Premium ?</label>
                        </div>
                    </div>
                </div>

                <x-events.label for="starts_at" value="Date de démarrage" />
                <x-events.input id="starts_at" type="date" name="starts_at" />

                <x-events.label for="ends_at" value="Date de fin" />
                <x-events.input id="ends_at" type="date" name="ends_at" />

                <x-events.label for="tags" value="Tags (séparé par une virgule)" />
                <x-events.input id="tags" type="text" name="tags" class="block" />

                <x-input type="hidden" name="payment_method" id="payment_method" />
                <!-- Stripe Elements Placeholder -->
                <div id="card-element"></div>

                <x-button class="mt-3" id="submit-button">Créer mon événement</x-button>
            </form>
        </div>
    </section>
    @section('script')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            const stripe = Stripe(" {{ env('STRIPE_KEY') }} ");

            const elements = stripe.elements();
            const cardElement = elements.create('card', {
                classes: {
                    base: 'StripeElement bg-white w-1/2 p-2 my-2 rounded-lg'
                }
            });

            cardElement.mount('#card-element');

            const cardButton = document.getElementById('submit-button');
            cardButton.addEventListener('click', async(e) => {
                e.preventDefault();

                const { paymentMethod, error } = await stripe.createPaymentMethod(
                    'card', cardElement
                );

                if (error) {
                    alert(error)
                } else {
                    document.getElementById('payment_method').value = paymentMethod.id;
                }

                document.getElementById('form').submit();
            });
        </script>
    @endsection
</x-app-layout>
