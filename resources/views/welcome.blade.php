<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail Santé - SRM Casablanca-Settat</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        srmBlue: '#2D9BD6',
                        srmOrange: '#F19740',
                        srmDark: '#1a5b80',
                    },
                    boxShadow: {
                        'soft': '0 10px 40px -10px rgba(0,0,0,0.08)',
                    }
                }
            }
        }
    </script>
    
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap');
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        [x-cloak] { display: none !important; }
        
        .bg-pattern {
            background-color: #f8fafc;
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 24px 24px;
        }
    </style>
</head>
<body class="bg-pattern text-slate-800 antialiased flex flex-col min-h-screen">

    <header class="bg-white/90 backdrop-blur-md shadow-sm border-b-[3px] border-srmBlue sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 bg-white rounded-xl shadow-sm flex items-center justify-center p-1 border border-slate-100">
                    <img src="{{ asset('images/logo_SRM.jpeg') }}" alt="Logo SRM Casablanca-Settat" class="object-contain w-full h-full">
                </div>
                <div>
                    <h1 class="text-xl md:text-2xl font-extrabold text-slate-800 tracking-tight">SRM <span class="text-srmBlue">Casablanca-Settat</span></h1>
                    <p class="text-xs md:text-sm font-semibold text-slate-500 uppercase tracking-wider">Société Régionale Multiservices</p>
                </div>
            </div>
            <div class="hidden md:flex items-center gap-3">
                <div class="flex items-center gap-2 bg-orange-50 text-srmOrange px-4 py-2 rounded-full text-sm font-bold border border-orange-100">
                    <i class="fa-solid fa-shield-heart"></i>
                    Portail Santé CMSS
                </div>
            </div>
        </div>
    </header>

    <div class="relative overflow-hidden bg-gradient-to-br from-srmBlue to-srmDark shadow-lg">
        <div class="absolute top-0 right-0 -translate-y-12 translate-x-20 w-96 h-96 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-0 translate-y-20 -translate-x-20 w-72 h-72 bg-srmOrange/20 rounded-full blur-2xl"></div>
        
        <div class="max-w-7xl mx-auto px-4 py-16 md:py-20 relative z-10 flex flex-col items-center text-center">
            <span class="bg-white/20 text-white border border-white/30 backdrop-blur-sm px-4 py-1 rounded-full text-xs font-bold uppercase tracking-widest mb-6">
                Espace Collaborateur
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-white mb-6 leading-tight">
                Votre santé, <br class="md:hidden">notre priorité.
            </h2>
            <p class="text-blue-100 text-lg md:text-xl font-medium max-w-2xl mx-auto">
                Accédez instantanément à vos formulaires administratifs et trouvez facilement un prestataire de santé conventionné près de chez vous.
            </p>
        </div>
        
        <div class="absolute bottom-0 w-full overflow-hidden leading-none">
            <svg class="relative block w-full h-[40px] md:h-[60px]" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V95.8C-1,95.8,15.6,90.3,39.3,80.1,103.1,53.2,196.4,26.4,321.39,56.44Z" fill="#f8fafc"></path>
            </svg>
        </div>
    </div>

    <main class="max-w-7xl mx-auto px-4 py-12 flex-grow -mt-8 relative z-20">

        <section class="mb-20">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 rounded-2xl bg-orange-100 flex items-center justify-center text-srmOrange shadow-inner">
                    <i class="fa-solid fa-file-pdf text-2xl"></i>
                </div>
                <h2 class="text-3xl font-extrabold text-slate-800">Documents utiles</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($documents as $doc)
                <div class="bg-white rounded-3xl shadow-soft hover:shadow-xl border border-slate-100 transition-all duration-300 transform hover:-translate-y-2 group flex flex-col overflow-hidden">
                    <div class="p-8 flex-grow">
                        <div class="w-14 h-14 bg-blue-50 text-srmBlue rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-regular fa-file-lines text-3xl"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-2">{{ $doc->titre }}</h3>
                        <p class="text-slate-500 text-sm">Document PDF téléchargeable</p>
                    </div>
                    <div class="p-4 bg-slate-50 border-t border-slate-100">
                        <a href="{{ asset('storage/' . $doc->chemin_fichier) }}" target="_blank" class="w-full flex items-center justify-center gap-2 bg-white border-2 border-slate-200 text-slate-700 font-bold py-3 px-4 rounded-xl hover:bg-srmOrange hover:border-srmOrange hover:text-white transition-all duration-300">
                            <i class="fa-solid fa-cloud-arrow-down"></i> Télécharger
                        </a>
                    </div>
                </div>
                @endforeach

                @if(count($documents) === 0)
                    <div class="col-span-full bg-white p-12 rounded-3xl border border-dashed border-slate-300 text-center shadow-soft">
                        <div class="w-20 h-20 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fa-solid fa-folder-open text-4xl text-slate-400"></i>
                        </div>
                        <p class="text-slate-500 font-semibold text-lg">Aucun document n'a été publié pour le moment.</p>
                    </div>
                @endif
            </div>
        </section>

        <section x-data="{ ongletActif: 'cliniques', search: '' }" class="mb-12">
            
            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-8">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-100 flex items-center justify-center text-srmBlue shadow-inner">
                        <i class="fa-solid fa-house-medical text-2xl"></i>
                    </div>
                    <h2 class="text-3xl font-extrabold text-slate-800">Annuaire médical</h2>
                </div>

                <div class="relative w-full md:w-96">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <i class="fa-solid fa-magnifying-glass text-slate-400"></i>
                    </div>
                    <input x-model="search" type="text" placeholder="Rechercher par nom ou spécialité..." class="w-full pl-11 pr-10 py-3 rounded-xl border border-slate-200 focus:border-srmBlue focus:ring-4 focus:ring-srmBlue/10 outline-none transition-all shadow-sm text-slate-700 font-medium placeholder-slate-400 bg-white">
                    <button x-show="search !== ''" @click="search = ''" x-cloak class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-srmOrange transition-colors">
                        <i class="fa-solid fa-circle-xmark text-lg"></i>
                    </button>
                </div>
            </div>

            <div class="flex flex-wrap gap-3 mb-8 bg-white p-2 rounded-2xl shadow-sm border border-slate-100 overflow-x-auto">
                <template x-for="tab in [
                    { id: 'cliniques', label: 'Cliniques', icon: 'fa-hospital' },
                    { id: 'medecinsConv', label: 'Méd. Conventionnés', icon: 'fa-user-md' },
                    { id: 'medecinsNonConv', label: 'Méd. Non Conventionnés', icon: 'fa-stethoscope' },
                    { id: 'laboratoires', label: 'Laboratoires', icon: 'fa-microscope' },
                    { id: 'pharmacies', label: 'Pharmacies', icon: 'fa-pills' }
                ]">
                    <button @click="ongletActif = tab.id; search = ''" 
                            :class="ongletActif === tab.id ? 'bg-srmBlue text-white shadow-md' : 'bg-transparent text-slate-600 hover:bg-slate-50 hover:text-srmBlue'" 
                            class="px-6 py-3 rounded-xl font-bold text-sm transition-all duration-300 flex items-center gap-3 whitespace-nowrap">
                        <i :class="'fa-solid ' + tab.icon + (ongletActif === tab.id ? ' opacity-100' : ' opacity-70')"></i>
                        <span x-text="tab.label"></span>
                    </button>
                </template>
            </div>

            <div class="bg-white rounded-3xl shadow-soft border border-slate-100 overflow-hidden relative min-h-[300px]">
                
                @php
                    $genererTableau = function($donnees) {
                        if(count($donnees) === 0) return "<div class='flex flex-col items-center justify-center py-20 text-center'><div class='w-24 h-24 bg-slate-50 rounded-full flex items-center justify-center mb-6'><i class='fa-solid fa-search text-4xl text-slate-300'></i></div><h3 class='text-xl font-bold text-slate-700 mb-2'>Aucun résultat</h3><p class='text-slate-500 font-medium'>Aucun prestataire n'est enregistré dans cette catégorie.</p></div>";
                        
                        $html = '<div class="overflow-x-auto"><table class="w-full text-left border-collapse">';
                        $html .= '<thead class="bg-slate-50/80 backdrop-blur-sm border-b border-slate-100"><tr class="text-slate-500"><th class="px-8 py-5 font-bold text-xs uppercase tracking-widest rounded-tl-3xl">Prestataire</th><th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Spécialité</th><th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Contact</th><th class="px-6 py-5 font-bold text-xs uppercase tracking-widest">Adresse</th><th class="px-8 py-5 font-bold text-xs uppercase tracking-widest rounded-tr-3xl">Accord Tarifaire</th></tr></thead>';
                        $html .= '<tbody class="divide-y divide-slate-50">';
                        foreach($donnees as $item) {
                            
                            // MAGIE ICI : Préparation des données sécurisées pour Javascript
                            $nameSafe = addslashes(strtolower($item->praticien));
                            $specSafe = addslashes(strtolower($item->specialite ?? ''));
                            
                            // MAGIE ICI : x-show gère l'affichage instantané
                            $html .= '<tr x-show="search === \'\' || \''.$nameSafe.'\'.includes(search.toLowerCase()) || \''.$specSafe.'\'.includes(search.toLowerCase())" class="hover:bg-blue-50/30 transition-colors group">';
                            
                            $html .= '<td class="px-8 py-6"><div class="flex items-center gap-4"><div class="w-10 h-10 rounded-full bg-blue-50 text-srmBlue flex items-center justify-center group-hover:bg-srmBlue group-hover:text-white transition-colors"><i class="fa-solid fa-user-doctor"></i></div><span class="font-bold text-slate-800 text-base">'.htmlspecialchars($item->praticien).'</span></div></td>';
                            
                            $html .= '<td class="px-6 py-6"><span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-lg bg-slate-100 text-slate-600 text-sm font-semibold">'.htmlspecialchars($item->specialite ?? 'Non précisée').'</span></td>';
                            
                            $html .= '<td class="px-6 py-6 font-medium text-slate-600"><i class="fa-solid fa-phone text-slate-400 mr-2"></i>'.htmlspecialchars($item->telephone ?? '-').'</td>';
                            
                            $html .= '<td class="px-6 py-6 text-slate-500 text-sm max-w-xs truncate" title="'.htmlspecialchars($item->adresse ?? '-').'"><i class="fa-solid fa-location-dot text-slate-400 mr-2"></i>'.htmlspecialchars($item->adresse ?? '-').'</td>';
                            
                            $html .= '<td class="px-8 py-6"><span class="inline-flex items-center border border-srmOrange/30 bg-orange-50 text-srmOrange px-3 py-1.5 rounded-xl text-xs font-bold leading-tight">'.htmlspecialchars($item->accord_tarifaire ?? 'Aucun accord').'</span></td>';
                            
                            $html .= '</tr>';
                        }
                        $html .= '</tbody></table></div>';
                        return $html;
                    };
                @endphp

                <div x-show="ongletActif === 'cliniques'" x-transition.opacity.duration.400ms x-cloak>{!! $genererTableau($cliniques) !!}</div>
                <div x-show="ongletActif === 'medecinsConv'" x-transition.opacity.duration.400ms x-cloak>{!! $genererTableau($medecinsConv) !!}</div>
                <div x-show="ongletActif === 'medecinsNonConv'" x-transition.opacity.duration.400ms x-cloak>{!! $genererTableau($medecinsNonConv) !!}</div>
                <div x-show="ongletActif === 'laboratoires'" x-transition.opacity.duration.400ms x-cloak>{!! $genererTableau($laboratoires) !!}</div>
                <div x-show="ongletActif === 'pharmacies'" x-transition.opacity.duration.400ms x-cloak>{!! $genererTableau($pharmacies) !!}</div>

            </div>
        </section>

    </main>

    <footer class="bg-slate-900 text-slate-400 py-8 text-center border-t-4 border-srmOrange mt-auto">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-center gap-3 mb-4 opacity-50">
                <i class="fa-solid fa-leaf text-2xl"></i>
            </div>
            <p class="text-sm font-medium">&copy; {{ date('Y') }} SRM Casablanca-Settat - Espace Santé Collaborateur CMSS.</p>
            <p class="text-xs mt-2 opacity-60">Réalisé en interne pour le confort de nos collaborateurs.</p>
        </div>
    </footer>

</body>
</html>