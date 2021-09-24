<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                        <h1>CONTACT</h1>
                        <form class="mt-6" method="POST" action="{{route('mail.drare')}}" >
                            @csrf
                            <div class="items-center -mx-2 md:flex">
                                <div class="w-full mx-2 mt-4 md:mt-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Sujet</label>
                
                                    <select name="subject" id="">
                                        @foreach ($email_subjects as $email_subject )
                                        <option value="{{ $email_subject->subject}}">
                                            {{ $email_subject->subject}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="items-center -mx-2 md:flex">
                                <div class="w-full mx-2 mt-4 md:mt-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">E-mail</label>
                
                                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="email" name="mail">
                                </div>
                            </div>
                
                            <div class="w-full mt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Message</label>
                
                                <textarea class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="message"></textarea>
                            </div>
                
                            <div class="flex justify-center mt-6">
                                <button class="px-4 py-2 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Send Message</button>
                            </div>
                        </form>
                    </section>
                    <section class="w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                        <h1>CONTACT BIS</h1>
                        <form class="mt-6" method="POST" action="{{route('mail.drarebis')}}" >
                            @csrf
                            <div class="items-center -mx-2 md:flex">
                                <div class="w-full mx-2 mt-4 md:mt-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Sujet</label>
                
                                    <select name="subject" id="">
                                        @foreach ($email_subjects as $email_subject )
                                        <option value="{{ $email_subject->subject}}">
                                            {{ $email_subject->subject}}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="items-center -mx-2 md:flex">
                                <div class="w-full mx-2 mt-4 md:mt-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">E-mail</label>
                
                                    <input class="block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" type="email" name="mail">
                                </div>
                            </div>
                
                            <div class="w-full mt-4">
                                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Message</label>
                
                                <textarea class="block w-full h-40 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" name="message"></textarea>
                            </div>
                
                            <div class="flex justify-center mt-6">
                                <button class="px-4 py-2 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600" type="submit">Send Message</button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
