<div>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
            Selecione opções
        </button>
        <ul class="dropdown-menu p-2" style="min-width: 200px;">
            @foreach($this->options as $option)
                <li>
                    <div class="form-check">
                        <input 
                            type="checkbox" 
                            class="form-check-input" 
                            wire:model.live="selected" 
                            value="{{ $option['id'] }}" 
                            id="option-{{ $option['id'] }}"
                        >
                        <label class="form-check-label" for="option-{{ $option['id'] }}">
                            {{ $option['name'] }}
                        </label>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <div class="mt-3">
        <strong>Selecionados:</strong> 
        @if(!empty($selected))
            {{ implode(', ', array_map(fn($id) => collect($options)->firstWhere('id', $id)['name'], $selected)) }}
        @else
            Nenhum selecionado
        @endif
    </div>
</div>
