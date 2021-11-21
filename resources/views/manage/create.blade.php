<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $entity_title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{ $entity_desc }}
                </div>
            </div>
            <form action="{{route('manage.'.$type.'.store')}}" method="POST">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        @forelse($entity_model_inputs as $labelInput => $v)
                            @foreach($v as $type => $name)
                                @if($type === 'text'|| $type === 'date')
                                    <div class="grid grid-cols-3 gap-6">
                                        <div class="col-span-3 sm:col-span-2">
                                            <label for="{{$name}}" class="block text-sm font-medium text-gray-700">
                                                {{$labelInput}}
                                            </label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <input type="{{$type}}" name="{{$name}}" id="{{$name}}"
                                                       class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300"
                                                       placeholder="">
                                            </div>
                                        </div>
                                    </div>
                                @elseif($type === 'textarea')
                                    <div>
                                        <label for="{{$name}}" class="block text-sm font-medium text-gray-700">
                                            {{$labelInput}}
                                        </label>
                                        <div class="mt-1">
                                        <textarea id="{{$name}}" name="{{$name}}" rows="3"
                                          class="description-ckeditor shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                                          placeholder="">

                                        </textarea>
                                        </div>
                                    </div>
                                @elseif($type === 'checkbox')
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="{{$name}}" name="{{$name}}" type="hidden" value="0">
                                            <input id="{{$name}}" name="{{$name}}" type="{{$type}}" value="1" class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="{{$name}}" class="font-medium text-gray-700">{{$labelInput}}</label>
                                        </div>
                                    </div>
                                @elseif($type === 'file')
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700">
                                            {{$labelInput}}
                                        </label>
                                        <div
                                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                            <div class="space-y-1 text-center">
                                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                                     viewBox="0 0 48 48" aria-hidden="true">
                                                    <path
                                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="flex text-sm text-gray-600">
                                                    <label for="{{$name}}"
                                                           class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                        <span>Upload a file</span>
                                                        <input id="{{$name}}" name="{{$name}}" type="{{$type}}" class="sr-only">
                                                    </label>
                                                    <p class="pl-1">or drag and drop</p>
                                                </div>
                                                <p class="text-xs text-gray-500">
                                                    PNG, JPG, GIF up to 10MB
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        @empty
                            'Нет ничего для отображения'
                        @endforelse
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</x-app-layout>
