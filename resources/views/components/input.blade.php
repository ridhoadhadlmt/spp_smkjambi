@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-lg bg-transparent border-slate-100 focus:border-slate-300 focus:ring focus:ring-pink-500 focus:ring-opacity-50']) !!}>
