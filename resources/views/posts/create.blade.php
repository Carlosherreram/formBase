<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear publicación') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="post" action={{route("posts.store") }}>
                @csrf
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p>{{ __("Título") }}</p>
                    <input name="titulo" placeholder="titulo" required value={{ old('titulo') }}>
                </div>
                <div class="p-6 text-gray-900">
                    <p>{{ __("Extracto") }}</p>
                    <input name="extracto" placeholder="extracto" required value={{ old('extracto') }} >
                </div>
                <div class="p-6 text-gray-900">
                <p>{{ __("Contenido") }}</p>
                <input type="text" name="contenido" placeholder="contenido" required value={{ old('contenido','') }}>
                </div>
                <label>Caducable<br>
                <input type="checkbox" name="caducable" value="1" {{"1" === old("caducable") ? 'checked' : ''}}>Si
                </label>
                <br>
                <label>Comentable<br>
                    <input type="checkbox" name="comentable" value="1" {{"1" === old("comentable") ? 'checked' : ''}}>Si
                </label>
                <br>
                <select name="visibilidad">
                    <option value="1" {{"1" === old("visibilidad") ? 'selected' : ''}}>Privado</option>
                    <option value="0" {{"0" === old("visibilidad") ? 'selected' : ''}}>Público</option>
                </select>
            </div>
                <input type="submit" name="Enviar">
            </form>
        </div>
    </div>
</x-app-layout>
