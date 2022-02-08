@if (session('success'))
    <div id="message" class="bg-success d-flex align-items-center">
        <span style="font-size: 1rem"><i class="fas fa-check-circle mr-2 text-white"></i>{{ session('success') }}</span>
    </div>
@elseif(session('delete'))
    <div id="message" class="bg-danger d-flex align-items-center">
        <span style="font-size: 1rem"><i class="fas fa-trash-alt mr-2 text-white"></i>{{ session('delete') }}</span>
    </div>
@elseif(session('update'))
    <div id="message" class="bg-info d-flex align-items-center">
        <span style="font-size: 1rem"><i class="fas fa-pen mr-2 text-white"></i>{{ session('update') }}</span>
    </div>
    @elseif(session('error'))
    <div id="message" class="bg-warning d-flex align-items-center">
        <span style="font-size: 1rem"><i class="fas fa-pen mr-2 text-white"></i>{{ session('error') }}</span>
    </div>
@endif