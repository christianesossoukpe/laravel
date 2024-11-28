<div class="mt-6">
    <!-- Lien pour lire le PDF -->
    <a href="{{ route('articles.view', $article->id) }}" 
       class="inline-block bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
        Lire le PDF
    </a>

    <!-- Lien pour télécharger le PDF -->
    <a href="{{ route('articles.download', $article->id) }}" 
       class="inline-block bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-green-700 ml-4">
        Télécharger le PDF
    </a>
</div>
