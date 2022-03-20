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
            <form action="{{route('manage.'.$type.'.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                        @forelse($entity_model_inputs as $labelInput => $v)
                            @foreach($v as $type => $name)
                                @if($type === 'text'|| $type === 'date' || $type === 'file')
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
                                @elseif($type === 'select')
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="country" class="block text-sm font-medium text-gray-700">{{$labelInput}}</label>
                                        <select id="{{$name['table_id']}}" name="{{$name['table_id']}}" class="mt-1 block w-full py-2 px-3 border border-gray-300
                                        bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @foreach($name['options'] as $key=>$value)
                                                <option value="{{$key}}">{{$value}}</option>
                                                @endforeach
                                        </select>
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
