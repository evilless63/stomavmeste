<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $entity_title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 flex justify-between">
                        {{ $entity_desc }}
                    <a href="{{route('manage.'.$type.'.create')}}"
                       class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{$entity_create_title}}
                    </a>
                </div>

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Наименование
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Редактировать
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Видимость
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Удалить
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody id="sortable-categories" class="bg-white divide-y divide-gray-200">
                                    @forelse($entity_model_collection as $item)
                                        <tr data-id="{{$item->id}}">
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="text-sm text-gray-900">{{$item->title}}</div>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <a href="{{route('manage.'.$type.'.edit', $item->id)}}" class="text-indigo-600 hover:text-indigo-900">Перейти к редактированию</a>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">

                                                    @if($item->showable)
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Виден на сайте</span>
                                                    @else
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Не виден на сайте</span>
                                                    @endif

                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <form method="POST" action="{{route('manage.'.$type.'.destroy', $item->id)}}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                      Удалить
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                            Нет ничего для отображения,  <a href="{{route('manage.'.$type.'.create')}}"
                                                                            class="">
                                                {{$entity_create_title}}
                                            </a>?
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function updateToDatabaseCategory(idString) {
            jQuery.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            });
            jQuery.ajax({
                url: '{{ route('manage.order', $type) }}',
                method: 'POST',
                data: {
                    ids: idString
                }
            })
        }
        var targetGallery = jQuery('#sortable-categories')
        targetGallery.sortable({
            update: function(e, ui) {
                var sortData = targetGallery.sortable('toArray', {
                    attribute: 'data-id'
                })
                updateToDatabaseCategory(sortData.join(','))
            }
        })
    </script>

</x-app-layout>
