<div class="text-white">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <form wire:submit.prevent="submit">
        <label for="">Título</label>
        <input type="text" wire:model="title">
        <label for="">Texto</label>
        <input type="text" wire:model="text">
        <button type="submit">Enviar</button>
    </form>
</div>
