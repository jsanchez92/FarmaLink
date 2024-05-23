<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <div class="overflow-hidden rounded-lg border border-gray-200">

        <div class="px-6 py-4">
            <input class="rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500"
                placeholder="Search..." type="text" wire:model.live="search">
        </div>
        @if(Count($result)>0)        
            <table class="w-full min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 cursor-pointer py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                            scope="col">ID</th>
                        <th class="px-6 cursor-pointer py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                            scope="col">Nombre</th>
                        <th class="px-6 cursor-pointer py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                            scope="col">Descripción</th>
                        <th class="px-6 cursor-pointer py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500"
                            scope="col">Precio</th>
                       
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                    @foreach ($result as $medication)
                        <tr>
                            <td class="whitespace-nowrap px-6 py-4 text-center">{{ $medication->id }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-center">{{ $medication->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-center">{{ $medication->description }}</td>
                            <td class="whitespace-nowrap px-6 py-4 text-center">{{ $medication->price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>        
        @else
        <div class="px-6 py-4">
            No se encontraron registros
        </div>
        @endif
    </div>
</div>
