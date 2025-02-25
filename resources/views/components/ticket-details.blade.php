<div>
    <div x-data="{ open1: false }">    
        <button @click="open1 = true" class="flex items-center bg-gray-800 text-white active:bg-pink-600 font-bold text-xs px-2 py-1 rounded shadow hover:shadow-md outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button"
            >Details
                <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
            </svg>
        </button>

        <div x-show="open1">
            <div
                @click.away="open1 = false"
                x-transition:enter="transition ease-out duration-300" 
                x-transition:enter-start="opacity-0 transform scale-90" 
                x-transition:enter-end="opacity-100 transform scale-100" 
                x-transition:leave="transition ease-in duration-300" 
                x-transition:leave-start="opacity-100 transform scale-100" 
                x-transition:leave-end="opacity-0 transform scale-90"
                class="shadow-md p-5 rounded max-w-sm ml-2 bg-gray-200"
            >
            <table>
                @foreach($claims as $claim)
                    <tr class="grid grid-cols-2">
                    <td>Claim ID : </td><td class="claim-id">{{ $claim->id }}</td>
                    <td>Prize Claimed ID : </td><td>{{ $claim->game_prize_id }}</td>
                    <td>Status : </td><td>{{ $claim->status }}</td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
 show </div>
</div>