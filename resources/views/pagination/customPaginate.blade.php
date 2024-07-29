@if ($projets->hasPages())
    <div class="nav-buttons">
        <!-- Bouton Précédent -->
        @if ($projets->onFirstPage())
            <button class="btn" disabled>
                <!-- Flèche gauche désactivée -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="arrow-left">
                    <path d="M15 10H3m0 0l6-6m-6 6l6 6"/>
                </svg>
            </button>
        @else
            <a href="{{ $projets->previousPageUrl() }}" class="btn">
                <!-- Flèche gauche -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="arrow-left">
                    <path d="M15 10H3m0 0l6-6m-6 6l6 6"/>
                </svg>
            </a>
        @endif

        <!-- Bouton Suivant -->
        @if ($projets->hasMorePages())
            <a href="{{ $projets->nextPageUrl() }}" class="btn">
                <!-- Flèche droite -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="arrow-right">
                    <path d="M5 10h12m0 0l-6 6m6-6l-6-6"/>
                </svg>
            </a>
        @else
            <button class="btn" disabled>
                <!-- Flèche droite désactivée -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="arrow-right">
                    <path d="M5 10h12m0 0l-6 6m6-6l-6-6"/>
                </svg>
            </button>
        @endif
    </div>
@endif
