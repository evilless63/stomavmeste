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
                <div class="p-6 bg-white border-b border-gray-200">
                    @forelse($entity_model_inputs as $item)
                        <table>
                            <thead>
                            <th>Наименование</th>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{$item}}</td>
                            </tr>
                            </tbody>
                        </table>
                    @empty
                        'Нет ничего для отображения'
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>