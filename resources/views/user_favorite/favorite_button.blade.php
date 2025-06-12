@if (Auth::id())
    @if (Auth::user()->is_favorites($micropost->id))
        {{-- unfavoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.unfavorite', $micropost->id) }}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline btn-block normal-case"
                onclick="return confirm('この投稿のお気に入りを解除します。よろしいですか？')">Unfavorite</button>
        </form>
    @else
        {{-- favoriteボタンのフォーム --}}
        <form method="POST" action="{{ route('favorites.favorite', $micropost->id) }}">
            @csrf
            <button type="submit" class="btn btn-accent btn-block normal-case">Favorite</button>
        </form>
    @endif
@endif