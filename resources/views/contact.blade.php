@extends('layouts.pages')
@section('content')
<!-- Contact Section -->
<section class="bg-blue-800 text-white text-center py-20">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-4xl font-extrabold">Contact Us</h2>
        <p class="mt-4 text-lg">Have any questions or need support? Get in touch with us.</p>
    </div>
</section>

<!-- Contact Form -->
<section class="py-20">
    <div class="max-w-7xl mx-auto text-center px-6">
        <h3 class="text-3xl font-bold text-blue-800">Send Us a Message</h3>
        <form class="mt-8 space-y-6">
            <div>
                <input type="text" placeholder="Your Name" class="w-full p-3 border rounded-md" />
            </div>
            <div>
                <input type="email" placeholder="Your Email" class="w-full p-3 border rounded-md" />
            </div>
            <div>
                <textarea placeholder="Your Message" class="w-full p-3 border rounded-md"></textarea>
            </div>
            <button type="submit"
                class="bg-yellow-500 text-blue-800 px-8 py-3 rounded-full hover:bg-yellow-600">Send Message</button>
        </form>
    </div>
</section>


@endsection