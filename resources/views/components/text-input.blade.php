@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'bg-paper text-ink border-walnut focus:border-brass focus:ring-brass rounded-md shadow-sm']) }}>