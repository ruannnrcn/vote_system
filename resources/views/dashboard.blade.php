<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vote Page') }}
        </h2>
    </x-slot>

    <div class="py-12 min-h-screen px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg h-full">
                <div class="m-6 bg-white border-b border-gray-200 min-h-screen">
                    
                    <main>
                        <div class="flex flex-col md:flex-row md:flex-wrap gap-6 justify-center">
                            
                            <!-- Card Chapa 1 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <!-- Título com background escuro -->
                                <div class="bg-blue-600 px-4 py-3">
                                    <h3 class="text-white font-bold text-lg text-center">Chapa 1</h3>
                                </div>
                                
                                <!-- Imagem do Candidato -->
                                <div class="flex justify-center items-center py-6 bg-gray-50">
                                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-blue-600 shadow-md">
                                        <img src="{{ asset('images/candidato-1.jpg') }}" alt="Candidato 1" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <!-- Descrição -->
                                <div class="px-6 py-4">
                                    <p class="text-gray-600 text-sm text-center">
                                        Descrição do Candidato 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                                
                                <!-- Botão de Votar -->
                                <div class="px-6 pb-6">
                                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-200">
                                        Votar
                                    </button>
                                </div>
                            </div>

                            <!-- Card Chapa 2 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-green-600 px-4 py-3">
                                    <h3 class="text-white font-bold text-lg text-center">Chapa 2</h3>
                                </div>
                                
                                <div class="flex justify-center items-center py-6 bg-gray-50">
                                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-green-600 shadow-md">
                                        <img src="{{ asset('images/candidato-2.jpg') }}" alt="Candidato 2" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <div class="px-6 py-4">
                                    <p class="text-gray-600 text-sm text-center">
                                        Descrição do Candidato 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                                
                                <div class="px-6 pb-6">
                                    <button class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-200">
                                        Votar
                                    </button>
                                </div>
                            </div>

                            <!-- Card Chapa 3 -->
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-purple-600 px-4 py-3">
                                    <h3 class="text-white font-bold text-lg text-center">Chapa 3</h3>
                                </div>
                                
                                <div class="flex justify-center items-center py-6 bg-gray-50">
                                    <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-purple-600 shadow-md">
                                        <img src="{{ asset('images/candidato-3.jpg') }}" alt="Candidato 3" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                
                                <div class="px-6 py-4">
                                    <p class="text-gray-600 text-sm text-center">
                                        Descrição do Candidato 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </p>
                                </div>
                                
                                <div class="px-6 pb-6">
                                    <button class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded-md transition-colors duration-200">
                                        Votar
                                    </button>
                                </div>
                            </div>

                        </div>
                    </main>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
